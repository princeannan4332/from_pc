<?php

include('connection.php');

$uname=$email='';


$errors=['email'=>'','uname'=>''];
if(isset($_GET['submit'])){

if(empty($_GET['email'])){
	$errors['email']='Empty email';
}
else{
	$email=$_GET['email'];
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$errors['email']='Invalid email';
	}
}

if(empty($_GET['uname'])){
	$errors['uname']='Empty username';
}
else{
	$uname=$_GET['uname'];
	if(!preg_match('/^[a-zA-z\s]+$/',$uname)){
		$errors['uname']='Invalid username';
	}
}




if(array_filter($errors)){
	
	
}
else{
	$email=mysqli_real_escape_string($conn,$_GET['email']);
$uname=mysqli_real_escape_string($conn,$_GET['uname']);

$fetcher="INSERT INTO tester(name) VALUES('$email')";

	if(mysqli_query($conn,$fetcher)){
	header('Location:body.php');
	}
}
}

?>
<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>

<form action="login.php" method="GET">
<br>
<input type="text" placeholder="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
<label><?php echo $errors['email']; ?></label>
<br>
<input type="text" placeholder="username" name="uname" value="<?php echo htmlspecialchars($uname); ?>">
<label><?php echo $errors['uname']; ?></label>
<br>
<input type="submit" name="submit">
</form>
</body>
</html>