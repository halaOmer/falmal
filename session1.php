<?php
session_start();
include "db.php";
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($con,"select mem_id from member where mem_id='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session1=$row['mem_id'];
//$loggedin_id1=$row['mem_id'];
if(!isset($loggedin_session1) || $loggedin_session1==NULL) {
	echo "Go back";
//header("Locam memproducts.php");
header("location: index.php");
}
?>
<?php/*
session_start();
include "db.php";
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($con,"select userame, mem_id from member where mem_id='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session1=$row['mem_id'];
$loggedin=$row['username'];
if(!isset($loggedin_session) || $loggedin_session==NULL) {
	echo " ";
header("location: index.php");
}
*/?>