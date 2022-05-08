<?php

include 'connect.php';

?>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="inc/fun/imgs/1f.jpg" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">
					
<?php

$name_login =  $_SESSION['login'];
$sql = "SELECT * FROM users  WHERE name = '$name_login' " ;
$result =$conn->query($sql); 
while ( $row = $result->fetch_assoc()) {
	echo $row['name'];
}
?>

				</div>
				<div class="profile-usertitle-status"></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<ul class="nav menu">

<?php

$link =  $_SERVER['PHP_SELF'];

?>
           <li <?php
if ($link == "/system/admin/search.php") {
	echo "class='active'";
}

			?> ><a href="search.php"><em >&nbsp;</em> SEARCH</a></li>
			<li <?php
if ($link == "/system/admin/bank_documents.php") {
	echo "class='active'";
}

			?> ><a href="bank_documents.php"><em >&nbsp;</em> BANK DOCUMENTS</a></li>
			<li <?php
if ($link == "/system/admin/golden.php") {
	echo "class='active'";
}

			?> ><a href="golden.php"><em >&nbsp;</em> GOLDEN EYES CO.</a></li>
			<li <?php
if ($link == "/system/admin/mago.php") {
	echo "class='active'";
}

			?> ><a href="mago.php"><em >&nbsp;</em> MAGO CO.</a></li>
			<li <?php
if ($link == "/system/admin/silver.php") {
	echo "class='active'";
}

			?> ><a href="silver.php"><em >&nbsp;</em> SILVER EYES CO.</a></li>
			<li <?php
if ($link == "/system/admin/halawa.php") {
	echo "class='active'";
}

			?> ><a href="halawa.php"><em >&nbsp;</em> HALAWA CO.</a></li>

			<li <?php
if ($link == "/system/admin/handsia.php") {
	echo "class='active'";
}

			?> ><a href="handsia.php"><em >&nbsp;</em> ELHANDSIA CO.</a></li>
			<li <?php
if ($link == "/system/admin/black.php") {
	echo "class='active'";
}

			?> ><a href="black.php"><em >&nbsp;</em> BLACK HORSE CO.</a></li>
			<li <?php
if ($link == "/system/admin/coma.php") {
	echo "class='active'";
}

			?> ><a href="coma.php"><em >&nbsp;</em> AlOKHWA CO.</a></li>

       
			<li <?php
if ($link == "/system/admin/docs.php") {
	echo "class='active'";
}

			?> ><a href="docs.php"><em >&nbsp;</em> COMPANIES</a></li>

			<li <?php
if ($link == "/system/admin/users.php") {
	echo "class='active'";
}

			?> ><a href="users.php"><em >&nbsp;</em> SETTINGS</a></li>
			
		</ul>
	</div><!--/.sidebar-->