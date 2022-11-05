<?php
include('header.php');
include('displaysql.php');

?>
<html>
<head>
<style>
.displayboards{
	width:100%;
	min-height:80vh;
	display:flex;
	justify-content:center;
	align-itema:center;
	position:relative;
	top:90px;
}
.infodisplay{
	width:50%;
	min-height:70vh;
	box-shadow:0px 0px 2px 2px rgba(0,0,0,0.4);
	border:1px solid black;
	border-radius:6px 6px;
	overflow:hidden;
	background:white;
}
.infoheader{
	width:100%;
	height:30%;
	background:white;
}
.infopicsec{
	width:40%;
	height:100%;
	background:blue;
	float:left;
	display:flex;
	justify-content:center;
	align-items:center;
	background:white;
}
.infoheadertxt{
	width:60%;
	height:100%;
	background:white;
	float:left;
}
.infobody{
	width:100%;
	height:70%;
	background:white;
	display:flex;
	justify-content:center;
	align-items:start;
}

.infopic{
	width:67%;
	height:95%;
	border-radius:100%;
	background:orange;
	overflow:hidden;
}
.infoheadertxt h2{
		position:relative;
	top:50px;
}
.infoheadertxt p{
	position:relative;
	top:50px;
	color:orange;
}
h2{
	font-family:jokerman;
	color:black;

}
p{
	font-family:trebuchet ms;
	
}
.infopic img{
	width:100%;
	height:100%;
}
.infotext{
	width:90%;
	height:100%;
	background:white;
}
.commentboxboard{
	width:100%;
	height:40vh;
	background:red;
	position:relative;
	top:130px;
	background:white;
		display:flex;
	justify-content:center;
	align-items:center;
	flex-direction:column;
}
.commentboxboard h2{
	color:black;
}
.commentbox{
	width:50%;
	height:100%;
	box-shadow:0px 0px 2px 2px rgba(0,0,0,0.4);
	border:1px solid black;
	border-radius:6px 6px;
	overflow-y:scroll;
	background:white;
	display:flex;
	flex-direction:column;
	justify-content:space-between;
	align-items:center;
}
.commentmessage{
	width:97%;
	height:30%;
	background:white;

	display:flex;
	justify-content:space-around;
	align-items:center;
	margin-top:10%;

}
.comtxt{
	width:100%;
	height:20%;
	background:white;
	display:flex;
	justify-content:center;
	align-items:center;

}
.namesec{
	width:30%;
	height:100%;
	background:white;
	display:flex;
	justify-content:center;
	align-items:center;
	color:orange;
}

.messagesec{
	width:70%;
	height:100%;


}
#mt{
	color:orange;
}
#mm{
	color:black;
		background:orange;
		padding:5px;
			border-radius:5px 5px;
			border:3px solid white;
}
.formdiv{
	width:100%;
	height:22vh;
	display:flex;
	justify-content:center;
	align-items:center;

margin-top:160px;
}
.fom{
	width:50%;
	height:100%;
	display:flex;
	flex-direction:column;
	justify-content:space-between;


}
.fom textarea{
	width:100%;
	height:65%;
	border:0.6px solid black;
	border-radius:1px 0px 1px 0px rgba(0,0,0,0.3);
		outline:none;
}
.fom button{
	width:30%;
	height:35%;
	margin:5px 5px;
	position:relative;
	left:350px;
	cursor:pointer;
	border:none;
	border-box:1px 0px 1px 0px rgba(0,0,0,0.3);
	color:white;
	background:blue;
	border-radius:4px 4px;
	outline:none;
}
.convcont{
	width:10%;

	height:40px;
		border-radius:4px 4px;
		border-box:1px 0px 1px 0px rgba(0,0,0,0.3);
		overflow:hidden;
		position:fixed;
		top:100px;
		
}
.convcont button{
	width:100%;
	height:100%;
	border:none;
	border-box:1px 0px 1px 0px rgba(0,0,0,0.3);
	color:white;
	background:orange;
	border-radius:4px 4px;
	outline:none;
	cursor:pointer;
}

@media screen and (max-width:900px){
	
.infodisplay{
	width:100%;
}
.commentbox{
	width:90%;
}
.infoheadertxt h2{
		position:relative;
	top:10px;
}
.infoheadertxt p{
	position:relative;
	top:10px;
	color:orange;
}
.fom{
	width:90%;
}
.fom button{
	left:230px;
}



}
</style>
</head>
<body>
<div class='displayboards'>

<div class='infodisplay'>

<div class='infoheader'>

<div class='infopicsec'>
<?php if($resx){ ?>
<div class='infopic'>
<img src='uplimg/<?php echo $resx["image"];?>'>
</div>

</div>
<div class='infoheadertxt'>

<h2><?php echo $resx["title"];?></h2>
<p>Author:<?php echo ' '.$resx["uname"];?></p>
<input type='hidden' value="<?php echo ' '.$resx["uname"];?>" name='auth'>
</div>

</div>

<div class='infobody'>
<div class='infotext'>
<p id='inftxtx'><?php echo $resx["project"]; ?></p>
</div>
<?php } ?>
</div>

</div>

</div>

<div class='commentboxboard'>

<div class='commentbox'>
<div class='comtxt'>
<h2>Comment</h2>
</div>
<?php foreach($resxz as $ress){?>
<div class='commentmessage'>
<p id='mt'><?php echo $ress['uname'] ?></p>

<p id='mm'><?php echo $ress['comments'] ?></p>

</div>
<?php } ?>








</div>

</div>




</div>
</div>

<div class='formdiv'>
<form method='POST' action='' class='fom'>
<textarea name='coms'></textarea>
<button name='subcom'>Submit</button>
</form>
</div>
<?php if($resx){ ?>
<div class='convcont'>
<button>Start Conversation</button>
</div>
<?php } ?>
<script>
	var inftxtx=document.querySelector('#inftxtx');
var inftextx=document.querySelector('.infotext');

setInterval(function(){

	if(inftxtx.innerHTML.length>1150){
		inftextx.style.overflowY='scroll';
	}
},100);





</script>



<?php include('footer.php'); ?>
