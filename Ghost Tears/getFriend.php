<?php
include('conn.php');
session_start();
$uname=$_SESSION['uname'];
$sql="SELECT * FROM gosttearslogin where  uname not in('$uname')";
$que=mysqli_query($conn,$sql);
$res=mysqli_fetch_all($que,MYSQLI_ASSOC);

$chs=false;

foreach($res as $re){
	if(strpos(strtolower($re['uname']),strtolower($_POST['key']))!==false){
		echo "<div class='cont'>";
echo "<p>".$re['uname']."</p>";
echo "<button value='".$re['uname']."'>Add Player</button>";
 echo "</div>";
		
		$chs=true;
	}
	
}

if($chs==false){
	echo "<p>User not Found	</p>";
}







