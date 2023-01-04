<?php


include('conn.php');
session_start();


	$uname=$_SESSION['uname'];
	$sql="SELECT * FROM friends WHERE uname='$uname'";
	$que=mysqli_query($conn,$sql);
	$results=mysqli_fetch_all($que,MYSQLI_ASSOC);
	
	
	$sqlc="SELECT * FROM friends WHERE friendName='$uname'";
	$quez=mysqli_query($conn,$sqlc);
	$res=mysqli_fetch_all($quez,MYSQLI_ASSOC);


echo "<h2>Messages</h2>";
 if(mysqli_num_rows($quez)>0){
	
	foreach($res as $rek){


	 $senders=$rek['uname'];
	 $unamz=$_SESSION['uname'];
	$sqlss="SELECT * FROM dummymessage where sender='$senders' and reciever='$unamz' and unread='1' order by ids desc";
	$ques=mysqli_query($conn,$sqlss);
	 if(mysqli_num_rows($ques)>0){
	
	
echo "<form method='POST' class='friendbox' id='topglow'>";
echo "<div class='friendpic'>";
echo "<img src='img/". $rek['uimage']."'>";
echo "</div>";
echo "<div class='friendTxt'>";
echo "<p>".$rek['uname']."</p>";

echo "<a href='conversation.php?id=". $rek['uname']."' id='addFriend'>Message Now</a>";
echo "</div>";
echo "</form>";
	
	
	
	
	 }else{
	
echo "<form method='POST' class='friendbox' >";
echo "<div class='friendpic'>";
echo "<img src='img/". $rek['uimage']."'>";
echo "</div>";
echo "<div class='friendTxt'>";
echo "<p>".$rek['uname']."</p>";

echo "<a href='conversation.php?id=". $rek['uname']."' id='addFriend'>Message Now</a>";
echo "</div>";
echo "</form>";



	 }






		} }else{
	echo "<p>You Have Not Recieved Any Friends Request</p>";
	
}




if(mysqli_num_rows($que)>0){
 foreach($results as $re){
	 $sender=$re['friendName'];
	 $uname=$_SESSION['uname'];
	$sqls="SELECT * FROM dummymessage where sender='$sender' and reciever='$uname' and unread='1' order by ids desc";
	$que=mysqli_query($conn,$sqls);
	 if(mysqli_num_rows($que)>0){
	
	
echo "<form method='POST' class='friendbox' id='glowmessage'>";
echo "<div class='friendpic'>";
echo "<img src='img/". $re['image']."'>";
echo "</div>";
echo "<div class='friendTxt'>";
echo "<p>".$re['friendName']."</p>";

echo "<a href='conversation.php?id=". $re['friendName']."' id='addFriend'>Message Now</a>";
echo "</div>";
echo "</form>";
	
	
	
	
	 }else{
	
echo "<form method='POST' class='friendbox' >";
echo "<div class='friendpic'>";
echo "<img src='img/". $re['image']."'>";
echo "</div>";
echo "<div class='friendTxt'>";
echo "<p>".$re['friendName']."</p>";

echo "<a href='conversation.php?id=". $re['friendName']."' id='addFriend'>Message Now</a>";
echo "</div>";
echo "</form>";



	 }
	 
	 
	 }}else{

	echo "<p>You Have  Not Sent Any Friends Request</p>";
}	




?>

