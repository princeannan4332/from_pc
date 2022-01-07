<!DOCTYPE html>
<html lang="en">
<head>
<title>VimChat</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
@media screen and (max-width:900px){
	.header{
		width:100%;
		height:40px;
border-bottom:0.5px solid purple;
	top:0px;
	}
	.header h2{
		background:linear-gradient(#ff3670,purple);
-webkit-background-clip:text;
-webkit-text-fill-color:transparent;
-webkit-text-stroke:1px  white;
text-align:left;
font-family:trebuchet ms;
	}
.text{
width:50%;
float:left;
height:100%;
overflow:hidden;
}
.text h2{
	position:absolute;
	top:-10px;
}

.button{
width:50%;
float:left;
height:100%;
overflow:hidden;
}
#dark{
	background:black;
	border:none;
    box-shadow:0px 0px 2px 2px rgba(0,0,0,0.3);
	width:10%;
	padding:16px;
		position:relative;
		outline:none;
bottom:5px;
	margin:0px 5px auto;
	border-radius:50%;
	}
#light{
	background:white;
	box-shadow:0px 0px 2px 2px rgba(0,0,0,0.3);
	border:none;
	width:10%;
	padding:16px;
	outline:none;
	position:relative;
bottom:5px;
	margin:0px 3px auto;
	border-radius:50%;
	}
#menu{
	width:20%;
	background:-webkit-linear-gradient(18deg,#ff3670,purple,violet);
padding:10px;
font-family:trebuchet ms;
border:2px solid white;
cursor:pointer;
position:relative;
top:0px;
outline:none;
color:white;
border-radius:32px 32px
}
#blacktxt{
		background:linear-gradient(gold,yellow);
-webkit-background-clip:text;
-webkit-text-fill-color:transparent;
-webkit-text-stroke:1px gold;
text-align:left;
font-family:trebuchet ms;
}
#blackbtn{
	background:black;
	border:none;
    box-shadow:0px 0px 2px 2px white;
	width:10%;
	padding:16px;
		position:relative;
		outline:none;
bottom:5px;
	margin:0px 5px auto;
	border-radius:50%;
}
}

</style>
</head>
<body>
<div class="header" id="header">
<div class="text">
<h2 id="vimtxt">VimChat</h2>
</div>
<div class="buttons">
<button id="dark" onclick="dark()" ></button>
<button id="light" onclick="light()"></button>
<a href="members.php"><button id="menu">Mem</button></a>
</div>
</div>
<script>


</script>