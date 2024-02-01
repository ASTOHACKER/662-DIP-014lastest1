<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>โปรแกรมคำนวนราคาสินค้า</title>
</head>
<body>
    <h2 style=color:pink>โปรแกรมคำนวนราคาสินค้า</h2>
    <hr>
<main>
    <form name="calculateproduct" action="" method="post">
        ราคาสินค้า :<input type="text" name="price" placeholder="ราคาสินค้า">
        จำนวนสินค้า :<input type="text" name="unit" placeholder="จำนวนสินค้า">
        <input type="submit" value="ส่ง"><br><br>
    </form>
    <?php
    error_reporting(E_ERROR | E_PARSE);
    $price = $_POST["price"];
    $unit = $_POST["unit"];
    $net = $price * $unit;
    echo "จำนวนสินค้า เท่ากับ <span style=color:red;>$net</span>บาท<br>";
    ?>
</main>
</body>
</html>