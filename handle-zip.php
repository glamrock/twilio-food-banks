<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	$zip = $_REQUEST['Digits'];

	if (strlen($zip) == 5)
	{
		$db = new PDO('sqlite:ivr.sqlite');

		$stmt = $db->prepare('SELECT address FROM foodbank WHERE zip=?');
		$stmt->execute(array($zip));
		
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		if ($result)
		{
			echo '<Say>Your closest foodbank is '.$result['address'].'.</Say>';
		}
		else {
			echo "<Say>Sorry, we don't have record of a food bank in that zip code. Please try again or call Philabundance at 215.339.0900.</Say>";
			echo '<Redirect method="GET">handle-user-input.php?Digits=3</Redirect>';
		}
	}
	else {
		echo "<Say>Sorry, we don't recognize that zip code. Please try again or call Philabundance at 215.339.0900.</Say>";
		echo '<Redirect method="GET">handle-user-input.php?Digits=3</Redirect>';
	}

	echo '</Response>';
?>
