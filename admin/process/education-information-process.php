<?php
 include("../config/connect.php");

if(isset($_POST['submit'])){
	
	$time = $_POST['time'];
	$inst_name = $_POST['inst_name'];
	$degree = $_POST['degree'];

	
	if( $time =='' or $inst_name =='' or $degree==''){
		
		echo "<script>alert('any of the fields is empty')</script>";
		echo "<script>window.open('../experience-information.php','_self')</script>";
		exit();
	}
	else{
		move_uploaded_file($image_tmp,"../images/$photo");
		
		$result = mysqli_query($con,"INSERT INTO `education` (`time`,`inst_name`,`degree`)
		values ('$time','$inst_name','$degree')");
	}
	if(mysqli_query($con,$result)){

		echo "error";
	}
	else{
		
		echo "<script>alert('Post Published successfully')</script>";
		echo "<script>window.open('../education-information-table.php','_self')</script>";
	}
}
?>