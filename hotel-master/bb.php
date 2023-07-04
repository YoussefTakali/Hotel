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
    <script type="text/javascript" src="dist/verif.js"></script>
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
           <p>Booking</p>
    </section>
    
    
    
    <section class="tm-booking">
    
    <form name="f" method="POST" action="reservation.php">
        <div class="tm-form1">
    <input type="text" name="name" placeholder="Name">  
    <input type="email" name="email" placeholder="E-mail"> 
    <label  for="rooms" id="inlinelable">Rooms</label>
    <select name="Rooms" id="rooms">
        <option value="luxurys">Luxury Suite</option>
        <option value="deluxs">Delux Suite</option>
        <option value="premiers">Premier Suite</option>
        <option value="Luxuryr">Luxury Room</option>
        <option value="deluxs">Delux Room</option>
        <option value="premierr">Premier Room</option>
    </select> 
            
            
            

            
            
    <div class="tm-num1" id="handleCounter1">    
    <label for="number1" >Number of Rooms</label><br/>
        <button type="button" class="counter-minus btn btn-primary">- </button>
        <input type="text" name="number1" id="number1" value="1">
         <button type="button" class="counter-plus btn btn-primary">+  </button>
        </div>
    <div class="tm-num2" id="handleCounter2">      
        <label for="number2">Number of Guests</label><br/>
        <button type="button" class="counter-minus btn btn-primary">-</button>
        <input type="text" name="number2" id="number2" value="1">
            <button type="button" class="counter-plus btn btn-primary">+</button>
            </div>
              
            
            
  
    
    </div>
        
        <div class="vertical-line"> </div>
        
    <div class="tm-form2">
   <div class="tm-cl">
        <label for="date1" class="arrival">Visiting Dates from Arrival to Departure</label>

     <input type="text" name="date1" class="range" readonly="readonly"> 
        

     <input type="submit" id="sub" <?php if (!(isset($_SESSION["username"]))){?> onclick="return nologin()" <?php } ?> value="Proceed">
    </div>
    </div>
        </form>
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
    