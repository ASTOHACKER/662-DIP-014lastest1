<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Department</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        form {
            margin: 50px auto;
            padding: 20px;
            width: 300px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
        }

        th {
            background-color: #3498db;
            color: white;
            padding: 15px;
        }

        td {
            padding: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <?php
        require "config.php";

        $depid = @$_GET['depid'];

        $select = "SELECT * FROM Depart WHERE DepartID = $depid";
        $data = mysqli_query($statuscon, $select);

        // Fetch data only once outside of the loop
        $fetdata = mysqli_fetch_assoc($data);
        ?>
        <table>
            <tr>
                <th>แก้ไขสาขาวิชา</th>
            </tr>
            <tr>
                <td>
                    <input type="text" name="depname" value="<?php echo $fetdata['DepartName']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="แก้ไข">
                </td>
            </tr>
        </table>
    </form>
    
    <?php
    $depname = @$_POST['depname'];
    $update = "UPDATE Depart SET DepartName = '$depname' WHERE DepartID = $depid";
    if (!empty($depname)){
        if (mysqli_query($statuscon, $update)){
            echo '<script>alert("แก้ไขเสร็จแล้ว"); window.location.href = "search_dep.php";</script>';
        } else {
            echo '<script>alert("เกิดข้อผิดพลาดในการแก้ไข");</script>';
        }
    }
    ?>
</body>
</html>
