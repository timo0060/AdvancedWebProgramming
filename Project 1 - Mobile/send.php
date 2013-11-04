<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>Saving to a Database</title>
	</head>

	<body>
		<?php
			$name = $_POST['Name'];
			$email = $_POST['Email'];
			$comment = $_POST['Comment'];
			
			$toEmail = '200244040@student.georgianc.on.ca';

			
			mail($toEmail, 'Comment', $comment);
			header('Location: index.html');
		?>
	</body>

</html>
