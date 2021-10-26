<?php
include 'config/conn.php';

$id = $_GET['id'];
 $query = mysqli_query($conn,"UPDATE `companies` SET status='0' WHERE id='$id'");
  header("location:index.php"); 
?>