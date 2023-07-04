<?php
ob_start();
$mysqlconnect=mysql_connect("localhost","root","");
    if($mysqlconnect===false){die("mysql is not connected");}
    else{
        mysql_select_db("hotel");
        }
		
if (isset($_POST['email'])) $email=$_POST['email'];
if (isset($_POST['name'])) $name=$_POST['name'];
if (isset($_POST['Rooms'])) $rooms=$_POST['Rooms'];
if (isset($_POST['number1'])) $n1=$_POST['number1'];
if (isset($_POST['number2'])) $n2=$_POST['number2'];
if (isset($_POST['date1'])) $date=$_POST['date1'];

$res=mysql_query("INSERT INTO reservation(email,username,room,n1,n2,dd) VALUES ('$email','$name','$rooms','$n1','$n2','$date');");
header('Location:bb.php');
?>