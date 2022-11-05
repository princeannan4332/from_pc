<?php
$uname=$email=$fname='';
$err=['uname'=>'','email'=>'','fname'=>'','pwd'=>''];
if(isset($_POST['submit'])){
	$uname=$_POST['uname'];
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$cpwd=$_POST['cpwd'];
	$fname=$_POST['fname'];
	
	
	
	
	//fullname verification
		if(empty($fname)){
					
$err['fname']='Fullname required';

		}else{
			if(!preg_match('/^[a-zA-Z\s]+$/',$fname)){
				$err['fname']='Invalid Fullname';
			}
			
		}
		
		
		
		
		//email verification
		
					if(empty($email)){
					
$err['email']='Email required';

		}else{
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$err['email']='Invalid Email';
			}
			
		}
		
		
		
		//username verification
	if(empty($uname)){
					
$err['uname']='Username required';

		}else{
			if(!preg_match('/^[a-zA-Z\s0-9]+$/',$uname)){
				$err['uname']='Invalid Username';
			}
			
		}
		
		
		//password verification
		
						if(empty($pwd)){
					
$err['pwd']='Username required';

		}else{
			if($pwd!==$cpwd){
				$err['pwd']='Password Does Not Match';
			}
			
		}
		
		

require_once('functions.php');


//checking existing user
if(checkUserExist($conn,$uname,$email) !==false){
$err['uname']='Username Or Eamil Already Exist';
}



//inserting records into database
if(array_filter($err)){
	
}else{
$email=mysqli_real_escape_string($conn,$email);
$uname=mysqli_real_escape_string($conn,$uname);
$fname=mysqli_real_escape_string($conn,$fname);
$pwd=mysqli_real_escape_string($conn,$pwd);

$pwd=password_hash($pwd,PASSWORD_DEFAULT);

$sqls="INSERT INTO signuplogin(name,uname,pwd,email) VALUES('$fname','$uname','$pwd','$email')";
if(mysqli_query($conn,$sqls)){
	header('location:login.php');
}

}




}

