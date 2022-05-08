<?php
$server_name = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "com_system";
$conn = new mysqli($server_name,$db_user,$db_pass,$db_name);
$id = $_POST['id'];
$name = $_POST['documentno'];
$blno = $_POST['blno'];
$total = $_POST['totalamount'];
$company = $_POST['company'];
$cont = $_POST['containers'];
$port = $_POST['portname'];
$date = $_POST['date'];


$sql = "UPDATE `bank_doc` SET `doc_number`='$name',`bl_no`='$blno',`total_amount`='$total',`company`='$company',`containers`='$cont',`port name`='$port',`eldate`='$date',`userss`='1' WHERE id = '$id'";


 $conn->query($sql);
 
 
 header('Location:../../golden.php');

?>
