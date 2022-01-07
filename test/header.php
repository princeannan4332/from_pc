
<?php
include('conn.php');
$uname='';
$email='';
$age='';
$num='';
$job='';
$error=['uname'=>'','email'=>'','age'=>'','contact'=>'','job'=>''];

if(isset($_GET['submit'])){
	if(empty($_GET['uname'])){
$error['uname']="Username shouldn't be left empty";		
	}
	else{
		$uname=$_GET['uname'];
		if(!preg_match('/^[a-zA-z\s]+$/',$uname)){
			$error['uname']="Invalid Username";	
		}
	}
	
	if(empty($_GET['email'])){
$error['email']="Email shouldn't be left empty";		
	}
	else{
		$email=$_GET['email'];
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$error['uname']="Invalid email";	
		}
	}
			$age=$_GET['age'];
		if(empty($_GET['age'])){
	
$error['age']="Age shouldn't be left empty";		
	}	
	if(empty($_GET['number'])){
$error['contact']="Number shouldn't be left empty";		
	}
	else{
        $num=$_GET['number']; 
		if(!preg_match('/[0-10]/',$num)){
			$error['contact']="Invalid contact";		
		}
	}
	
	
	if(empty($_GET['job'])){
$error['job']="Job shouldn't be left empty";		
	}
	else{
		$job=$_GET['job'];
		if(!preg_match('/^[a-zA-z\s]+$/',$job)){
			$error['job']="Invalid Job";
		}
	}
	

		if(array_filter($error)){
		
	}else{
		$uname=mysqli_real_escape_string($conn,$_GET['uname']);
		$email=mysqli_real_escape_string($conn,$_GET['email']);
		$age=mysqli_real_escape_string($conn,$_GET['age']);
		$number=mysqli_real_escape_string($conn,$_GET['number']);
		$job=mysqli_real_escape_string($conn,$_GET['job']);
		
		$sql="INSERT INTO lancer(name,email,age,contact,job) VALUE('$uname','$email','$age','$number','$job')";
		if(mysqli_query($conn,$sql)){
			header('Location:main.php');
		}
		
	}
	
	
}

?>
<head>
<title>FindLancer</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
.header{
	width:100%;
	height:60px;
	overflow:hidden;
	border-bottom:1px solid black;
	}
.header h2{
	font-family:trebuchet ms;
}
.header button{
float:right;
position:absolute;
top:0px;
right:0px;
cursor:pointer;
background:blue;
color:white;
font-family:trebuchet ms;
border:none;
padding:4px;
border-radius:4px 4px;
margin:18px 25px auto;
width:8%;
height:5%;
}
.container{
width:100%;
background:rgba(0,0,0,0.7);
height:100%;
position:fixed;
top:0px;
display:none;	
animation:1.5s cont;
}
@keyframes cont{
	from{
		position:absolute;
		top:-300px;
	}
	to{
		top:0px;
	}
}

.subcont{
	width:40%;
	background:white;
	font-family:trebuchet ms;
	margin:0px auto;
	height:55%;
	position:relative;
	top:24%;
	border-radius:12px 12px;
overflow-y:scroll;
 display:block;
}
.subcont h2{
	color:gold;
	text-align:center;
}
.subcont input{
	margin:0px auto;
	display:block;
width:80%;
height:10%;
outline:none;
}
.subcont button{
		margin:0px auto;
	display:block;
	cursor:pointer;
background:blue;
color:white;
font-family:trebuchet ms;
border:none;
padding:4px;
border-radius:4px 4px;
width:30%;
height:15%;
}
@media screen and (max-width:900px){
.subcont{
	width:80%;
}
.header button{
	width:32%;
}
}
</style>
</head>
<body>
<div class="header">
<h2>FindLancer</h2>
<button onclick="showcont()">Join</button>
</div>


<div class="container" id="div">

<?php foreach($error as $err){?>
<p style="color:white; text-align:center;"><?php echo $err;?></p>

<?php } ?>

<form class="subcont" action="main.php" method="GET">
<h2>Join Now</h2>
<input type="text" placeholder="Username" name="uname" value="<?php echo htmlspecialchars($uname)?>">
<br>
<input type="text" placeholder="email" name="email" value="<?php echo htmlspecialchars($email)?>">
<br>
<input type="number" placeholder="Age" name="age" value="<?php echo htmlspecialchars($age)?>">
<br>
<input type="number" placeholder="Phone Number" name="number" value="<?php echo htmlspecialchars($num)?>">
<br>
<input type="text" placeholder="Job" name="job" value="<?php echo $job?>">
<br>
<button name="submit" >Join</button>
</form>
</div>
<script>
var div=document.getElementById("div");
function showcont(){
div.style.display="block";
}

window.onclick=function(event){
	if(event.target==div){
		div.style.display="none";
	}
}
</script>