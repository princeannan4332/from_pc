<?php
$uname=$pwd='';
$err=['uname'=>'','pwd'=>''];
if(isset($_POST['submit'])){
	$uname=$_POST['uname'];
	$pwd=$_POST['pwd'];
	
	
	
	
	
	//fullname verification
		if(empty($uname)){
					
$err['uname']='Username required';

		}
		
			if(empty($pwd)){			
$err['pwd']='Password required';
		}
		
		require_once('functions.php');
		checkUserExistingLogin($conn,$uname,$pwd);
		
		if(array_filter($err)){
			
		}else{
		if(checkUserExistingLogin($conn,$uname,$pwd)==false){
			$err['uname']='Invalid Username';
		}
		if(checkUserExistingLogin($conn,$uname,$pwd)=='passworderr'){
			$err['pwd']='Invalid Password';
		}
			
		}

}