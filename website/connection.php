<?php
$conn=mysqli_connect('localhost','princeann','test123','tester');

if($conn){
	echo 'connection was successful';
}
else{
	echo 'connection was unsuccessful'.mysqli_connect_error();
}

?>