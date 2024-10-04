<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tenant dashboard</title>
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
        <!-- <div class="search-container">
            <input type="text" id="search-input" placeholder="Search " >
            <button id="search-button"> search</button> 
        </div> -->

    
         <div>
         <input type="text" class="search-btn" placeholder="Search ">
         </div>
         
        

        <button id="button1"><a href="signup.php">Signup</a></button>
       <button id="button2"><a href="login.php">Login</a></button>
        
    </nav>
    <div class="main">
    
        <h1>Available Houses For Rent</h1>
        <div class="row">
            <div class="col3">
                <div class="img"><img src="../image/duplex.png" alt=""></div>
                <p>Location: Mile 4 Nkwen</p>
                <p>Size: 3 bedrooms, 1 living room, 1 kitchen, 2 toilets</p>
                <p>price: 100.000frs/month</p>
                <button class="btn1"><a href="view.php">View details</a></button>
                
            </div>
            <div class="col2">
                <div class="img"> <img src="../image/house.png" alt=""></div>
                <p>Location: Mile 4 Nkwen</p>
                <p>Size: 3 bedrooms, 1 living room, 1 kitchen, 2 toilets</p>
                <p>price: 100.000frs/month</p>
                <button class="btn1"><a href="view.php">View details</a></button>
                
            </div>
          
           
    </div>
    <div class="row">
        <div class="col3">
            <div class="img"><img src="../image/house.png" alt=""></div>
            <p>Location: Mile 4 Nkwen</p>
                <p>Size: 3 bedrooms, 1 living room, 1 kitchen, 2 toilets</p>
                <p>price: 100.000frs/month</p>
                <button class="btn1"><a href="view.php">View details</a></button>
                
            
        </div>
         <div class="col2">
            <div class="img"><img src="../image/duplex.png" alt=""></div>
            <p>Location: Mile 4 Nkwen</p>
                <p>Size: 3 bedrooms, 1 living room, 1 kitchen, 2 toilets</p>
                <p>price: 100.000frs/month</p>
                <button class="btn1"><a href="view.php">View details</a></button>
                
            
        </div>
           
    </div>
</div>
</body>
</html>