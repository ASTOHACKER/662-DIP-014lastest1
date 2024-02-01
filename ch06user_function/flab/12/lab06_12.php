<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>โปรแกรมตรวจสอบชื่อ</h2>
    <form action="" method="get">
        กรอกชื่อ : <input type="text" name="name" required>
        กรอกนามสกุล : <input type="text" name="sur" required>
        <input type="submit" value="ส่ง">
    </form>


    <?php
    //โปรแกรมตรวจสอบชื่อและนามสกุลโดยชื่อ จะให้ตัดช่องว่างหน้าและหลัง และนามสกุลให้ทำเป็นตัวเล็ก
    $name = @$_GET['name'];
    $trimmed = trim($name);
    $sur = @$_GET['sur'];
    $str = strtolower($sur);
    echo "ชื่อผู้ใช้:$trimmed"," ","$str";