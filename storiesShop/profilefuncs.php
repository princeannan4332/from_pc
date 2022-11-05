<?php
if(isset($_SESSION['uname'])){
	$uname=$_SESSION['uname'];
	$email=$_SESSION['email'];
	$fname=$_SESSION['fname'];
	$id=$_SESSION['id'];
	
	$authz=$_SESSION['uname'];
	$sqlv="SELECT * from comments where author='$authz' order by ids desc;";
	$quey=mysqli_query($conn,$sqlv);
	$resultz=mysqli_fetch_all($quey,MYSQLI_ASSOC);
	$resrownum=mysqli_num_rows($quey);
	
		$sqlvj="SELECT * from postspj where uname='$authz' order by id desc;";
		$kk=mysqli_query($conn,$sqlvj);
		$sb=mysqli_fetch_all($kk,MYSQLI_ASSOC);
$rownum=mysqli_num_rows($kk);


	
}else{
	header('location:login.php');
}




