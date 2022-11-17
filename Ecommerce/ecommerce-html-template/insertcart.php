<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(isset($_POST['cart']))
{
   if(isset($_SESSION['cart']))
   {
    $myitems=array_column($_SESSION['cart'],'Pname');
     if(in_array($_POST['Pname'],$myitems))
     {
      echo "
      <script>
      alert('Already in cart');
      window.location.href='index.php';
      </script>
      ";
      
     }
     else{
     $count =count($_SESSION['cart']);
     $_SESSION['cart'][$count]=array('Pname'=>$_POST['Pname'],'Pimage'=>$_POST['Pimage'],'Pprice'=>$_POST['Pprice'],'Pquantity'=>$_POST['Pquantity']);
     print_r(  $_SESSION['cart']);
     echo "
      <script>
      alert('Added Successfully');
      window.location.href='index.php';
      </script>
      ";
     }
    

   }
   else{
    $_SESSION['cart'][0]=array('Pname'=>$_POST['Pname'],'Pimage'=>$_POST['Pimage'],'Pprice'=>$_POST['Pprice'],'Pquantity'=>$_POST['Pquantity']);
    print_r(  $_SESSION['cart']);
    echo "
      <script>
      alert('Added Successfully');
      window.location.href='index.php';
      </script>
      ";
   }
}
if(isset($_POST['remove']))
{
   foreach($_SESSION['cart'] as $ky=>$val)
   {
      
      unset($_SESSION['cart'][$ky]);
      $_SESSION['cart']= array_values($_SESSION['cart']);
      echo "
      <script>
      alert('Item Removed');
      window.location.href='cart.php';
      </script>
      ";

      
   }
}
}
?>
