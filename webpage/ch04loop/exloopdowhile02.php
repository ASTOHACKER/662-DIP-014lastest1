<?php
$number=0;
$num=1;
$month=array("
คม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
do{
    echo $num, ".$month[$number]<br>";
    $number++;
    $num++;
}while($number<=11)
?>