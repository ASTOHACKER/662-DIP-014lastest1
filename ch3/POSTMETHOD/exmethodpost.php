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
    <form name="cus" action="" method="post">
        Name :<input type="password" name="password" required>
        <input type="submit" value="ส่ง">
    </form>
    <?php
    error_reporting(E_ERROR | E_PARSE);
    echo $_POST['password'];
    $pw = $_POST['password'];
    echo "<br>$pw";
    ?>
</main>
</body>
</html>