<?php
$server_name = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "com_system";
$conn = new mysqli($server_name,$db_user,$db_pass,$db_name);
$id = $_POST['id'];
$name = $_POST['usname'];
$pass = $_POST['pass'];
$hash_password = md5($pass);
$sql = "UPDATE `users` SET `name`='$name',`password`='$hash_password' WHERE id = '$id'";


 $conn->query($sql);
 header('Location:../../users.php');

?>