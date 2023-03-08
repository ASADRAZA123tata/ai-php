<?php 
// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "search_db";

// Create a connection
$con = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$con){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}


?>