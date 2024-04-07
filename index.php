<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login | page 1</title>
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <div class="all">
      <fieldset>
        <form action="" method="post">
          <h1>Register a Student Here!</h1>
          <label for="">FIRST NAME</label>
          <input type="text" name="fname" />
          <label for="">LAST NAME</label>
          <input type="text" name="lname" />
          <label for="">PARENT NAME</label>
          <input type="text" name="pname" />
          <label for="">SEX</label>
          <input type="text" name="sex" />
          <label for="">AGE</label>
          <input type="number" name="age" />
          <label for="">TRADE</label>
          <input type="text" name="trade" />
          <label for="">LEVEL</label>
          <input type="text" name="level" />

          <label for="">LOCATION</label>
          <input type="text" name="location" />

          <button type="submit" name="btn">SAVE</button>
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

            $query = "INSERT INTO students VALUES ('','$firstname','$lastname','$parentname','$sex','$age','$trade','$level','$location')";
            $result = mysqli_query($connect,$query);

            echo "<script>alert('",$firstname," ",$lastname," ADDED SUCCESSFULLY !')</script>";
        }
        ?>
      </fieldset>
    </div>
  </body>
</html>
