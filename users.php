<?php

include 'inc/des/nav.php';
include 'inc/des/menu.php';
?>
    
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">
          
        </a></li>
        <li class="active">Settings</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Settings</h1>


        <?php
                    if (!isset($_GET['do'])) {
                      include 'inc/des/view_all_us.php';
                    }

                    if (isset($_GET['do'])) {
                    if ($_GET['do'] == "add") {
                      include 'inc/des/add_new_us.php';
                    }
                    if ($_GET['do'] == "edit") {
                      include 'inc/des/editus.php';
                    }

                    }


        ?>


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
  
    
</body>
</html>