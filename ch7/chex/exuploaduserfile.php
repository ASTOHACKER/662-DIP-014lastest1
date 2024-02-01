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
        <br>
        <br>
        <input type="submit" value="Send">
    </form>
    <?php
        echo "Type: " . @$_FILES['upload']['type'] . "<br>";
        echo "Temp Name: " . @$_FILES['upload']['tmp_name'] . "<br>";
        echo "Name: " . @$_FILES['upload']['name'] . "<br>";
        echo "Size: " . @$_FILES['upload']['size'] . "<br>";

        $upload_dir = '../document/';
        $f_name = $_FILES['upload']['name'];
        // $uploaded_file = $upload_dir . '/' . basename($_FILES['upload']['name']);
        // if (!is_dir($upload_dir)) {
        //     mkdir($upload_dir, 0777, true);
        // }

        $cutfname =  strchr($f_name,".");
        echo($cutfname);

        if ($cutfname == ".pdf" or $cutfname == ".docx"  or $cutfname == ".txt"){ 
            echo "Wrong File Type <br>";
        }
        else {
            if (move_uploaded_file(@$_FILES['upload']['tmp_name'], $upload_dir.$f_name)) {
                echo "Success";
            }
            if (($_FILES["upload"]["size"] > 1024)){
                echo "> 1KB";
            } 
            else {
                echo "Failed to move file";
            }
        }
    ?>
</body>
</html>
