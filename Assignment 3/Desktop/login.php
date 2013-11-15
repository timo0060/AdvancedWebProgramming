<html>
	<head>
		<title>Login</title>
		<link href="Styles/main.css" type="text/css" rel="stylesheet" />
		<link href="Styles/slider.css" type="text/css" rel="stylesheet" />
		<link href="Styles/article.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<?php
			//Start the session
			session_start();
			
			//Check to see if the user name is empty or not (whether or not they have signed in)
			if($_SESSION['user_id']){
				header('Location: businessContacts.php');
			}
		?>
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
				<form method="post" action="validate.php">

				<div>
					<label>Username</label>
					<input name="username" />
				</div>
				<div>
					<label>Password</label>
					<input name="password" type="password" />
				</div>
				<input type="submit" value="Login" />
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