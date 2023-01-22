<?php 
$mysqli = new mysqli('localhost','root','123456','db_ronex') or die(mysql_error($mysqli));

//retrieve the current counter value
$result = $mysqli->query("SELECT MAX(installment) as counter FROM payment") or die($mysqli->error);
$row = $result->fetch_assoc();
$counter = $row["counter"];

if (isset($_POST['update'])) 
{
    $idmember = $_POST['idmember'];
    $ornumber = $_POST['ornumber'];
    $amount = $_POST['amount'];
    $effectdate = $_POST['effectdate'];
    $duedate = $_POST['duedate'];
    $fullname = $_POST['fullname'];
    $price = $_POST['price'];
    $installment = ++$counter + $_POST['installment']- 1; //increment the counter by input amount
    $walkinginstallment = $_POST['walkinginstallment'];
    $aging = $_POST['aging'];
    $dueprice = $_POST['dueprice'];
    $address = $_POST['address'];
    $balance = $_POST['balance'];
    $pcontact = $_POST['pcontact'];
    $total = $_POST['total'];
    $comm = $_POST['comm'];
    $ncomm = $_POST['ncomm'];
    $coordinator = $_POST['coordinator'];
    $date = $_POST['date'];
    $modetag = $_POST['modetag'];


    $mysqli->query("INSERT INTO payment (idmember,ornumber,amount,effectdate,duedate,fullname,price,installment,walkinginstallment,aging,dueprice,address,balance,pcontact,total,comm,ncomm,coordinator,date,modetag) VALUES ('$idmember','$ornumber','$amount','$effectdate','$duedate','$fullname','$price','$installment','$walkinginstallment','$aging','$dueprice','$address','$balance','$pcontact','$total','$comm','$ncomm','$coordinator','$date','$modetag')") or die($mysqli->error);
}else {
    header('Error');
  }
?>
