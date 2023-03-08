<?php 
$output = "";
    include 'connect.php';
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($connects,$sql) or die("SQL QUERY FAILED");
    if(mysqli_num_rows($result) >0)
    {
        $output = '<table border= "1" width="100%" cellspacing = "0" cellpadding="10px">
                   <tr>
                       <th>Name</th>
                       <th>Address</th>
                       <th>Age</th>
                       <th>Picture</th>

                   </tr>';
                   while($row =mysqli_fetch_assoc($result))
                   {
                    $output .= "<tr><td>{$row["name"]}</td><td>{$row["address"]}</td> <td>{$row["age"]}</td><td>{$row["image"]}</td></tr>";
                   }
                   $output .= "</table>";
       echo "$output";
                       
   
    }
         else{
        echo "No record found or wrong query";

    }

?>