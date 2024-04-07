<?php
require "config/connect.php";
$delete = $_GET['deleteid'];
$query = "DELETE FROM students WHERE id='$delete'";
$result = mysqli_query($connect,$query);
echo header('location:display.php');
?>