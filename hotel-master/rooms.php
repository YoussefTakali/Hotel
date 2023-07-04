<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Magestic Hotel</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="dist/jquery.scrollUp.js"></script>
 <script type="text/javascript" src="dist/demo.js"></script>
 <script type="text/javascript" src="dist/Swal.js"></script>
 <script type="text/javascript" src="dist/sweetalert2@11.js"></script>

    
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
           <p>Rooms</p>
    </section>
    
    
      <section class="tm-roomsection">
                    <div class="tm-room1">
                        <div class="tm-trans"> <div><p>2 Bed</p><p>Complimentary liquor</p><p>Free Wifi</p> </div>
                        
                        <div><p>Only for</p><p class="bold">$ 1999.99</p> </div></div>
                        
                        
                        <img class="tm-roomimage" src="images/luxury.png">
                     <p class="s">Luxury Suite</p>

                    </div>
                        <div class="tm-room1">
                            <div class="tm-trans"> <div><p>2 Bed</p><p>Luxorious interior</p><p>Free Wifi</p> </div>
                        
                        <div><p>Only for</p><p class="bold">$ 1599.99</p> </div></div>
                    
                            
                        <img class="tm-roomimage" src="images/delux.png">
                            <p>Delux Suite</p>

                    </div>
                        <div class="tm-room1">
                            
                            <div class="tm-trans"> <div><p>2 Bed</p><p>Scenic View</p><p>Free Wifi</p> </div>
                        
                        <div><p>Only for</p><p class="bold">$ 1299.99</p> </div></div>
                        
                            
                        <img class="tm-roomimage" src="images/premier.png">
                             <p>Premier Suite</p>

                    </div>
    </section>
    <br/>
     <section class="tm-roomsection">
                    <div class="tm-room1">
                        
                        <div class="tm-trans"> <div><p>2 Bed</p><p>Free wifi</p><p>Fresh towels</p> </div>
                        
                        <div><p>Only for</p><p class="bold">$ 999.99</p> </div></div>
                        
                        
                        <img class="tm-roomimage" src="images/luxuryroom.png">
                     <p class="s">Luxury Room</p>

                    </div>
                        <div class="tm-room1">
                            
                            <div class="tm-trans"> <div><p>2 Bed</p><p>Fresh towels</p><p>Less costly</p> </div>
                        
                        <div><p>Only for</p><p class="bold">$ 599.99</p> </div></div>
                        
                            
                        <img class="tm-roomimage" src="images/deluxroom.png">
                            <p>Delux Room</p>

                    </div>
                        <div class="tm-room1">
                            
                            <div class="tm-trans"> <div><p>1 Bed</p><p>Fresh towels</p><p>Less costly</p> </div>
                        
                        <div><p>Only for</p><p class="bold">$ 399.99</p> </div></div>
                        
                            
                        <img class="tm-roomimage" src="images/premiumroom.png">
                             <p>Premier Room</p>

                    </div>
    </section>
       <br/>
    
    
    
     <section class="tm-makeres">
    <div class="tm-res">
       <div class="tm-resbutton">
           <a href="bb.html"> <p>Make Reservation</p></a>
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
    