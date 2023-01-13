<?php 
	    require_once'connection.php';
		$result = $mysqli->query("SELECT * FROM member where product = 'LF' ") or die($mysqli->error);
	
	
	?>