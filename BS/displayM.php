<?php 
	 require_once'connection.php';
		$result = $mysqli->query("SELECT * FROM member where product = 'M' ") or die($mysqli->error);
	
	
	?>