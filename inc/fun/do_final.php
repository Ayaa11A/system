<?php
$server_name = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "com_system";
$conn = new mysqli($server_name,$db_user,$db_pass,$db_name);
$name = $_POST['fdocumentno'];
$bl = $_POST['fdate'];
$sql = "INSERT INTO `port_doc`( `doc_final_no`, `final date`) VALUES ('$name','$bl')"


$conn->query($sql);
header('Location:../../bank_documents.php');
 

?>