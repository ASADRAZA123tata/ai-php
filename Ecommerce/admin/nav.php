
<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location:../login.php");
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
      <a href="../logout.php" class="text-decoration text-white">Logout |</a>
      <a href="" class="text-decoration text-white">User pannel</a>

      <a></a>
   
    </span>
  </div>
</nav>