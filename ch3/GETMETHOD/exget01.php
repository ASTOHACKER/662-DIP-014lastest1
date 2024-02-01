<?php
$name = $_GET['name'];
if( isset( $_GET['name'] )) {
    error_reporting(E_ERROR | E_PARSE);
    $name = $_GET['name'];
    echo "สวัสดีคุณ$name";
}
if ($name == "Narudom"){
    echo "<br>Welcome Ad";
}

?>