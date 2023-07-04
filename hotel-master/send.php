<?php
$mysqlconnect=mysql_connect("localhost","root","");
    if($mysqlconnect===false){die("mysql is not connected");}
    else{
        mysql_select_db("hotel");
        }
		
if (isset($_POST['email'])) $email=$_POST['email'];
if (isset($_POST['name'])) $name=$_POST['name'];
if (isset($_POST['message'])) $message=$_POST['message'];

$res=mysql_query("INSERT INTO send (email,username,message) VALUES ('$email','$name','$message');");
header('Location:contact.php');
?>