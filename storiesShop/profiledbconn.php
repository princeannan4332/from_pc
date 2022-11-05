<?php
$title=$project='';

$err=['errs'=>'','errz'=>''];
$checkSucc=false;
$checkSuccz=false;
if(isset($_POST['postNow'])){

$uname=$_SESSION['uname'];
$title=$_POST['title']; 	
$project=$_POST['project'];

if(empty($title)||empty($project)){
	$checkSuccz=false;
	$err['errz']="Message:Update Failed Please Fill All Blanks";
}else{
	if(strlen($title)>20){
		$checkSuccz=false;
		$err['errz']="Message:The Title Should Not Exceed 20 Letters";
	}
	if(strlen($project)>10000){
		$checkSuccz=false;
			$err['errz']="Message:Please Make Sure The Story Does Not Exceed 10000 Letters";
	}
	
}






if($_FILES['image']['error']==4){
	$checkSucc=false;
	$err['errs']="Message:Image File Not Found And Can't Upload";
	
}else{
	$checkSucc=true;
		

		$imgname=$_FILES['image']['name'];
		$imgsize=$_FILES['image']['size'];
		$imgtmp=$_FILES['image']['tmp_name'];
		
		$validExtension=['jpg','png','jpeg','svg'];
		$imageExtension=explode('.',$imgname);
		$imageExtension=strtolower(end($imageExtension));

if(!in_array($imageExtension,$validExtension)){
$err['errs']="Please We Accept Only jpg,png,svg and jpeg";
}
else if($imgsize>1000000){
$err['errs']="Image too Large Can't Upload";
}else{
$newImageName=uniqid('');
$newImageName.='.'.$imageExtension;
move_uploaded_file($imgtmp,'uplimg/'.$newImageName);

if(array_filter($err)){
	
}else{
$uname=mysqli_real_escape_string($conn,$_SESSION['uname']);
$title=mysqli_real_escape_string($conn,$_POST['title']);
$project=mysqli_real_escape_string($conn,$_POST['project']);

$sqlss="INSERT INTO postspj(uname,image,project,title) VALUES('$uname','$newImageName','$project','$title');";
if(mysqli_query($conn,$sqlss)){
	header("location:profile.php?success");
}

}


	
}


		
		
		
	
}




}

if(isset($_POST['upsubmit'])){
	$upuname=$_POST['upuname'];
	$upemail=$_POST['upemail'];
	$ids=$_SESSION['id'];

	if(empty($upuname) || empty($upemail)){
		$checkSuccz=false;
		$err['errs']="Message:Upload Failed Please Fill In All Blanks";
	}
	
	if(array_filter($err)){
		
	}else{
		
$sqll="UPDATE signuplogin set uname='$upuname',email='$upemail' where id='$ids'";
$quez=mysqli_query($conn,$sqll);
if($quez){
		header("location:login.php?success");
}



	}



}






if(isset($_POST['upPost'])){
$uptxtinp=$_POST['uptxtinp'];
$uptitle=$_POST['uptitle'];
$id=$_GET['id'];

if(empty($uptxtinp)||empty($uptitle)){
	$checkSuccz=false;
	$err['errz']="Message:Update Failed Please Fill All Blanks";
}else{
	if(strlen($uptitle)>20){
		$checkSuccz=false;
		$err['errz']="Message:The Title Should Not Exceed 20 Letters";
	}
	if(strlen($uptxtinp)>10000){
		$checkSuccz=false;
			$err['errz']="Message:Please Make Sure The Story Does Not Exceed 10000 Letters";
	}
	
}






if($_FILES['upimage']['error']==4){
	$checkSucc=false;
	$err['errs']="Message:Image File Not Found And Can't Upload";
	
}else{
	$checkSucc=true;
		

		$imgname=$_FILES['upimage']['name'];
		$imgsize=$_FILES['upimage']['size'];
		$imgtmp=$_FILES['upimage']['tmp_name'];
		
		$validExtension=['jpg','png','jpeg','svg'];
		$imageExtension=explode('.',$imgname);
		$imageExtension=strtolower(end($imageExtension));

if(!in_array($imageExtension,$validExtension)){
$err['errs']="Please We Accept Only jpg,png,svg and jpeg";
}
else if($imgsize>1000000){
$err['errs']="Image too Large Can't Upload";
}else{
$newImageName=uniqid('');
$newImageName.='.'.$imageExtension;
move_uploaded_file($imgtmp,'uplimg/'.$newImageName);

if(array_filter($err)){
	
}else{
$uname=mysqli_real_escape_string($conn,$_SESSION['uname']);
$uptitle=mysqli_real_escape_string($conn,$_POST['uptitle']);
$uptxtinp=mysqli_real_escape_string($conn,$_POST['uptxtinp']);

$sqlss="Update postspj set image='$newImageName',project='$uptxtinp',title='$uptitle' where id='$id';";
if(mysqli_query($conn,$sqlss)){
	header("location:profile.php?success");
}

}


	
}


		
		
		
	
}






}
if(isset($_POST['delt'])){
	
	$idx=$_POST['delinf'];
$sqlssc="DELETE FROM postspj WHERE id='$idx'";
if(mysqli_query($conn,$sqlssc)){
	header('location:profile.php');
}
}