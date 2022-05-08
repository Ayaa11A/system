<?php
$server_name = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "com_system";
$conn = new mysqli($server_name,$db_user,$db_pass,$db_name);
$id = $_POST['id'];
$namee = $_POST['fdocumentno'];
$fdat = $_POST['fdate'];
$sql = "SELECT `docfinalno` FROM `bank_doc` WHERE id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($row==NULL) {
       $sqll = "UPDATE `bank_doc` SET `docfinalno`='$namee' WHERE id = '$id'";
       $conn->query($sqll);
}



?>