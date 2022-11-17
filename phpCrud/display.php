<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Display</title>
</head>
<body>
  <?php require 'nav.php'?>

    <div class="container">
        <div class="col-lg-12">
        <br><br>
            <h1 class="text-warning text-center">Display data</h1><br>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                  <tr class="bg-dark text-white text-center">
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">password</th>
                    <th scope="col">date of joining</th>
                    <th scope="col">Actions</th>
                    

                  </tr>
                </thead>
                <?php  include 'conn.php';
                $h ="SELECT * FROM `forms`";
                $query = mysqli_query($con,$h);
                while($res =mysqli_fetch_assoc($query))
                {
                 ?>
                 <tbody>
                  <tr class="text-center">
                   <td><?php echo $res['id'];?></td>
                    <td><?php echo $res['name'];?></td>
                    <td><?php echo $res['password'];?></td>
                    <td><?php echo $res['date'];?></td>
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
  
</body>
</html>