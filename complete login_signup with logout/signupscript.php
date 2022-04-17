<?php
include('conn.php');
$err=['uname'=>'','name'=>'','email'=>'','pass'=>'','passcmf'=>''];
$name=$email=$uname='';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$uname=$_POST['uname'];
	$email=$_POST['email'];
	$cmfpwd=$_POST['cmfpwd'];
	$pwd=$_POST['pwd'];
	
	if(empty($name)){
		$err['name']='Full name should be field';
	}
	
	if(empty($uname)){
		$err['uname']='Username should be field';
	}else{
		if(!preg_match('/^[a-zA-z\s0-9]+$/',$uname)){
			$err['uname']='Invalid username';
		}
	}
	
	if(empty($email)){
		$err['email']='Email should be field';
	}else{
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$err['email']='Invalid email';
		}
	}
	
	
	if(empty($pwd)){
		$err['pass']='Password is needed';
	}else{
		if($pwd!==$cmfpwd){
			$err['passcmf']='Password does not match';
		}
	}
	
	require_once('functions.php');
	
	if(existUser($conn,$uname,$email) !==false){
		$err['uname']='Username already exist';
	}
	
	if(array_filter($err)){
		
	}else{
		$name=mysqli_real_escape_string($conn,$_POST['name']);
		$uname=mysqli_real_escape_string($conn,$_POST['uname']);
		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
		
		$hashpwd=password_hash($pwd,PASSWORD_DEFAULT);
		$sqls="INSERT INTO login(name,email,uname,pwd) VALUES('$name','$email','$uname','$hashpwd')";
		if(mysqli_query($conn,$sqls)){
			header('Location:login.php');
		}
		
	}
}
