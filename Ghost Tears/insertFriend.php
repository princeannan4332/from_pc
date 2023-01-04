<?php
include('conn.php');
session_start();
$fname=$_POST['fname'];
$uname=$_SESSION['uname'];
$sqlz="SELECT * FROM ghostfriends where friend='$fname' and uname='$uname' or friend='$uname' and uname='$fname' ";
$quez=mysqli_query($conn,$sqlz);
if(mysqli_num_rows($quez)){
	echo "Already Friends";
}else{


$sql="INSERT INTO ghostfriends(uname,friend) VALUES('$uname','$fname')";
if(mysqli_query($conn,$sql)){
	echo "Added Successfully";
}

}