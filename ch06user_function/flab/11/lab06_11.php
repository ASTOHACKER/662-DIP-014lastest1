<?php
for ($i = 0; $i < 3; $i++) {
    echo random_int(1, 10) . " <br>";
}
?>
-------------------


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>กรอกตัวเลข</h2>
    <form  method="get">
    <input type=number name=num1><br><br>
    <input type=number name=num2><br><br>
    <input type=number name=num3><br><br>
    <input type="submit">
    <input type="reset">
    </form>
</body>
</html>
<?php
    $num1=@$_GET['num1'];
    $num2=@$_GET['num2'];
    $num3=@$_GET['num3'];    
    echo "<br><br>ผลลัพธ์คือ :";
    echo min($num1,$num2,$num3);
?>