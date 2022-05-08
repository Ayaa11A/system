<?php
include '../../connect.php';


$id = $_GET['x'];

$sql = "DELETE FROM products WHERE ID = $id";

 $conn->query($sql);
 header('Location:../../prudacts.php');

?>
