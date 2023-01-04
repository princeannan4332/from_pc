<?php 
include('conn.php');
session_start();
if(isset($_SESSION['uname'])){
	
}else{
	header('location:index.php');
}

?>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width,initial-scale=1'>
<title>Cham Chat</title>
<style>
*{
	margin:0;
	font-family:trebuchet ms;
}
body{
display:flex;
align-items:center;
justify-content:center;
flex-direction:column;
background:black;
}
.header{
width:100%;
height:60px;

}

.header h2{
color:orange;
font-family:jokerman;
font-size:45px;
}
.chatbox{
width:100%;
height:545px;
display:flex;
align-items:center;
justify-content:center;
flex-direction:column;

}
.chatheader{
width:40%;
height:10%;
background:white;
display:flex;
align-items:center;
justify-content:center;
}
.chatcontent{
width:40%;
height:90%;
overflow-y:scroll;

}
.chatinpbtn{
width:40%;
height:50px;
position:fixed;
bottom:0px;

}
.chatinpbtn input{
width:72.5%;
height:50px;
border:none;
position:relative;
top:-7px;
outline:none;
}
.chatinpbtn button{
width:26%;
height:50px;
background:orange;
color:white;
font-size:32px;
border:none;
cursor:pointer;
outline:none;
}
@media screen and (max-width:900px){
.chatheader{
width:100%;

}

.chatcontent{
width:100%;

}
.chatinpbtn{
width:100%;

}
}
</style>
</head>
<body>




<div class='header'>
<h2>Cham</h2>


</div>





<div class='chatbox'>
<div class='chatheader'>
<h2 id='txt'></h2>
</div>
<div class='chatcontent'>


<!--
<div class='chatmessageReciever'>
<p id='txt'>Hello</p>
</div>
<div class='chatmessageSender'>
<p>Have you been going to martin's house</p>
</div>
-->

</div>

<form method='POST' class='chatinpbtn'>
<input type='text' placeholder='Type...' id='inp' autocomplete='off' name='chat'>
<button id='sendmssg'>O</button>
</form>







<script src='jquery.js'></script>
<script>
$(document).ready(function(){
	var url=document.URL;
	var getRecieverName=url.slice(url.lastIndexOf('=')+1);

$('#txt').html(getRecieverName);
	$('#sendmssg').click(function(e){
		e.preventDefault();
		var inp=$('#inp').val();
		
		if(inp==''){
			
		}else{
		$.ajax({
			url:'insertmessage.php',
			method:'POST',
			data:{
				reciever:getRecieverName,
				message:inp
				
			},
			dataType:'text',
			success:function(response){
			$('#inp').val('');
			}
			
			
			
		});
		}
		
	});
	
	
	setInterval(function(){
	$('.chatcontent').load('getmessages.php',{
		reciever:getRecieverName
	})
	},100);
	
	
});


</script>
</body>
</html>