<?php

$date=$_GET['date'];
switch($date){
    case "0" : echo "วันนี้วันอาทิตย์ สีแดง<div style=height:100px;width:100px;background-color:red></div>";
    break;
    case "1" : echo "วันนี้วันจันทร์ สีเหลือง<div style=height:100px;width:100px;background-color:yellow></div>";
    break;
    case "2" : echo "วันนี้วันอังคาร สีชมพู<div style=height:100px;width:100px;background-color:pink></div>";
    break;
    case "3" : echo "วันนี้วันพุธ สีเขียว<div style=height:100px;width:100px;background-color:green></div>";
    break;
    case "4" : echo "วันนี้วันพฤหัสบดี สีส้ม<div style=height:100px;width:100px;background-color:orange></div>";
    break;
    case "5" : echo "วันนี้วันศุกร์ สีฟ้า<div style=height:100px;width:100px;background-color:blue></div>";
    break;
    case "6" : echo "วันนี้วันเสาร์ สีม่วง<div style=height:100px;width:100px;background-color:purple></div>";
    break;
}
?>