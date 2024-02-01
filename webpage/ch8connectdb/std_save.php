<?php
    $std_fname=$_POST['std_fname'];
    $std_sname=$_POST['std_sname'];
    $std_tel=$_POST['std_tel'];
    $std_idcard=$_POST['std_idcard'];
    $std_gpa=$_POST['std_gpa'];
    $dep_id=$_POST['dep_id'];
    // print_r($_FILES['std_img']);
    if(!empty($_FILES['std_img'])){
        $file=$_FILES['std_img']['name'];
        $path="../../img/std_img/$file";
        move_uploaded_file($_FILES['std_img']['tmp_name'],$path);
    }
    require "config.php";        

    $insert="INSERT INTO student(std_fname, std_sname, std_tel, std_idcard, std_gpa, std_img, dep_id)
    VALUES('$std_fname', '$std_sname', '$std_tel', '$std_idcard', '$std_gpa', '$file', '$dep_id')";
    if(mysqli_query($statuscon,$insert)){
        header("refresh:3;url:std_register");
    }   
?>