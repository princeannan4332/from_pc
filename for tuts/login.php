<?php
include('conn.php');
$err=['uname'=>'','email'=>''];
if(isset($_GET['submit'])){

if(empty($_GET['uname'])){
$err['uname']="uname is empty";
}
else{
$uname=$_GET['uname'];
if(!preg_match('/^[a-z,A-Z\s]+$/',$uname)){
$err['uname']="invalid uname";
}
}

if(empty($_GET['email'])){
$err['email']="email is empty";
}
else{
$email=$_GET['email'];
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
$err['email']="invalid email";
}
}

if(array_filter($err)){

}
else{
$uname=mysqli_real_escape_string($conn,$_GET['uname']);
$email=mysqli_real_escape_string($conn,$_GET['email']);

$sql="INSERT INTO example(name,email) VALUE('$uname','$email')";

if(mysqli_query($conn,$sql)){
header('Location:post.php');
}

}

}

?>
<html>
<head>
<style>

</style>
</head>
<body>
<form action="login.php" method="GET">
<input type="text" placeholder="uname" name="uname">
<label><?php echo $err['uname'] ?></label>
<br>
<input type="text" placeholder="email" name="email">
<label><?php echo $err['email'] ?></label>
<br>
<button name="submit">Send</button>
</form>
</body>
</html>