<?php
$num = @$_GET['num'];
$num1 = @$_GET['num1'];

function kunkun($num,$num1){
    $x =  $num ** $num1;
    return $x;

}

function kun1($x,$num1){
    $y = $x / $num1;
    return $y;
}

echo "ค่ายกำลังของ $num ที่ยกกำลังกับ $num1 คือ ",kunkun($num,$num1),"<br>";
$x = kunkun($num,$num1);
echo "ค่าเฉลี่ยของ $num ยกกำลัง $num1 คือ ",kun1($x,$num1);
?>