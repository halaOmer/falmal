<?php
session_start();
include "db.php";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$mem_id=mysqli_real_escape_string($con,$_POST['mem_id']);
//	$password=mysqli_real_escape_string($con,$_POST['password']);
	$result5 = mysqli_query($con,"SELECT * FROM member WHERE mem_id='$mem_id'");
	$c_rows = mysqli_num_rows($result5);
	if ($c_rows!=1) {
header("location: index.php?remark_login=failed");
} else
	$sql5="SELECT mem_id FROM member WHERE mem_id='$mem_id'";
	$result5=mysqli_query($con,$sql5);
	$row=mysqli_fetch_array($result5);
	$active=$row['active'];
	$count=mysqli_num_rows($result5);
	if($count==1) {
		$_SESSION['login_user']=$mem_id;
		header("location: store.php");
	}
}
?>
<?php/*
session_start();
include "db.php";
if($_SERVER["REQUEST_METHOD"] == "POST") {

	$mem_id=$_POST['mem_id'];
	$result = mysqli_query($con,"SELECT * FROM member WHERE mem_id='$mem_id'");
	$c_rows = mysqli_num_rows($result);
	if ($c_rows=0) {
header("location: index.php?remark_login=failed");
} else
	$sql="SELECT mem_id FROM member WHERE mem_id='$mem_id'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	$active=$row['active'];
	$count=mysqli_num_rows($result);
	if($count==1) {
		$_SESSION['login_user']=$mem_id;
		header("location: store.php");
	}
}
*/?>
