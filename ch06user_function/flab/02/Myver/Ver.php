<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Count and Splitter</title>
</head>
<body>
ตัดคำ หริอ นับ หรือ นับตัวอักษร
<?php
function countWords($sentence) {
    $trimmedSentence = trim($sentence);
    $wordCount = substr_count($trimmedSentence, ' ') + 1;
    
    return $wordCount;
}

function countCharacters($sentence) {
    $trimmedSentence = trim($sentence);
    $charCount = mb_strlen($trimmedSentence, 'UTF-8');
    
    return $charCount;
}

function splitWords($sentence) {
    $trimmedSentence = trim($sentence);
    $words = explode(' ', $trimmedSentence);
    
    return $words;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputSentence = isset($_POST['sentence']) ? $_POST['sentence'] : '';

    // Check if either action is selected
    $performCount = isset($_POST['performCount']);
    $performSplit = isset($_POST['performSplit']);
    $performCharCount = isset($_POST['performCharCount']);

    if ($performCount || $performSplit || $performCharCount) {
        echo '<h2>Results:</h2>';

        if ($performCount) {
            $wordCount = countWords($inputSentence);
            echo "จำนวนคำในประโยค: $wordCount<br>";
        }

        if ($performSplit) {
            $words = splitWords($inputSentence);
            echo "คำในประโยค: " . implode(', ', $words) . "<br>";
        }

        if ($performCharCount) {
            $charCount = countCharacters($inputSentence);
            echo "จำนวนตัวอักษรในประโยค: $charCount<br>";
        }
    }
}
?>

<form method="post" action="">
    <label for="sentence">ใส่ประโยค:</label>
    <input type="text" id="sentence" name="sentence" value="<?php echo isset($_POST['sentence']) ? htmlspecialchars($_POST['sentence']) : ''; ?>">
    <br>

    <label>เลือก:</label>
    <input type="checkbox" name="performCount" <?php if(isset($_POST['performCount'])) echo 'checked';?>> นับคำ
    <input type="checkbox" name="performSplit" <?php if(isset($_POST['performSplit'])) echo 'checked'; ?>> แยกคำ
    <input type="checkbox" name="performCharCount" <?php if(isset($_POST['performCharCount'])) echo 'checked'; ?>> นับตัวอักษร
    <br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
