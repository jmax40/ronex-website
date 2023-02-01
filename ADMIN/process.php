





<?php 
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "db_ronex";

$mysqli = new mysqli($servername,$username, $password,$dbname) or die(mysql_error($mysqli));

$result = $mysqli->query("SELECT MAX(idemployee) as counter FROM employee") or die($mysqli->error);
$row = $result->fetch_assoc();

// Get the current maximum idmember value
$max_idmember = $row["counter"];

// Extract the numeric part of the idmember
preg_match('/\d+/', $max_idmember, $matches);
$counter = (int)$matches[0] + 1;


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['save'])){

    

    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if($password == $cpassword){
        $fullname = $_POST['fullname'];
        $birthdate = $_POST['birthdate'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $branch = $_POST['branch'];
        $position = $_POST['position'];


         $position1 = "BS";
         $position2 = "Agent";
         $position3 = "Manager";
         $position4 = "A-Manager";





         if ($position == $position1) {

            $idemployee = "BS-" . sprintf("%04d", $counter);
            $counter++;
          
          
          
            } elseif ($position  == $position2) {
            
             
                $idemployee = "AG-" . sprintf("%04d", $counter);
                $counter++;
          
          
            
            }  elseif ($position  == $position3) {
             
                $idemployee = "MA-" . sprintf("%04d", $counter);
                $counter++;
          
          
            }  elseif ($position  == $position4) {
                $idemployee = "A-MA-" . sprintf("%04d", $counter);
                $counter++;

          
            } else {
                echo "";
               
            }
          






        $query = "INSERT INTO `employee`(`idemployee`,`fullname`, `birthdate`, `age`, `address`, `gender`, `username`, `password`, `cpassword`, `branch`, `position`) 
                  VALUES ('$idemployee','$fullname','$birthdate','$age','$address','$gender','$username','$password','$cpassword','$branch','$position')";
        $result = mysqli_query($conn, $query);
        if($result){
            echo "Data inserted successfully";
        }else{
            echo "Failed to insert data";
        }
    }else{
       
        echo "<script>alert('Passwords do not match');</script>";
    
    }
}
?>