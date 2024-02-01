<?php
function Dayinmonth($num){
    $month = array(1=>30, 2=>28, 3=>31, 4=>30, 5=>31, 7=>31, 8=>3, 9=>30, 10=>31, 11=>30, 12=>31);
    foreach ($month as $key => $value){
        if ($num == $key){
            return $month[$key];
        }
    }
}
echo Dayinmonth(10);
echo "<br>";
echo Dayinmonth(2);
?>