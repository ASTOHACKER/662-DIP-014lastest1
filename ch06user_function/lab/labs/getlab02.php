<?php
$name = @$_GET['name'];
$name = trim($name);

function check_title($name){
    if (substr($name , 0,9) == "นาย"){
        echo "ชาย";
        echo substr($name , 9);
    }
    else if (substr($name , 0,9) == "นาง"){
        echo "หญิง";
        echo substr($name , 9);
    }
    else{
        echo "Error";
    }
}

check_title($name);

?>