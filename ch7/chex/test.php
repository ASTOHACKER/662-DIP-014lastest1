<?php
// Open DIR
$path = "C:/test_dir";
$dir = opendir($path);
while ($file = readdir($dir)){
    echo "$file <br>";
}
closedir($dir);
///////////////////////////////
$namedir = "htc"; // name direc
@mkdir($path."/".$namedir);
$a = ($path."/".$namedir);
@mkdir($a."/"."xxx");
$dir = opendir($path);
while ($file = readdir($dir)){
    echo "$file <br>";
}


$dir = opendir("C:/test_dir/htc");
while ($file = readdir($dir)){
    echo "$file <br>";
}
closedir($dir);