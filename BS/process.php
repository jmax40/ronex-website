<?php 
$mysqli = new mysqli('localhost','root', '123456','db_ronex') or die(mysql_error($mysqli));


if (isset($_POST['save'])) 
{


	$productall = $_POST['product'];
	$edate = $_POST['edate'];
	$mop = $_POST['mop'];


  $result = $mysqli->query("SELECT MAX(idmember) as counter FROM member where product = '$productall'") or die($mysqli->error);
  $row = $result->fetch_assoc();

  // Get the current maximum idmember value
  $max_idmember = $row["counter"];

  // Extract the numeric part of the idmember
  preg_match('/\d+/', $max_idmember, $matches);
  $counter = (int)$matches[0] + 1;

  $product1 = "M";
  $product2 = "LF";
  $product3 = "SS";
  $product4 = "SSP";


  if ($productall ==  $product1) {

  $product = "M";
  $idmember = "M-" . sprintf("%04d", $counter);
  $counter++;

  $number1 = 30;
  $number2 = 90;
  $number3 = 180;
  $number4 = 360;
  $number5 = 1800;

  
  if ($mop == $number1) {
   

      $modetag = "M";
      $contractamount = "22800";
      $price = "380";

   
    
    } elseif ($mop  == $number2) {
     
    

      $modetag = "Q";
      $contractamount = "21600";
      $price = "1080";
    
    }  elseif ($mop  == $number3) {
    

      $modetag = "SA";
      $price = "2100";
      $contractamount = "21000";
      
    }  elseif ($mop  == $number4) {
      
    
      $modetag = "A";
      $price = "4080";
      $contractamount = "20400";
      
    
    }  elseif ($mop  == $number5) {
     

      $modetag = "SC";
      $contractamount = "18500";
      $price = "18500";
     
    } 
    else {
        echo "";
       
    }





  } elseif ($productall  == $product2) {
  
  $product = "LF";
  $idmember = "LF-" . sprintf("%04d", $counter);
  $counter++;
  
  $number1 = 30;
  $number2 = 90;
  $number3 = 180;
  $number4 = 360;
  $number5 = 1800;

  
  if ($mop == $number1) {


      $modetag = "M";
      $contractamount = "27600";
      $price = "460";

   
    
    } elseif ($mop  == $number2) {
      
    
      $modetag = "Q";
      $contractamount = "25800";
      $price = "1290";
    
    }  elseif ($mop  == $number3) {
     
      $modetag = "SA";
      $price = "2460";
      $contractamount = "24600";
      
    }  elseif ($mop  == $number4) {
    
      $modetag = "A";
      $price = "4800";
      $contractamount = "24000";
      
    
    }  elseif ($mop  == $number5) {
 

      $modetag = "SC";
      $contractamount = "22080";
      $price = "22080";
     
    } 
    else {
        echo "";
       
    }

  
  }  elseif ($productall  == $product3) {
   

    $product = "SS";
    $idmember = "SS-" . sprintf("%04d", $counter);
    $counter++;
    
    $number1 = 30;

    if ($mop == $number1) {


      $modetag = "M";
    $contractamount = "15000";
    $price = "250";
   
    
    }else {
      echo "";
     
  }
  



  }  elseif ($productall  == $product4) {
    
    $product = "SSP";
    $idmember = "SSP-" . sprintf("%04d", $counter);

    $counter++;
    
    $number1 = 30;

    if ($mop == $number1) {


      $modetag = "M";
      $contractamount = "15000";
      $price = "250";
    
    
    }else {
      echo "";
     
  }
  

  } else {
      echo "";
     
  }


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
    
    $status = $_POST['status'];
    $branch = $_POST['branch'];
   

	$mysqli->query("INSERT INTO member (idmember,product,price,edate,mop,fname,mname,lname,brgy,city,prov,birthdate,religion,occupation,contact,type,gender,payer,pcontact,bfname,blname,bage,brelationship,b2fname,b2lname,b2age,b2relation,cfname,clname,cage,crelation,coordinator,contractamount,status,modetag,branch) VALUES ('$idmember','$product','$price','$edate', '$mop', '$fname', '$mname', '$lname', '$brgy', '$city', '$prov', '$birthdate', '$religion', '$occupation', '$contact', '$type', '$gender', '$payer','$pcontact','$bfname','$blname','$bage','$brelationship','$b2fname','$b2lname','$b2age','$b2relation','$cfname','$clname','$cage','$crelation','$coordinator','$contractamount','$status','$modetag','$branch')") or die($mysqli->error);





}else {
    header('Error');
  }

 ?>