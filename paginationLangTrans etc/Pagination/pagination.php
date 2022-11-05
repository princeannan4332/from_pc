<?php
include('conn.php');
if(isset($_GET['page'])){
	$page=$_GET['page'];
}else{
	$page=1;
}

$num_items_on_page=4;
$start_num=($page-1)*4;


$sql="SELECT * from pagination limit $start_num,$num_items_on_page";
$res=mysqli_query($conn,$sql);
$ans=mysqli_fetch_all($res,MYSQLI_ASSOC);
?>
<html>
<head>
<title>Pagination</title>
</head>
<body>
<?php foreach($ans as $r){ ?>
<p><?php echo $r['name'];?></p>
<?php } ?>
<?php
$sqls="SELECT * FROM pagination";
$queryz=mysqli_query($conn,$sqls);
$number_of_records=mysqli_num_rows($queryz);
$totalPages=ceil($number_of_records/$num_items_on_page); 
if($page>1){
		echo "<a href='pagination.php?page=".($page-1)."'>Prev</a>";
}
for($i=1;$i<$totalPages;$i++){
	echo "<a href='pagination.php?page=".$i."'>".$i."</a>";
}
if($i>$page){
	echo "<a href='pagination.php?page=".($page+1)."'>next</a>";
}

?>
</body>
</html>