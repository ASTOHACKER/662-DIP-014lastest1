<?php 
$username = "root"; 
$password = "";
$host = "localhost";
$database = "66_2_014";
$statuscon = mysqli_connect($host, $username, $password);
$connectdb = mysqli_select_db($statuscon, $database);

if (!$statuscon) {
    die("Connection failed: " . mysqli_connect_error());
}

if (!$connectdb) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
