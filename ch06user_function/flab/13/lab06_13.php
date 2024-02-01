<?php
function displayRoundedTime() {
    // ดึงเวลาปัจจุบัน
    $current_time = date("Y-m-d H:i:s");

    // แสดงเวลาปัจจุบันก่อนการปัด
    echo "เวลาปัจจุบัน: " . $current_time . "<br>";

    // ปัดวินาทีลงเป็นจำนวนเต็ม
    $rounded_seconds = floor(date("s"));
    echo "วินาที (ปัด): " . $rounded_seconds . "<br>";

    // แสดงเวลาปัจจุบันหลังการปัด
    $rounded_time = date("Y-m-d H:i:") . $rounded_seconds;
    echo "เวลาปัจจุบัน (หลังปัด): " . $rounded_time;
}

// Call the function
displayRoundedTime();
?>
