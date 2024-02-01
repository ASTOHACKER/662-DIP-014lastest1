<?php

$depname = $_GET['DepartName'];
require "config.php";

$insert = "INSERT INTO Depart(DepartName) VALUES ('$depname')"; 
$status = mysqli_query($statuscon, $insert);
if (!empty($depname)){
    if ($status) {
        header("location:insert_dept.php");
    }
}
?>
