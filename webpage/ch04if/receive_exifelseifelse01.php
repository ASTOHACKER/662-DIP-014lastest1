<?php 
if (!empty ($_POST['t'])){
    $t = @$_POST['time'];
    if ($t > 20){
        echo "have a good day";
    }
    elseif ($t < 10){
        echo "have a good day";
    }
    else {
        echo "have a night day";
    }
}
echo ".";
?>