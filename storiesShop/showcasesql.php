<?php
$sqlls="SELECT uname,id,title,image from postspj Order by id desc limit 6";
$queryk=mysqli_query($conn,$sqlls);
$res=mysqli_fetch_all($queryk,MYSQLI_ASSOC);





?>