<?php 
include('conn.php');
session_start();

if(isset($_SESSION['uname'])){
	$uname=$_SESSION['uname'];
$sql="SELECT * FROM dummychat WHERE  email='$uname' OR uname='$uname'";
$que=mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($que);

}else{
	header('location:index.php');
}


if(isset($_POST['profapply'])){
	$uname=$_SESSION['uname'];
if($_FILES['img']['error']==4){
echo "<script>alert('Image Not Found');</script>";
}else{
$imageName=$_FILES['img']['name'];
$imageSize=$_FILES['img']['size'];
$imageTmp=$_FILES['img']['tmp_name'];

$validExtensions=['jpg','png','jpeg','svg'];
$imageExtension=explode('.',$imageName);
$imageExtension=strtolower(end($imageExtension));

if(!in_array($imageExtension,$validExtensions)){
		echo "<script>alert('Image Extension Is Invalid.Try Using:jpeg or png');</script>";
}else if($imageSize>=1000000){
	echo "<script>alert('Image Too Large');</script>";
}else{
	$newImageName=uniqid();
	$newImageName.='.'.$imageExtension;
	
	move_uploaded_file($imageTmp,'img/'.$newImageName);
	

$sqls="UPDATE dummychat set profilePic='$newImageName' where uname='$uname' or email='$uname'";
if(mysqli_query($conn,$sqls)){
	
	$sqlv="SELECT * FROM dummychat WHERE  uname='$uname'";
	$quez=mysqli_query($conn,$sqlv);
	$images=mysqli_fetch_assoc($quez);
	$_SESSION['uimage']=$images['profilePic'];
	
	
	
	
	echo "<script>alert('Profile Picture Changed Successfully');</script>";
	header('location:profile.php');
}else{
	echo "<script>alert('An error occured.Try Again Later');</script>";
}
	
	
	
}


}	
	
	
}


?>


<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width,initial-scale=1'>
<link rel='stylesheet' href='stylesheet.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Cham Chat</title>

</head>
<body style='background:white;'>

<div class='profheader' style='text-align:center;'>
<h2 style='font-family:jokerman;'>Cham</h2>
</div>
<div class='profilewrap'>
<div class='profile'>
<?php if($result){ ?>
<div class='profilePic'>
<img src='img/<?php echo $result['profilePic']; ?>'>
</div>
<div class='profileText'>

<h2>FullName:<?php echo $result['fname']; ?></h2>
<h2>UserName:<?php echo $result['uname']; ?></h2>
<h2>Email:<?php echo $result['email']; ?></h2>

</div>
<?php }?>
<form method='POST' enctype='multipart/form-data' class='profileButton'>
<input type='file' id='img' name='img' style='display:none;' accept='.jpg,.png,.jpeg,.svg'>
<button id='uplimg'>Upload Profile Picture</button>
<button id='applybtn' name='profapply'>Apply</button>
</form>

</div>


</div>

<div class='empty'>

</div>

<div class='optionswrap'>

<div class='options'>
<?php 
$unames=$_SESSION['uname'];
$sqlss="SELECT * FROM dummymessage where reciever='$unames' and unread='1'";
	$ques=mysqli_query($conn,$sqlss);
	 if(mysqli_num_rows($ques)>0){


echo "<div class='iconwrap' style='background:red;'>";
echo "<a href='message.php' style='text-decoration:none;'>";
echo "<div class='icon'>";

echo "</div>";
echo "</a>";


echo "<a href='message.php' style='text-decoration:none;'>";
echo "<div class='iconalt'>";
echo "<p>Messages</p>";
echo "</div>";
echo "</a>";

echo "</div>";
	  }else{
		 
		 
	echo "<div class='iconwrap'>";
echo "<a href='message.php' style='text-decoration:none;'>";
echo "<div class='icon'>";

echo "</div>";
echo "</a>";


echo "<a href='message.php' style='text-decoration:none;'>";
echo "<div class='iconalt'>";
echo "<p>Messages</p>";
echo "</div>";
echo "</a>";

echo "</div>";	 
		 
		 
	 }?>


<div class='iconwrap'>

<a href='searchFriends.php' style='text-decoration:none;'>
<div class='icon'>
<h2><i class='fa fa-search'></i></h2>
</div>
</a>

<a href='searchFriends.php' style='text-decoration:none;'>
<div class='iconalt'>
<p>Search</p>
</div>
</a>

</div>


<div class='iconwrap'>
<a href='profile.php' style='text-decoration:none;'>
<div class='icon'>


</div>
</a>
<a href='profile.php' style='text-decoration:none;'>
<div class='iconalt' >
<p>Profile</p>
</div>
</a>

</div>


<div class='iconwrap'>
<a href='logoutscript.php' style='text-decoration:none;'>
<div class='icon'>

</div>
</a>
<a href='logoutscript.php' style='text-decoration:none;'>
<div class='iconalt'>
<p>Logout</p>
</div>
</a>

</div>





</div>

</div>














<script>
/*
search
profile
message
logout
*/
	var imgbtn=document.querySelector('#img');
	var uplimg=document.querySelector('#uplimg');



uplimg.onclick=function(event){
	event.preventDefault();
	imgbtn.click();
	
}
</script>
</body>
</html>