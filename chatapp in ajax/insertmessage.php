<?php
include('conn.php');
	session_start();
	
if(isset($_POST['message'])){
	$message=$_POST['message'];

	$sender=$_SESSION['uname'];
	$reciever=$_POST['reciever'];
	
	
	
$sql="INSERT INTO dummymessage(message,sender,reciever,unread,mread) VALUES('$message','$sender','$reciever','1','0')";
mysqli_query($conn,$sql);
	
}
?>