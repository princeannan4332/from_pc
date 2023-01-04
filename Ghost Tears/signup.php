<?php
include('conn.php');
if(isset($_POST['usign'])){
	$uname=$_POST['usign'];
	$pass=$_POST['psign'];
	
	
	$sqlz="SELECT * FROM gosttearslogin Where uname='$uname'";
	$quez=mysqli_query($conn,$sqlz);
	$resz=mysqli_fetch_assoc($quez);
	if(mysqli_num_rows($quez)>0){
		echo "Account Already Exist";
	}else{
	$hashpass=password_hash($pass,PASSWORD_DEFAULT);
	
	$sql="INSERT INTO gosttearslogin(uname,pass) VALUES('$uname','$hashpass')";
	if(mysqli_query($conn,$sql)){
		echo "Hurray!! Login Now";
	}
	
	}
	
}else{
	echo "Something Went Wrong";
}