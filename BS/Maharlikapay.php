
<?php 
$mysqli = new mysqli('localhost','root', '123456','db_ronex') or die(mysql_error($mysqli));
  $No = $_GET['GetID'];
	$query = "SELECT * FROM member WHERE id = $No";
	$result = mysqli_query($mysqli,$query);
	while ($row=mysqli_fetch_assoc($result))
	{
   
  $No = $row['id'];
  $mop = $row['mop'];
  $mop1 = $row['mop'];
	$edate = $row['edate'];
  $price = $row['price'];
	$fname =$row['fname'];
	$mname = $row['mname'];
	$lname = $row['lname'];
	$brgy = $row['brgy'];
	$city = $row['city'];
	$prov = $row['prov'];
  $pcontact = $row['pcontact'];
  $coordinator = $row['coordinator'];
  $contractamount = $row['contractamount'];
  $value_from_db = "1";
  $future_date = date('Y-m-d', strtotime($edate. '+'.$mop1.' days'));

    
$current_date = date("Y-m-d");
$daysPastDue = floor((strtotime($current_date) - strtotime($actual_due_date = $row["edate"])) / (60 * 60 * 24));

$number1 = 30;
$number2 = 90;
$number3 = 180;
$number4 = 360;
$number5 = 1825;
$price1 = 380;
$price2 = 360;
$price3 = 350;
$price4 = 340;
$price5 = 18500;

if ($mop == $number1) {
  
  $total = $mop / 30;
  $equals = $total * $price1;

} elseif ($mop  == $number2) {

  $total = $mop / 30;
  $equals = $total * $price2;

}  elseif ($mop  == $number3) {
  $total = $mop / 30;
  $equals = $total * $price3;
}  elseif ($mop  == $number4) {
  $total = $mop / 30;
  $equals = $total * $price4;
}  elseif ($mop  == $number5) {
  $total = $mop / 30;
  $equals = $total * $price5;
} 
else {
    echo "";
   
}



	}

 ?>








<!DOCTYPE html>
 <html>
 <head>
 	<title>Update</title>
   <link rel="stylesheet" a href="CSS/bootstrap.css">

 </head>
 <style>
.gradient-bg-blue {
    background: linear-gradient(to right, #0000ff, #00ffff);
    color:white;
}
.rounded-button {
  padding: 10px 20px; /* this sets the padding of the button */
  border-radius: 30px; /* this makes the button rounded */
  background: linear-gradient(to right,#00ffff, #00ffff); /* this creates the gradient effect */
  color: white; /* this sets the text color of the button */
  font-size: 12px; /* this sets the font size of the button text */
}
input[placeholder] {
  text-align: center;
}




 </style>

 <body >


 
    
 
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>

		<div class="row">
			 <div class="col-lg-4 m-auto"  >
				<div class="card mt-5" style = "background: linear-gradient(to right,#09192A, #09192A);">

   
<br>
<br>

			
						<form  id="form1" action="insertpayment.php?id=<?php echo $No ?>" method="post" >
                
              
          
<center>

                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;"><label style="color: red;font-size:20px;"></label><input style="width:270px;" type="text" placeholder="Input OR Number" name="ornumber" ></span></p><br>
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;"><label style="color: red;font-size:20px;"></label><input style="width:270px;" type="text" placeholder="Input Amount " name="amount" ></span></p><br> 
                
                
      

                <input type="date" id="date" name="effectdate" value="<?php echo $edate ?>">
                <br>

               

                <input type="date" id="futureDate" name="duedate" value="<?php echo $future_date ?>">
                <br>




                
                <input type="text" name="fullname" value="<?php echo $fname. " " .$mname." ".$lname ?>"/> 
                <br>

                <?php if($value_from_db >= 12){ ?>
               <label>Input field: </label>
               <input type="text" name="price" value="<?php echo $price ?>"/> 
               <br>
               <?php }else{ ?>
               <input type="text" name="price" value="<?php echo $price ?>"/>
               <?php } ?>
  
                
<br>




<!-- Aging 1-30 days and 31- 60 days -->


 <input type="text" name="dueprice" value="<?php echo $price ?>"/>
 <br>
 <br>
 <input type="text" name="address" value="<?php echo $brgy. " " .$city." ".$prov  ?>"/>
 <br>
 <input type="text" name="balance" value="<?php echo $contractamount ?>"/>

 <br>
 <input type="text" name="pcontact" value="<?php echo $pcontact ?>"/>
              
 <br>
               <input type="text"  value="<?php echo $equals ?>">



               <br>
<?php 

if ($daysPastDue >= 60 && $daysPastDue <= 1000) {
  echo '<input type="text" name="aging"  placeholder = "60- up days" ';
} else if ($daysPastDue >= 31 && $daysPastDue <= 60) {
  echo '<input type="text" name="aging"   placeholder = "1-30 days" >';
}else if ($daysPastDue >= 1 && $daysPastDue <= 30) {
  echo '<input type="text" name="aging"    placeholder = "1-30 days" >';
}  else {
  echo '<input type="text" name="aging"   placeholder = "No aging " >';
}

?>
 <br>

  <input type="text" name="installment" placeholder="1" /> 





            </form>

            

            <br>
            <br>



<button class="rounded-button" name="update" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pay Now &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button> ; <br><br> 
<button type="button" href = "Maharlika.php" href = "listmembers.php" class="rounded-button" name="update">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cancel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button> ; <br><br>
        











 </body>





 </html>