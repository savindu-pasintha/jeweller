<?php


sleep(1);
// connecting to the database

// checking if 
if (isset($_POST['full_name']) || isset($_POST['email'])) {
	// sanitizing the input
	$full_name = $_POST['full_name'];
	$emailb = $_POST['email'];

	include('./Database-php/start-mysql-connection.php');
	$sql = "SELECT * FROM register email='$emailb' AND password='$full_name'";
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) {
		echo "record-added";
	} else {
		echo 'No';
	}
	/*
		$i = 0;
		$x = 0;
		while ($rowData = mysqli_fetch_assoc($result)) {
			if (isset($rowData)) {
				//$logid[$i] = $rowData['id'];
				$email[$i] = $rowData['email'];
				$password[$i] = $rowData['password'];
				if (($password[$i] == $full_name) && ($email[$i] == $emailb)) {
					echo "record-added";
					exit;
					break;
				}
				$i++;
			}
		}
		s*/


	include('./Database-php/close-mysql-connection.php');
}
