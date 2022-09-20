<?php

    include "connect.php";


    if(isset($_POST['search'])){

        $query = "SELECT * FROM `student_info` WHERE snum = '$_POST[search_text]';";

        $result = mysqli_query($con,$query);

        if(!$result){
            echo "Failed";
        }else{
            echo "<table>";
            echo "<tr><th>S number</th><th>Name</th><th>Age</th><th>Gender</th></tr>";
            while($record = mysqli_fetch_array($result)){
                echo '<tr>';
                    echo '<td>'.$record['snum'].'</td>';
                    echo '<td>'.$record['name'].'</td>';
                    echo '<td>'.$record['age'].'</td>';
                    echo '<td>'.$record['gender'].'</td>';
                echo '</tr>';
        }
        }
    }

    if(isset($_POST['show_records'])){

        $query = "SELECT * FROM `student_info`;";

        $result = mysqli_query($con,$query);

        if(!$result){
            echo "Failed";
        }else{
            echo "<table>";
            echo "<tr><th>S number</th><th>Name</th><th>Age</th><th>Gender</th></tr>";
            while($record = mysqli_fetch_array($result)){
                echo '<tr>';
                    echo '<td>'.$record['snum'].'</td>';
                    echo '<td>'.$record['name'].'</td>';
                    echo '<td>'.$record['age'].'</td>';
                    echo '<td>'.$record['gender'].'</td>';
                echo '</tr>';
            }
        }
    }
?>