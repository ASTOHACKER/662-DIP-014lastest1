<?php 

echo substr("20901021",0,5);
$depart = "20901021";
if (substr($depart,0,5)=="20901"){
    echo "<br> ระดับชั้ย ปวช";
}

if (substr($depart,0,5)=="30901"){
    echo "<br> ระดับชั้ย ปวส";
}
?>