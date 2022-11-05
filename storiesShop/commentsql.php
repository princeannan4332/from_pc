<?php
if(isset($_POST['subcom'])){
	$comments=$_POST['comments'];
$ids=$_GET['id'];
$unames=$_SESSION['uname'];
$sqv="INSERT INTO comments(id,comments,uname) VALUES('$ids','$comments','$unames')";
mysqli_query($conn,$sqv);

}








?>