<?php
$conn=mysqli_connect('localhost','root','','just testing');


$sql="Select * from dummychat";
$query=mysqli_query($conn,$sql);
$result=mysqli_fetch_all($query,MYSQLI_ASSOC);
$key=$_POST['key'];
foreach($result as $res){
	if(strpos(strtolower($res['uname']),strtolower($key)) !==false){
	echo "<div class='searchbox'>";
echo "<div class='searchpic'>";
echo "<img src='img/".$res['profilePic']."'>";
echo "</div>";
echo "<div class='searchTxt'>";
echo "<p>".$res['uname']."</p>";
echo "<input type='hidden' id='friendName' value='".$res['uname']."'>";
echo "<input type='hidden' id='friendImage' value='".$res['profilePic']."'>";
echo "<button id='addFriend'>Add Friend</button>";
echo "</div>";
echo "</div>";
	}
}
















