<?php

$num = @$_GET['num'];
if (isset($num)) {
    num($num);
} 
else {
    echo "Please Input";
}

function num($num)
{
    function start($num)
    {
        if (is_numeric($num)) {
            $c = ceil($num);
            if ($c == $num){
                echo "เลขสินค้าถูกต้อง";
            }
            else{
                echo "เลขสินค้าไม่ถูกต้อง";
            }
        } else {
            echo "คุณต้องกรอกตัวอักเลข";
        }
    }
    start($num);
}
?>
