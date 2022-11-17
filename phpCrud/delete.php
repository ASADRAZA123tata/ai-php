<?php
include 'conn.php';
$id = $_GET['id'];
$delete = "DELETE FROM `forms` WHERE id =$id";
mysqli_query($con,$delete);
header("location:display.php");

?>