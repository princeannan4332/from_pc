
<?php 
include('conn.php');
session_start();

$uname=$_SESSION['uname'];
$sql="SELECT uname  FROM ghostgame where fname='$uname' and noty='unread' ";
$que=mysqli_query($conn,$sql);
$result=mysqli_fetch_all($que,MYSQLI_ASSOC);

if(mysqli_num_rows($que)>0){
	echo "<button id='yt'>Your Turn</button>";
}

?>