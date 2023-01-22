<?php 
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "db_ronex";

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

        $query = "INSERT INTO `employee`(`fullname`, `birthdate`, `age`, `address`, `gender`, `username`, `password`, `cpassword`, `branch`, `position`) 
                  VALUES ('$fullname','$birthdate','$age','$address','$gender','$username','$password','$cpassword','$branch','$position')";
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