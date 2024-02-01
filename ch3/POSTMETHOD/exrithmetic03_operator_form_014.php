<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>โปรแกรมคำนวณเวลาเข้าชั้นเรียน</title>
</head>
<body>
    <h2 style=color:orange>โปรแกรมคำนวณเวลาเข้าชั้นเรียน</h2>
    <hr>
<main>
    <form name="calculatevat" action="" method="post">
    ใส่เวลาเรียนทั้งหมด :<input type="text" name="nettime" placeholder="ใส่เวลาเรียนทั้งหมด">
        <input type="submit" value="ส่ง"><br><br>
    </form>
    <?php
    error_reporting(E_ERROR | E_PARSE);
    $nettime = $_POST['nettime'];
    $net = $nettime * 0.8;
    $total = $nettime - $net;
    echo "เวลาเรียนทั้งหมดจำนวน <span style=color:red;>$nettime</span>คาบ";
    echo "เวลาที่ต้องเข้าชั้นเรียนจำนวน <span style=color:red;>$net</span>คาบ";
    echo "ขาดเรียนได้ <span style=color:red;>$total</span>คาบ";
    ?>
</main>
</body>
</html>