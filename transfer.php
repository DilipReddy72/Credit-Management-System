<?php
include 'connection.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Transfer Credits</title>
	<link rel="stylesheet" type="text/css" href="transfer1.css">
	
</head>
<body>

<center>
	<h1>Transfer Credits</h1>



	<form action="" method="GET">
		<div class="field"><input type="text" name="id" placeholder="ID:" required=""><br>
		<input type="text" name="name"  placeholder="Name:" required=""><br>
		<input type="text" name="credits"  placeholder="Credits:" required=""><br>
	</div>
	<div class="send"><input type="submit" name="submit" value="UPDATE DATA"></div>	
		
	</form>
</center>
<div class="back"> <a href="Users.php">View Users</a></div>

</body>
</html>

<?php

if(isset($_GET['submit'])) {
	$id = $_GET['id'];
	$credits = $_GET['credits'];

	$query = "UPDATE `my database` SET Credits ='$credits' WHERE ID = '$id' ";
	$data = mysqli_query($con,$query);

	if($data) {
		echo "<script>alert('Record Updated')</script>";
	}
	else{
		echo "<script>alert('Record Not Updated')</script>";
	}
}

?>