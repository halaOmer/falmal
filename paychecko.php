<?php
$localhost = "localhost";
$username = "falmalco_falmal";
$password = "Fd[G1w1OG#3~";
$dbname = "falmalco_falmal";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
    header('Content-Type: text/html; charset=utf-8');
}
$sql = "SELECT * FROM delevery";
if( isset($_GET['search']) ){
    $ordercode = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM delevery WHERE ordercode ='$ordercode'";
}
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>Basic Search form using mysqli</title>
<link rel="stylesheet" type="text/css"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div class="container">
<label>Search</label>
<form action="pychecko.php" method="GET">
<input type="text" placeholder="Type the name here" name="search">&nbsp;
<input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
</form>
<h2>List of members</h2>
<table class="table table-striped table-responsive">
<tr>
<th>ID</th>
<th>mem_id</th>
<th>order id</th>
<th>image of payment</th>

</tr>
<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['mem_id']; ?></td>
     <td><?php echo $row['ordercode']; ?></td>
    <td><? echo "<img src='images/".$row["image2"]."'  width= 200px height 200px >"; ?></td>
   
   
    </tr>
    <?php
}
?>
</table>
</div>
</body>
</html>