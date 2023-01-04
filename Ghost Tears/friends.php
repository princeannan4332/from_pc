<?php
include('conn.php');
session_start();
$uname=$_SESSION['uname'];
$sql="SELECT * FROM ghostfriends where uname='$uname' or friend='$uname' ";
$que=mysqli_query($conn,$sql);
$res=mysqli_fetch_all($que,MYSQLI_ASSOC);

if(mysqli_num_rows($que)>0){
foreach($res as $re){
	if($re['friend']==$uname){
			echo "<div class='cont'>";
echo "<p>".$re['uname']."</p>";
echo "<a href='game.php?opponent=".$re['uname']."'><button value='".$re['uname']."'>Play</button></a>";
 echo "</div>";
	}else{
echo "<div class='cont'>";
echo "<p>".$re['friend']."</p>";
echo "<a href='game.php?opponent=".$re['friend']."'><button value='".$re['friend']."'>Play</button></a>";
 echo "</div>";
	}
		
}

}else{
	echo "<p>You have no allies</p>";
}


