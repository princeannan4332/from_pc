<?php
require 'conn.php';
$err=['title'=>'','clientName'=>'','clientNumber'=>'','LongContact'=>'','description'=>'','imgUnavailable'=>'','extensionErr'=>'','imageSizeErr'=>'','imgUnavailables'=>'','extensionErrs'=>'','imageSizeErrs'=>''];
if(isset($_POST['submit'])){
	
	if(empty($_POST['title'])){
	$err['title']="<script>alert('Title should not be empty')</script>";
	echo $err['title'];
	}
	if(empty($_POST['clientName'])){
	$err['clientName']="<script>alert('Client Name should not be empty')</script>";
	echo $err['clientName'];
	}
	
	if(empty($_POST['clientNumber'])){
	$err['clientNumber']="<script>alert('Client Number should not be empty')</script>";
	echo $err['clientNumber'];
	}
	else{
		$clientNumber=$_POST['clientNumber'];
		if(strlen($clientNumber)>10){
			$err['LongContact']="<script>alert('Invalid Mobile Number')</script>";
			echo $err['LongContact'];
		}
	}
    if(empty($_POST['description'])){
	$err['description']="<script>alert('Please add some description')</script>";
	echo $err['description'];
	}
	
	if($_FILES['image']['error']==4){
		$err['imgUnavailable']="<script>alert('Image does not exist')</script>";
		echo $err['imgUnavailable'];
	}
	else{
		$fileName=$_FILES['image']['name'];
		$fileSize=$_FILES['image']['size'];
		$fileTmp=$_FILES['image']['tmp_name'];
		
		$validImageExtension=['jpg','jpeg','png'];
		$imageExtension=explode('.',$fileName);
		$imageExtension=strtolower(end($imageExtension));
		
		if(!in_array($imageExtension,$validImageExtension)){
			$err['extensionErr']="<script>alert('Invalid Image Extension')</script>";
		echo $err['extensionErr'];
		}
		else if($fileSize>5000000){
			$err['imageSizeErr']="<script>alert('Image too Large')</script>";
			echo $err['imageSizeErr'];
		}
		else{
			$newImageExtension=uniqid();
			$newImageExtension.='.'.$imageExtension;
			move_uploaded_file($fileTmp,'img/'.$newImageExtension);
		}
	}
		
		
		
		
		
		
		if($_FILES['addAttachment']['error']==4){
		$err['imgUnavailables']="<script>alert('Image Attachment does not exist')</script>";
		echo $err['imgUnavailables'];
	}
	else{
		$fileNames=$_FILES['addAttachment']['name'];
		$fileSizes=$_FILES['addAttachment']['size'];
		$fileTmps=$_FILES['addAttachment']['tmp_name'];
		
		$validImageExtensions=['jpg','jpeg','png','cdr','pdf','psd','tiff'];
		$imageExtensions=explode('.',$fileNames);
		$imageExtensions=strtolower(end($imageExtensions));
		
		if(!in_array($imageExtensions,$validImageExtensions)){
			$err['extensionErrs']="<script>alert('Invalid Image Extension')</script>";
		echo $err['extensionErrs'];
		}
		else if($fileSizes>5000000){
			$err['imageSizeErrs']="<script>alert('Image too Large')</script>";
			echo $err['imageSizeErrs'];
		}
		else{
			$newImageExtensions=uniqid();
			$newImageExtensions.='.'.$imageExtensions;
			move_uploaded_file($fileTmps,'imgs/'.$newImageExtensions);
		}
	}
		
		
		
		
		
		
		
		if(array_filter($err)){
			
			
		}
		else{
			$title=mysqli_real_escape_string($conn,$_POST['title']);
	$clientName=mysqli_real_escape_string($conn,$_POST['clientName']);
	$clientNumber=mysqli_real_escape_string($conn,$_POST['clientNumber']);
	$description=mysqli_real_escape_string($conn,$_POST['description']);
			
			
			
			
			$sql="INSERT INTO 2bconcept(title,clientName,clientNumber,description,addDescription,attachment) VALUES('$title','$clientName','$clientNumber','$description','$newImageExtension','$newImageExtensions')";
			if(mysqli_query($conn,$sql)){
				header('Location:index.php');
			}
		}
		
		
		
		
	
}


?>
<!DOCTYPE html>
<html lang='en'>
<head>
<title>Copy Print</title>
<meta charset='utf-8'>
<meta name='viewport'content='width=device-width,initial-scale=1'>
<link rel='stylesheet' href='stylesheet.css'>
</head>
<body>


<div class='HomePage'>

<div class='HomeHeader'>
<h2>Copy<span>Print</span></h2>

<button id="light" onclick='showModal()' style='cursor:pointer'>Dashboard</button>
<a href='comment.php'><button id="light" style='cursor:pointer'>Profiles</button></a>
</div>

<div class='mainContentHomePage'>


<form class='inputField' autocomplete='off' action='' method='POST' enctype='multipart/form-data' >
<div class='title'>
<input type='text' name='title' placeholder='Title Of Project'>
</div>
<div class='clientDetails'>
<input type='text' name='clientName' placeholder='Name of Client'>
<input type='text' name='clientNumber' placeholder="Client's Mobile Number">
</div>
<div class='description'>
<textarea name='description' placeholder='Description'></textarea>
</div>
<div class='submitbtn'>
<input type='file' name='image' id='imageuploadbtn' style='cursor:pointer;'>
<button name='submit'>Submit</button>
</div>

<div class='modal' id='modal'>
<div class='modalContainer'>
<h2>Options</h2>
<input type='file' name='addAttachment'>
<a href='index.php'><button>Home</button></a>
</div>
</div>

</form>


<p id='welcometxt'>Tired Of Searching For Backup Try 2bConcept</p>

</div>

</div>
<script src='script.js'></script>
</body>
</html>