<?php
$server_name = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "com_system";
$conn = new mysqli($server_name,$db_user,$db_pass,$db_name);
$name = $_POST['uname'];
$password = $_POST['pass'];
$hash_password = md5($password);
$sql = "INSERT INTO `users`(`name`, `password`) VALUES ('$name','$hash_password')";

$conn->query($sql);
header('Location:../../users.php');
 

?>