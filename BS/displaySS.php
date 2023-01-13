<?php 
	     require_once'connection.php';
		$result = $mysqli->query("SELECT * FROM member where product = 'SS' ") or die($mysqli->error);
	
	
	?>
	
