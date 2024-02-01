<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>โปรแกรมคำนวณค่าโทร</title>
</head>
<body>
    <h2 style=color:grey>โปรแกรมคำนวณค่าโทร</h2>
    <hr>
<main>
    <form name="calculatevat" action="" method="post">
    ใส่จำนวนนาทีที่โทร :<input type="text" name="minute" placeholder="ใส่จำนวนนาทีที่โทร" >
        <input type="submit" value="ส่ง"><br><br>
    </form>
    <?php
    error_reporting(E_ERROR | E_PARSE);
    $minute = $_POST['minute'];
    $net = ($minute-1) * (0.5) + 5;
    echo "คุณต้องจ่ายค่าโทรเท่ากับ<span style=color:red;>$net</span> บาท";
    ?>
</main>
</body>
</html>