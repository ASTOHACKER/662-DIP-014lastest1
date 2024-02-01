<?php 
$name = array("Narudom","narudom1","narudom2");
$name_std[] = "Narudom";
$name_std[] = "Narudom1";
$name_std[] = "Narudom2";
print_r($name_std);
echo "<br>";
print_r($name);
echo"You name : $name[0]<br>";
echo"You name : $name_std[0]<br>";
// asociative
$room = array("6414"=>"narudom","6412"=>"Maltika");
print_r($room);
echo "Room = : $room[6412]";



$color = array("จันทร์"=>"yellow","อังคาร"=>"Pink","พุธ"=>"เขียว","พฤหัส"=>"ม่วง","ศุกร์"=>"ฟ้า","เสาร์"=>"ม่วง","อาทิตย์"=>"แดง"
);
print_r($color);
echo "Color : $color[จันทร์]<br>";
echo "Color : $color[อังคาร]<br>";
echo "Color : $color[พุธ]<br>";
echo "Color : $color[พฤหัส]<br>";
echo "Color : $color[ศุกร์]<br>";
echo "Color : $color[เสาร์]<br>";
echo "Color : $color[อาทิตย์]<br>";

foreach ($color as $key => $keyvalue){
    echo "Day = $keyvalue";
}
?>