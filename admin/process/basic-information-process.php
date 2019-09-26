<?php
 include("../config/connect.php");

if(isset($_POST['submit'])){
	
	$photo = $_FILES['photo']['name'];
	$image_tmp = $_FILES['photo']['tmp_name'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$website = $_POST['website'];
	$facebook = $_POST['facebook'];
	$twitter = $_POST['twitter'];
	$github = $_POST['github'];
	$objective = $_POST['objective'];
	$soft_knowledge = $_POST['soft_knowledge'];
	$language = $_POST['language'];
	$work = $_POST['work'];
	
	if($photo == '' or $name =='' or $address =='' or $email=='' or $objective == ''){
		
		echo "<script>alert('any of the fields is empty')</script>";
		echo "<script>window.open('../basic-information.php','_self')</script>";
		exit();
	}
	else{
		move_uploaded_file($image_tmp,"../images/$photo");
		
		$result = mysqli_query($con,"INSERT INTO `basic_information` (`photo`,`name`,`address`,`email`,`phone`,`website`,`facebook`,`twitter`,`github`,`objective`,`soft_knowledge`,`language`,`work`)
		values ('$photo','$name','$address','$email','$phone','$website','$facebook','$twitter','$github','$objective','$soft_knowledge','$language','$work')");
	}
	if(mysqli_query($con,$result)){

		echo "error";
	}
	else{
		
		echo "<script>alert('Post Published successfully')</script>";
		echo "<script>window.open('../home.php','_self')</script>";
	}
}
?>