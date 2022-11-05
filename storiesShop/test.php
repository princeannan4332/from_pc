<html>
<head>

</head>
<body>
<div id='mm'>
<?php echo rand(0,1000);?>
</div>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script>
setInterval(function(){	
$('#mm').load('#mm');	
},1000);
</script>
</body>
</html>