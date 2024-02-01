<?php
function processAndSortScores($scores) {
    // ปัดทศนิยมไม่ให้มีเศษ
    $rounded_scores = array_map('round', $scores);

    // เรียงคะแนนจากน้อยไปมาก
    sort($rounded_scores);

    // แสดงคะแนนที่ได้หลังจากปัดและเรียง
    echo "คะแนนที่ปัดและเรียง: ";
    foreach ($rounded_scores as $score) {
        echo $score . " ";
    }
}

// คะแนนนักเรียน
$scores = array(52.63, 68.05, 54.78, 84.46, 69.89);

// Call the function
processAndSortScores($scores);
?>
