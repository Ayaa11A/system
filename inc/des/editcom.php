<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<?php

$id = $_GET['id'];
$sql = "SELECT * FROM `company_name` WHERE  id = $id ";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
	?>

<form  method="post" action="inc/fun/do_edit_com.php" enctype="multipart/form-data">
<label>Company Name</label>	
<input class="form-control" type="text" name="mentno" placeholder="add Company Name" value="<?php echo $row['name'] ?>">
<br>

<input class="form-control" type="hidden" name="id" placeholder="enter " value="<?php echo $row['id'] ?>">

<input type="submit" value="Save" class="btn btn-primary">
</form>


	<?php
}

?>		
