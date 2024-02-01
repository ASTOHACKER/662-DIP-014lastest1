<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="lab06_04.php" method="get">
        Input number : <input type="number" name="number">
        <input type="submit" value="Submit">
    </form>

    <?php
    function processNumber() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $number = @$_GET['number'];

            if (isset($number)) {
                $data = rtrim($number);
                $change = substr($data, 0, 6);
                echo "$change";
            }
        }
    }

    // Call the function
    processNumber();
    ?>
</body>
</html>
