<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- สร้างฟอร์มรับเอกสารจากผู้ใช้ -->
    <form method="post" enctype="multipart/form-data">
        แนบเอกสาร <input type="file" name="upload" id="">
        New file <input type="text" name="newfile">
        <br>
        <br>
        <input type="submit" value="Send">
    </form>
    <?php
    echo "Type: " . @$_FILES['upload']['type'] . "<br>";
    echo "Temp Name: " . @$_FILES['upload']['tmp_name'] . "<br>";
    echo "Name: " . @$_FILES['upload']['name'] . "<br>";
    echo "Size: " . @$_FILES['upload']['size'] . "<br> <br> <br>";

    $upload_dir = '../document/';
    $f_name = $_FILES['upload']['name'];

    $cutfname = strchr($f_name, ".");

    $newfile = $_POST['newfile'];

    if ($newfile) {
        // ตรวจสอบว่าไดเร็กทอรียังไม่มีอยู่
        if (!is_dir($upload_dir . "/" . $newfile)) {
            // สร้างไดเร็กทอรี
            if (mkdir($upload_dir . "/" . $newfile)) {
                echo 'ไดเร็กทอรีถูกสร้างเรียบร้อยแล้ว!<br>';
            } else {
                echo 'มีปัญหาในการสร้างไดเร็กทอรี<br>';
            }
        } else {
            echo 'ไดเร็กทอรีมีอยู่แล้ว<br>';
        }
    }

    if ($newfile) {
        if ($cutfname == ".pdf" or $cutfname == ".docx"  or $cutfname == ".txt") {
            echo "Wrong File Type <br>";
        } else {
            if (move_uploaded_file(@$_FILES['upload']['tmp_name'], $upload_dir . $newfile . '/' . $f_name)) {
                echo "สร้างสำเร็จ <br>";
            }
            if ($_FILES["upload"]["size"] > 1024) {
                echo " <br> เกิน 1KB <br>";
            } else {
                echo "Failed to move file<br>";
            }
        }
    }
    ?>

</body>
</html>
