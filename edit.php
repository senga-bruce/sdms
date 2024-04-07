<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit | Student 1</title>
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <div class="all">
      <fieldset>
        <form action="" method="post">
          <h1>Update Student's Info. Here!</h1>
          <?php
          require "config/connect.php";
          $edit = $_GET['editid'];
          $query = "SELECT * FROM students WHERE id='$edit'";
          $result = mysqli_query($connect,$query);
          while ($rows = mysqli_fetch_assoc($result)) {
            ?>
            <label for="">FIRST NAME</label>
            <input type="text" name="fname" value=<?php echo $rows['firstname']?> />
            <label for="">LAST NAME</label>
            <input type="text" name="lname" value=<?php echo $rows['lastname']?> />
            <label for="">PARENT NAME</label>
            <input type="text" name="pname" value=<?php echo $rows['parentname']?> />
            <label for="">SEX</label>
            <input type="text" name="sex" value=<?php echo $rows['sex']?> />
            <label for="">AGE</label>
            <input type="number" name="age" value=<?php echo $rows['age']?> />
            <label for="">TRADE</label>
            <input type="text" name="trade" value=<?php echo $rows['trade']?> />
            <label for="">LEVEL</label>
            <input type="text" name="level" value=<?php echo $rows['level']?> />
  
            <label for="">LOCATION</label>
            <input type="text" name="location" value=<?php echo $rows['location']?> />
        <?php
            # code...
          }
          ?>

          <button type="submit" name="btn">UPDATE</button>
        </form>
           <?php
        require "config/connect.php";
        if(isset($_POST['btn'])){
            $firstname = $_POST['fname'];
            $lastname = $_POST['lname'];
            $parentname = $_POST['pname'];
            $sex = $_POST['sex'];
            $age = $_POST['age'];
            $trade = $_POST['trade'];
            $level = $_POST['level'];
            $location = $_POST['location'];

            $query = "UPDATE students SET firstname='$firstname', lastname='$lastname',parentname='$parentname', sex='$sex' , age=$age , level=$level , location=$location WHERE id='$edit' ";
            $result = mysqli_query($connect,$query);

            echo header('location:display.php');
        }
        ?>
      </fieldset>
    </div>
  </body>
</html>
