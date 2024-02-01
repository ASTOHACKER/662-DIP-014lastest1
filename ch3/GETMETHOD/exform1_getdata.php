<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>1</title>
</head>
<body>
<main>
    <form name="cus" action="exget01.php" method="get">
        Name :<input type="text" name="name" required>
        <input type="submit" value="ส่ง">
        <input type="reset" value="ยกเลิก">
    </form>
    <?php
    error_reporting(E_ERROR | E_PARSE);
    echo $_GET['name'];
    $name = $_GET['name'];
    echo "<br>$name";
    ?>
</main>
</body>
</html>