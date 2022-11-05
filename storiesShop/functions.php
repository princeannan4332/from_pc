<?php
function checkUserExist($conn,$uname,$email){
	$sql="SELECT * FROM signuplogin WHERE uname=? OR email=?;";
	$stmt=mysqli_stmt_init($conn);
	
	if(!mysqli_stmt_prepare($stmt,$sql)){
		echo "<script>alert('sorry we can nor connect to the database');</script>";
	}
	
	mysqli_stmt_bind_param($stmt,'ss',$uname,$email);
	mysqli_stmt_execute($stmt);
	
	$res=mysqli_stmt_get_result($stmt);
	if($row=mysqli_fetch_assoc($res)){
		return $row;
	}else{
		$ress=false;
		return $ress;
	}
	mysqli_stmt_close($stmt);
}

function checkUserExistingLogin($conn,$uname,$pwd){
	$unameLogin=checkUserExist($conn,$uname,$uname);
	$hashedpwd=$unameLogin['pwd'];
	
	$confirmpwd=password_verify($pwd,$hashedpwd);
	
	if(!$unameLogin){
		return false;
	}
	if($confirmpwd==true){
		session_start();
		$_SESSION['uname']=$unameLogin['uname'];
		$_SESSION['fname']=$unameLogin['name'];
		$_SESSION['email']=$unameLogin['email'];
		$_SESSION['id']=$unameLogin['id'];
		header('location:profile.php'); 
	}else{
		return 'passworderr';
	}
	
	
	
}