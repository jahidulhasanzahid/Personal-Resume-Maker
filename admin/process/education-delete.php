<?php

	include("../config/connect.php");

	if(isset($_GET['del'])){

		$delete_id = $_GET['del'];

		$delete_query = "DELETE FROM `education` WHERE id='$delete_id' "; 
		if(mysqli_query($con,$delete_query)){
			echo "<script>alert ('Post Has Been Delete!')</script>";
			echo "<script>window.open ('../education-information-table.php','_self')</script>";
		}
	}


?>