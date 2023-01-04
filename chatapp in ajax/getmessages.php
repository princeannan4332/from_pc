<?php
include('conn.php');
session_start();

if(isset($_POST['reciever'])){
	$reciever=$_POST['reciever'];
	$sender=$_SESSION['uname'];
	
	
	
	
	
	
	
$sql="SELECT * FROM dummymessage WHERE sender='$sender' and reciever='$reciever' or sender='$reciever' and reciever='$sender'";
$que=mysqli_query($conn,$sql);

$readsql="Update dummymessage set unread='0' and mread='1' Where reciever='$sender' and sender='$reciever' ";
	$readquery=mysqli_query($conn,$readsql);
	
$result=mysqli_fetch_all($que,MYSQLI_ASSOC);
	if(mysqli_num_rows($que)>0){
	foreach($result as $res){
	
		if($res['sender']==$sender){
	echo "<p style='color:white;text-align:right;max-width:70%;max-height:300px;padding:8px;border-radius:8px 8px;display:table;background:orange;float:right;'>".$res['message']."</p><br><br>";
	}else{
		echo "<p style='color:black;text-align:left;max-width:70%;max-height:300px;padding:8px;border-radius:8px 8px;background:white;float:left;'>".$res['message']."</p><br></br>";
	}
	}
	}else{
		
		echo "<p style='color:white;'>No Conversation Be The First To Start One</p>";
	}

	
}
?>