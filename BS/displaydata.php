<?php 
		$mysqli = new mysqli('localhost', 'root', '123456', 'db_ronex') or die(mysql_error($mysqli));
		$result = $mysqli->query("SELECT * FROM member") or die($mysqli->error);
	
	
	?>