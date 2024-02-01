<?php 

$time = date("H:i:s");
echo "ขณะนี้เวลา $time <br>";

date_default_timezone_set('asia/bangkok');

$time = date("h:i:s");
echo "ขณะนี้เวลา $time <br>";
echo "<br> วันที่ ",date("D-M-Y h:i:s");
?>