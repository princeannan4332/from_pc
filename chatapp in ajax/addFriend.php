<?php 
include('conn.php');
if(isset($_POST['picture'])){

	session_start();
	$friendName=$_POST['friendName'];
	$picture=$_POST['picture'];
	$uname=$_SESSION['uname'];
	$uimage=$_SESSION['uimage'];
	
	
	$sqlc="SELECT * FROM friends WHERE uname='$uname' and friendName='$friendName' or uname='$friendName' and friendName='$uname'";
	$que=mysqli_query($conn,$sqlc);
	if(mysqli_num_rows($que)>0){
		echo "You Are Already A Friend";
	}else{
	
	
	$sql="INSERT INTO friends(friendName,uname,image,uimage) VALUES('$friendName','$uname','$picture','$uimage')";
	if(mysqli_query($conn,$sql)){
	echo "Success";
	}
	
	}
}

?>