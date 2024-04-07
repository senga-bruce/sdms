<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Table | students</title>
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <div class="table">
      <h1>TABLE OF STUDENTS</h1>
      <table border="1" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <th colspan="12"><a href="index.php">ADD A NEW STUDENT</a></th>
        </tr>
        <tr>
          <th>ID</th>
          <th>FIRST NAME</th>
          <th>LAST NAME</th>
          <th>PARENT NAME</th>
          <th>SEX</th>
          <th>AGE</th>
          <th>TRADE</th>
          <th>LEVEL</th>
          <th>LOCATION</th>
          <th colspan="3">OPTION</th>
        </tr>
        <?php

        require "config/connect.php";

        $query = "SELECT * FROM students";
        $result = mysqli_query($connect,$query);
        $x = 1;
        while ($rows = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $x?></td>
            <td><?php echo $rows['firstname']?></td>
            <td><?php echo $rows['lastname']?></td>
            <td><?php echo $rows['parentname']?></td>
            <td><?php echo $rows['sex']?></td>
            <td><?php echo $rows['age']?></td>
            <td><?php echo $rows['trade']?></td>
            <td>Level <?php echo " ", $rows['level']?></td>
            <td><?php echo $rows['location']?></td>
            <td><a href="edit.php?editid=<?php echo $rows['id']?>">Edit</a></td>
            <td><a href="delete.php?deleteid=<?php echo $rows['id']?>">Delete</a></td>
        </tr>
        <?php
         $x++;
        }
        
        ?>
      </table>
    </div>
  </body>
</html>
