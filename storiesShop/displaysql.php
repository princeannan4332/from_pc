<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sqlx="SELECT * FROM postspj where  id=$id";
	$queryx=mysqli_query($conn,$sqlx);
	$resx=mysqli_fetch_assoc($queryx);


$sqlxz="SELECT * FROM comments where  id=$id";
	$queryxz=mysqli_query($conn,$sqlxz);
	$resxz=mysqli_fetch_all($queryxz,MYSQLI_ASSOC);
}

if(isset($_POST['subcom'])){
	
	if(isset($_SESSION['uname'])){
	$uname=$_SESSION['uname'];
	$coms=$_POST['coms'];
	$ids=$_GET['id'];
	$kk=$resx["uname"];
	$tit=$resx["title"];
$s="INSERT INTO comments(id,uname,comments,author,title) VALUES('$ids','$uname','$coms','$kk','$tit')";
mysqli_query($conn,$s);
	}else{
		echo "<script>alert('Please Login Before You Can Comment');</script>";
	}


	
}