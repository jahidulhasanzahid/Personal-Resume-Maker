 <!-- this will be added to every page  -->
<?php 

session_start();
$student_id = $_SESSION['email'];
// $em_id = $_SESSION['id'];


if(!isset($_SESSION['email'])){
  header("location: ../index.php");

}

?>