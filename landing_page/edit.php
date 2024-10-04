<?php
include "../config/config.php";
// if(isset($_FILES['editid'])){
$id=$_GET['editid'];
// var_dump($id);
$sql= "SELECT * FROM `apartments` where id=$id";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
$size=$row['size'];
$location=$row['location'];
$price=$row['price'];
$img=$row['images'];
$upimg= glob("image/".$img);
$username=$row['agent_name'];
$phone=$row['agent_contact'];


if (isset($_POST['submit'])){ 
    $username = $_POST["username"];
    $phone = $_POST["tel"];
    $location = $_POST["location"];
    $house_size = $_POST["size"];
    $price = $_POST["price"];
    //upload the image, then get the link

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
  

 $sql="UPDATE apartments SET   size='$house_size', location='$location', price= '$price', images='$newfile', agent_name='$username', agent_contact= '$phone' ";

    if(mysqli_query($conn,$sql)){
    
     header("agent_dashboard.php"); 
    
    }
    else{
        die(mysqli_error($conn));
    }
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
       <h1> Update appartment details</h1>
   <form id="upload" action = "edit.php" method = "post" enctype="multipart/form-data">
           <label for = "username" > Agent name:</label>
           <input type = " text" id = "username" name = " username"value=<?php echo $row['agent_name'] ?> > 
           <label for = "tell" > Enter your telephone number:</label>
           <input type = "number" id = "tell" name = "tel" value= <?php echo $row['agent_contact'] ?>> 
           <label for = "location" > Enter house location:</label>
           <input type = "text" id = "location" name = "location" value=<?php echo $row['location'] ?>>
           <label for = "size" > House size:</label>
           <input type = "text" id = "size" name = "size" value =<?php echo $row['size'] ?>>  
           <label for = "price" >Price monthly:</label>
           <input type = "number" id = "price" name = " price" value=<?php echo $row['price'] ?>>  
           Select image to upload:
           <input type = "file" id = "fileToUpload" name = "fileToUpload"> 
           <input type = "submit" name = "submit"  value= "Submit">
   
       </form>
       <?php
       
    }
//  }
?> 
   </body>
   </html>

