<?php include "connection.php"; ?>
	<h2>PHP Database</h2>
	<p>
		This is the Database.
	</p>
	<h2>Konemalli</h2>
	<?php
$malli=$db->query("SELECT * FROM konemalli");
foreach ($malli as $row) {
	echo $row["malli"];
}
	 ?>
	<?php include "footer.php"; ?>
