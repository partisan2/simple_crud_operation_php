<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>
   <form method="POST">
    <p>Delete Student Details</p>
    <table>
        <tr>
            <td><label>Student Number</label></td>
            <td><input type="text" placeholder="S Number" name="snum"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Delete" name="delete"></td>
        </tr>
    </table>
   </form> 
   <?php 

        include "connect.php";

        if(isset($_POST['delete'])){

            $query = "DELETE FROM `student_info` WHERE snum = '$_POST[snum]';";

            if(mysqli_query($con,$query)){
                echo "<script>alert('record Deleted')</script>";
            }else{
                echo '<script>alert("error")</script>';
            }
        }


   ?>
</body>
</html>