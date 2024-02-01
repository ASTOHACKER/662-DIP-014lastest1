<?php
for($i=2;$i<=10;$i++){
    if($i%2==0){
        continue;
    }
for($j=1;$j<=12;$j++){
    echo "$i*$j= ",$i*$j,"<br>";
}
for($num=1;$num<=40;$num++){
    echo "*";
}
echo "<br>";

}
?>