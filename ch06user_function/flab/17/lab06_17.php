<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การจัดเรียงและค่ามากที่สุดใน Array</title>
</head>
<body>
    <?php
    // สร้าง Array ตามที่กำหนด
    $array1 = range(21, 30);
    $array2 = range(1, 10);
    $array3 = range(21, 30);
    $array4 = range(41, 50);
    $array5 = range(31, 40);

    // รวมทั้งหมดเป็น Array เดียว
    $allArrays = array_merge($array1, $array2, $array3, $array4, $array5);

    // เรียงลำดับ Array
    sort($allArrays);

    // หาค่าที่มากที่สุด
    $maxValue = max($allArrays);
    ?>

    <h2>การจัดเรียงและค่ามากที่สุดใน Array</h2>
    
    <p><strong>Array ที่เรียงลำดับ:</strong> <?php echo implode(", ", $allArrays); ?></p>
    <p><strong>ค่าที่มากที่สุดใน Array:</strong> <?php echo $maxValue; ?></p>
</body>
</html>
