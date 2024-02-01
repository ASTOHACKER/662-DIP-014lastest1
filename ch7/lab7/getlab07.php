 <?php
 session_start();
 if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $path = "C:/dir_$id";
    $dir = opendir($path);
    echo "Name Dir = $path";
}
if (isset($_GET['createname'])) {
    $id = @$_GET['id'];
    $createname = @$_GET['createname'];
    $_SESSION['createname'] = $createname;
    $path = "C:/dir_014";
    @mkdir($path . "/" . $createname);
}

$Check = @$_GET['Check'];
if(isset($Check)){
    $path = "C:/dir_014";
    $dir = opendir($path);
    while ($file = readdir($dir)){
    echo "$file <br>";}
}

if (isset($_SESSION['createname']) and isset($_GET['DelCheck'])) {
    $path = "C:/dir_014";
    $_SESSION['deletename']=$_SESSION['createname'];
    @rmdir($path."/".$_SESSION['createname']);
}
if (isset($_SESSION['deletename']) && isset($_GET['btn_show_delete'])){
    $path = "C:/dir_014/";
    echo  $path.$_SESSION['deletename'];
}

if (isset($_GET['Readname'])) {
    $Readname = $_GET['Readname'];
    $rfile = fopen("C:/dir_014/$Readname","r");
    @fpassthru($rfile);
    @fclose($rfile);
}

if (isset($_GET['Readnames']) && isset($_GET['Readnames1'])){
    $readnames = $_GET['Readnames'];
    $readnames1 = $_GET['Readnames1'];

    $wfile = fopen("C:/dir_014/$readnames","w");

    @fputs($wfile,$readnames1);
    @fclose($wfile);
}
if (isset($_GET['Readname1'])) {
    $Readname = $_GET['Readname'];
    $rfile = fopen("C:/dir_014/$Readname","r");
    @fpassthru($rfile);
    @fclose($rfile);
}
?>