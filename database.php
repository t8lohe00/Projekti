<?php
session_start();
if(!isset($_SESSION["logged_in"])) {
	header("Location:not_logged.php");
}
 ?>
<?php include "menu.php" ?>
<?php include "connection.php"; ?>
	<h2>Konemalli</h2>

	<?php
$konemalli=$db->query("SELECT * FROM konemalli");
foreach ($konemalli as $row) {
	echo $row["malli"]."<br>";
}
	 ?>
	<?php include "footer.php"; ?>
