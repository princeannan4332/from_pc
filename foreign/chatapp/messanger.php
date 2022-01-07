<?php
include('messageconn.php');
if(isset($_GET['submit'])){

$errorx=['text'=>''];	
	if(empty($_GET['messages'])){
	$errorx['text']='type in some message';	
	}

if(array_filter($errorx)){

	
}
else{
$messages=mysqli_real_escape_string($conn,$_GET['messages']);

$sql="INSERT INTO message(message) VALUE('$messages')";

if(mysqli_query($conn,$sql)){
header('Location:chat.php');	
}

}



}






?>


<style>
.message{
	width:95%;
	background:red;
	height:10%;
	margin:0px auto;
	position:fixed;
	bottom:0px;
}
.input{
	height:100%;
	width:80%;
	float:left;
	background:-webkit-linear-gradient(18deg,#ff3670,purple,violet);
}
.input textarea{
font-family:trebuchet ms;
width:95%;
height:83%;
outline:none;
margin:0px auto;
display:block;
position:relative;
top:3px;
border:none;
}
.send{
	width:20%;
		height:100%;
	float:left;
	background:brown;
}
.send button{
	width:100%;
	height:100%;
	background:blue;
	border:none;
	text-align:center;
	color:white;
	font-family:trebuchet ms;
}
</style>
<form class="message" action="chat.php" method="GET">
<div class="input">
<textarea placeholder="Type in message" name="messages"></textarea>

</div>
<div class="send">
<button name="submit">Send</button>
</div>
</form>
</body>
</html>