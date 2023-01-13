<?php 

	require_once'process.php';
    $No = $_GET['GetID'];
	$query = "SELECT * FROM member WHERE id = $No";
	$result = mysqli_query($mysqli,$query);
	while ($row=mysqli_fetch_assoc($result))
	{
    $No = $row['id'];
	$edate = $row['edate'];
	$mop = $row['mop'];
	$fname =$row['fname'];
	$mname = $row['mname'];
	$lname = $row['lname'];
	$brgy = $row['brgy'];
	$city = $row['city'];
	$prov = $row['prov'];
	$birthdate = $row['birthdate'];
    $religion = $row['religion'];
    $occupation = $row['occupation'];
    $contact = $row['contact'];
    $type = $row['type'];
    $gender = $row['gender'];
    $payer = $row['payer'];
    $pcontact = $row['pcontact'];
    $bfname = $row['bfname'];
    $blname = $row['blname'];
    $bage = $row['bage'];
    $brelationship = $row['brelationship'];
    $b2fname = $row['b2fname'];
    $b2lname = $row['b2lname'];
    $b2age = $row['b2age'];
    $b2relation = $row['b2relation'];
    $coordinator = $row['coordinator'];
	}

 ?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>Update</title>
   <link rel="stylesheet" a href="CSS/bootstrap.css">
 </head>
 <body class="bg-dark">
 <div class="container">
		<div class="row">
			<div class="col-lg-6 m-auto">
				<div class="card mt-5">
					<div class="card-title">
						<h3 class="bg-success text-white text-center py-3"> Members Information</h3>
					</div>
					<div class="card-body">
						<form action="update.php?id=<?php echo $No ?>" method="post">
				>    
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Effect Date:<label style="color: red;font-size:20px;">*</label><input type="date" name ="edate" style="width:270px;"  value="<?php echo $edate ?>"></input></p>
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


                            <center>   <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1st Benificial<label style="color: red;font-size:20px;"></label></center>

                          
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firstname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="bfname" value="<?php echo $bfname?>"></span></p>
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lastname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="blname"value="<?php echo $blname ?>"></span></p>
        	     <p ><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="bage" value="<?php echo $bage ?>"></span></p>
                 <p ><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;Relationship:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="brelationship" value="<?php echo $brelationship ?>"></span></p>
                 


                 <center>   <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2nd Benificial<label style="color: red;font-size:20px;"></label></center>


                 <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firstname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="bfname" value="<?php echo $b2fname?>"></span></p>
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lastname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="blname"value="<?php echo $b2lname ?>"></span></p>
        	     <p ><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="age" value="<?php echo $b2age ?>"></span></p>
                 <p ><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;Relationship:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="brelationship" value="<?php echo $b2relation ?>"></span></p>
                 



                 <div class="small" >
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Coordinator:<label style="color: red;font-size:20px;">*<select name = "coordinator" style="width:270px;">
                                      <option value="Agent name 1" <?php if ($coordinator == 'Agent name 1') echo ' selected="selected"'; ?>>Agent name 1</option>
                                      <option value="Agent name 2"<?php if ($coordinator == 'Agent name 2') echo ' selected="selected"'; ?>>Agent name 2</option>
                                      
                                    </select>
                                    </span></p>
                               </div>
        		                                                         	      		
         </center>

     
      <div class="modal-footer">
       <button type="submit" href = "listmembers.php" class="btn btn-success" name="update"> Update</button>&nbsp;
        <a type="button" href = "LaFamilia.php" class="btn btn-success" >Close</a>
      </div>
      </div> 
						</form>
 </body>
 </html>