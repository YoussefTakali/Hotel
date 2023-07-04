<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Magestic Hotel</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="dist/pickmeup.min.js"></script>
    <script type="text/javascript" src="dist/handleCounter.js"></script>
    <link rel="stylesheet" type="text/css" href="css/pickmeup.css">
    <link rel="stylesheet" type="text/css" href="css/handle-counter.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script type="text/javascript" src="dist/jquery.scrollUp.js"></script>
     <script type="text/javascript" src="dist/demo.js"></script>
     <script type="text/javascript" src="dist/Swal.js"></script>
     <script type="text/javascript" src="dist/sweetalert2@11.js"></script>
  

    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3tO4SQlk9ZVpuhRXlmNfYh37e63-Li2k&callback=initMap">
    </script>

 
    
    </head>
    
<body>
    <header class="tm-header">
        <img class="tm-logo" src="images/Majestic_Hotel_hd.png" alt="Majestic Hotel">
        <nav class="tm-nav">
       <div>
       <ul>
                <li class="tm-list"><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
                <li class="tm-list"><a href="explore.php"><i class="fa-solid fa-magnifying-glass"></i> Explore </a></li>
                <li class="tm-list"><a href="rooms.php"><i class="fa-solid fa-bed"></i> Rooms</a></li>
                <li class="tm-list"><a href="bb.php"><i class="fa-solid fa-map-location-dot"></i> Booking</a></li>
                <li class="tm-list"><a href="contact.php"><i class="fa-solid fa-address-book"></i> Contact</a></li>
                <?php if(isset($_SESSION["username"])){?>
				<li><a><i class="fa-solid fa-user"></i><?php echo $_SESSION['username']; ?></a></li>
                <li class="tm-list"><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></li> <?php }
				else{ echo'<li><a href="login.html"><i class="fa-solid fa-user"></i>Login</a></li>';}?>
			
			
            </ul>          
            </div>
        </nav>
    </header>
    
    
    <section class="tm-main">
           <p>Contact</p>
    </section>
    
    
    
    <section class="tm-booking">
    
    <form method="POST" action="http://127.0.0.1/hotel-master/send.php">
        <div class="tm-form1">
    <input type="text" name="name" placeholder="Name">  
    <input type="email" name="email" placeholder="E-mail"> 
            <textarea  name="message" placeholder="Your message..." rows="4" ></textarea>
   
            <input type="submit" <?php if (!(isset($_SESSION["username"]))){?> onclick="return nologin()" <?php } ?> id="sub2" value="Send">

    </div>
        </form> 
        
        <div class="vertical-line"> </div>
        
    <div class="tm-form2">
   <div class="tm-cl">
        <p class="here">We are situated over here</p><img id="place" src="images/placeholder.png">

        <div id="map"></div>

     
    </div>
    </div>
        
  </section>
    
    
    <footer class="tm-footer">
        <div class="tm-us">
        <p class="bold">About Us</p>
        <p>We are a part of chain of luxury hotels 
            which extends all over the world. We 
            provide a luxorious stay with various value
            added and free services which will make
            you visit us over and over again.</p>    
        </div>
       
        <div class="tm-address">
        <p class="bold">Address</p>
        <p>2080, Ariana, Tunisie
            Phone : (216) 53380474
            Email : isi@isi.com</p>     
        </div>
        <br/>
    <div class="tm-media">
        <a href="#"> <img src="images/fb.png"></a>
        <a href="#"> <img src="images/G.png"> </a>
        <a href="#"> <img src="images/twittr.png"> </a>
        <a href="#">  <img src="images/insta.png"> </a>
        
        </div>
<!--        <a href="#">  <img class="tm-up" src="images/up.png"> </a>-->
    </footer>
    

    
    </body>
    
</html>
    