<?php
include('conn.php');
$err=['uname'=>'','message'=>''];
if(isset($_GET['submit'])){

if(empty($_GET['uname'])){
$err['uname']="<script> alert('Username is needed')</script>";
echo $err['uname'];
}


if(empty($_GET['message'])){
$err['message']="<script> alert('Message is needed')</script>";
echo $err['message'];
}
else{
	if(strlen($_GET['message'])>=250){
		$err['message']="<script> alert('Message Too Long')</script>";
echo $err['message'];
	}
}

if(array_filter($err)){
	
}
else{
	$uname=mysqli_real_escape_string($conn,$_GET['uname']);
	$message=mysqli_real_escape_string($conn,$_GET['message']);
	
	$sql="INSERT INTO newyear(name,message) VALUES('$uname','$message')";
	if(mysqli_query($conn,$sql)){		
		header('Location:Details.php');
	}
	
}

}




?>
<!DOCTYPE html>
<html lang='en'>
<head>
<title>NewYear</title>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width,initial-scale=1'> 
<link rel='stylesheet' href='style.css'>
</head>
<body>
<div class='header'>
<h2>NewYear</h2>
</div>
<div class='main'>
<form action='index.php' autocomplete='off' method='GET' class='content'>
<div class='sub1'>
<div class='title'>
<h2>VIBEZ FORM</h2>
</div>
<div class='a'>
<input type='text' name='uname' placeholder='Your Full Name'>
</div>
<div class='b'>
<textarea placeholder='Message' name='message'></textarea>
</div>
<div class='c'>
<button name='submit'>Send</button>
</div>
</div>
</form>
</div>
</body>
</html>