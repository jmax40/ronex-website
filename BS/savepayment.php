<?php 
$mysqli = new mysqli('localhost','root', '123456','db_ronex') or die(mysql_error($mysqli));
	
if (isset($_POST['save'])) 
{

    
	$or = $_POST['or'];
    $amount = $_POST['amount'];
    $name = $_POST['name'];
	$installment = $_POST['installment'];
	$product = $_POST['product'];
	$balance = $_POST['balance'];
	$agent = $_POST['agent'];

	
   

	$mysqli->query("INSERT INTO payment (or, amount, name,installment, product,balance,agent) VALUES ('$or','$amount','$name','$installment','$product','balance','agent')") or die($mysqli->error);





}else {
    header('Error');
  }

 ?>