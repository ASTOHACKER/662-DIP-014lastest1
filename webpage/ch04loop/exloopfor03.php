<?php
$number=64309010075;
echo "<table style=border+spaing:0px>";
echo "<tr><th style='border:1px black solid;'>ลำดับที่</th>";
echo "<th style='border:1px black solid;'>รหัสนักศึกษา</th></tr>";
for($i=1;$i<21;$i++){
    echo "<tr>";
    echo "<td style='border:1px black solid;'>$i.</style></td>";
    echo "<td style='border:1px black solid;width:120px'>",$number+$i,"</style></td>";
    echo "</tr>";

}
echo "</table>";
?>