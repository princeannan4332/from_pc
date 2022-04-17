<?php

function existUser($conn,$uname,$email){
	$sql="SELECT * FROM login WHERE uname=? OR email=?;";
	$stmt=mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		echo 'Oops something went wrong';
		exit();
	}
	
	mysqli_stmt_bind_param($stmt,'ss',$uname,$email);
	mysqli_stmt_execute($stmt);
	
	$res=mysqli_stmt_get_result($stmt);
	if($row=mysqli_fetch_assoc($res)){
		return $row;
	}
	else{
	$result=false;
    return $result;	
	}
	mysqli_stmt_close($stmt);
}

function checkForUser($conn,$uname,$pwd){
	$userExist=existUser($conn,$uname,$uname);
	if($userExist===false){
    echo 'Username not found';
	}
 $hashedpwd=$userExist['pwd'];
 $comfirmPwd=password_verify($pwd,$hashedpwd);
 if($comfirmPwd===false){
		echo 'Password incorrect';
 }else if($comfirmPwd===true){
	  session_start();
	 $_SESSION['uname']=$userExist['uname'];
	 header('Location:index.php');
 }
	
}