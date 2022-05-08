<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

<link rel="stylesheet" href="fonts2/icomoon/style.css">

<link rel="stylesheet" href="css2/owl.carousel.min.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css2/bootstrap.min.css">

<!-- Style -->
<link rel="stylesheet" href="css2/style.css">

	<title></title>
</head>
<body>
<title></title>
  </head>
  <body>
  

  <div class="content">

<div class="container">
  <h2 class="mb-5">
    
      
  </h2>
  

  <br>
  <div class="table-responsive">
  

<table class="table table-striped custom-table">
  
	<thead>
<tr>
  
  <th scope="col">Id</th>
  <th scope="col">Company Name</th>
  <th scope="col">Control</th>
  
</tr>
</thead>
<?php  
$server_name = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "com_system";
$conn = new mysqli($server_name,$db_user,$db_pass,$db_name);
$sql = "SELECT * FROM `company_name`";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
	?>
<tr scope="row">

  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['name']; ?></td>
  
<td>

      </div>
    </div>

  </div>
</div>

  
  <a href="?do=edit&id=<?php echo $row['id']; ?>">
  <button class ="btn btn-success">Edit</button>
  </a>
  
</td>

</tr>

	<?php
}
?> 

</table>
  </div>
<a href="?do=add"><button class="btn btn-primary">Add New</button></a>

</div>

  </div>



<script src="js2/jquery-3.3.1.min.js"></script>
<script src="js2/popper.min.js"></script>
<script src="js2/bootstrap.min.js"></script>
<script src="js2/main.js"></script>
  </body>
</html>
