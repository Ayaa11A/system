<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Golden Login</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="row">
<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
<div class="login-panel panel panel-default">
<div class="panel-heading">Log in</div>
<div class="panel-body">


<?php
session_start();
$count = " ";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	


$name = $_POST['name'];
$password = $_POST['password'];
$hash_password = md5($password);
$server_name = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "com_system";

$conn = new mysqli($server_name,$db_user,$db_pass,$db_name);

$sql = "SELECT * FROM users WHERE name = '$name' and password = '$hash_password'";
$result =$conn->query($sql);

$count  = $result->num_rows;

if ($count === 1) {

	$_SESSION['login']= $name;
	header('Location:bank_documents.php');
}


}


?>


<form role="form" action="<?php $_SERVER['PHP_SELF'] ?> " method="post">
<fieldset>
<div class="form-group">
<input class="form-control" placeholder="Name" name="name" type="text" autofocus="">
</div>
<div class="form-group">
<input class="form-control" placeholder="Password" name="password" type="password" value="">
</div>
<div class="checkbox">

<?php


if ($count === 0 ) {
	?>
<div class="alert alert-danger">The username or password is not correct.</div>
	<?php
}

?>





	


</div>

<input class="btn btn-primary" type="submit" value="Login">


</fieldset>
</form>
</div>
</div>
</div><!-- /.col-->
</div><!-- /.row -->


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
