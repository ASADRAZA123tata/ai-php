<?php
require 'conn.php';
$st = $_POST["idsd"];
$sql = "SELECT * FROM `forms` WHERE id  ={$st}";
$result = mysqli_query($con, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
     while($row = mysqli_fetch_assoc($result)){
         $output .= "
         <tr>
         <td> First Name</td>
         <td><input type='text' id='edit_fname' value='{$row["fname"]}' />
         <input type='hidden' id='edit_id' value='{$row["id"]}' /></td>
     </tr>
     <tr>
         <td> Last Name</td>
         <td><input type='text' id='edit_lname' value='{$row["lname"]}' /></td>
     </tr>
     <tr>

         <td></td>
         <td><input type='submit' id='edit_submit' value='save' /></td>
     </tr>
     ";
     }
 

    mysqli_close($con);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}
?>