<?php 
	     require_once'connection.php';
		$result = $mysqli->query("SELECT * FROM member where product = 'SSP' ") or die($mysqli->error);
	
	
	?>
	
