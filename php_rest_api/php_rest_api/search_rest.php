<?php
header('Content-Type: application/json');
header('Acess-Control-Allow-Origin: *');

$data = json_decode(file_get_contents("php://input"),true);
$search_value = $data['search']; 
require 'connect.php';
$sql = "SELECT * FROM `product` WHERE name LIKE  '%{$search_value}%'";
$result =mysqli_query($conn,$sql);
 // Generate HTML of state options list 
if($result->num_rows > 0){ 
   $output= mysqli_fetch_all($result,MYSQLI_ASSOC);
   echo json_encode($output);
   
}else{ 
    echo json_encode(array('message'=>$sql,'Status'=>false)); 
} 
?>