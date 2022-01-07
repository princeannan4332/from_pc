<?php 
include('connection.php');

$uname='';
$errors=['name'=>''];
if(isset($_GET['submit'])){



if(empty($_GET['uname'])){
$errors['name']='Fill in your name';
}
else{
	$uname=$_GET['uname'];
if(!preg_match('/^[a-zA-z\s]+$/',$uname)){
	$errors['name']="Invalid username";
}
	
}
if(array_filter($errors)){
	
}
else{
$uname=mysqli_real_escape_string($conn,$uname);
$sql="INSERT INTO chat(name) VALUE('$uname')";
	
if(mysqli_query($conn,$sql)){
header('Location:chat.php');
}

}

	
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>VimChat</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
@media screen and (max-width:900px){
body{
	background:url('wall.jpeg');
	background-size:cover;
	background-repeat:no-repeat;
}
.header{
width:100%;
height:40px;
}
.header h2{
font-family:script mt;
font-size:29px;
background:linear-gradient(#ff3670,purple);
-webkit-background-clip:text;
-webkit-text-fill-color:transparent;
-webkit-text-stroke:1px  white;
}
.content{
	width:90%;
	height:180px;
	margin:0px auto;
	position:relative;
	top:80px;
}
.button{
	width:100%;
	height:40%;
}
.text{
	width:100%;
	height:60%;
}
.text h2{
	text-align:center;
	font-family:trebuchet ms;
	color:white;
}
.button button{
	width:55%;
	background:-webkit-linear-gradient(18deg,#ff3670,purple,violet);
height:70%;
font-family:trebuchet ms;
border:2px solid white;
cursor:pointer;
outline:none;
display:block;
color:white;
margin:0px auto;
border-radius:32px 32px
}
.register{
	width:70%;
	background:white;
	height:30%;
	border-radius:23px 23px;
	margin:0px auto;
	overflow:hidden;
	position:relative;
	top:30%;
}
.wall{
	position:fixed;
	top:0px;
	width:100%;
	height:100%;
	background:rgba(0,0,0,0.4);
	display:none;
	animation:modal 1s;
}
@keyframes modal{
	from{
		position:absolute;
		top:-300px;
}
to{
	top:0px;
}
}
.rhead{
	width:100%;
	height:30%;
		overflow:hidden;

}

.rinp{
	width:100%;
	height:40%;
		overflow:hidden;


}
.rinp input{
	width:80%;
	border:1px solid #ff3670;
	height:80%;
	display:block;
color:purple;
outline:none;
border-radius:12px 12px;
margin:0px auto;
}
.rbutton{
	width:100%;
	height:30%;
		overflow:hidden;

}
.rhead h2{
background:linear-gradient(#ff3670,purple);
-webkit-background-clip:text;
-webkit-text-fill-color:transparent;
-webkit-text-stroke:1px  white;
text-align:center;
font-family:trebuchet ms;
}

.rbutton button{
width:55%;
background:-webkit-linear-gradient(18deg,#ff3670,purple,violet);
height:70%;
font-family:trebuchet ms;
border:2px solid white;
cursor:pointer;
outline:none;
display:block;
color:white;
margin:0px auto;
border-radius:32px 32px;
position:relative;
top:5px;
}

.error{
	height:100px;
	width:100%;
	position:absolute;
	top:0px;
}
.error p{
	font-family:trebuchet ms;
	font-size:20px;
	text-align:center;
}


}
</style>
</head>
<body>
<div class="header">
<h2>VimChat</h2>
</div>
<div class="content" >
<div class="text">
<h2>Welcome To VimChat.The Best Chatting Experience Platform</h2>
</div>
<div class="button">
<button onclick="reg()">Register</button>
</div>
</div>
<div class="wall" id="wall">
<form class="register" action="index.php">
<div class="rhead">
<h2>Register</h2>
</div>
<div class="rinp">
<input type="text" placeholder="Username" name="uname" value="<?php echo htmlspecialchars($uname); ?>">
</div>
<div class="rbutton">
<button name="submit">Sign Up</button>
</div>
</form>
<div class="error">
<p style="color:white;"><?php echo $errors['name'];?></p>
</div>
</div>

<script>
var wall=document.getElementById("wall");
function reg(){
wall.style.display="block";
}
window.onclick=function(event){
	if(event.target==wall){
	wall.style.display="none";
	}
}
</script>
</body>
</html>

