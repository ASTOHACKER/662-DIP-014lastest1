<?php
    $cash=$_GET['cash'];    
    $currency=$_GET['currency'];
    $totalth = $cash*38;
    $totalus = $cash/38;
if($currency=="1"){
    echo "จำนวนเงินของคุณคือ ",$totalth," บาท";
}
else{
    echo "จำนวนเงินของเงินคุณคือ ",$totalus," ดอลลาห์";
}
?>