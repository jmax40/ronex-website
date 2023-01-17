<?php
  // Connect to the database
  $mysqli = new mysqli('localhost','root', '123456','db_ronex') or die(mysql_error($mysqli));

  // Get the form data
  $No =$_GET['id'];
  $status =$_POST['status'];
  $installment =$_POST['installment'];
  $price = $_POST['price'];

  // Update the record in the database
  $query = "UPDATE member SET installment = installment + $installment, contractamount = contractamount -  $price, status = 'age' WHERE id = $No";

  $result = mysqli_query($mysqli,$query);


  if ($result) 
  {
	  echo "Data updated";
  }
  else
  {
	  echo "Please check your Query";
  }
?>



