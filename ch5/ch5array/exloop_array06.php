<?php
// Exloop_array06.php
$product = array("T001" => "หนังสือมีเสียง","T002" => "โต๊ะกิจกรรมเด็ก","T003" => "กระปุกออมสิน","T004" => "กระดานสำหรับเด็ก","T005" => "ตุ๊กตากบสอน ABC");
echo"<table style='border:1px black solid';
       <tr>
            <th style='border:1px black solid'> ลำดับที่ </th>
            <th style='border:1px black solid'> ชื่อสินค้า </th>
       </tr>";
$i = 0;
foreach ($product as $key => $value){
    echo "<tr style='border:1px black solid'>
             <td style='border:1px black solid'> $i </td>
             <td style='border:1px black solid'> $value </td>
         </tr>";
    $i+=1;
}
echo "</table>";
