<?php
include 'nn.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Entries </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f4d5f9d1c4.js" crossorigin="anonymous"></script>
</head>
<body>
   
<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: ../../login.php");
}

$s = $_SESSION['username_lg'];
?>
<nav class="navbar bg-dark">
  <div class="container-fluid text-white">
    <a class="navbar-brand">Asad Store's</a>
    <span>
      <i class="fas fa-user-shield">
        Hello, <?php echo $s?>
      </i>
      <i class="fa-solid fa-right-from-bracket"></i>  
      </i>
      <a href="../../logout.php" class="text-decoration text-white">Logout |</a>
      <a href="" class="text-decoration text-white">User pannel</a>

      <a></a>
   
    </span>
  </div>
</nav>
<div class="col-m-6 m-auto boarder boarder-primary mt-3">
<div class="container mt-4">

<h3  class="col-md-6 m-auto">Enter product Details</h3>
<hr>

<form action="insert.php" method="POST" enctype="multipart/form-data">
  
<div class="form-group col-md-6 m-auto my-4">
      <label for="username">Product Name</label>
      <input type="text" class="form-control" name="pname" id="pname" placeholder="Product Name" required>
    </div>
    <div class="form-group col-md-6 m-auto my-4">
      <label>Product Price</label>
      <input type="text" class="form-control" name ="pprice" id="pprice" placeholder="Product Price" required>
    </div>
  
  <div class="form-group col-md-6 m-auto my-4">
      <label>Product Image</label>
      <input type="file" class="form-control" name ="pimage" id="pimage" required>
    </div>
    <div class="form-group col-md-6 m-auto my-4">
      <label>Brand</label>
      <input type="text" class="form-control" name ="pbrand" id="pbrand" placeholder="eg: VIVO,DEL" required>
    </div>
     <div class="form-group col-md-6 m-auto my-4">
      <label for="email">Select Some Category</label><br>
      <select class="form-select col-md-12 m-auto  my-4" name="page">
        <option selected value="Home">Home</option>
        <option value="Laptop">Laptop</option>
        <option value="Mobiles">Mobiles</option>
        <option value="Bag">Bag</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-auto my-4">   
  <button type="submit" name="submit"class="btn btn-primary form-control fs-4 fw-bold">Upload</button>
  </div>
</form>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-8 m-auto">

 <br><br>
            <h1 class="text-warning text-center">Display data</h1><br>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                  <tr class="bg-dark text-white text-center">
                    <th scope="col">Id</th>
                    <th scope="col">name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category</th>
                    <th scope="col">Actions</th>
                    

                  </tr>
                </thead>
                <?php  
                include 'nn.php';
                $h ="SELECT * FROM `ptable`";
                $query = mysqli_query($con,$h);
                while($res =mysqli_fetch_assoc($query))
                {
                 ?>
                 <tbody>
                  <tr class="text-center">
                   <td><?php echo $res['id'];?></td>
                    <td><?php echo $res['Pname'];?></td>
                    <td><?php echo $res['Pprice'];?></td>
                    <td><img src="<?php echo $res['Pimage'];?>" width="75px" height="75px"/></td>
                    <td><?php echo $res['category'];?></td>
                    <td> <button type="button" class="btn btn-primary btn-md"><a href="edit.php?id=<?php echo $res['id'];?>" class="text-white">Update</a></button> 
                <button type="button" class="btn btn-success btn-md"><a href="delete.php?id=<?php echo $res['id'];?>" class="text-white">Delete</a></button></td>
                

                  </tr>
                 
                </tbody>

                 <?php
                }

                ?>
                
              </table>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
