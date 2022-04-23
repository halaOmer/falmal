<?php
session_start();
include "db.php";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$result = mysqli_query($con,"SELECT * FROM member WHERE username='$username' and password='$password'");
	$c_rows = mysqli_num_rows($result);
	if ($c_rows!=1) {
header("location: memproducts.php?remark_login=failed");
} else
	$sql="SELECT mem_id FROM member WHERE username='$username' and password='$password'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	$active=$row['active'];
	$count=mysqli_num_rows($result);
	if($count==1) {
		$_SESSION['login_user']=$username;
		header("location: welcome.php");
	}
}
?>