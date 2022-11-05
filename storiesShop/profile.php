<?php
include('conn.php');
session_start();
if(isset($_SESSION['uname'])){

}else{
	header('location:login.php');
}

require_once('profilefuncs.php');
require_once('profiledbconn.php');
?>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width,initial-scale=1'>
<link rel='stylesheet' href='stylesheet.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>CrazyPoems</title>
</head>
<body>
<div class='profileWrapper'>
<div class='profileheader'>
<label>CoG</label>
<button id='addcog'>Add COG</button>
<a href='logoutscript.php'>Logout</a>
<a href='index.php'>Home</a>

</div>
<div class='mainprofile'>

<div class='profilebox'>

<div class='profilemenus'>
<div class='profilemenubtn'>
<button id='prf'>Profile</button>
<button id='mes'>Message</button>
<button id='com'>Comments</button>
<button id='allcog'>All COG </button>
</div>


</div>
<div class='profiledisplay'>

<!--add cog-->
<div class='div1'>
<form method='POST' enctype='multipart/form-data'>
<div class='title'>
<label>Title:</label><input type='text' placeholder='Story Title' id='titinp' name='title' value="<?php echo htmlspecialchars($title);?>">
<p style='text-align:right;position:relative;right:50px;' id='titleft'>0 of 20</p>
</div>
<div class='story'>
<p>Story:</p>
<textarea type='text' id='txtinp' name='project' value="<?php echo htmlspecialchars($project);?>"></textarea>
<p style='text-align:right;position:relative;right:50px;' id='txtleft'>0 of 10000</p>
</div>
<div class='imageupl'>
<p>Upload Cover Image:</p>
<input type='file' name='image' accept=".jpg, .jpeg, .png,.svg">
</div>
<button id='postbtn' name='postNow'>Post Now</button>
<?php if($checkSuccz==false){
	echo "<p style='color:red;'>".$err['errz']."</p>";
	}
		
	 ?>
</form>
</div>

<!--update profile-->
<div class='div7'>
<form method='POST'>
<h2>Edit Profile</h2>
<div class='title'>
<label>Username:</label><input type='text' placeholder='Username here' name='upuname'>
</div>
<div class='title'>
<label>Email:</label><input type='text' placeholder='Email here' name='upemail'>
</div>
<button id='postbtns' name='upsubmit'>Save Changes</button>
</form>
</div>



<!--update story-->
<div class='div6'>
<form method="POST">
<div class='title'>
<label>Title:</label><input type='text' id='titinpz' placeholder='Story Title' name='uptitle'>
<p style='text-align:right;position:relative;right:50px;' id='titleftz'>0 of 20</p>
</div>
<div class='story'>
<p>Story:</p>
<textarea id='txtinpz' name='uptxtinp'></textarea>
<p style='text-align:right;position:relative;right:50px;' id='txtleftz'>0 of 10000</p>
</div>
<div class='imageupl'>
<p>Upload Cover Image:</p>
<input type='file' name='upimage'>
</div>
<button id='postbtns' name='upPost'>Save Changes</button>
</form>
</div>


<!--message-->
<div class='div2'>
<p>Messages</p>
<div class='messagebox'>
<div class='messages'>
<p><span id='sender'>From:</span>COG</p>
<p id='message'>Chat Recieved:Welcome to COG</p>
<button>Chat</button>
</div>
</div>
</div>




<!--comment-->
<div class='div3'>
<p>Messages</p>
<div class='messagebox'>
<?php if($resrownum>0){
	foreach($resultz as $resxt){ ?>
<div class='messages'>
<p><span id='sender'>Sender:</span><?php echo $resxt['uname'];?></p>
<p><span id='sender' style='color:red;'>Project Title:</span><?php echo $resxt['title'];?></p>
<p id='message'><?php echo $resxt['comments'];?></p>
</div>
	<?php }}else{
		echo "<p>You Have No Comments Yet</p>";
	} ?>
</div>
</div>

<!--profile-->

<div class='div4'>
<h1><?php echo $fname ?></h1>
<h2><?php echo $uname ?></h2>
<h3><?php echo $email ?></h3>
<br>
<button id='signup'>Update</button>
<?php if($checkSuccz==true){
	echo "<p style='color:green;'>".$err['errz']."</p>";
	}else{
		echo "<p style='color:red;'>".$err['errz']."</p>";
	}
 if($checkSucc==true){
	echo "<p style='color:green;'>".$err['errs']."</p>";
	}else{
		echo "<p style='color:red;'>".$err['errs']."</p>";
	}

if(isset($_GET['success'])){
		echo "<p style='color:green;'>Message:Hurray!!!Upload Successful</p>";
		}
	?>
</div>


<!--all cog-->
<div class='div5'>
<p>All COG</p>
<div class='messagebox'>







<?php 
if($rownum>0){
	foreach($sb as $resb){?>
<div class='messagess'>
<p><span id='sender'>Title:</span style='color:yellow;'><?php echo $resb['title']; ?></p>
<div class='bbtn'>
<a href='profilestoryupdate.php?id=<?php echo $resb['id']; ?>' id='ed'><button  style='width:100%;background:white;color:black;box-shadow:none;' onclick='edit()' >Edit</button></a>
<form method='POST' id='del' style='background:white;box-shadow:none;'>
<input type='hidden' value="<?php echo $resb['id']; ?>" id='s' name='delinf'>
<button style='width:100%;background:orange;' name='delt'>Delete</button>
</form>
</div>
</div>
	<?php }
	}else{
	echo "<p>You Have No Records</p>";
	
}?>

<?



</div>
</div>







</div>

</div>

</div>

</div>
<script>
var addcog=document.querySelector('#addcog');
var mes=document.querySelector('#mes');
var prf=document.querySelector('#prf');
var allcog=document.querySelector('#allcog');
var ed=document.querySelector('#ed');
var signup=document.querySelector('#signup');
var div1=document.querySelector('.div1');
var div2=document.querySelector('.div2');
var div3=document.querySelector('.div3');
var div4=document.querySelector('.div4');
var div5=document.querySelector('.div5');
var div6=document.querySelector('.div6');
var div7=document.querySelector('.div7');
var com=document.querySelector('#com');
var textinp=document.querySelector('#txtinp');
var txtleft=document.querySelector('#txtleft');
var titinp=document.querySelector('#titinp');
var titleft=document.querySelector('#titleft');
var titinpz=document.querySelector('#titinpz');
var titleftz=document.querySelector('#titleftz');
var textinpz=document.querySelector('#txtinpz');
var txtleftz=document.querySelector('#txtleftz');


//story length
setInterval(function(){
var wordsLeft=textinp.value.length;
	
var totalwords=10000;
txtleft.textContent=wordsLeft+" Of 10000";
if(wordsLeft>10000){
	
	var ans=wordsLeft-totalwords;
txtleft.textContent=ans+' letters have exceeded the range';
txtleft.style.color='red';
}else{
	txtleft.textContent=wordsLeft+" Of 10000 ";
	txtleft.style.color='black';

}
},100);
	
	//title length
	setInterval(function(){
var wordsLeft=titinp.value.length;
	
var totalwords=20;
titleft.textContent=wordsLeft+" Of 20";
if(wordsLeft>20){
var ans=wordsLeft-totalwords;
titleft.textContent=ans+' letters have exceeded the range';
titleft.style.color='red';
}else{
	titleft.textContent=wordsLeft+" Of 20";
	titleft.style.color='black';

}
},100);
	
	
	
	
	
	
	setInterval(function(){
var wordsLeft=textinpz.value.length;
	
var totalwords=10000;
txtleftz.textContent=wordsLeft+" Of 10000";
if(wordsLeft>10000){
	
	var ans=wordsLeft-totalwords;
txtleftz.textContent=ans+' letters have exceeded the range';
txtleftz.style.color='red';
}else{
	txtleftz.textContent=wordsLeft+" Of 10000 ";
	txtleftz.style.color='black';

}
},100);
	
	//title length
	setInterval(function(){
var wordsLeft=titinpz.value.length;
	
var totalwords=20;
titleftz.textContent=wordsLeft+" Of 20";
if(wordsLeft>20){
var ans=wordsLeft-totalwords;
titleftz.textContent=ans+' letters have exceeded the range';
titleftz.style.color='red';
}else{
	titleftz.textContent=wordsLeft+" Of 20";
	titleftz.style.color='black';

}
},100);



	
	
	

var switcher=0;
addcog.addEventListener('click',()=>{
	switcher=0;
	if(switcher==0){
	div1.style.display='flex';
	div2.style.display='none';
		div5.style.display='none';
	div3.style.display='none';
	div7.style.display='none';
	div6.style.display='none';
	div4.style.display='none';
	mes.style.color='white';
	mes.style.background='orange';
	com.style.color='white';
	com.style.background='orange';
	prf.style.color='white';
	prf.style.background='orange';
		allcog.style.color='white';
	allcog.style.background='orange';
	}
});


mes.addEventListener('click',()=>{
	switcher=1;
	if(switcher==1){
	div1.style.display='none';
	div3.style.display='none';
	div4.style.display='none';
	div7.style.display='none';
	div6.style.display='none';
	div2.style.display='flex';
		div5.style.display='none';
	mes.style.color='orange';
	mes.style.background='white';
	com.style.color='white';
	com.style.background='orange';
	prf.style.color='white';
	prf.style.background='orange';
		allcog.style.color='white';
	allcog.style.background='orange';
	}
	
});

com.addEventListener('click',()=>{
	switcher=2;
	if(switcher==2){
	div1.style.display='nonw';
	div2.style.display='none';
	div7.style.display='none';
	div6.style.display='none';
		div4.style.display='none';
	div3.style.display='flex';
		div5.style.display='none';
	com.style.color='orange';
	com.style.background='white';
	mes.style.color='white';
	mes.style.background='orange';
	prf.style.color='white';
	prf.style.background='orange';
		allcog.style.color='white';
	allcog.style.background='orange';
	}
});

prf.addEventListener('click',()=>{
	switcher=3;
	if(switcher==3){
	div1.style.display='none';
	div2.style.display='none';
	div3.style.display='none';
	div6.style.display='none';
	div7.style.display='none';
	div5.style.display='none';
		div4.style.display='flex';
	mes.style.color='white';
	mes.style.background='orange';
	com.style.color='white';
	com.style.background='orange';
	prf.style.color='orange';
	prf.style.background='white';
	allcog.style.color='white';
	allcog.style.background='orange';
	}
});


allcog.addEventListener('click',()=>{
	switcher=4;
	if(switcher==4){
	div1.style.display='none';
	div2.style.display='none';
	div3.style.display='none';
	div4.style.display='none';
		div5.style.display='flex';
		div6.style.display='none';
		div7.style.display='none';
	mes.style.color='white';
	mes.style.background='orange';
	com.style.color='white';
	com.style.background='orange';
	prf.style.color='white';
	prf.style.background='orange';
	allcog.style.color='orange';
	allcog.style.background='white';
	}
});
ed.addEventListener('click',()=>{
	switcher=5;
	if(switcher==5){
	div6.style.display='flex';
	div1.style.display='none';
	div2.style.display='none';
		div5.style.display='none';
	div3.style.display='none';
	div4.style.display='none';
	div7.style.display='none';
	mes.style.color='white';
	mes.style.background='orange';
	com.style.color='white';
	com.style.background='orange';
	prf.style.color='white';
	prf.style.background='orange';
		allcog.style.color='white';
	allcog.style.background='orange';
	}
});

signup.addEventListener('click',()=>{
	switcher=5;
	if(switcher==5){
	div6.style.display='none';
	div1.style.display='none';
	div2.style.display='none';
		div5.style.display='none';
	div3.style.display='none';
	div4.style.display='none';
	div7.style.display='flex';
	mes.style.color='white';
	mes.style.background='orange';
	com.style.color='white';
	com.style.background='orange';
	prf.style.color='white';
	prf.style.background='orange';
		allcog.style.color='white';
	allcog.style.background='orange';
	}
});

</script>
<?php
include('footer.php');
?>