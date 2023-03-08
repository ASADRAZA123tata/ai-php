<?php
require 'conn.php';
$first_name = $_POST["f"];
$last_name = $_POST["l"];

$sql = "INSERT INTO `forms`(`fname`, `lname`) VALUES ('{$first_name}','{$last_name}')";
if(mysqli_query($con,$sql)){
    echo 1;
}
else{
    echo 0;

}
?>