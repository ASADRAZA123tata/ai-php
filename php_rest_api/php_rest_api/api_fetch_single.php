<?php
header('Content-Type: application/json');
header('Acess-Control-Allow-Origin: *');

$data = json_decode(file_get_contents("php://input"),true);
$st_id = $data['sid']; 
require 'connect.php';
$sql = "SELECT * FROM `product` WHERE id ='$st_id'";
$result =mysqli_query($conn,$sql);
 // Generate HTML of state options list 
if($result->num_rows > 0){ 
   $output= mysqli_fetch_all($result,MYSQLI_ASSOC);
   echo json_encode($output);
   
}else{ 
    echo ''; 
} 
?>