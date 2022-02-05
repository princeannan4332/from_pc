<?php
$conn=mysqli_connect('localhost','realtest','realtest','test');
if($conn){
echo 'success';
}
else{
echo mysqli_connect_error();
}

?>