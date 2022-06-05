<?php
include('contract.php');
$id=$_GET['id'];
$contractstatus=$_GET['contractstatus'];
$query = "UPDATE contracts SET contractstatus=$contractstatus where id=$id";
mysqli_query($link, $query);
?>