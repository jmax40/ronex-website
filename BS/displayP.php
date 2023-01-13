<?php 
		
	     require_once'connection.php';
		
		$result = $mysqli->query("SELECT * FROM member") or die($mysqli->error);
	
	
	?>