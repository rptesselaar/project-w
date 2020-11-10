<?php

$servername= 'localhost';
$username= 'root';
$password = '';
$dbname = 'walktrough';

// connectie maken
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
  die('fout bij verbinden' . $conn->connect_error);
} else {
}
?>
