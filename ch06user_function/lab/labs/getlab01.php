<?php
$num1 = @$_GET['num1'];
$num2 = @$_GET['num2'];
$num3 = @$_GET['num3'];

function large_number($num1,$num2,$num3){
    $sum = ([$num1,$num2,$num3]);
    $a = max($sum);
    return $a;
}

$total = large_number($num1,$num2,$num3);
echo $total;
?>