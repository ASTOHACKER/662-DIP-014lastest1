<?php 
if (!empty ($_POST['time'])){
    $t = @$_POST['time'];
    if ($t > 20){
        echo "have a good day";
    }
}
?>