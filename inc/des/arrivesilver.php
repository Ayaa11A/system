<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<style type="hidden" class="c" background="red"></style>						
</head>
<body>
<form method="POST" action="inc/fun/do_arrsilver.php" enctype="multipart/form-data">
	<label>Final Document NO</label>
	<input type="text" name="fdocumentno" placeholder="Add Final Document NO" class="form-control">
	<br>
	<label> Final Date</label>
	<input type="Date" name="fdate" placeholder="Add Date"  class="form-control" > 
	<br>
	<input type="hidden" name="idd" value=
	"<?php $id = $_GET['id'];
	 echo $id;
	  ?>">
	<br>
    <input type="submit" value="Save" class="btn btn-primary">
    
</form>
</body>
</html>