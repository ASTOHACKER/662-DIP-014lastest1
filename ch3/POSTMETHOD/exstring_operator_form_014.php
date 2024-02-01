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
    <form name="mersename" action="" method="post">
        Name :<input type="text" name="fname" placeholder="Name">
        Lastname :<input type="text" name="sname" placeholder="lastname">
        <input type="submit" value="ส่ง"><br><br>
    </form>
    <?php
    error_reporting(E_ERROR | E_PARSE);
    $fname = $_POST["fname"];
    $lname = $_POST["sname"];
    echo"สวัสดีคุณ",$fname,$sname;
    ?>
</main>
</body>
</html>