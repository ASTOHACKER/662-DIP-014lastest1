<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            width: 50%;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 2px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #66CCFF;
        }

        input[type="text"], input[type="file"], select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<form action="save_dep.php" method="get">
        <table align="center">
            <tr>
                <th colspan="2">เพิ่มข้อมูลสาขาวิชา</th>
            </tr>
            <tr>
                <td>ระบุสาขา</td>
                <td colspan="2">
                     <input type="text" name="DepartName" id="" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="บันทึก" onclick="alert{'Success'}">
                </td>
            </tr>
        </table>
    </form>
</table>
<table>
    <tr style="border: 2px solid black; width: 180px;">
        <th>รหัสสาขา</th>
        <th>ชื่อสาขา</th>
    </tr>
    <!-- Add more rows as needed -->

<?php
require "config.php";

$select = "SELECT * FROM Depart"; // Corrected table name from "Depart" to "depart"
$data = mysqli_query($statuscon, $select);
// print_r($data);
echo "<br>";

    while ($fetdata = mysqli_fetch_assoc($data)){
        // echo "ID: " . $fetdata['DepartID'] . ", DepartName: " . $fetdata['DepartName'] . "<br>";
?>
<tr>
    <td><?php echo $fetdata['DepartID'];?></td>
    <td><?php echo $fetdata['DepartName'];}?></td>

</tr>
</table>
</body>
</html>