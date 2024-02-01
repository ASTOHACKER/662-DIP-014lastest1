<?php
require "config.php";
$depid = $_GET['depid'];


$delete = "DELETE FROM Depart WHERE DepartID = $depid";
$result = mysqli_query($statuscon, $delete);



if ($result){
    header("location:search_dep.php");
}
?>