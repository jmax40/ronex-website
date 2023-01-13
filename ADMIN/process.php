<?php 
$mysqli = new mysqli('localhost','root', '123456','db_ronex') or die(mysql_error($mysqli));
	
if (isset($_POST['save'])) 
{

    $fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$birthdate = $_POST['birthdate'];
	$age = $_POST['age'];
    $address = $_POST['address'];
	$gender = $_POST['gender'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$branch = $_POST['branch'];
	$position = $_POST['position'];


	$mysqli->query(" INSERT INTO employee (fname,mname,lname,birthdate,age,address,gender,username,password, cpassword, branch, position) VALUES ('$fname','$mname','$lname','$birthdate','$age','$address','$gender','$username','$password','$cpassword','$branch','$position')") or die($mysqli->error);



}else {
    header('Error');
  }

 ?>