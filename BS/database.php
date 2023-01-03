<?php
$servername='localhost';
$username='root';
$password='123456';
$dbname = "db_ronex";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}
?>