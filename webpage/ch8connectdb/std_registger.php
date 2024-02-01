        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <style>
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
            </style>
        </head>
        <body>
            <form action="std_save.php" method="post" enctype="multipart/form-data">
            <table align="center">
                <tr>
                    <th colspan=2>สมัครเรียน</th>
                </tr>
                <tr>
                    <td>ชื่อผู้สมัคร</td>
                    <td><input type="text" name="std_fname" required></td>
                </tr>
                <tr>
                    <td>นามสกุลผู้สมัคร</td>
                    <td><input type="text" name="std_sname" required></td>
                </tr>
                <tr>
                    <td>เบอร์โทร</td>
                    <td><input type="text" name="std_tel" required></td>
                </tr>
                <tr>
                    <td>เลขบัตรประชาชน</td>
                    <td><input type="text" name="std_idcard" maxlength="13" required></td>
                </tr>
                <tr>
                    <td>เกรดเฉลี่ยสะสม</td>
                    <td><input type="text" name="std_gpa" maxlength="4" required></td>
                </tr>
                <tr>
                    <td>รูปถ่ายหน้าตรง</td>
                    <td><input type="file" name="std_img" ></td>

                </tr>
                <tr>
                    <td>สาขาวิชา</td>
                    <<td>
    <select name="dep_id">
        <?php 
        require "config.php";
        $select = "SELECT * FROM depart";
        $data = mysqli_query($statuscon, $select);
        while ($fetchdata = mysqli_fetch_assoc($data)) { ?>
                <option value="
                <?php echo $fetchdata['DepartID']; ?>">
                <?php echo "รหัสสาขา: " . $fetchdata['DepartID'] . " สาขา " . $fetchdata['DepartName']; ?>
                </option>
            <?php } ?>
    </select>
</td>

                </tr>
                <tr>
                    <td colspan=2><input type="submit" value="บันทึก" onclick="alert('บันทุกข้อมูลสำเร็จ')"></td>
                </tr>
            </table>
            </form>
            <br><br>
        
        </body>
        </html>