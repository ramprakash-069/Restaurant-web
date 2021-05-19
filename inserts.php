<?php

include "dp.php";

$un=$_POST['uname'];
$email=$_POST['email'];
$pwd=$_POST['psw'];

$sql="insert into signin(uname,email,psw) values ('$un','$email','$pwd')";

$result=mysqli_query($con,$sql);
if ($result) {
	header("location: login.html");
	# code...
}else{
	echo "error";
}


?>