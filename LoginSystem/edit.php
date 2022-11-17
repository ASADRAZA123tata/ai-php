<?php
include 'connect.php';
$query="";
$id = $_GET['id'];
$password_err=$username_err="";
  
if($_SERVER['REQUEST_METHOD']=='POST')
{
  if(isset($_POST['done']))
  {
    
    
  $name =$_POST["username"];
 if(empty(trim($_POST["username"]))){
    $username_err = "Username cannot be blank";
}
  if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}
if(empty($username_err) && empty($password_err))
{
  $a=password_hash($password, PASSWORD_DEFAULT);
  $pimage =$_FILES['image'];
  $pimage_lo =$_FILES['image']['tmp_name'];
  $pimage_nam =$_FILES['image']['name'];
  $imag_ar="imags/".$pimage_nam;
  $email =$_POST["email"];
  $q = "UPDATE `usrs` SET `username`='$name',`password`='$a',`email`='$email',`image_src`='$imag_ar' WHERE `id`=$id";
  $res = mysqli_query($con,$q);
  header("Location:welcome.php");
  exit;
  }
 
  
 
  
}

}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <?php require 'nav.php' ?>
   

    <div class="container my-4">
     <h1 class="text-center">Profile Settings...</h1>
     <div class="col-m-6 m-auto">
  
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
         <br><br> <div class="card">
         <label> Identity</label>
          <input type="text" name="id" class="form-controls" value="<?php echo "$id";?>" disabled/><br>
          <label> Username</label>
          <input type="text" name="username" class="form-controls"/><br>
          <label> Password</label>
          <input type="password" name="password" class="form-controls"/><br>
          <label> Email</label>
          <input type="email" name="email" class="form-controls"/><br>
          <input type="file" class="form-control" name ="image" id="image">
          <button class="btn btn-success" type="submit" name="done">Submit</button><br>
        </div>
     </form>
     <?php

    
    ?>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
