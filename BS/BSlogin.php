<?php session_start(); ?>
<?php include('database.php'); ?>
<html>
<head>


<link href="stylelogin.css" rel="stylesheet" />
</head>
<body>
<div class="form-wrapper">
  
  <form action="#" method="post">
   <h3 style="text-align: center;">BS LOGIN</h3>
	
    <div class="form-item">
		<input type="text" name="username" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="password" required="required" placeholder="Password" required></input>
    </div>
    

	
    <div class="button-panel">
		<input type="submit" class="button"  title="Log In" name="login" value="login"> </input>
    </div>
  </form>
  
  <div class="reminder">
    <p>Not a member? <a href="#">Sign up now</a></p>
    <p><a href="#">Forgot password?</a></p>
  </div>
  <?php
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);
			
			$query 		= mysqli_query($conn, "SELECT * FROM bsaccount WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['id']=$row['id'];
					header('location:index.php');
					
				}
			else
				{
					echo '<p style="color: red; text-align: center">
                    Invalid Credintials !!!
                    </p>';
				}
		}
  ?>
</div>

</body>
</html>