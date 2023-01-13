<?php 
$mysqli = new mysqli('localhost','root', '123456','db_ronex') or die(mysql_error($mysqli));
	
if (isset($_POST['save'])) 
{

    $idmembers = $_POST['idmember'];
	$product = $_POST['product'];
    $idmember = $product.''.$idmembers;
	$edate = $_POST['edate'];
	$mop = $_POST['mop'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$brgy = $_POST['brgy'];
	$city = $_POST['city'];
	$prov = $_POST['prov'];
	$birthdate = $_POST['birthdate'];
    $religion = $_POST['religion'];
    $occupation = $_POST['occupation'];
    $contact = $_POST['contact'];
    $type = $_POST['type'];
    $gender = $_POST['gender'];
    $payer = $_POST['payer'];
    $pcontact = $_POST['pcontact'];
    $bfname = $_POST['bfname'];
    $blname = $_POST['blname'];
    $bage = $_POST['bage'];
    $brelationship = $_POST['brelationship'];

    $b2fname = $_POST['b2fname'];
    $b2lname = $_POST['b2lname'];
    $b2age = $_POST['b2age'];
    $b2relation = $_POST['b2relation'];

    $cfname = $_POST['cfname'];
    $clname = $_POST['clname'];
    $cage = $_POST['cage'];
    $crelation = $_POST['crelation'];

    $coordinator = $_POST['coordinator'];
    $contractamount = $_POST['contractamount'];
    $status = $_POST['status'];
   

	$mysqli->query("INSERT INTO member (idmember,product,edate,mop,fname,mname,lname,brgy,city,prov,birthdate,religion,occupation,contact,type,gender,payer,pcontact,bfname,blname,bage,brelationship,b2fname,b2lname,b2age,b2relation,cfname,clname,cage,crelation,coordinator,contractamount,status) VALUES ('$idmember','$product', '$edate', '$mop', '$fname', '$mname', '$lname', '$brgy', '$city', '$prov', '$birthdate', '$religion', '$occupation', '$contact', '$type', '$gender', '$payer','$pcontact','$bfname','$blname','$bage','$brelationship','$b2fname','$b2lname','$b2age','$b2relation','$cfname','$clname','$cage','$crelation','$coordinator','$contractamount','$status')") or die($mysqli->error);





}else {
    header('Error');
  }

 ?>