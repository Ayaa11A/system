<?php
session_start();
include 'connect.php';
if (!isset($_SESSION['login'])) {
    header('Location:index.php');
}

?>
<?php


include 'inc/des/menu.php';
?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
    
<!--Custom Font-->
<link href="https://fonts.googleapis.com/family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
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
    <title>GOLDEN EYES</title>
  
</head>
<body>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#"><span>Golden</span>Eyes</a>
                
            </div>
        </div> 
    </nav>

  

<div class="content">

<div class="container">
  <h2 class="mb-5"></h2>
  
     <!--<form role="search" method="post" action="dosearch.php" >
      <div class="form-group" >

        <input type="text" class="form-control" placeholder="Search" name="soso">
        <input type="submit" class="form-control" value="Search">
        
         
      </div>
    </form>-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">
          <em class="fa fa-home"></em>
        </a></li>
        <li class="active">Search</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Search</h1>

      
        <?php
                      if (!isset($_GET['do'])) {
                       include 'inc/des/search_s.php';
                      }

                      if (isset($_GET['do'])) {
                      if ($_GET['do'] == "add") {
                       include 'inc/des/add_new.php';
                      }
                      if ($_GET['do']=="edit") {
                      include 'inc/des/edit_bdoc.php';

                      }
                      if ($_GET['do']=="arrived") {
                      include 'inc/des/arrive.php';

                      }
                      if ($_GET['do']=="sera") {
                      include 'inc/des/searchh.php';

                      }
                      
                   }


        ?>


    
 
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
$sear = $_POST['soso'];
$sql = "SELECT * FROM bank_doc WHERE doc_number = '$sear' ";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    ?>
<tr scope="row">

  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['doc_number']; ?></td>
  <td><?php echo $row['bl no']; ?></td>
  <td><?php echo $row['total amount']; ?></td>
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
        <p>Are You Sure Delete <?php echo $row['total amount'] ?> </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">no</button>


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


</div>

  </div>


  </div>
    </div><!--/.row-->
    

  </div>  <!--/.main-->
   


   
  
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/vendor/jquery-1.12.4.min.js"></script>
   


<script src="js2/jquery-3.3.1.min.js"></script>
<script src="js2/popper.min.js"></script>
<script src="js2/bootstrap.min.js"></script>
<script src="js2/main.js"></script>
  </body>
</html>
