<?php 
	    require_once'connection.php';
		$result = $mysqli->query("SELECT * FROM employee where position = 'Manager' ") or die($mysqli->error);
	
	
	?>