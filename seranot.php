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
<style type="text/css">
  .nonactive {
   background: #d46464;
   
  }
</style>
	<title></title>

  </head>
  <body>
  <?php

include 'searchtosera.php';
?>

  <div class="content">

<div class="container">
  <h2 class="mb-5"></h2>
  
     <form role="search" method="post" action="sera.php">
      <div class="form-group" >
        <input type="text" class="form-control" placeholder="Search" name="soso">
        
  <input class ="btn btn-success" type="submit" value="Search">
 
        <!--<input class ="btn btn-success" type="submit" value="Search">-->
        
      </div>
    </form>

<a href="?do=add"><button class="btn btn-primary">Add New</button></a>
<br>
  <div class="table-responsive">
  
<table class="table table-striped custom-table">
  
	<thead>
<tr>
  
  <th scope="col">Id</th>
  <th scope="col">Document NO</th>
  <th scope="col">B/L NO</th>
  <th scope="col">Total Amount</th>
  <th scope="col">Company</th>
  <th scope="col">Containers</th>
  <th scope="col">Port Name</th>
  <th scope="col">Date</th>
  <th scope="col">Final Document NO</th>
  <th scope="col">Date</th>
  <th scope="col">Control</th>
  
</tr>
</thead>
<?php  
$server_name = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "com_system";
$conn = new mysqli($server_name,$db_user,$db_pass,$db_name);
$sql = "SELECT * FROM bank_doc WHERE docfinalno IS NULL";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
	?>
<tr scope="row">

  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['doc_number']; ?></td>
  <td><?php echo $row['bl_no']; ?></td>
  <td><?php echo $row['total_amount']; ?></td>
  <td>
    <?php
      $com_id = $row['company'];
      $sql_com = "SELECT * FROM company_name WHERE id =$com_id";
      $result_com = $conn->query($sql_com);
      while ($row_com = $result_com->fetch_assoc()) {
       echo $row_com['name'];
      }
    ?>
 </td>
<td><?php echo $row['containers']; ?></td>

<td>
    <?php
      $po_id = $row['port name'];
      $sql_po = "SELECT * FROM port WHERE id =$po_id";
      $result_po = $conn->query($sql_po);
      while ($row_po = $result_po->fetch_assoc()) {
       echo $row_po['name'];
      }
    ?>
 </td>
 <td><?php echo $row['eldate']; ?></td>
 
 <td 
 <?php 
   $nu = $row['docfinalno'];
   if ($nu==NULL) {
       echo "class='nonactive'";
      }   
      ?>
  ><?php echo $row['docfinalno']; ?></td>

 <td
 <?php 
   $nu = $row['docfinalno'];
   if ($nu==NULL) {
       echo "class='nonactive'";
      }   
      ?>
      ><?php echo $row['finaldate']; ?></td>

  
<td> 
  <a href="?do=arrived&id=<?php echo $row['id']; ?>">
  <button class ="btn btn-primary">Arrived</button>
  </a>
  <a href="?do=edit&id=<?php echo $row['id']; ?>">
  <button class ="btn btn-success">Edit</button>
  </a>
<button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#myModal<?php echo $row['id']; ?>">Delete </button>

<!-- Modal -->
<div id="myModal<?php echo $row['id']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete</h4>
      </div>
      <div class="modal-body">
        <p>Are You Sure Delete <?php echo $row['total_amount'] ?> </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">NO</button>


  <a href="inc/des/deletebdoc.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger">yes</button></a>
      </div>
    </div>

  </div>
</div>

  
  </td>
</tr>
<?php
}
?> 

</table>


 </div>
    </div><!--/.row-->
    

  </div>  <!--/.main-->
   

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
  </body>
</html>
