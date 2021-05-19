<?php

include "dp.php";

$mail=$_POST['Email'];
$psw=$_POST['pasw'];

$sql="select * from signin where email='$mail' and psw='$psw'";

$result=mysqli_query($con,$sql);

$count=mysqli_num_rows($result);

if($count>0){
	header("location:restaurant.html");
}else{
	header("location: login.html");
}
?>