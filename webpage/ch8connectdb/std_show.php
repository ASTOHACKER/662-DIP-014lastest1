<?php
    // Database connection
    require "config.php";

    // Display all inserted data
    $select = "SELECT * FROM student";
    $result = mysqli_query($statuscon, $select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserted Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Inserted Data</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>ID Card</th>
            <th>GPA</th>
            <th>Image</th>
            <th>Department ID</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['std_id']}</td>
                    <td>{$row['std_fname']} </td>
                    <td>{$row['std_sname']}</td>
                    <td>{$row['std_tel']}</td>
                    <td>{$row['std_idcard']}</td>
                    <td>{$row['std_gpa']}</td>
                    <td>{$row['dep_img']}</td>
                    <td>{$row['dep_id']}</td>
                </tr>";
        }
        ?>

    </table>
</body>
</html>
