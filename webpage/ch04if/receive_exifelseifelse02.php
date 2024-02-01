<?php
if (!empty ($_POST['date'])){
    $year = @$_POST['date'];
    $old = 2565 - $year;
    echo "Your Age : ",$old,"<br>";
    if (($year <= 2489) and ($year <= 2507)){
        echo "Gen B";
    }
    elseif(($year <= 2508)and($year <= 2522)){
        echo "Gen X";
    }
    elseif (($year >= 2523 )and($year<=2540)){
        echo "Gen Y";
    }
    else{
        echo "GEN Z";
    }
}
?>