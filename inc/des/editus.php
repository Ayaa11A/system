<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<?php

$id = $_GET['id'];
$sql = "SELECT * FROM `users` WHERE id = $id ";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
	?>

<form  method="post" action="inc/fun/do_edit_us.php" enctype="multipart/form-data">
<label>Name</label>	
<input class="form-control" type="text" name="usname"  value="<?php echo $row['name'] ?>">
<br>
<label>Name</label>	
<input class="form-control" type="password" name="pass"  value="<?php echo $row['password'] ?>">
<br>

<input class="form-control" type="hidden" name="id" placeholder="enter " value="<?php echo $row['id'] ?>">

<input type="submit" value="Save" class="btn btn-primary">
</form>


	<?php
}

?>		
