<?php
$year=date("Y");
$start=2000;
echo "ค.ศ. : <select name=year>";
do{
    echo "<option>$start</option>";
    $start++;
}while($start<=$year);
echo "</select>";
?>