<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แปลงข้อความ</title>
</head>
<body>
    <?php
    function tran(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // รับข้อความจากผู้ใช้
            $inputText = $_POST["inputText"];
    
            // แปลงเป็นตัวใหญ่ทั้งหมด
            $upperCaseText = strtoupper($inputText);
    
            // ตัดข้อความทุก 15 ตัวอักษร
            $wrappedText = wordwrap($upperCaseText, 15, "<br>");
    
            // แสดงผลลัพธ์
            echo "<h2>ผลลัพธ์</h2>";
            echo "<p><strong>ข้อความต้นฉบับ:</strong> $inputText</p>";
            echo "<p><strong>ข้อความทั้งหมดเป็นตัวใหญ่:</strong> $upperCaseText</p>";
            echo "<p><strong>ข้อความที่ถูกตัดทุก 15 ตัวอักษร:</strong> $wrappedText</p>";
        }
    }
    tran();
    ?>

    <h2>แปลงข้อความ</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="inputText">ป้อนข้อความ:</label>
        <textarea id="inputText" name="inputText" rows="4" cols="50" required></textarea>

        <button type="submit">แปลง</button>
    </form>
</body>
</html>
