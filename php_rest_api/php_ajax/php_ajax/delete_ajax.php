<?php
require 'conn.php';
$st_i =$_POST["idsd"];
$sql = "DELETE FROM `forms` WHERE id = $st_i";
if(mysqli_query($con, $sql)){
    echo 1;
  }else{
    echo 0;
  }

?>