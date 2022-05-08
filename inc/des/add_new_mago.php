<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						
</head>
<body>
<form method="POST" action="inc/fun/do_add_mago.php" enctype="multipart/form-data">
	<label>Document no</label>
	<input type="text" name="documentno" placeholder="add Document no" class="form-control">
	<br>
	<label>B/L no</label>
	<input type="text" name="blno" placeholder="add B/L no"  class="form-control">
	<br>
	<label>Total Amount</label>
	<input type="text" name="totalamount" placeholder="add Total Amount"  class="form-control">
	<br>
	<label>Company</label>
	<br>
	<select name="company" class="form-control">
    	<?php
          $server_name = "localhost";
          $db_user = "root";
          $db_pass = "";
          $db_name = "com_system";
          $conn = new mysqli($server_name,$db_user,$db_pass,$db_name);
          $sql = "SELECT * FROM company_name WHERE id = 7 ";
          $result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
	?>
    <option value=" <?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>
    

    	<?php
}
?> 
    	
    </select>
	<br>
	<label>Containers</label>
	<textarea style ="width:100% ; height: 250px;"  name = "containers"></textarea>
	<br>
	

	
	<label>Port Name</label>
	<br>
	<select name="portname" class="form-control">
    	<?php
          $server_name = "localhost";
          $db_user = "root";
          $db_pass = "";
          $db_name = "com_system";
          $conn = new mysqli($server_name,$db_user,$db_pass,$db_name);
          $sqlp = "SELECT * FROM port ";
          $resultp = $conn->query($sqlp);
while ($rowp = $resultp->fetch_assoc()) {
	?>
    <option value=" <?php echo $rowp['id']; ?>"> <?php echo $rowp['name']; ?> </option>
    

    	<?php
}
?> 
    	
    </select>
	<br>
	
	<label>Date</label>
	<input type="date" name="date" placeholder="date"  class="form-control">
	<br>
    <input type="submit" value="Save" class="btn btn-primary">

</form>
</body>
</html>