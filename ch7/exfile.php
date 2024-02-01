<?php
// Open File 1.txt
$wfile = fopen("C:/test_dir/1.txt","w");
@fputs($wfile,"Narudom");
@fclose($wfile);

$wfile = fopen("C:/test_dir/1.txt","a");
@fputs($wfile," okars");
@fclose($wfile);

$rfile = fopen("C:/test_dir/1.txt","r");
@fpassthru($rfile);
@fclose($rfile);

unlink("C:/test_dir/1.txt");

while ($file = readdir($dir)){
    echo $file;
}
?>