<?php
        include "add.php";
?>
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
    <p>Student Details</p>
    <table>
        <tr>
            <td><label>Student Number</label></td>
            <td><input type="text" placeholder="S Number" name="snum"></td>
        </tr>
        <tr>
            <td><label>Name</label></td>
            <td><input type="text" placeholder="Name" name="name"></td>
        </tr>
        <tr>
            <td><label>Age</label></td>
            <td><input type="text" placeholder="Age" name="age"></td>
        </tr>
        <tr>
            <td><label>Gender</label></td>
            <td>
                <select name="gender" id="gender">
                    <option value="-1"></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="submit" name="submit"></td>
        </tr>
    </table>
   </form> 
</body>
</html>