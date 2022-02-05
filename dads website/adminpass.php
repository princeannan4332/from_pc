<?php 
if(isset($_POST['login'])){
	$loginCode=$_POST['loginCode'];
	if($loginCode=='1111'){
		header('Location:admin.php');
	}
	else{
		echo "<script>alert('Invalid Admin Code');</script>";
	}
}