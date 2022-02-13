<?php
$servername="localhost";
$username="root";
$password="";
$database="contact";

//create connection
$conn=mysqli_connect($servername,$username,$password,$database);
if (!$conn){
  
  
  die("no connection".mysqli_connect_error());

     
}

  
?>