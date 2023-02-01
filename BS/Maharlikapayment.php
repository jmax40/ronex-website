

<?php 
$mysqli = new mysqli('localhost','root', '123456','db_ronex') or die(mysql_error($mysqli));
  $No = $_GET['GetID'];
	$query = "SELECT * FROM member WHERE id = $No";
	$result = mysqli_query($mysqli,$query);
	while ($row=mysqli_fetch_assoc($result))
	{
   
  $No = $row['id'];
  $idmember = $row['idmember'];
  $idmemberdisplay = $row['idmember'];
  $mop = $row['mop'];
  $due_date = $row['mop'];
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
  $value_from_db = "13";
  $modetag = $row['modetag'];
  $product = $row['product'];








  



 $future_date = date("Y-m-d", strtotime(" 30 days"));

 $current_date = date("Y-m-d");
$difference = strtotime($current_date) - strtotime($due_date);

// Convert difference to number of days
$difference_in_days = floor($difference / (60*60*24));
    

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





<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "db_ronex";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 // getting user id from the querystring

$sql = "SELECT SUM(amount) as total FROM payment WHERE idmember = '$idmember' ";
$result1 = $conn->query($sql);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
        $resultprice = $row1["total"] ? $row1["total"] : 0;
    }
} else {
    
}

$conn->close();
?>





<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "db_ronex";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 // getting user id from the querystring

 $sql = "SELECT SUM(installment) as total FROM payment WHERE idmember = '$idmember' ";
$result1 = $conn->query($sql);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
        $installment = $row1["total"] ? $row1["total"] : 0;
    }
} else {
    
}

$conn->close();
?>

<?php 
$conn = mysqli_connect('localhost','root','123456','db_ronex');

$query = "SELECT * FROM payment WHERE No ='$No' ORDER BY duedate DESC LIMIT 1";
$result = mysqli_query($conn, $query);

$input_field = '';

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $duedate = date('Y-m-d', strtotime($row['duedate']. ' + 1 day'));
  $input_field = '<p><input type="text" id="current_date" value="' .$duedate. '"></p>';
} else {
  $input_field = '<p><input type="text" id="current_date" value="' .$edate. '"></p>';
}

mysqli_close($conn);
?>





<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">





    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Dream</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  
   <link rel="stylesheet" href="CSS/Style.css">
   
   <script type="text/javascript" src="assets/js/member.js"></script>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>


</head>


<body>



<?php require_once'process.php'; ?>


<?php 
	    require_once'connection.php';
		$result = $mysqli->query("SELECT * FROM payment where idmember ='$idmember'") or die($mysqli->error);
	
	
	?>




    
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                //<a class="navbar-brand" href="index.html">BS RONEX LIFE</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Doe</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong> John Smith </strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">28% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                            <span class="sr-only">28% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">85% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                            <span class="sr-only">85% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
       
            <div id="page-inner">
            <h1 id="XWX"></h1>
            
            
            
            <center>   <img src="img/heading.png" alt="image"> </center>
            
            <table>

			 <div class="row">
             
            
             
             

   
             
          <div style="text-align: left;">
             &nbsp;&nbsp;&nbsp;&nbsp;
  <i class="fa-sharp fa-solid fa-magnifying-glass fa-2x"></i>
  <input id='myInput' onkeyup='searchTable()' type='text' style="height:40px; width:300px; text-align:left">
  &nbsp;&nbsp;
  <a class="fa-solid fa-square-plus fa-2x" data-toggle='modal' href='#Useradd' > </a>
  &nbsp;&nbsp;<i class="fa-sharp fa-solid fa-print fa-2x" style="color: green;" onclick="printTable()"></i>
  &nbsp;&nbsp;<i class="fa-solid fa-file-excel fa-2x" style="color: green;" onclick="exportExcel()"></i>
  
<br>
  
 
<br>
 <table class="table table-bordered" id='myTable'>
										
                            <th >Date</th>
								<th >Or No</th>
								<th >Ins. No</th>
								<th >Plan type </th>
                                <th >Payment</th>
                                <th >balance</th>
                                <th >Delete</th>
						
													
							</tr>

                            <?php 
							while ($row=$result->fetch_assoc()): ?>
							<tr class="mb-2">
                            <td class="text-center"><?php echo $row['date']; ?></td>
							<td class="text-center"><?php echo $row['ornumber']; ?></td>
                            <td class="text-center"><?php echo $row['installment'];?></td>
                            <td class="text-center"><?php echo $row['modetag'];?></td>
                            <td class="text-center"><?php echo $row['amount'];?></td>
                            <td class="text-center"><?php echo $row['balance'];?></td>
                          
						
                                <td class="text-center"> <a href="" class="fa-solid fa-trash fa-2x" style="color: red;" ></a> </td>
	
								
								
							</tr>
						<?php endwhile; ?>				
 </table>


 <script>

function searchTable() {
    // Get the input field value
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
  
    // Loop through all table rows
    for (i = 0; i < tr.length; i++) {
      // Get all cells in the current row
      td = tr[i].getElementsByTagName("td");
      var match = false;
  
      // Check if the row is a heading row
      if (tr[i].getElementsByTagName("th").length > 0) {
        tr[i].style.display = "";
        continue;
      }
  
      // Loop through all the table cells in the current row
      for (var j = 0; j < td.length; j++) {
          txtValue = td[j].textContent || td[j].innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
              match = true;
              break;
          }
      }
      if (match) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }



 </script>


                    <div class="col-md-12">
                        <h1 class="page-header">


                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 
				</div>
             <!-- /. PAGE INNER  -->
             <table>
 
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
  <div id="Useradd" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" id="Useradd" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0">
        <center>PAYMENT TRANSACTION </center></h4>
      </div>

      <div class="modal-body" >       	
      	<center> 
        		<form method="post" action="insertpayment.php" enctype='multipart/form-data' style="width: 98%;">        		s
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">OR NUMBER:<label style="color: red;font-size:20px;"></label><input style="width:270px;" type="text" placeholder="Input OR Number" name="ornumber" ></span></p>
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;   AMOUNT:<label style="color: red;font-size:20px;"></label><input style="width:270px;" type="text" value="<?php echo $price; ?>" placeholder="Input Amount " id="tot2" name="amount" ></span></p>
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INS:<label style="color: red;font-size:20px;"> <input style="width:270px;" type="number" name="installment" id="value2"  value ="1"  oninput="multiply();calculate_future_date();"></p>
                <input type="hidden" id="date" name="effectdate" value="<?php echo $edate ?>">
                <input type="hidden" name="fullname" value="<?php echo $fname. " " .$mname." ".$lname ?>"/> 
                <input type="hidden"  name="idmember" value="<?php echo $idmember ?>">
                <input type="hidden" name="address" value="<?php echo $brgy.' '.$city.' '.$prov; ?>">
                <input type="hidden" id="<?php echo $mop ?>" value="<?php echo $mop ?>" oninput="calculate_future_date();"></p>
                <?php echo $input_field; ?>
                 <p> <input type="hidden" name="duedate" id="future_date"></p>
           
<?php
// Check how many days past the due date we are
if ($difference_in_days > 1 && $difference_in_days <= 30) {
    echo '<input type="hidden" name="aging" value ="30" >';
    echo '<input type="hidden" name="dueprice" value ="'.$price.'" >';
} elseif ($difference_in_days > 31 && $difference_in_days <= 60) {
    echo '<input type="hidden" name="aging" value ="30" >';
    echo '<input type="hidden" name = "dueprice" value ="'.$price.'" >';
} elseif ($difference_in_days > 90 && $difference_in_days <= 1000) {
    echo '<input type="hidden" name = "aging" value ="Deactivate" >';
    echo '<input type="hidden" name="dueprice" value ="'. (2 * $price) .'" >';
}else {
    echo '<input type="hidden" name ="aging" value="0">';
    echo '<input type="hidden" name="dueprice" value ="'.$price.'" >';
}

?>


<?php


$number1 = 30;
$number2 = 90;
$number3 = 180;
$number4 = 360;
$number5 = 1825;





if ($mop == $number1) {
   
    if (empty($installment) || !is_numeric($installment)) {
        $installment = 0;
    }
    if ($installment >= 0 && $installment <= 12) {
        echo '<input type="hidden" name="comm" value="'.$price.'"/>';
        echo '<input type="hidden" name="ncomm" value=""/>';
    } elseif ($installment >= 12 && $installment <= 1000) {
        echo '<input type="hidden" name="ncomm" value="'.$price.'"/>';
        echo '<input type="hidden" name="comm" value=""/>';
    } else {
        echo '<input type="hidden" name ="aging" value="Active">';
    }
    


  
  } elseif ($mop  == $number2) {
   
  
    if (empty($installment) || !is_numeric($installment)) {
        $installment = 0;
    }
    if ($installment >= 0 && $installment <= 4) {
        echo '<input type="hidden" name="comm" value="'.$price.'"/>';
        echo '<input type="hidden" name="ncomm" value=""/>';
    } elseif ($installment >= 4 && $installment <= 1000) {
        echo '<input type="hidden" name="ncomm" value="'.$price.'"/>';
        echo '<input type="hidden" name="comm" value=""/>';
    } else {
        echo '<input type="hidden" name ="aging" value="Active">';
    }
    
 
  
  }  elseif ($mop  == $number3) {

    if (empty($installment) || !is_numeric($installment)) {
        $installment = 0;
    }
    if ($installment >= 0 && $installment <= 2) {
        echo '<input type="hidden" name="comm" value="'.$price.'"/>';
        echo '<input type="hidden" name="ncomm" value=""/>';
    } elseif ($installment >= 2 && $installment <= 1000) {
        echo '<input type="hidden" name="ncomm" value="'.$price.'"/>';
        echo '<input type="hidden" name="comm" value=""/>';
    } else {
        echo '<input type="hidden" name ="aging" value="Active">';
    }
  

  
    
  }  elseif ($mop  == $number4) {
    
    if (empty($installment) || !is_numeric($installment)) {
        $installment = 0;
    }
    if ($installment >= 0 && $installment <= 1) {
        echo '<input type="hidden" name="comm" value="'.$price.'"/>';
        echo '<input type="hidden" name="ncomm" value=""/>';
    } elseif ($installment >= 1 && $installment <= 1000) {
        echo '<input type="hidden" name="ncomm" value="'.$price.'"/>';
        echo '<input type="hidden" name="comm" value=""/>';
    } else {
        echo '<input type="hidden" name ="aging" value="Active">';
    }
  

  
  }  elseif ($mop  == $number5) {
   
    if (empty($installment) || !is_numeric($installment)) {
        $installment = 0;
    }
    if ($installment >= 0 && $installment <= 1) {
        echo '<input type="hidden" name="ncomm" value="'.$price.'"/>';
        echo '<input type="hidden" name="comm" value=""/>';
    } elseif ($installment >= 1 && $installment <= 1000) {
        echo '<input type="hidden" name="ncomm" value="'.$price.'"/>';
        echo '<input type="hidden" name="comm" value=""/>';
    } else {
        echo '<input type="hidden" name ="aging" value="Active">';
    }
   
   
  } 
  else {
      echo "";
     
  }


?>


<script>
  calculate_future_date();
  function calculate_future_date() {
  var value1 = document.getElementById("<?php echo $mop ?>").value;
  var value2 = document.getElementById("value2").value;
  var current_date = new Date(document.getElementById("current_date").value);
  var future_date = new Date(current_date.getTime() + (value1*value2 * 24 * 60 * 60 * 1000));
  var y = future_date.getFullYear();
  var m = ('0' + (future_date.getMonth() + 1)).slice(-2);
  var d = ('0' + future_date.getDate()).slice(-2);
  var future_date_str = y + '-' + m + '-' + d;
  document.getElementById("future_date").value = future_date_str;
}

  function multiply() {
    var value2 = document.getElementById("value2").value;
    var z = document.getElementById("tot").value;
    var total = value2 * z;
    document.getElementById("tot1").value = total;
    document.getElementById("tot2").value = total;
   
  }
</script>







<input type="hidden" value="<?php echo $price; ?>" id="tot">
<input type="hidden" name="price" value="<?php echo $price; ?>" id="tot1">
<input type="hidden" name="total" value="<?php echo  $contractamount; ?>" id="tot">
<input type="hidden" name ="pcontact"value="<?php echo $pcontact; ?>">
<input type="hidden" name ="walkinginstallment" value="<?php echo $installment; ?>">
<input type="hidden"  name="minusprice" value="<?php echo $resultprice ?>">
<input type="hidden"  name="coordinator" value="<?php echo $coordinator ?>">
<input type="hidden"  name="date" id="datenow">
<input type="hidden"  name="coordinator" value="<?php echo $coordinator ?>">
<input type="hidden"  name="modetag" value="<?php echo $modetag ?>">
<input type="hidden"  name="No" value="<?php echo $No ?>">
<input type="hidden"  name="product" value="<?php echo $product ?>">


<script>
  var today = new Date();
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
  document.getElementById("datenow").value = date;
</script>

         </center>

      </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-success" name="update"> Submit </button>&nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div> 
       </form>


  </div>
 

   
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>