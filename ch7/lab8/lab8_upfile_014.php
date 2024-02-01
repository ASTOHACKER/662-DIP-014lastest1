<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <select name="title">
            <option value="นาย"> นาย </option>
            <option value="นาง"> นาง </option>
        </select>
        ชื่อ <input type="text" name="name">
        สาขา <input type="text" name="major"> <br>
        รูป <input type="file" name="upload" id=""> <br>
        <input type="submit" name="submit">
    </form>

    <?php

    if(isset($_POST['submit'])){
        $upload_size = $_FILES['upload']['size'];
        $MB2 = 2 * 1024 * 1024;
        $name = $_POST['name'];
        $u_name = $_FILES['upload']['name'];
        $cutlname = strchr($u_name, ".");
        $folderName = "../../workshop";
        $imgFolder = "$folderName/img";

        $resultSize = checksize($upload_size, $MB2);
        $resultType = checktypefile($cutlname);

        if (!$resultSize and !$resultType) {
            echo "<br> ไม่ผ่านการตรวจสอบ";
        } else {
            if (!file_exists($folderName)) {
                if (mkdir($folderName)) {
                        echo 'ไดเรกทอรีถูกสร้างเรียบร้อยแล้ว!';
                } else {
                    echo 'มีปัญหาในการสร้างไดเรกทอรี';
                }
            }

            if (!file_exists($imgFolder)) {
                if (mkdir($imgFolder)) {
                    echo 'ไดเรกทอรี "img" ถูกสร้างเรียบร้อยแล้ว!';
                } else {
                    echo 'มีปัญหาในการสร้างไดเรกทอรี "img"';
                }
            } else {
                echo '<br> Directory Status : ไดเรกทอรีมีอยู่แล้ว';
            }
        }

        if ($resultSize and $resultType){
            createfilepic($u_name, $imgFolder);
            createtxtfile();
        }
    }

    function checksize($upload_size, $MB2) { 
        if ($upload_size >= $MB2) {
            echo "CheckSize : ไม่ยอมรับ เกิน 2 MB <br>";
            return false;
        } else {
            echo "CheckSize : ยอมรับ <br> ";
            return true;
        }
    }

    function checktypefile($cutlname){
        $allowedExtensions = [".jpeg", ".png", ".jpg", ".bmp"];
        if (in_array(strtolower($cutlname), $allowedExtensions)) {
            echo "CheckTypeFile : ยอมรับ ";
            return true;
        } else {
            echo "CheckTypeFile : ไม่ยอมรับ ต้องการไฟล์ jpg,png,bmp เท่านั้น   ";
            return false;
        }
    }

    function createfilepic($u_name, $imgFolder){
        $createnamefile = "$imgFolder/".date("y")."_".date("m")."_".date("d")."_".$u_name;
        if (move_uploaded_file($_FILES['upload']['tmp_name'], $createnamefile)) {
            echo "<br> สร้างสำเร็จ <br>";
        }
        else {
            echo "สร้างไม่สำเร็จ";
        }
    }

    function createtxtfile(){
        $tname = @$_POST['title'];
        $nname = @$_POST['name'];
        $major = @$_POST['major'];
        $fileContent = "$tname $nname $major";
        $filePath = "../../workshop/std_014.txt";
        file_put_contents($filePath, $fileContent);
        echo "บันทึกไฟล์ที่  $filePath";
    }
    ?>
</body>
</html>
