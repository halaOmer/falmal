<?php
session_start();
include "db.php";
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($con,"select username,mem_id from member where username='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['username'];
$loggedin_id=$row['mem_id'];
if(!isset($loggedin_session) || $loggedin_session==NULL) {
	echo "Go back";
//header("Locam memproducts.php");
header("location : memproducts.php");
}
?>