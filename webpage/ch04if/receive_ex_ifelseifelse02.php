<?php
    $member=@$_GET['member'];
    $price=@$_GET['price'];
    $date=date("1");
    if($member =="member"){
        if($date == 1 or $date == 16){
            if($price >= 100){
                $point = ($price/100)*2;
            }
        }
        else{
            if($price >= 100){
                $point = $price/100;
            }
        }
    }
    else{
        $point=0;
    }
    echo"ราคาสินค้า = $price บาท<br> แต้มสะสม = $point แต้ม";
?>