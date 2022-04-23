<?php
session_start();
include_once 'dbConfig.php'; 
if(isset($_POST['submit']))
{
    $user_id = $_POST['mem_id'];
 $result = mysqli_query($db,"SELECT * FROM member where mem_id='" . $_POST['mem_id'] . "'");
 $row = mysqli_fetch_assoc($result);
	$fetch_user_id=$row['mem_id'];
	$email_id=$row['address'];
	$password=$row['password'];
	if($user_id==$fetch_user_id) {
				$to = $email_id;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From: sit36111@gmail.com" . "\r\n" .
                "CC: somebodyelse@example.com";
                mail($to,$subject,$txt,$headers);
			}
				else{
					echo 'invalid userid';
				}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action='reset.php' method='post'>
<table cellspacing='5' align='center'>
<tr><td>user id:</td><td><input type='text' name='mem_id'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
</body>
</html>