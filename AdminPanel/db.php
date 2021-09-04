<?php
$username = "root";
$password = "";
$hostname = "localhost"; 
$dbname = "nik";

//connection to the database
$con = mysqli_connect($hostname, $username, $password,$dbname) 
  or die("Unable to connect to MySQL");
  
?>