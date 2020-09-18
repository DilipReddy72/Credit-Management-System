<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Users List</title>
	<link rel="stylesheet" type="text/css" href="users.css">
	
</head>
<body>
	<div><h1>List of Users</h1></div>

<div class="filter">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Gmail</th>
					<th>Credits</th>
				</tr>	

				<?php
					$sql = "SELECT * FROM `my database`";
					$retr = $con -> query($sql);

					if ($retr -> num_rows > 0) {
						while($row = $retr -> fetch_assoc()){
							echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Gmail"]."</td><td>".$row["Credits"]."</td><td>";

						}
						echo "</table>";
					}
					else{
						echo "0 result";
					}
				?>
			</table>
			<div class="change"><a href="transfer.php">Transfer Credits</a></div>
			<div class="back"><a href="MainPage.php">Back</a></div>
</div>




</body>
</html>