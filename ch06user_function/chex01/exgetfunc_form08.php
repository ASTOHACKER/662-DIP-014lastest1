<?php
$depart = $_GET['depart'];
$title = $_GET['title'];
$name = $_GET['name'];
echo "ชื่อนักเรียน : $name <br> สาขาที่เลือก $depart"; 
if ($depart == "ช่างยนต์" or $depart == "ช่างกล" or $depart == "เครื่องเรือน"){
    std_trade($title);
}
else{
    std_business($title);
}


function std_trade($title){
    echo " <span style = color=red;>
    รายการที่ต้องซื้อคือ </span> 
    <br>เสื้อนักเรียน <br>กางเกงนักเรียน <br>รองเท้า <br>เข็มขัด <br>ตะไบ
          ";
    if ($title == "f"){
        echo "<br>กระโปรง";
    }
} 
function std_business($title){
    echo " <span style = color=red;>
    รายการที่ต้องซื้อคือ </span> 
    <br>เสื้อนักเรียน <br>กางเกงนักเรียน <br>รองเท้า <br>เข็มขั
          ";
    if ($title == "f"){
        echo "กระโปรง";
    }
}
?>