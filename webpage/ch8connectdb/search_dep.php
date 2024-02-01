<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            border: 2px solid #ddd;
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #ff6666;
            color: white;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }

        a:hover {
            color: #e74c3c;
        }
    </style>
</head>
<body>
    
    <table>
        <tr>
            <th>รหัสสาขา</th>
            <th>ชื่อสาขา</th>
            <th>Edit</th>
            <th>Remove</th>
        </tr>

        <?php
        require "config.php";

        $select = "SELECT * FROM depart";
        $data = mysqli_query($statuscon, $select);
        while ($fetdata = mysqli_fetch_assoc($data)) {
        ?>
        <tr>
            <td><?php echo $fetdata['DepartID']; ?></td>
            <td><?php echo $fetdata['DepartName']; ?></td>
            <td><a href="editdep.php?depid=<?php echo $fetdata['DepartID']; ?>">Edit</a></td>
            <td><a href="removedep.php?depid=<?php echo $fetdata['DepartID']; ?>">Remove</a></td>
        </tr>
        <?php
        }
        ?>

    </table>
</body>
</html>
