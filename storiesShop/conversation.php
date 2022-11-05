<?php 
include('conn.php');
session_start();

include('chatsql.php');
?>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width,initial-scale=1'>
<title>Crazy Poems</title>
<style>
*{
	margin:0;
	font-family:trebuchet ms;
}
.chatwall{
	width:100%;
	height:100%;
	position:fixed;
	background:url('chatwall.jpg')fixed center;
	background-size:cover;
}
.header{
	width:100%;
	height:10%;
display:flex;
justify-content:space-between;
align-items:center;
}
.header h2{
	color:white;
	font-family:jokerman;
	margin:6px 6px;
	font-size:32px;
}
.header a{
	color:white;
	text-decoration:none;
	margin:2px 10px;
}
.chatbody{
	width:100%;
	height:90%;
display:flex;
align-items:center;
justify-content:center;
}
.chatbox{
	width:30%;
	height:94%;
	background:rgba(0,0,0,0.8);
	border-radius:20px 20px;
	overflow:hidden;
}
.chatheader{
	width:100%;
	height:10%;
	background:white;
}
.chatheader h2{
	color:orange;
	font-family:jokerman;
	text-align:center;
	
}
.chatcontent{
	width:100%;
	height:75%;

}
.chatinpbtn{
	width:100%;
	height:15%;
	display:flex;
	justify-content:space-around;
	align-items:center;
}
.chatinpbtn input{
	width:75%;
	height:50%;
	border:none;
	border-radius:5px 5px;
	outline:none;
}
.chatinpbtn button{
	width:15%;
	height:50%;
	background:orange;
	color:white;
	border:none;
	font-size:29px;
	border-radius:4px 4px;
	outline:none;
	cursor:pointer;
}
.chatmessageReciever{
	max-width:125px;
	min-height:20px;
	display:table;
	padding:5px;
	background:blue;
	margin:10px 10px;
	border-radius:10px 10px;
	color:white;
	float:left;
}
.chatmessageSender{
	max-width:125px;
	min-height:20px;
	display:table;
	padding:5px;
	background:#ff3670;
	margin:10px 10px;
	border-radius:20px 20px;
	color:white;
	float:right;
	margin-top:45px;
	border-radius:10px 10px;
}
</style>
</head>
<body>

<div class='chatwall'>


<div class='header'>
<h2>COG</h2>
<div>
<?php
if(isset($_SESSION['uname'])){
echo "<a href='index.php'>Home</a>";
echo "<a href='logoutscript.php'>Logout</a>";
}else{
echo "<a href='login.php'>Login</a>";
echo "<a href='signup.php'>Signup</a>";
}

?>
</div>

</div>


<div class='chatbody'>

<div class='chatbox'>
<div class='chatheader'>
<h2>Ama247</h2>
</div>
<div class='chatcontent'>
<div class='chatmessageReciever'>
<p>Hello</p>
</div>
<div class='chatmessageSender'>
<p>Have you been going to martin's house</p>
</div>


</div>

<form method='POST' class='chatinpbtn'>
<input type='text' placeholder='Type...' autocomplete='off' name='chat'>
<button name='sendmssg'>O</button>
</form>






</div>

</div>

</div>

</body>
</html>