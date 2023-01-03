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
   <link rel="stylesheet" a href="CSS/Style1.css">
</head>
<body>

<?php require_once'process.php'; ?>
    
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">BS RONEX LIFE</a>
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
                                    <strong>John Smith</strong>
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
                        <a  href="index.html"><i class="fa fa-dashboard"></i> DASHBOARD </a>
                    </li>
                    <li>
                        <a class="active-menu" href="employee.html"><i class="fa fa-desktop"></i> REGISTRATION MEMBER </a>
                    </li>
					<li>
                        <a href="listmembers.php"><i class="fa fa-bar-chart-o"></i> LIST OF MEMBERS </a>
                    </li>
                    <li>
                        <a href="Listmembers.html"><i class="fa fa-qrcode"></i> MCR </a>
                    </li>
                    
                    <li>
                        <a href="payment.html"><i class="fa fa-table"></i> PAYMENTS </a>
                    </li>
                    <li>
                        <a href="Monthlicollection.html"><i class="fa fa-edit"></i> MONTHLY COLLECTION REPORT </a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> THREE PROMO <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
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
        
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                <h1 class="label success" >MEMBERS INFORMATION</h1>
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <form method="POST"><br>
                        <h4 class="label success"  id = "Product"> 1. Product </h4>
                        <br> <br>
                                    <div class="small" >
                                    
                                        <select name = "product" class="form-control mb-2">
                                          <option value="La Familia">La Famalia</option>
                                          <option value="Promo 2">Maharlika</option>
                                          <option value="Promo 3">Senor Safira</option>
                                        </select>
                                   </div>
                                   <br>
                                   <h4 class="label success"  id = "Effectdate">2. Effect Date </h4>
                                 <br>
                                 <br>
                               
                                   <input type="date" style="font-size: 2rem" name ="edate" class="form-control mb-2" > </input>
                                   <br>
                                   <h4  class="label success" id = "modeofpayment">3. Mode of Payment </h4>
                                   <br>
                                   <br>
                                   <input type="text" name="mop" placeholder="Mode of Payment" class="form-control mb-2">

                                   <br>
                           
                              
                                <h4 class="label success" id = "Name">4. Name </h4> <br><br>
                                <input type="text" name="fname" placeholder="Last name:" class="form-control mb-2">
                                <input type="text" name="mname" placeholder="First name:" class="form-control mb-2">
                                <input type="text" name="lname" placeholder="Middle name:" class="form-control mb-2">
                                <br>
                                <h4 class="label success" id = "presentaddress">5. Present address </h4>  <br> <br>
                                <input type="text" name="brgy" placeholder="Sub/Brgy:" class="form-control mb-2">
                                <input type="text" name="city" placeholder="City/Mun." class="form-control mb-2">
                                <input type="text" name="prov" placeholder="City/Prov." class="form-control mb-2">
                                <br>
                                <h4 class= "label success" id = "dob">6. Date of Birth</h4>
                                <br>   <br>
                                <input type="date" style="font-size: 2rem" name ="birthdate" class="form-control mb-2"> </input><br>
                                <h4 class= "label success" id = "backinfo" >7. Backround Info </h4><br><br>
                                <input type="text" name="religion" placeholder="Religion" class="form-control mb-2">
                                <input type="text" name="occupation" placeholder="Occupation" class="form-control mb-2">
                                <input type="text" name="contact" placeholder="Contact No." class="form-control mb-2">
                                <br>
                                <h4 class= "label success" id = "civilsatus">8. Civil Status </h4><br><br>

                                <label class="radio-inline" >
                                    <input type="radio" name="type" value="Single" > <h5>Single</h5>
                                  </label>
                                  <label class="radio-inline">
                                    <input type="radio" name="type"  value="Merried"> <h5>Merried</h5>
                                  </label>
                                  <label class="radio-inline">
                                    <input type="radio" name="type"   value="Separated"><h5>Separated</h5>
                                  </label>
                                  <label class="radio-inline">
                                    <input type="radio" name="type" value="Widow"><h5>Widow</h5>
                                  </label><br><br>

                                <h4 class= "label success" id = "gender">9. Gender </h4>
                                <br><br>
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="Male"> <h5>Male</h5>
                                  </label>
                                  <label class="radio-inline">
                                    <input type="radio" name="gender" value="Female"> <h5>Female</h5>
                                  </label>
                                  <h4 class= "label success" id = "NameofPayer">10. Name of Payer </h4>
                                   <br><br>
                                  <input type="text" name="payer" placeholder="Name of Payer" class="form-control mb-2">
                                  <input type="text" name="pcontact" placeholder="Contact Number" class="form-control mb-2">
                                  <br>
                                  
                                <h4 class= "label success" id = "bci">11. Benificial/Claimants Information </h4>
                                <br><br>
                                <input type="text" name="bfname" placeholder="Fistname" class="form-control mb-2">
                                <input type="text" name="blname" placeholder="Lastname" class="form-control mb-2">
                                <input type="text" name="bage" placeholder="Age" class="form-control mb-2">
                                <input type="text" name="brelationship" placeholder="Relationship" class="form-control mb-2">
                                <br>
                                <h4 class= "label success" id = "SC">12. Sales Coordinator </h4>    <br><br>
                                <div class="small"  >
                                    <select name = "coordinator" class="form-control mb-2">
                                      <option value="cordinator 1">Coordinator 1</option>
                                      <option value="cordinator 2">Coordinator 2  </option>
                                    </select>
                               </div>

                              <br>
                                <button class="btn btn-primary" name="save" >SUBMIT</button>
                                 
                        
                            </form>
                            
                          
                            
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
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
