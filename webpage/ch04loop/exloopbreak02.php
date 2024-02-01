<?php
    $number=1;
    do{
        if($number>50){
            break;
        }
        if($number%2==0){
            echo "$number ";
        }
        $number++;
    } while($number<=100);
?>