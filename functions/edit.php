<?php

        include_once("../dbConnection/mysqlconfig_connection.php");

        if(isset($_POST['update'])) {

        $id=$_POST['id']; 
        $code=$_POST['code'];
        $name=$_POST['name'];

        
        if(empty($code) || empty($name)){                
            if(empty($code)) {
                echo "<font color='red'>Subject Code field is empty.</font><br/>";
            }

            if (empty($name)) {
                echo "<font color='red'>Subject Name field is empty.</font><br/>";
                }
        }
        else {
            mysqli_query($dbc, "UPDATE tbls SET Subject_code='$code', Subject_name='$name' WHERE Subject_id='$id'");
        }
    }
?>