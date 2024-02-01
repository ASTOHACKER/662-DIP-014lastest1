<?php
$base = @$_GET['base'];
$high = @$_GET['high'];
function find($high,$base){
    return 0.5 * $high * $base;
}
echo "พื้นที่สามเหลี่ยมคือ",find($base,$high),"cm";
?>