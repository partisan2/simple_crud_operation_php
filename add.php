<?php

    include "connect.php";

    if(isset($_POST['submit'])){
        $query = "INSERT INTO student_info(snum,`name`,age,gender) VALUES 
        (
            '$_POST[snum]',
            '$_POST[name]',
            '$_POST[age]',
            '$_POST[gender]'
        )";

        if(mysqli_query($con,$query)){
            echo "<script>alert('record added')</script>";
        }else{
            echo '<script>alert("error")</script>';
        }
    }

?>