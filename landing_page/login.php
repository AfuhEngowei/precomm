<?php
include("../config/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="../style/style.css">
  
</head>
<body>
    <h1>Login Form</h1>
    <form action = "login.php" method = "post">
        <label for = "username" > Enter your username:</label>
        <input type = " text" id = "username" name = " username"> 
        <label for = "email" > Enter your Email:</label>
        <input type = " email" id = "email" name = " email"> 
        <label for = "password" > Enter your password:</label>
        <input type = "password" id = "password" name = " password"> 
        <h4>Forgot password?</h4>
        <input type = "submit" name = "submit"  value= "Login">
    </form>
<?php
$username = "";

if(isset($_POST["submit"])){

   $username = $_POST["username"];
   $email = $_POST["email"];
   $password = $_POST["password"];
 




   $username = filter_input(INPUT_POST, "username" , 
                              FILTER_SANITIZE_SPECIAL_CHARS);
   $email = filter_input(INPUT_POST, "email" ,  FILTER_SANITIZE_EMAIL);
   $email = filter_input(INPUT_POST, "email" ,  FILTER_VALIDATE_EMAIL);

   if(empty($username) || empty($email) || empty($password)){
       echo "<p> please enter all of the credentials </p>";
   }
   $usernamelenght = strlen($username); 
   $passwordlenght = strlen($password);

  $passwordlower= false;
  $passwordupper= false;

   if($usernamelenght <= 5 || $usernamelenght >= 16){
       echo "invalid username lenght. Please the number of characters should not be less than 5 and more than 15";
   }
   elseif(($username == trim($username) && strpos(($username) , ' '))){
       echo "there should be no spaces in the user name. replace them with an underscore";
   }
 
   elseif($passwordlenght <=8 && $passwordlenght >=18){
       echo " password must be at least 8 characters and at most 18 characters";
   }


   else{
    $sql="SELECT id, name, email, password FROM users";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $new_password=password_verify($password,$row["password"]) ;
        
    if($username==$row['name'] && $new_password==true && $email==$row['email']) {
        

       header("location:http://localhost/mywebsite/final_project/landing_page/landing.php");
   }

   else{
    echo "invalid username or password";
}
}
}
}

?>
</body>
</html>