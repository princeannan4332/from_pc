<?php
include('conn.php');
session_start();
if(isset($_SESSION['uname'])){

}else{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<title>Ghost Tears</title>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width,initial-scale=1'>
<link rel='stylesheet' href='style.css'>
<style>
body{
	flex-direction:column;
}
</style>
</head>
<body>

<div class='userScores'>
<label>Your Scores</label>
<h2>0</h2>
</div>





<div class='buttons'>
<button id='rock'>Rock</button>
<button id='paper'>Paper</button>
<button id='scissors'>Scissors</button>
</div>



<div class='x'>

</div>






<script src='jquery.js'></script>
<script>

$(document).ready(function(){
	var url=document.URL;
	var opponent=url.split('').slice(url.indexOf('=')+1).join('');

	
	
	$('#rock').click(function(){
		var rock='Rock';
		$.ajax({
			url:'challenge.php',
			method:'POST',
			data:{
				fname:opponent,
				rock:rock
			},
			dataType:'text',
			success:function(res){
				if(res=="Waiting for Player 2"){
					alert(res);
				}
			}
			
		})
	});
	$('#paper').click(function(){
		var paper='Paper';
		$.ajax({
			url:'paper.php',
			method:'POST',
			data:{
				fname:opponent,
				paper:paper
			},
			dataType:'text',
			success:function(res){
				if(res=="Waiting for Player 2"){
					alert(res);
				}
			}
			
		})
	});
	$('#scissors').click(function(){
		var scissors='Scissors';
		$.ajax({
			url:'scissors.php',
			method:'POST',
			data:{
				fname:opponent,
				scissors:scissors
			},
			dataType:'text',
			success:function(res){
			if(res=="Waiting for Player 2"){
					alert(res);
				}
			}
			
		})
	});
	
	

	
	setInterval(function(){
	$('.userScores').load('checkstat.php',{fname:opponent});
	},1000);
	
	
	
	
	
	
	
	
	
	
});


</script>

</body>
</html>