<?php
$server_name = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "com_system";
$conn = new mysqli($server_name,$db_user,$db_pass,$db_name);
$name = $_POST['documentno'];
$bl = $_POST['blno'];
$amont = $_POST['totalamount'];
$com = $_POST['company'];
$cont = $_POST['containers'];
$por = $_POST['portname'];
$dat = $_POST['date'];
$sql = "INSERT INTO `bank_doc` (`doc_number`, `bl_no`, `total_amount`, `company`, `containers`, `port name`, `eldate`, `userss`) VALUES ('$name', '$bl', '$amont', '$com', '$cont', '$por', '$dat', '1');";

$conn->query($sql);
header('Location:../../golden.php');
 

?>