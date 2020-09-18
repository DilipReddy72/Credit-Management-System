<?php

	$username = "root";
	$password = "";
	$server = 'localhost';
	$db = "credits";	

	$con = mysqli_connect($server,$username,$password,$db);

	if ($con) {
		// echo "Connection Successful";
	?>
		
	<?php
	}else{
		echo "No connection";
	}

?>
