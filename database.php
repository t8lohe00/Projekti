<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
	<h2>PHP Database</h2>
	<p>
		This is the Database.
	</p>
	<h2>Konemalli</h2>
	<?php
$konemalli=$db->query("SELECT * FROM konemalli");
foreach ($konemalli as $row) {
	echo $row["malli"];
}
	 ?>
	<?php include "footer.php"; ?>
