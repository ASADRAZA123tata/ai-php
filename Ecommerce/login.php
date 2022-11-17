<?php
include "admin/product/nn.php";

session_start();

// check if the user is already logged in
if(isset($_SESSION['username_lg'])) 
{
    if(isset($_SESSION['admin']))
     {
    header("location: admin/panel.php");
    exit;}
}

$username = $password =$email= "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username_lg'])) || empty(trim($_POST['password_lg'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username_lg']);
        $password = trim($_POST['password_lg']);
    }


if(empty($err))
{
    $sql = "SELECT `id`, `names`, `password`, `roll`, `email` FROM `boss` WHERE names = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password,$roll,$email);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username_lg"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["admin"] = $admin;
                          
                            $_SESSION["email"]= $email;
                            
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: admin/panel.php");
                            
                        }
                    }

                }

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP login system!</title>
  </head>
  <body>



<div class="container mt-4">
<h3>Please Login Here:</h3>
<hr>
<form action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="username">Username</label>
      <input type="text" class="form-control" name="username_lg" id="username" placeholder="username">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name ="password_lg" id="inputPassword4" placeholder="Password">
    </div>
    <div class="form-group col-md-6">
      
      <input type="hidden" class="form-control" name ="admin" id="admin" value="admin">
    </div>
  </div>
 
    <!-- <div class="form-group">
      <label for="email">email</label>
      <input type="email" class="form-control" name ="email" id="email" placeholder="email">
    </div> -->

  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
