<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
require 'connect.php';
$sql = "SELECT * FROM `product`";
$result =mysqli_query($conn,$sql);
 // Generate HTML of state options list 
if($result->num_rows > 0){ 
   $output= mysqli_fetch_all($result,MYSQLI_ASSOC);
   echo json_encode($output);
   
}else{ 
    echo ''; 
} 
?>