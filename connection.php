<?php
	try
	{
	 $dsn = "mysql:host=localhost;dbname=projekti";
	 $db = new PDO ($dsn, "Heikki", "Heikki123");
	 //print ("Connected\n");
	}
	catch (PDOException $e)
	{
	 print ("Cannot connect to server\n");
	 print ("Error code: " . $e->getCode () . "\n");
	 print ("Error message: " . $e->getMessage () . "\n");
	}
	?>
