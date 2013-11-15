<?php

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT user_id FROM users WHERE username = '$username' AND password = '$password'";

	$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200244040', '35785', 'db200244040') or die('Could not Connect: ' . mysqli_error());

	$result = mysqli_query($conn, $sql) or die('Error querying database.');

	$count = mysqli_num_rows($result);

	if ($count >= 1) {
		while ($row = mysqli_fetch_array($result)) {
			//we will store the id in a session or cookie here
			session_start();
			
			$_SESSION['user_id'] = $row['user_id'];
		
		}
		header('Location: businessContacts.php');
	} else {
		echo 'Invalid Login';
	}

	mysqli_close($conn);
?>