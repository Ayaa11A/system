<?php
$server_name = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "com_system";
$conn = new mysqli($server_name,$db_user,$db_pass,$db_name);
$name = $_POST['comname'];
$sql = "INSERT INTO `company_name`(`name`) VALUES ('$name')";

$conn->query($sql);
header('Location:../../docs.php');
 

?>