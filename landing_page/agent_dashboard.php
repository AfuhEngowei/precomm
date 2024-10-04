<?php
include "../config/config.php";
// $sql = "SELECT id, title, description, tech, image, url, user_id FROM projects where user_id=1";
$sql= "SELECT * FROM apartments";
$result= mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agent dashboard</title>
    <link rel="stylesheet"  href="../style/style.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav>
       
        <ul>
             
        <li><a href="search.html">Menu</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contacts Us</a></li>
        </ul>
        
    <div>
         <input type="text" class="search-btn" placeholder="Search ">
         </div>
       
         <button id="button1"><a href="signup.php">Signup</a></button>
         <button id="button2"><a href="login.php">Login</a></button>
    </nav>
    <div class="main">
    
    <h1>Available Houses For Rent</h1>

    <button class="btn2"><a href="upload.php">Upload House</a></button>
<?php
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $size=$row['size'];
        $location=$row['location'];
        $price=$row['price'];
        $img=$row['images'];
        $upimg= glob("image/".$img);
        $username=$row['agent_name'];
        $phone=$row['agent_contact'];
    

?>
    <div class="row">
        <div class="col3">
            <div class="img"><img src="<?php echo $upimg[0] ?>" alt=""></div>
            <p>Location: <?php echo $row['location'] ?></p>
            <p>Size:  <?php echo $row['size'] ?></p>
            <p>price:  <?php echo $row['price'] ?>/month</p>
            <button class="btn"><a href="edit.php? editid=<?php echo $id ?> ">Edit  </a></button>
            <button class="btn"><a href="delete.php? ">Delete</a></button>
            
        </div>
       
      
       
</div>
<?php
    }
}
?>
</body>
</html>