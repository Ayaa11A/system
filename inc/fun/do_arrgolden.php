<?php
$server_name = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "com_system";
$conn = new mysqli($server_name,$db_user,$db_pass,$db_name);
$id = $_POST['idd'];
$namee = $_POST['fdocumentno'];
$fdat = $_POST['fdate'];
//$sql = "SELECT * FROM `bank_doc` WHERE  column11 ISNULL"
//echo $idd;
$sql = "UPDATE `bank_doc` 
        SET `docfinalno` = '$namee', `finaldate` = '$fdat' WHERE `bank_doc`.`id` = '$id'";

$conn->query($sql);
header('Location:../../golden.php');
 

?>