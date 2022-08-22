<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  include '../conn.php';
  $id = $_GET['id'];
  $del = "DELETE FROM `product_insert_data_table` WHERE `id` = '$id'";
  $res = mysqli_query($conn, $del);
  if ($res) {
  	$conn->close();
  	header('location:insert_product_table.php');
    exit();
  }
  else{
    alert('error in deleting data');
  }
?>