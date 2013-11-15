<?php
		
			//Start session
			session_start();
			
			//Remove any session values
			session_unset();
			
			//get rid of the current session
			session_destroy();
			
			header('Location: login.php');
		
		?>
	