<?php 
$mysqli = new mysqli('localhost','root','123456','db_ronex') or die(mysql_error($mysqli));
	
if (isset($_POST['update'])) 
{


    
    $ornumber = $_POST['ornumber'];
	$amount = $_POST['amount'];
	$effectdate = $_POST['effectdate'];
	$duedate = $_POST['duedate'];
	$fullname = $_POST['fullname'];
	$price = $_POST['price'];
	$installment = $_POST['installment'];
	$aging = $_POST['aging'];
	$dueprice = $_POST['dueprice'];
	$address = $_POST['address'];
	$balance = $_POST['balance'];
  $pcontact = $_POST['pcontact'];
   
  
   

	$mysqli->query("INSERT INTO payment (ornumber,amount,effectdate,duedate,fullname,price,installment,aging,dueprice,address,balance,pcontact) VALUES ('$ornumber','$amount','$effectdate','$duedate','$fullname','$price','$installment','$aging','$dueprice','$address','$balance','$pcontact')") or die($mysqli->error);



}else {
    header('Error');
  }


 ?>

<?php
  // Connect to the database
  $mysqli = new mysqli('localhost','root', '123456','db_ronex') or die(mysql_error($mysqli));

  // Get the form data
  if (isset($_POST['update'])) 
	{
  $No =$_GET['id'];
  $installment =$_POST['installment'];
  $price = $_POST['price'];


  // Update the record in the database
  $query1 = "UPDATE member SET installment = installment + $installment,contractamount = contractamount - $price WHERE id = $No";

  $result = mysqli_query($mysqli,$query1);


  if ($result) 
  {
	  echo "Data updated";
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



<?php
  // Connect to the database
  $mysqli1 = new mysqli('localhost','root', '123456','db_ronex') or die(mysql_error($mysqli));

  // Get the form data
  if (isset($_POST['update'])) 
	{
  $No =$_GET['id'];
  $aging = $_POST['aging'];


  // Update the record in the database
  $query2 = "UPDATE member SET status = $aging WHERE id = $No";

  $result1 = mysqli_query($mysqli1,$query2);


  if ($result1) 
  {
	  echo "Data updated";
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