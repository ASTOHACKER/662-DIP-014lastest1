<?php
$start=1;
echo "วันที่ : <select name=day>";
while($start<=31){
    echo "<option>$start</option>";
    $start++;
    if($start==32){
        break;
    }
}
    echo "</select>";
?>