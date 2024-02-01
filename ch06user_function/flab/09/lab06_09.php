<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="file" name="sfile">
        <input type="submit" value="Sent">
    </form>

    <?php
    function processFile() {
        if (isset($_GET['sfile'])) {
            $file = $_GET['sfile'];
            echo "file = ", $file, "<br>";
            $path = "../../../img/" . $file;

            if (is_file($path)) {
                echo "$file ไฟล์ที่แนบถูกต้อง";
                echo round((filesize($path) / 1024), 0), "KB<br>";
            } else if (round((filesize($path)/12500),0)==3){
                echo "เกิน 3MB";
            } else {
                echo "แนบไฟล์ไม่ถูกต้อง";
            }
        }
    }

    // Call the function
    processFile();
    ?>
</body>
</html>
