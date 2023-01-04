<?php
include('conn.php');
$fname=$email=$uname='';
$err=['fname'=>'','uname'=>'','email'=>'','pass'=>''];

if(isset($_POST['submit'])){
	$uname=$_POST['uname'];
	$email=$_POST['email'];
	$pass=$_POST['pwd'];
	$cpass=$_POST['cpwd'];
	$fname=$_POST['fname'];
	
	
	if(empty($fname)){
	$err['fname']="Fullname is required";
}else{
	if(!preg_match('/^[a-zA-Z0-9\s]+$/',$fname)){
		$err['fname']="Invalid Fullname";
	}
	
}


if(empty($uname)){
	$err['uname']='Username is required';
}
if(empty($email)){
	$err['email']='Email is required';
}else{
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$err['email']='Invalid Email Address';
	}
}


if(empty($pass)){
	$err['pass']="Password is required";
}else{
	if($pass!==$cpass){
		$err['pass']="Password does not match";
	}
	
}

if(array_filter($err)){
	
}else{
	$passHarsh=password_hash($pass,PASSWORD_DEFAULT);
	
	$fname=mysqli_real_escape_string($conn,$_POST['fname']);
	$uname=mysqli_real_escape_string($conn,$_POST['uname']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);

	
	$sqls="SELECT * FROM dummychat WHERE  email='$uname' OR uname='$uname'";
$quez=mysqli_query($conn,$sqls);

if(mysqli_num_rows($quez)>0){
	$err['email']="Username Or Email Has Already Been Taken";
}else{
	
	$sql="INSERT INTO dummychat(fname,uname,email,pass,uoffline,uonline,profilePic) VALUES('$fname','$uname','$email','$passHarsh',1,0,'defaultpic.png')";
if(mysqli_query($conn,$sql)){
	header('location:index.php');
}else{
	$err['pass']="An Error Occured Please Try Again";
}
	
}
	
	
}







}





?>