<?php

$point=$_GET['point'];
switch($point){
    case "30" : echo "คุณได้รับกระเป๋าผ้า <br><img src='../../img/30point.jpg'>";
    break;
    case "40" : echo "คุณได้รับกระเป๋าเครื่องสำอาง <br><img src='../../img/40point.jpg'>";
    break;
    case "50" : echo "คุณได้รับกระเป๋าถือ <br><img src='../../img/50point.jpg'>";
    break;
    case "80" : echo "คุณได้รับกระเป๋าถือทรงสี่เหลี่ยม <br><img src='../../img/80point.jpg'>";
    break;
    default : echo "ไม่ได้รับ";
    break;
}
?>