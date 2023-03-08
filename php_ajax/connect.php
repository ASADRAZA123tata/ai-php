<?php 
// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "php_ajax2.0";

// Create a connection
$connects = mysqli_connect($servername, $username, $password, $database);
//echo $database;
// Die if connection was not successful
if (!$connects){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
// else{
//     echo "Success";
// }


?>