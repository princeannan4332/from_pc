<?php
include('conn.php');
$uname='';
$err=['uname'=>'','pass'=>''];
if(isset($_POST['submit'])){
$uname=$_POST['uname'];
$pass=$_POST['pwd'];
$sql="SELECT * FROM dummychat WHERE  uname='$uname'";
$que=mysqli_query($conn,$sql);


if(mysqli_num_rows($que)>0){
	$res=mysqli_fetch_assoc($que);
if(password_verify($pass,$res['pass']) !==true){
	$err['pass']="Password is wrong";
}else{
	session_start();
	$_SESSION['uname']=$uname;


	header('location:profile.php');
}

}else{
	$err['uname']="Account not Found";
}




}



?>