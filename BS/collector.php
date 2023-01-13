

<?php 

require_once'process.php';
$query = "SELECT * from member ORDER BY id DESC LIMIT 1;";
$result = $mysqli->query($query);
$row =$result->fetch_assoc();
$idmember = $row['id'];
$add ="1";


?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

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



</head>

<body>

<?php require_once'process.php'; ?>
<?php require_once'collectordisplay.php'; ?>





    <div id="wrapper">
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
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li>
                        <a href="index.php"><i class="fa fa-dashboard"></i> DASHBOARD </a>
                    </li>

                        
                    <li>
                        <a   class="active-menu" href="collector.php"><i class="fa fa-edit"></i> COLLECTOR </a>
                    </li>

              
                    <li>
                        <a  href="Manager.php"><i class="fa fa-desktop"></i> MANAGER </a>
                    </li>
					

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> PRODUCT<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a   href="Maharlika.php">Maharlika</a>
                            </li>
                            <li>
                                <a  class="active-menu" href="LaFamilia.php">La Famillia</a>
                            </li>
                            <li>
                                <a  href="Seniorsafira.php">Senior Safira</a>
                            </li>
                            <li>
                                <a href="#">Promo<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Safira 250</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="empty.html"><i class="fa fa-fw fa-file"></i> EMPTY PAGE </a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <tr>
        <div id="page-wrapper" >
            <div id="page-inner">
            <h1 id="XWX"></h1>
            <table>

			 <div class="row">
             
            

<label> Search: </label> <input id='myInput' onkeyup='searchTable()'style="text-align:left;" type='text'> <br><br>


   


 <table class="table table-bordered" id='myTable'>
										
                                 <th >ID.No</th>
								<th >Name</th>
								<th >Address</th>
                                 <th >Branch</th>
								
                                                               

								
							
							</tr>

                            <?php 
							while ($row=$result->fetch_assoc()): ?>
							<tr class="mb-2">
								<td class="text-center"><?php echo $row['id']; ?></td>
								<td class="text-center"><?php echo $row['fname']; ?>
								<?php echo $row['mname']; ?>
								<?php echo $row['lname']; ?></td>

								<td class="text-center"><?php echo $row['address']; ?></td>
                              
								<td class="text-center"><?php echo $row['branch']; ?></td>
							
                               
                                <td class="text-center"><a href="edit.php?GetID=<?php echo $row['id'] ?>" class="btn btn-primary mb-2"> MCR</a></td>
                       
								
								
							</tr>
						<?php endwhile; ?>





						
 </table>


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
        <center>+ ADD MAHARLIKA DETAILS</center></h4>
      </div>

      <div class="modal-body" >       	
      	<center> 
        		<form method="post" action="LaFamilia.php" enctype='multipart/form-data' style="width: 98%;">        		

            	<input type="hidden" name="idmember" value="<?php echo $idmember+$add ?>"/> 

      	        
                <input type="hidden" name="product" value="LF"/> 
        		         
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Effect Date:<label style="color: red;font-size:20px;">*</label><input type="date" name ="edate" style="width:270px;"  name ="edate"></input></p>
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;Mode Payment<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="mop"></span></p>

                 
        	    <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firstname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="fname"></span></p>
        		<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;Middlename:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="mname"></span></p>
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lastname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="lname"></span></p>
                
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sub/Brgy:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="brgy"></span></p>
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City/Mun:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="city"></span></p>
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City/Prov:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="prov"></span></p>
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Birthdate:<label style="color: red;font-size:20px;">*</label><input type="date" style="width:270px;"  name ="birthdate"></span></p>

                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Religion:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="religion"></span></p>
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Occupation:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="occupation"></span></p>
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Contact No:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="contact"></span></p>
                
                
                <div class="small" >
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Civil Status:<label style="color: red;font-size:20px;">*<select name = "type" style="width:270px;">
                                      <option value="Single">Single</option>
                                      <option value="Merried">Merried</option>
                                      <option value="Sepparated">Sepparated</option>
                                      <option value="Widow">Widow</option>
                                    </select>
                                    </span></p>
                               </div>
              
                              

                               <div class="small" >
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender:<label style="color: red;font-size:20px;">*<select name = "gender" style="width:270px;">
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                      
                                    </select>
                                    </span></p>
                               </div>
              



                               <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;Name of Payer:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="payer"></span></p>
                              <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Contact No:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="pcontact"></span></p>


                               <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1st Benificial<label style="color: red;font-size:20px;"></label>

                          
                 <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firstname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="bfname"> </span> </p> 
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lastname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="blname"></span></p>
        	     <p ><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="bage"></span></p>
                 <p ><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;Relationship:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="brelationship"></span></p>

                 
                 <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2nd Benificial<label style="color: red;font-size:20px;"></label>

                          
<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firstname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="b2fname"> </span> </p> 
<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lastname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="b2lname"></span></p>
<p ><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="b2age"></span></p>
<p ><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;Relationship:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="b2relation"></span></p>
                 


                                <input type="hidden" name="cfname" value="NONE"/> 
                               <input type="hidden" name="clname" value="NONE"/> 
                               <input type="hidden" name="cage" value="NONE"/> 
                               <input type="hidden" name="crelation" value="NONE"/> 
                 
                 <div class="small" >
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Coordinator:<label style="color: red;font-size:20px;">*<select name = "coordinator" style="width:270px;">
                                      <option value="Agent name 1">Agent name 1</option>
                                      <option value="Agent name 2">Agent name 2</option>
                                      
                                    </select>
                                    </span></p>
                               </div>
                               
        		                                                      	      		
         </center>

      </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-success" name="save"> Submit </button>&nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div> 
       </form>



  </div>
  </div> 




 
  <div id="Useredit" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" id="Useradd" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0">
        <center>ADD LA FAMILIA MEMBER</center></h4>
      </div>

      <div class="modal-body" >       	
      	<center> 
        		<form method="post" action="listmembers.php" enctype='multipart/form-data' style="width: 98%;">        		

            	
      	        <p style="margin-bottom:10px;">  
        	    <span style="font-size: 15px; font-weight: bold;"><input type="checkbox" name="product" value="La Famillia"<?php echo ($product=='La Famillia')?'checked':'' ?>>&nbsp;La Famillia&nbsp;&nbsp; &nbsp; &nbsp;</span>
        	    <span style="font-size: 15px; font-weight: bold;"><input type="checkbox" name="product" value="Maharlika"<?php echo ($product=='Maharlika')?'checked':'' ?>>&nbsp;Maharlika &nbsp; &nbsp;&nbsp;&nbsp;</span>
        		<span style="font-size: 15px; font-weight: bold;"><input type="checkbox" name="product" value="Senor Safira"<?php echo ($product=='Senor Safira')?'checked':'' ?>>&nbsp;Senor Safira &nbsp; &nbsp; &nbsp;&nbsp;</span>        		
        		</p>
        		         
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Effect Date:<label style="color: red;font-size:20px;">*</label><input type="date" name ="edate" style="width:270px;"  value='<?php echo $row['fname']
                 ?>'></input></p>
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;Mode Payment<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="mop" value="<?php echo $mop ?>"></span></p>

                 
        	    <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firstname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="fname" value="<?php echo $fname ?>"></span></p>
        		<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;Middlename:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="mname" value="<?php echo $mname ?>"></span></p>
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lastname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="lname" value="<?php echo $lname ?>"></span></p>
                
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sub/Brgy:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="brgy" value="<?php echo $brgy ?>"></span></p>
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City/Mun:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="city" value="<?php echo $city ?>"></span></p>
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City/Prov:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="prov" value="<?php echo $prov ?>"></span></p>
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Birthdate:<label style="color: red;font-size:20px;">*</label><input type="date" style="width:270px;"  name ="birthdate" value="<?php echo $birthdate ?>"></span></p>

                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Religion:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="religion" value="<?php echo $religion ?>" ></span></p>
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Occupation:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="occupation" value="<?php echo $occupation ?>"></span></p>
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Contact No:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="contact" value="<?php echo $contact ?>"></span></p>
                
                
                <div class="small" >
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Civil Status:<label style="color: red;font-size:20px;">*<select name = "type" style="width:270px;">
                                      <option value="Single" <?php if ($type == 'Single') echo ' selected="selected"'; ?>>Single</option>
                                      <option value="Merried"<?php if ($type == 'Merried') echo ' selected="selected"'; ?>>Merried</option>
                                      <option value="Sepparated" <?php if ($type == 'Sepparated') echo ' selected="selected"'; ?>>Sepparated</option>
                                      <option value="Widow" <?php if ($type == 'Widow') echo ' selected="selected"'; ?>>Widow</option>
                                    </select>
                                    </span></p>
                               </div>
              
                              

                               <div class="small" >
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender:<label style="color: red;font-size:20px;">*<select name = "gender" style="width:270px;">
                                      <option value="Male" <?php if ($gender == 'Male') echo ' selected="selected"'; ?>>Male</option>
                                      <option value="Female" <?php if ($gender == 'Female') echo ' selected="selected"'; ?>>Female</option>
                                      
                                    </select>
                                    </span></p>
                               </div>
              



                               <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;Name of Payer:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="payer" value="<?php echo $payer ?>"></span></p>
                              <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Contact No:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="pcontact" value="<?php echo $pcontact ?>"></span></p>


                               <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Benificial/Claimants Information<label style="color: red;font-size:20px;"></label>

                          
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firstname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="bfname" value="<?php echo $bfname?>"
                ></span></p>
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lastname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="blname"value="<?php echo $blname ?>"> </span> </p> 
        	     <p ><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="bage" value="<?php echo $bage ?>"></span></p>
                 <p ><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;Relationship:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="brelationship" value="<?php echo $brelationship ?>"></span></p>
                 <div class="small" >
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Coordinator:<label style="color: red;font-size:20px;">*<select name = "coordinator" style="width:270px;">
                                      <option value="Agent name 1" <?php if ($coordinator == 'Agent name 1') echo ' selected="selected"'; ?>>Agent name 1</option>
                                      <option value="Agent name 2"<?php if ($coordinator == 'Agent name 2') echo ' selected="selected"'; ?>>Agent name 2</option>
                                      
                                    </select>
                                    </span></p>
                               </div>
        		                                                         	      		
         </center>

      </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-success" name="save"> Submit </button>&nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div> 
       </form>



  </div>
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
