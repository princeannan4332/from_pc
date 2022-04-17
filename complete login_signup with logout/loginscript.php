<?php
include('conn.php');
$uname='';
$errz=['passlogin'=>'','unamelogin'=>''];
$name=$email=$uname='';
if(isset($_POST['submit'])){
	
	$uname=$_POST['unamelogin'];
	$pwd=$_POST['pwdlogin'];
	
	if(empty($uname)){
		$errz['unamelogin']='Username must be field';
	}
	
	if(empty($pwd)){
		$errz['passlogin']='Password is needed';
	}
	
	//require_once('functions.php');
	checkForUser($conn,$uname,$pwd);

}



