<?php

    include_once("dbConnection/mysqlconfig_connection.php");
    include_once("functions/fetch.php");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sample CRUD</title>
</head>
<body>
    <h1>My Subjects</h1>
    <a href="forms/addform.php">Add Subject</a><br/><br/>
    <table style="width: 100%; border: 1px solid black;">
        <tr>
            <td>ID</td>
            <td>Subject Code</td>
            <td>Subject Name</td>
            <td>Action</td>
        </tr>

        <?php
        
            while($res = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$res['Subject_id']."</td>";
                echo "<td>".$res['Subject_code']."</td>";
                echo "<td>".$res['Subject_name']."</td>";
                echo "<td><a href=\"forms/editfrom.php?id=$res[Subject_id]\">Edit</a>" |
                    <a href=\"functions/delete.php?id=$res[Subject_id]\"
                    onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
            }
        ?>
    </table>
</body>
</html>