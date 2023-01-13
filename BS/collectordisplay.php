<?php 
	    require_once'connection.php';
		$result = $mysqli->query("SELECT * FROM employee where position = 'Agent' ") or die($mysqli->error);
	
	
	?>