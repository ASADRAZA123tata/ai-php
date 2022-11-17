<?php
include 'conn.php';
$query="";
$id = $_GET['id'];
  
if($_SERVER['REQUEST_METHOD']=='POST')
{
  if(isset($_POST['done']))
  {
    
    
  $name =$_POST["username"];
  $password=$_POST["password"];
  $q = "UPDATE `forms` SET `name`='$name',`password`='$password' WHERE `id`=$id";
  $res = mysqli_query($con,$q);
  header("Location:display.php");
  exit;
  }}
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
     <h1 class="text-center">Login to our website</h1>
     <div class="col-m-6 m-auto">
  
      <form method="post">
        <div class="form-group">
         <br><br> <div class="card">
          <label> Username</label>
          <input type="text" name="username" class="form-controls" value="<?php echo "$id";?>"/><br>
          <label> Password</label>
          <input type="password" name="password" class="form-controls"/><br>
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
