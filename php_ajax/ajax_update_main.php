<?php
require 'conn.php';
$st_i =$_POST["id"];
$fnam =$_POST["f_name"];
$lnam =$_POST["l_name"];
$sql = "UPDATE `forms` SET `fname`='{$fnam}',`lname`='{$lnam}' WHERE  id = $st_i";
if(mysqli_query($con, $sql)){
    echo 1;
  }else{
    echo 0;
  }

?>