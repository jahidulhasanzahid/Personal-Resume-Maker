<?php
 include("../config/connect.php");

if(isset($_POST['submit'])){
	
	$time = $_POST['time'];
	$company_name = $_POST['company_name'];
	$position = $_POST['position'];
	$message = $_POST['message'];

	
	if( $time =='' or $company_name =='' or $position==''){
		
		echo "<script>alert('any of the fields is empty')</script>";
		echo "<script>window.open('../experience-information.php','_self')</script>";
		exit();
	}
	else{
		move_uploaded_file($image_tmp,"../images/$photo");
		
		$result = mysqli_query($con,"INSERT INTO `experience` (`time`,`company_name`,`position`,`message`)
		values ('$time','$company_name','$position','$message')");
	}
	if(mysqli_query($con,$result)){

		echo "error";
	}
	else{
		
		echo "<script>alert('Post Published successfully')</script>";
		echo "<script>window.open('../experience-information-table.php','_self')</script>";
	}
}
?>