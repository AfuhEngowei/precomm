<?php
include("../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload house</title>
    <link rel="stylesheet" href="../style/style.css">

</head>
<body>
    <h1> Enter appartment details</h1>
<form id="upload" action = "upload.php" method = "post" enctype="multipart/form-data">
        <label for = "username" > Agent name:</label>
        <input type = " text" id = "username" name = " username"> 
        <label for = "tell" > Enter your telephone number:</label>
        <input type = "number" id = "tell" name = "tel"> 
        <label for = "location" > Enter house location:</label>
        <input type = "text" id = "location" name = "location">
        <label for = "size" > House size:</label>
        <input type = "text" id = "size" name = "size">  
        <label for = "price" >Price monthly:</label>
        <input type = "number" id = "price" name = " price">  
        Select image to upload:
        <input type = "file" id = "fileToUpload" name = "fileToUpload"> 
        <input type = "submit" name = "submit"  value= "Submit">

    </form>

    <?php
    if(isset($_POST["submit"])){

     $username = $_POST["username"];
     $phone = $_POST["tel"];
     $location = $_POST["location"];
     $house_size = $_POST["size"];
     $price = $_POST["price"];
if(empty($username) || empty($phone) || empty($location) || empty($house_size) ||empty($price)){
    echo "Please input all fields";
}
$phonelength=strlen($phone);
if($phonelength !=9){
echo "invalid phone number";
}
     
        $img=$_FILES["fileToUpload"]["name"];
        $tmp= explode(".", $img);
        $newfile=round(microtime(true)).'.'.end($tmp);
        $uploadpath="projectUploads/".$newfile;
     $target_dir = "../image/"; 
     $target_file = $target_dir .
     basename($_FILES["fileToUpload"]["name"]);
     
     
     if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
             echo "The file ".basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            var_dump(basename( $_FILES["fileToUpload"]["name"]));
     }  

     else {
            echo "Sorry, there was an error uploading your file.";
     }
     $sql="INSERT INTO apartments (size, location, price, images, agent_name, agent_contact) VALUE ('$house_size', '$location', '$price', '$newfile', '$username', '$phone')";
     if(mysqli_query($conn,$sql)){
        echo 'house uploaded sucessfully';
        header("location:agent_dashboard.php");

     }

    
}

    ?>

</body>
</html>