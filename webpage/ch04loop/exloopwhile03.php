<?php
$start=1; $end=31;
echo "วันที่ : <select name=day>";
while($start<=$end){
    echo "<option>$start</option>";
    $start++;
}
    echo "</select>";
?>