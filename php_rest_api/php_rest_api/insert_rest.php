<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

$data = json_decode(file_get_contents("php://input"),true);
$name = $data['name']; 
$description = $data['description']; 
$price = $data['price']; 
require 'connect.php';
$sql = "INSERT INTO `testing` (`name`, `description`, `price`) VALUES ('$name','$description','$price')";
$result =mysqli_query($conn,$sql);
 
if($result){ 
   echo json_encode(array('message'=>'Student Record Inserted','Status'=>true));
   
}else{ 
    echo json_encode(array('message'=>$sql,'Status'=>false));
} 
?>