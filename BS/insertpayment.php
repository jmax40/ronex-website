<?php 
    $mysqli = new mysqli('localhost','root','123456','db_ronex') or die($mysqli->error . ' ' . $mysqli->connect_error);

if (isset($_POST['update'])) 
{
    $idmember = $_POST['idmember'];
    $result = $mysqli->query("SELECT MAX(installment) as counter FROM payment where idmember ='$idmember'") or die($mysqli->error . ' ' . $mysqli->connect_error);
    $row = $result->fetch_assoc();
    $counter = $row["counter"];
    $ornumber = $_POST['ornumber'];
    $amount = $_POST['amount'];
    $effectdate = $_POST['effectdate'];


    $fullname = $_POST['fullname'];
    $price = $_POST['price'];
    $installment = max(0, ++$counter + $_POST['installment'] - 1); //increment the counter by input amount
    $product = $_POST['product'];
    $aging = $_POST['aging'];
    $dueprice = $_POST['dueprice'];
    $address = $_POST['address'];
    $total = $_POST['total'];
$balance = ($total -  $_POST['minusprice'] - $_POST['price']) < 0 ? 0 : ($total - $_POST['minusprice'] - $_POST['price']);

    $pcontact = $_POST['pcontact'];
    $comm = $_POST['comm'];
    $ncomm = $_POST['ncomm'];
    $coordinator = $_POST['coordinator'];
    $date = $_POST['date'];
    $modetag = $_POST['modetag'];



    // Connect to the database
$conn = mysqli_connect('localhost','root','123456','db_ronex');
// Check if data for the specific ID exists
$query = "SELECT * FROM payment WHERE idmember ='$idmember'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    
    $duedate = $_POST['duedate'];
  // Data exists
 


} else {
  // No data exists


 $number1 = 'M';
 $number2 = 'LF';
 $number3 = 'SS';
 $number4 = 'SSP';

  if ($product == $number1) {
     // This is for M condition


    
  $number1 = 'M';
  $number2 = 'Q';
  $number3 = 'SA';
  $number4 = 'A';
  $number5 = 'SC'; 
      

if ($modetag == $number1) {
  $duedate = $_POST['duedate'];
  

} elseif ($modetag   == $number2) {

  $duedate = $_POST['duedate'];
  $days = 20;
  $duedate = new DateTime($duedate);
  $duedate->modify("+{$days} days");
  $duedate = $duedate->format('Y-m-d');

 

}  elseif ($modetag   == $number3) {

  $duedate = $_POST['duedate'];
  $days = 30;
  $duedate = new DateTime($duedate);
  $duedate->modify("+{$days} days");
  $duedate = $duedate->format('Y-m-d');

}  elseif ($modetag == $number4) {
    $duedate = $_POST['duedate'];

  $days = 60;
  $duedate = new DateTime($duedate);
  $duedate->modify("+{$days} days");
  $duedate = $duedate->format('Y-m-d');


}  elseif ($modetag   == $number5) {


  $duedate = $_POST['duedate'];


} 
else {
    echo "";
   
}
    
  
  } elseif ($product == $number2) {
    // This is for LF condition
  
     
    $number1 = 'M';
    $number2 = 'Q';
    $number3 = 'SA';
    $number4 = 'A';
    $number5 = 'SC'; 
        
  
  if ($modetag == $number1) {
    $duedate = $_POST['duedate'];
    
  
  } elseif ($modetag   == $number2) {
  
    $duedate = $_POST['duedate'];
    $days = 30;
    $duedate = new DateTime($duedate);
    $duedate->modify("+{$days} days");
    $duedate = $duedate->format('Y-m-d');
  
   
  
  }  elseif ($modetag   == $number3) {
  
    $duedate = $_POST['duedate'];
    $days = 50;
    $duedate = new DateTime($duedate);
    $duedate->modify("+{$days} days");
    $duedate = $duedate->format('Y-m-d');
  
  }  elseif ($modetag == $number4) {
      $duedate = $_POST['duedate'];
  
    $days = 60;
    $duedate = new DateTime($duedate);
    $duedate->modify("+{$days} days");
    $duedate = $duedate->format('Y-m-d');
  
  
  }  elseif ($modetag   == $number5) {
  
  
    $duedate = $_POST['duedate'];
  
  
  }else{


  }  
  
  }elseif ($product == $number3) {
    // This is for SS condition

     $duedate = $_POST['duedate'];

  
  }elseif ($product == $number4) {
    // This is for SS condition

     $duedate = $_POST['duedate'];

  
  }else{


  }













}





    $No = $_POST['No'];



    $mysqli->query("INSERT INTO payment (idmember,ornumber,amount,effectdate,duedate,fullname,price,installment,product,aging,dueprice,address,balance,pcontact,total,comm,ncomm,coordinator,date,modetag,No) VALUES ('$idmember','$ornumber','$amount','$effectdate','$duedate','$fullname','$price','$installment','$product','$aging','$dueprice','$address','$balance','$pcontact','$total','$comm','$ncomm','$coordinator','$date','$modetag','$No')") or die($mysqli->error);
    
    header("Location: Maharlikapayment.php?GetID=$No");
}else {
    header('Error');
  }
?>



