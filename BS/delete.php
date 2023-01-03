<?php 

	require_once('process.php');

	if (isset($_GET['Del'])) 
	{
		$No = $_GET['Del'];
		$query = "DELETE FROM member WHERE id = $No";
		$result = mysqli_query($mysqli,$query);

		if ($result) 
		{
			header("location:listmembers.php");
		}
		else
		{
			echo "Please check you Query";
		}

	}

 ?>