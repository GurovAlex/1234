<?php
if ($_SERVER["REQUEST_METHOD"] === "POST")
	{
		if (!(isset($_POST["C"])))
		{
			echo "error request POST";
			exit();
		}
		echo "error request POST";
		$userID = $_POST['C'];
		$lat 	= $_POST['lat'];
		$lon 	= $_POST['lon'];
		$appid 	= $_POST['appid'];
		$Sess 	= $_POST['Sess'];
	}
	else
	{
		if (!(isset($_GET["C"])))
		{
			echo "error request GET";
		}

		echo "error request GET";
		
	}
?>
