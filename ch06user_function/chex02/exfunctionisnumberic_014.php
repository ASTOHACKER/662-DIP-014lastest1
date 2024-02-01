<?php
echo is_numeric(99.9);
echo is_numeric("99a"),"<br>";

$a = "99";$b = 100; $c = 10.36; $d = 10.36; $e = "r10";
if (is_numeric(44)){
    echo "Variable a is numberic";
}
else{
    echo "Variable isnt numeric";
}

if (is_numeric($a)){
    echo "Variable a is numberic";
}
else{
    echo "Variable isnt numeric";
}
echo "<br>";


if (is_numeric($b)){
    echo "Variable a is numberic";
}
else{
    echo "Variable isnt numeric";
}
echo "<br>";


if (is_numeric($c)){
    echo "Variable a is numberic";
}
else{
    echo "Variable isnt numeric";
}
echo "<br>";

if (is_numeric($d)){
    echo "Variable a is numberic";
}
else{
    echo "Variable isnt numeric";
}
echo "<br>";


if (is_numeric($e)){
    echo "Variable a is numberic";
}
else{
    echo "Variable isnt numeric";
}
echo "<br>";

?>