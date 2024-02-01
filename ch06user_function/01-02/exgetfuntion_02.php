<?php
$name = @$_GET['name'];
// function Name($name){
//     echo  "**** <br> สวัสดีคุณ $name <br> ****";
// }
// Name($name);
function showName($name){
    star();
    echo  "<br> สวัสดีคุณ $name <br>";
    star();
}
function star(){
    for($i = 1;$i<=20;$i+=1){
        echo "*";
    }
}
showName($name);


?>