<?php 

	require_once'process.php';

	if (isset($_POST['update'])) 
	{
	$No = $_GET['id'];
    $product =  $_POST['product'];
	$edate =  $_POST['edate'];
	$mop =  $_POST['mop'];
	$fname = $_POST['fname'];
	$mname =  $_POST['mname'];
	$lname =  $_POST['lname'];
	$brgy =  $_POST['brgy'];
	$city =  $_POST['city'];
	$prov =  $_POST['prov'];
	$birthdate =  $_POST['birthdate'];
    $religion =  $_POST['religion'];
    $occupation =  $_POST['occupation'];
    $contact =  $_POST['contact'];
    $type =  $_POST['type'];
    $gender =  $_POST['gender'];
    $payer =  $_POST['payer'];
    $pcontact =  $_POST['pcontact'];
    $bfname = $_POST['bfname'];
    $blname =  $_POST['blname'];
    $bage =  $_POST['bage'];
    $brelationship = $_POST['brelationship'];
    $coordinator =  $_POST['coordinator'];



		$query = "UPDATE member SET  id ='".$No."',product='".$product."',edate='".$edate."',mop='".$mop."',fname='".$fname."',mname='".$mname."',lname='".$lname."',brgy='".$brgy."',city='".$city."',prov='".$prov."',birthdate='".$birthdate."',religion='".$religion."',occupation='".$occupation."',contact='". $contact."',type='".$type."',gender='". $gender."',payer='".$payer."',pcontact='".$pcontact."',bfname='".$bfname."',blname='".$blname."',bage='".$bage."',brelationship='".$brelationship."',coordinator='".$coordinator."' WHERE id = '".$No."'";
		$result = mysqli_query($mysqli,$query);

		if ($result) 
		{
			header("location:LaFamilia.php");
		}
		else
		{
			echo "Please check your Query";
		}

	}
	else
	{
		echo "ERROR!";
	}

 ?>