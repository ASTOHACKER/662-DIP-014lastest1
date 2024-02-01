<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมตรวจสอบ จำนวนคำในประโยค</title>
</head>
<body>
    <h2>โปรแกรมตรวจสอบ จำนวนคำในประโยค</h2>
    <form action="" method="get">
        <input type="checkbox" name="textcount" id=""><b>นับคำในประโยค</b> 
        <input type="checkbox" name="del" id=""> <b>ต้องการตัดคำในประโยค</b>: 
        <br><textarea name="text" id="text" cols="50" rows="4"></textarea><br>
        คำที่ต้องการจะนับ : <input type="text" name="required" id="">
        <input type="submit" value="ตรวจสอบ">
    </form>

    <?php
    function processText() {
        $text = @$_GET['text'];
        $required = @$_GET['required'];
        $del = @$_GET['del'];
        $textcount = @$_GET['textcount'];

        if (!empty($text)) {
            if ($textcount) {
                echo 'ผลลัพธ์ : ', substr_count($text, $required);
            }
            if ($del) {
                echo '<br> ตัดคำ ', $required, ' ผลลัพธ์', ltrim($text, $required);
            }
        }
    }

    // Call the function
    processText();
    ?>
</body>
</html>
