<?php 
include('showcasesql.php');
?>
<head>

</head>
<br>
<h2 style='text-shadow:1px 1px rgba(0,0,0,0.5);'>Latest</h2>

<main>
<button onclick='prev()'><</button>
<section>
<?php foreach($res as $re){?>
<div class='Slidercontainer'>

<div class='imageDisplay'>
<img src='uplimg/<?php echo $re["image"]; ?>'>
</div>
<div class='cardsoptions'>
<div class='cardText'>
<p><?php echo $re["title"]; ?></p>
<p style='color:grey;'>by <?php echo ' '.$re["uname"]; ?></p>
</div>
<div class='cardbutton'>
<a href='display.php?id=<?php echo $re["id"]?>'><button id='view' style='width:55px;height:50px;'>View</button></a>
</div>

</div>
</div>
<?php } ?>



</section>
<button onclick='next()'>></button>
</main>


<script>

var Slidercontainer=document.querySelectorAll('.Slidercontainer');
var forwards=document.querySelector('#forward');
var back=document.querySelector('#back');


//move slider
var moveslide=0;
function next(){
	moveslide++;
	for(var i=0;i<=5;i++ ){
		if(moveslide==0){Slidercontainer[i].style.left='280px';}
		if(moveslide==1){Slidercontainer[i].style.left='-410px'; }
		if(moveslide>=2){moveslide=1}
		
	}

		
}
function prev(){
	moveslide--;
	for(var i=0;i<=5;i++ ){
		if(moveslide==0){Slidercontainer[i].style.left='280px';}
		if(moveslide==1){Slidercontainer[i].style.left='-410px'; }
	if(moveslide<=0){moveslide=0}
	}
	
		
}

</script>