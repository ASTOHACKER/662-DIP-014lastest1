<?php
// Open DIR
$path = "C:/test_dir";
$dir = opendir($path);
while ($file = readdir($dir)){
    echo "$file <br>";
    echo @round((filesize($file) / 1024), 0), "KB<br>";
}
closedir($dir);
///////////////////////////////
$namedir = "narudom"; // name direc
@mkdir($path."/".$namedir);
$dir = opendir($path);
while ($file = readdir($dir)){
    echo "$file <br>";
    echo @round((filesize($file) / 1024), 0), "KB<br>";
}
closedir($dir);
////////////////////////////////////

$dir = opendir($path);
@rmdir ($path."/".nmae)

?>