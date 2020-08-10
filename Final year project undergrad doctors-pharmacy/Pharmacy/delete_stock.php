<?php
session_start();
include('../connection.php');
include('session_pharmacy');
$id=$_GET['stock_id'];
$sql="delete from pharmacy_stock where stock_id='$id'";
mysqli_query($con,$sql);
//$rows=mysql_fetch_assoc($result);
header("location:inventory.php");
?>


