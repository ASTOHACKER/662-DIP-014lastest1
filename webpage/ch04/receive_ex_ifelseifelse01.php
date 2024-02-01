<?php
    $member=@$_GET['member'];
    $price=@$_GET['price'];
    if($member =="member"){
        if($price<=500){
           $discount=$price*0.05;}
        elseif($price<=800){
            $discount=$price*0.1;}
        elseif($price<=1100){
            $discount=$price*0.15;}
        elseif($price<=1500){
            $discount=$price*0.20;}
        else{
            $discount=$price*0.25;}
    }
    else{
        $discount=0;
    }
    echo"ยอดสั่งซื้อ = $price บาท<br>ส่วนลด = $discount บาท<br>ยอดชำระ = ",$price-$discount," บาท";
?>