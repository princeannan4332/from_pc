<?php 


if(isset($_POST['sendmssg'])){
	$reciever=$_GET['author'];
	$sender=$_SESSION['uname'];
	$messg=$_POST['chat'];
	$sql="INSERT INTO messages(author,uname,message) VALUES('$reciever','$sender','$messg');";
mysqli_query($conn,$sql);



}