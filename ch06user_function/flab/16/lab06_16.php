<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ร้านค้าสินค้า</title>
</head>
<body>
    <h2>ร้านค้าสินค้า</h2>
    
    <form action="process.php" method="post">
        <label for="customerName">ชื่อลูกค้า:</label>
        <input type="text" id="customerName" name="customerName" required>

        <label for="brand">เลือกแบรนด์สินค้า:</label>
        <select id="brand" name="brand">
            <option value="brand1">แบรนด์ที่ 1</option>
            <option value="brand2">แบรนด์ที่ 2</option>
            <!-- เพิ่มตัวเลือกเป็นไปตามความต้องการ -->
        </select>

        <button type="submit">ตรวจสอบ</button>
    </form>
    

</body>
</html>
