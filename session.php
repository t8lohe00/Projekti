<?php include "menu.php"; ?>
<h1>Xerox huoltosivusto</h1>
<?php
session_start();
if(isset($_SESSION["logged_in"])) {
  echo "<p>Tervetuloa ".$_SESSION["username"]."</p>";
}
else {
  echo "<p>Tervetuloa Vieras</p>";
}

?>
 <?php include 'footer.php'; ?>
