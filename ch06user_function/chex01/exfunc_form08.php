<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        โปรแกรมรับข้อมูลสินค้า
    </h2>
    <form action="exgetfunc_form08.php" method="get"> 
        คำนำหน้า: <select name="title">
            <option value="m"> นาย </option>
            <option value="f"> นายสาว </option>
        </select>
        <br> 
        <br>

        ระบุชื่อ : <input type="text" name="name"><br><br>
     เลือกสาขา : <select name="depart">
        <option value="ช่างยนต์"> ช่างยนต์ </option>
        <option value="ช่างกล"> ช่างกล </option>
        <option value="เครื่องเรือน"> เครื่องเรือน </option>
        <option value="lj"> โลติสติกส์ </option>
        </select><br><br>
        <input type="submit" value="ส่ง">
    </form>
            
</body>
</html>