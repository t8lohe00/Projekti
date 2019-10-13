<?php include "connection.php"; ?>
	<h2>Konemalli</h2>
	<?php
$konemallimalli=$db->query("SELECT * FROM konemalli");
foreach ($malli as $row) {
	echo $row["malli"];
}
	 ?>
	<?php include "footer.php"; ?>
