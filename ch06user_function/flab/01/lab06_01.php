<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="number" name="product">
        <input type="submit" value="Sent">
    </form>
    <?php
    function calculatePoints() {
        $product = @$_GET['product'];
        $date = date('d');
        echo "Date = ", date('d/m/y'), "<br>";

        if (isset($product)) {
            if ($product >= 2000000 and $date % 2 == 0) {
                echo "คุณได้รับ 2 แต้ม";
            } else if ($product >= 2000000 and $date % 2 == 1) {
                echo "คุณได้รับ 1 แต้ม";
            } else {
                echo "คุณไม่ได้รับแต้ม";
            }
        } else {
            echo "กรอกข้อมูล";
        }
    }
    calculatePoints();
    ?>
</body>
</html>
