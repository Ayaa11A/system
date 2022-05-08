<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<?php

$id = $_GET['id'];
$sql = "SELECT * FROM bank_doc WHERE id = '$id' ";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
	?>

<form  method="post" action="inc/fun/do_edit_black.php" enctype="multipart/form-data">
	
<input class="form-control" type="text" name="documentno" placeholder="add Document no" value="<?php echo $row['doc_number'] ?>">
<br>
<label>B/L no</label>
<input class="form-control" type="text" name="blno" placeholder="add B/L no" value="<?php echo $row['bl_no'] ?>">
<br>

	<label>Total Amount</label>
	<input type="text" name="totalamount" placeholder="add Total Amount"  class="form-control" value="<?php echo $row['total_amount'] ?>">
	<br>
	<label>Company</label>
	<br>
<select name="company" class="form-control">

<?php

$sql_com = "SELECT * FROM company_name";
$result_com = $conn->query($sql_com);


while ($row_com = $result_com->fetch_assoc()) {


?>

	<option
	<?php
$id_com = $row['company'] ;
if ($id_com  == $row_com['id']) {
	echo " selected=''";
}
	?>  


	 value="<?php echo $row_com['id']; ?>"><?php echo $row_com['name']; ?> </option>
<?php
}
?>

</select>

<br>
	<label>Containers</label>
	<textarea style ="width:100% ; height: 250px;"  name = "containers" value="<?php echo $row['containers'] ?>"></textarea>
	<br>
	

	
	<label>Port Name</label>
	<br>
	<select name="portname" class="form-control">


<?php

$sql_port = "SELECT * FROM port";
$result_port = $conn->query($sql_port);


while ($row_port = $result_port->fetch_assoc()) {
?>
	<option

	<?php
$id_port =	 $row['port name'] ;
if ($id_port  == $row_port['id']) {
	echo " selected=''";
}
	?> 

	 value="<?php echo $row_port['id']; ?>"><?php echo $row_port['name']; ?> </option>
<?php
}
?>

</select>
<br>
<label>Date</label>
	<input type="date" name="date" placeholder="date"  class="form-control" value="<?php echo $row['eldate'] ?>" >
	<br>
<br>
<input class="form-control" type="hidden" name="id" placeholder="enter " value="<?php echo $row['id'] ?>">

<input type="submit" value="Save" class="btn btn-primary" name="Save">
</form>


	<?php
}

?>		
