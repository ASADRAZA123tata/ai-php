<?php
$name = $_POST["Name"];
$age = $_POST["age"];
$address = $_POST["address"];
$image = $_FILES["image"]["name"];
// $tempPath = $image['tmp_name'];
//     $imageSize = $image['size'];
//     $imageType = $image['type'];
//  include 'connect.php';
//  $img_ex = pathinfo($imageName,PATHINFO_EXTENSTION);
// //  $sql = "INSERT INTO `users`(`name`, `age`, `address`, `image`) VALUES ('{$name}','{$age}','{$address}','{$image}')";
// //  //$result = mysqli_query($connects,$sql) or die("SQL QUERY FAILED");
// //  if(mysqli_query($connects,$sql))
// //  {
// //     echo 1;
// //  }
// //  else{
// //     echo 0;
// //  }
// $valid_extension = array("jpg","jpeg","png","gif");
// if(in_array($img_ex,$valid_extension)){
//     $new_name =rand(). ".".$img_ex;
//     $path = "image/" . $new_name;
//     if(move_uploaded_file($_FILES["image"]["tmp_name"],$path)){
//       echo "1";
//     }
//     else{
//         echo "0";
//     }

// }
// else{
//     echo "000";
// }
print_r($name,$age,$image)
?>