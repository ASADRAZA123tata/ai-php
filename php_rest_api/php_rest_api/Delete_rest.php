<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETED');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

$data = json_decode(file_get_contents("php://input"),true);
$id = $data['id']; 

require 'connect.php';
$sql = "DELETE FROM `testing` WHERE id = {$id}";
$result =mysqli_query($conn,$sql);
 
if($result){ 
   echo json_encode(array('message'=>'Student Record Deleted','Status'=>true));
   
}else{ 
    echo json_encode(array('message'=>$sql,'Status'=>false));
} 
?>