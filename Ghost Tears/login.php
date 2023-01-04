<?php
include('conn.php');
if(isset($_POST['plogin'])){
	$uname=$_POST['ulogin'];
	$pass=$_POST['plogin'];
	
	
	$sqlz="SELECT * FROM gosttearslogin Where uname='$uname'";
	$quez=mysqli_query($conn,$sqlz);
	$resz=mysqli_fetch_assoc($quez);
	if(mysqli_num_rows($quez)>0){
		if(password_verify($pass,$resz['pass'])){
			session_start();
					$_SESSION['uname']=$uname;
	 echo "Login Successfull";
		}else{
			echo "Invalid Password";
		}
	}else{
		echo "Account does not Exist";
	}
}