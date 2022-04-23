<?php 
session_start();
include "db.php";
$username=$_POST['username'];
$result = mysqli_query($con,"SELECT * FROM member WHERE username='$username'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
 header("location: memproducts.php?remarks=failed"); 
}else {
 $fname=mysqli_real_escape_string($con,$_POST['fname']);
 $lname=mysqli_real_escape_string($con,$_POST['lname']);
// $address=mysqli_real_escape_string($con,$_POST['address']);
 $username=mysqli_real_escape_string($con,$_POST['username']);
 $password=mysqli_real_escape_string($con,$_POST['password']);
// $delevery=mysqli_real_escape_string($con,$_POST['delevery']);
//$agree=mysqli_real_escape_string($con,$_POST['agree']);
$location=mysqli_real_escape_string($con,$_POST['location']);
$phone=mysqli_real_escape_string($con,$_POST['phone']);
//$funds=mysqli_real_escape_string($con,$_POST['fund']);
 if(mysqli_query($con,"INSERT INTO member(fname, lname, username, password, location, phone)VALUES('$fname', '$lname', '$username', '$password', '$location', '$phone')")){ 
   //  $sql4 = "INSERT INTO stores (storename) VALUES ('$username')"; 
     //	if(mysqli_query($con, $sql4));{
 header("location: memproducts.php?remarks=success");
// }
    
}else{
	 $e=mysqli_error($con);
header("location: memproducts.php?remarks=error&value=$e");
 }
  }
?>