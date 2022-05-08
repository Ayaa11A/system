<?php
$server_name = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "com_system";
$conn = new mysqli($server_name,$db_user,$db_pass,$db_name);
$id = $_GET['id'];
$sql = "DELETE FROM `users` WHERE id = $id";
$conn->query($sql);
header('Location:../../users.php')


?>