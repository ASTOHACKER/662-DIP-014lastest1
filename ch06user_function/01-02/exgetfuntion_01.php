<?php
$name = @$_GET['name'];
// function Name($name){
//     for($i = 1;$i<=15;$i+=1){
//         echo "*";
//     }
//     echo  "**** <br> สวัสดีคุณ $name <br> ****";
// }
// Name($name);
function showName($name){
    for($i = 1;$i<=15;$i+=1){
        echo "*";
    }
    echo  "<br> สวัสดีคุณ $name <br>";
    for($i = 1;$i<=15;$i+=1){
        echo "*";
    }
}
showName($name);


?>
<?php
$name = @$_GET['name'];


?>