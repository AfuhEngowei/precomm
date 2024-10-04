<?php
include("../config/config.php");
// require("../style/landing.css");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PreComm landing page</title>
    <link rel="stylesheet"  href="../style/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <nav>
        <ul>
           <div class="dropdown">
            <button class="dropbtn">Dasboard <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="tenant_dashboard.php">Tenant dashboard</a>
                <a href="agent_dashboard.php">Agent dashboard</a>
            </div>
           </div>
            <li><a href="#">Menu</a></li>
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
        <h1 id="logo">PreComm</h1>
        <div class="slogan">
        <h4><i>Bringing joy one rental at a time</i></h4>
        </div>
        

        <div class="row">
            <div class="col">  <h2>Get Started as a New User</h2>
                <p>As a new user, you can easily find houses for rent or advertise available houses for rent on PreComm. </p>
                <button class="btn"><a href="signup.php" >learn more</a></button>
            </div>
            <div class="col1">
           
                
                <img src="../image/logo.png" alt="">

            </div>
     </div>
       <div class="row">
        <div class="col">
            <h2>Discover the power of PreComm</h2>
                <p> PreComm  is a revolutionary platform aimed at making  the search of houses for rent easier for inhabitants in bamenda in particular Cameroon in general and also a means through which landlords or real estate agents can make known to the public the availability of vacant apartments for rent.
                </p>
                <button class="btn"><a href="signup.php">get started with PreComm</a></button>
        </div>
        <div class="col1">
             <div class="img"><img src="../image/agent.png" alt="Discover"></div>
        </div>
       </div>

       <div class="row">
        <div class="col">
            <h2>Connect with  tenant and landlords seamlessly</h2>
              <p>PreComm enables ternant and landlord connect with each other via interents made by the tenant on the landlord's post. It provides a means where tenant can have an aggreement with the landlord without necesarily displacing themselves. </p>
              <button class="btn"><a href="signup.php">learn more</a></button>
        </div>
        <div class="col1">
            <div class="img"><img src="../image/agent.png"alt="coonect with study groups and tutors"></div>
        </div>
    </div>
        <div class="row">
            <div class="col">
                <h2>Enhance Your rental experience</h2>
                  <p>PreComm also provides a rental aggreement for both landlord and tenant to serve as backup incase of uncertainty</p>
                  <button class="btn"><a href="signup.php">Explore more</a></button>
            </div>
            <div class="col1">
                <div class="img"><img src="../image/agent.png" alt="conect with study landlords and/or agents from the comfort of yout home"></div>
            </div>
       </div> 
    </div> 
  
</body>
</html>