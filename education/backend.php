<?php
$servername="sql207.epizy.com";
$username="epiz_31057389";
$password="aaE5CU4JWu";
$database="epiz_31057389_contact";

//create connection
$conn=mysqli_connect($servername,$username,$password,$database);
if (!$conn){
  
  
  die("no connection".mysqli_connect_error());

     
}

  
?>
