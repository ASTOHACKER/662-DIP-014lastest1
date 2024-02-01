<?php
// exloop_array09.php
$name = array("66309010014" => "นฤดม","66309010012" => "ธรรมปพล","66309010011" => "ธนพล","66309010004" => "ธีรพงค์","66309010017"=>"ปรมินทร์");
echo"<table style='';
       <tr style=''>
            <th style='border:1px black solid;background-color:#00bfff;'> ลำดับที่ </th>
            <th style='border:1px black solid;background-color:#00bfff;'> ชื่อ </th>
       </tr>";
$i = 1;
foreach($name as $key => $value){
    if ($i %2 == 1){
     echo "<tr style='background-color:green;'>
             <td style='border:1px black solid;background-color:orange;'> $key </td>
             <td style='border:1px black solid;background-color:orange;'> $value </td>
         </tr>";
    $i+=1;
    }
    else{
     echo "<tr style='border:1px black solid'>
     <td style='border:1px black solid;background-color:yellow;'> $key </td>
     <td style='border:1px black solid;background-color:yellow;'> $value </td>
         </tr>";
    $i+=1;
    }
}
?>