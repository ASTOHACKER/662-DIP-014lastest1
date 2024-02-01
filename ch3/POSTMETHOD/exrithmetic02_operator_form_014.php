<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>โปรแกรมคำนวนราคาสินค้าและหาภาษีมูลค่าเพื่ม</title>
</head>
<body>
    <h2 style=color:pink>โปรแกรมคำนวนราคาสินค้าและหาภาษีมูลค่าเพื่ม</h2>
    <hr>
<main>
    <form name="calculatevat" action="" method="post">
        ราคาสินค้า :<input type="text" name="price" placeholder="ราคาสินค้า">
        จำนวนสินค้า :<input type="text" name="unit" placeholder="จำนวนสินค้า">
        <input type="submit" value="ส่ง"><br><br>
    </form>
    <?php
    error_reporting(E_ERROR | E_PARSE);
    $price = $_POST["price"];
    $unit = $_POST["unit"];
    $net = $price * $unit;
    $netprice = $net - ($net * 0.07);
    echo "จำนวนสินค้า เท่ากับ <span style=color:red;>$net</span>บาท<br>";
    echo "ภาษีมูลค่าเพิ่ม <span style color=color:red;>",$net*0.07,"</span>บาท<br>";
    echo "ราคาสินค้าทั้งหมด เท่ากับ <span style=color:red;>$netprice </span>บาท <br>";
    ?>
</main>
</body>
</html>