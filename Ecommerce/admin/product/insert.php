<?php
if(isset($_POST['submit']))
{
  if(empty(trim($_POST['pname'])) && empty(trim($_POST['pprice'])) && empty(trim($_POST['pbrand'])) )
  {

  }else{
    include 'nn.php';
    $pname =$_POST['pname'];
    $p_ory =$_POST['page'];
    $pprice =$_POST['pprice'];
    $pbrand =$_POST['pbrand'];
    $pimage =$_FILES['pimage'];
    $pimage_lo =$_FILES['pimage']['tmp_name'];
    $pimage_nam =$_FILES['pimage']['name'];
    $imag_ar="imags/".$pimage_nam;
    move_uploaded_file($pimage_lo,"imags/".$pimage_nam);
      $sql ="INSERT INTO `ptable`(`Pname`, `Pprice`, `category`, `Pimage`,`brand`) VALUES ('$pname','$pprice','$p_ory','$imag_ar','$pbrand')";
      mysqli_query($con,$sql);
      header("Location:index.php");
    exit;

}}


?>