<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--จงเขียนโปรแกรมตรวจสอบราคาสินค้าโดยมีส่วนลดให้กับสมาชิกดังต่อไปนี้
    ซื้อครบ 1-500 บาท รับส่วนลด 5%
    ซื้อครบ 501-800 บาท รับส่วนลด 10%
    ซื้อครบ 801-1,100 บาท รับส่วนลด 15%
    ซื้อครบ 1,101-1,500 บาท รับส่วนลด 20%
    ซื้อครบ 1,501 บาทขึ้นไป รับส่วนลด 25%
-->
    <h2>โปรแกรมคำนวณค่าสินค้า</h2>
<form action="receive_ex_ifelseifelse01.php" method="get">
    สมาชิก<input type="checkbox" name="member" value="member"><br>
    ราคาสินค้า<input type="number" name="price" placeholder="ใส่ราคาสินค้า">
    <input type="submit" value="คำนวณ">
    <input type="reset" value="ยกเลิก">
</form>
</body>
</html>