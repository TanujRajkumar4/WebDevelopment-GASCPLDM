<?php
$dsn = 'mysql:host=localhost;dbname=gascpldmac_admportal';
$username = 'root';
$password = '';
//connection to the database

try {
  $con = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
  $error_message = $e->getMessage();
  include('database_error.php');        
  exit();
}
  
?>