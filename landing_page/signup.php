<?php
include("../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup page</title>
    <link rel="stylesheet" href="../style/style.css">
  
</head>
<body>
    <h1>Sign Up </h1>
    <form id="signup" action = "signup.php" method = "post">
        <label for = "fullname" > Enter your full name:</label>
        <input type = " text" id = "fullname" name = " fullname"> 
        <label for = "username" > Enter your desired username:</label>
        <input type = " text" id = "username" name = " username"> 
        <label for = "email" > Enter your Email:</label>
        <input type = " email" id = "email" name = " email"> 
        <label for = "password" > Enter your password:</label>
        <input type = "password" id = "password" name = " password">
        <label for = "passwordConfirm" > Confirm  your password:</label>
        <input type = "password" id = "passwordConfirm" name = " confirm">
        <label for = "mobile" > Enter your phone number:</label>
        <input type = "number" id = "mobile" name = "mobile"> 
        <label for = "location" > Enter your location:</label>
        <input type = "text" id = "location" name = "location"><br>
        <input type = "submit" name = "submit"  value= "SignUp">
        <h4 id="account">Already have an account? <a href="login.php">Login</a></h4>
    </form>
<?php
$username = "";

if(isset($_POST["submit"])){

   $username = $_POST["username"];
   $email = $_POST["email"];
   $password = $_POST["password"];
   $confirmpassword = $_POST["confirm"];
   $mobile = $_POST["mobile"];
   $location = $_POST["location"];
   $hashed_password1 = password_hash($password, PASSWORD_DEFAULT);
   $hashed_password2 = password_hash($confirmpassword, PASSWORD_DEFAULT);




   $username = filter_input(INPUT_POST, "username" , 
                              FILTER_SANITIZE_SPECIAL_CHARS);
   $email = filter_input(INPUT_POST, "email" ,  FILTER_SANITIZE_EMAIL);
   $email = filter_input(INPUT_POST, "email" ,  FILTER_VALIDATE_EMAIL);

   if(empty($username) || empty($email) || empty($password)){
       echo "<p> please enter all of the credentials </p>";
   }
   $usernamelenght = strlen($username); 
   $passwordlenght = strlen($password);
   $confirmlenght = strlen($confirmpassword);
   $mobilelenght = strlen($mobile);

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
   elseif ($confirmpassword != $password){
    echo "confirm password must be the same as password";
   }

   elseif($mobilelenght !=9){
    echo "enter a valid mobile number";
   }

   else{
    $sql="INSERT INTO users (name, email, password, mobile, location) VALUE ('$username', '$email', '$hashed_password1', '$mobile', '$location')";
    // $result = mysqli_query($conn, $sql);
    if (mysqli_query($conn, $sql)){
       header("location:http://localhost/mywebsite/final_project/landing_page/landing.php");
   }
   else{
    echo "user not created";
}
}

}
?>
</body>
</html>