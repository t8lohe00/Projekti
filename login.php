<?php include "menu.php"; ?>
<h1>Xerox huoltosivusto</h1>
<?php
$annettu_salasana=$_POST["password"];
$annettu_tunnus=$_POST["username"];
$oikea_salasana="12345";
if ($annettu_salasana == $oikea_salasana) {
  session_start();
  $_SESSION["logged_in"]=true;
  $_SESSION["username"]=$annettu_tunnus;
  echo "<p>Kirjautuminen onnistui</p>";
}
else {
  echo "<p>Tunnus ja salasana väärin</p>";
}
 ?>
 <?php include 'footer.php'; ?>
