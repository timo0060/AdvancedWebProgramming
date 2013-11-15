<html>
	<head>
		<title>Login</title>
		<link href="Styles/main.css" type="text/css" rel="stylesheet" />
		<link href="Styles/slider.css" type="text/css" rel="stylesheet" />
		<link href="Styles/article.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		
		<header>
			<div id="logo">
				<img alt="logo" title="Logo" src="Images/Sun-LockDown-Logo-200-x-200-Red.png" />
			</div>
			<nav>
				<p><a href="index.html">Home</a>   ||   <a href="about.html">About</a>   ||  <a href="projects.html">Projects</a>   ||  <a href="services.html">Services</a>   
						||   <a href="https://github.com/timo0060">GitHub</a>   ||   <a href="contact.html">Contact Me</a></p>
			</nav>
		</header>
		
		<section>
			<article id="loginForm">
				<?php
					//Start the session
					session_start();
					
					//Check to see if the user name is empty or not (whether or not they have signed in)
					if(empty($_SESSION['user_id'])){
						header('Location: login.php');
					}
					else{
						//1. Write command to get the list of subscribers
						$sql = "SELECT * FROM contacts";
						
						//2. Connect to db
						$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200244040', '35785', 'db200244040');
						
						//3. Execute our query and store the results in a variable
						$result = mysqli_query($conn, $sql);
						
						//4. Create a table
						echo '<table border="1" padding="8px"><tr><th>Name</th><th>Phone Number</th><th>Email</th><th>Address</th></tr>';
						
						//5. loop through the results from our query and output them 1 at a time
						while($row = mysqli_fetch_array($result))
						{
							echo '<tr><td>' . $row['name'] . '</td> <td>' . $row['phoneNumber'] . '</td><td>' . $row['email'] . '</td><td>' . $row['address'] .  '</td></tr>';
						}
						
						//6. Close the table
						echo '</table>';
						
						//7. Disconnect
						mysqli_close($conn);
					}
				?>
			</article>
		</section>
		
		<footer>
			<article>
				Copyright @ 2013 Tim Radder<br>
				<br>
				<a href = "login.php">Business List</a>
			</article>
		</footer>
	</body>

</html>