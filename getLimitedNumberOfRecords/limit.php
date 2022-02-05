<?php 
require('conn.php');
$sql='SELECT name FROM realtest ORDER BY id DESC LIMIT 2';
$query=mysqli_query($conn,$sql);
$res=mysqli_fetch_all($query,MYSQLI_ASSOC);



?>
<html>
<body>
<?php foreach($res as $re){ ?>
<p><?php echo $re['name']; ?></p>
<?php } ?>



</body>
</html>