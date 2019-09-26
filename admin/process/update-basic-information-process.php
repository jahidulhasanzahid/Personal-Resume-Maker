<?php
 include("../config/connect.php");

if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$photo = $_FILES['photo']['name'];
	$image_tmp = $_FILES['photo']['tmp_name'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$objective = $_POST['objective'];
	$soft_knowledge = $_POST['soft_knowledge'];
	$language = $_POST['language'];
	$work = $_POST['work'];
	
	if($photo=='' or $address =='' or $email =='' or $phone==''){
		
		echo "<script>alert('any of the fields is empty')</script>";
		echo "<script>window.open('../basic-form-update.php','_self')</script>";
		exit();
	}
	else{
		move_uploaded_file($image_tmp,"../images/$photo");
		
		$result = mysqli_query($con,"UPDATE `basic_information` SET photo='$photo',address='$address',email='$email',phone='$phone',objective='$objective',soft_knowledge='$soft_knowledge',language='$language',work='$work' WHERE id = '$id' ");
	}
	if(mysqli_query($con,$result)){

		echo "error";
	}
	else{
		
		echo "<script>alert('Post Update successfully')</script>";
		echo "<script>window.open('../home.php','_self')</script>";
	}
}
?>