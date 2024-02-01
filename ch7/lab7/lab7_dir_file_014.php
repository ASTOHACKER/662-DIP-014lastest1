<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Directory Listing</title>

</head>
<body>
    <table>
        <tr style="border-bottom: 1px solid #ddd;">
            <td>Show and set </td>
            <td>
                <a href="getlab07.php?id=014">Link to Form</a>
            </td>
        </tr>

        <tr style="border-bottom: 1px solid #ddd;">
            <td>New Directory </td>
            <td>
                <form action= "getlab07.php" method="get">
                    <input type="text" name="createname"> 
                    <input type="submit" value="send">
                </form>
            </td>
        </tr>

        <tr style="border-bottom: 1px solid #ddd;">
            <td>Show and All</td>
            <td>
                <a href="getlab07.php?Check=True">Show Directory</a>
            </td>
        </tr>
        

        <tr style="border-bottom: 1px solid #ddd;">
            <td>Delete Directory </td>
            <td>
                <a href="getlab07.php?DelCheck=True">Delete lastest dir</a>
            </td>
            </td>
        </tr>
        

        <tr style="border-bottom: 1px solid #ddd;">
            <td>Delete Directory </td>
            <td>
                <a href="getlab07.php?btn_show_delete=True">คลิกที่นี เพื่ออ่านไฟล์หรือไดเรคใหม่ที่พึ่งลบ</a>
            </td>
            </td>
        </tr>


        <tr style="border-bottom: 1px solid #ddd;">
            <td>อ่านค่าไฟล์ในไดเรคเทอรี่  C:/dir_014</td>
            <td>
            <form action= "getlab07.php" method="get">
                    <input type="text" name="Readname"> 
                    <input type="submit" value="send">
                    <input type="reset">
                </form>
            </td>
            </td>
        </tr>

        <tr style="border-bottom: 1px solid #ddd;">
            <td>เขียนข้อมูลต่อท้าย</td>
            <td>
            <form action= "getlab07.php" method="get">
                    <input type="text" name="Readnames" placeholder="ชื่อไฟล์ที่ต้องเขียนข้อมูล"> 
                    <input type="text" name="Readnames1" placeholder="ข้อความที่ต้องการเขียน"> <br>
                    <input type="submit" value="send">
                    <input type="reset">
                </form>
            </td>
            </td>
        </tr>

        <tr style="border-bottom: 1px solid #ddd;">
            <td>อ่านค่าไฟล์หลังจากแก้ </td>
            <td>
            <form action= "getlab07.php" method="get">
                    <input type="text" name="Readname1" > 
                    <input type="submit" value="send">
                    <input type="reset">
                </form>
            </td>
            </td>
        </tr>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
