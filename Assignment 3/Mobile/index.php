<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title></title>
  
  
  
  <link rel="stylesheet" href="https://d10ajoocuyu32n.cloudfront.net/mobile/1.3.1/jquery.mobile-1.3.1.min.css">
  
  <!-- Extra Codiqa features -->
  <link rel="stylesheet" href="CSS/codiqa.ext.css">
  <link rel="stylesheet" href="CSS/styles.css">
  
  <!-- jQuery and jQuery Mobile -->
  <script src="https://d10ajoocuyu32n.cloudfront.net/jquery-1.9.1.min.js"></script>
  <script src="https://d10ajoocuyu32n.cloudfront.net/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

  <!-- Extra Codiqa features -->
  <script src="https://d10ajoocuyu32n.cloudfront.net/codiqa.ext.js"></script>
  
  <script type="text/javascript">

		function Slider(){
			$(".slider #1").show("fade", 500);
			$(".slider #1").delay(5500).hide("slide", {direction: "left"}, 500);

		
			var slideSize = $(".slider img").size();
			var count = 2;		
			
			setInterval(function(){
				$(".slider #" + count).delay(500).show("slide", {direction: "right"}, 500);
				$(".slider #" + count).delay(5500).hide("slide", {direction: "left"}, 500);
				
				if(count == slideSize){
					count = 1;
				}else{
					count = count + 1;
				}
			}, 6500);
			
		}

	</script>
   
</head>
<body onload = "Slider();">
<!-- Home -->
<div data-role="page" id="page1">
    <div data-theme="a" data-role="header">
        <h3 class="Header">
            Home
        </h3>
        <div data-role="navbar" data-iconpos="bottom" class="navBar">
            <ul>
                <li>
                    <a href="#page1" data-transition="fade" data-theme="" data-icon="home"
                    class="ui-btn-active ui-state-persist">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#page2" data-transition="fade" data-theme="" data-icon="info">
                        About
                    </a>
                </li>
                <li>
                    <a href="#page3" data-transition="fade" data-theme="" data-icon="grid">
                        Projects
                    </a>
                </li>
                <li>
                    <a href="#page4" data-transition="fade" data-theme="" data-icon="edit">
                        Services
                    </a>
                </li>
                <li>
                    <a href="#page5" data-transition="fade" data-theme="" data-icon="search">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div data-role="content" class = "body">
			<h1><u>Welcome</u></h1>
			<p class="bodyText">
			Welcome to the portfolio of <em><a href="about.html">Tim Radder</a></em>. I am a college student studying to becoming a computer programming analyst. 
			I'm working on becoming a computer programmer, because computer programming is something that greatly interests me. Whether it's designing or coding 
			a website, a computer program, or just something random to help the time  past. I want to further my knowledge in this subject matter to help 
			increase the quality and performance of my programming. One day I'd like to make my own game development studio and develop games that people
			will enjoy and love to play. To bring entertainment to people and to bring them together is what I want to accomplish by learning more and more
			 about programming.
		</p>
		<br><br>
		<div class="slider" onclick="location.href='#page3';" style="cursor:pointer;">
			<img id="1" src="Images/salesbonus.png" alt="SalesBonus" />
			<img id="2" src="Images/sega.png" alt="SegaGenesis" />
			<img id="3" src="Images/contentmanager.png" alt="ContentManager" />
		</div>
		
		<br><br>
		
		<h1><u>Stay Connected</u></h1>
		<a href="https://www.facebook.com/timothyradder"><img src="Images/facebook.png" width="55px" height="55px" /></a>
		<a href="https://twitter.com/timo0060"><img src="Images/twitter.png" width="55px" height="55px" /></a>
		<a href="https://plus.google.com/u/0/105950199526923029875"><img src="Images/googleplus.png" width="55px" height="55px" /></a>

    </div>
    <div data-theme="a" data-role="footer" data-position="fixed">
        <h5 class="footer">
			Tim Radder <br>
			Copyright &copy; 2013<br><br>
			<a href="#businessContacts">Business Contacts</a>
			<BR>
			<a href = "http://webdesign4.georgianc.on.ca/~200244040/AdvancedWeb/Profile/Desktop/index.html">Desktop Site</a>
        </h5>
    </div>
</div>

<!-- About -->
<div data-role="page" id="page2">
    <div data-theme="a" data-role="header">
        <h3 class="Header">
            About
        </h3>
        <div data-role="navbar" data-iconpos="bottom" class="navBar">
            <ul>
                <li>
                    <a href="#page1" data-transition="fade" data-theme="" data-icon="home">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#page2" data-transition="fade" data-theme="" data-icon="info" class="ui-btn-active ui-state-persist">
                        About
                    </a>
                </li>
                <li>
                    <a href="#page3" data-transition="fade" data-theme="" data-icon="grid">
                        Projects
                    </a>
                </li>
                <li>
                    <a href="#page4" data-transition="fade" data-theme="" data-icon="edit">
                        Services
                    </a>
                </li>
                <li>
                    <a href="#page5" data-transition="fade" data-theme="" data-icon="search">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div data-role="content" class = "body">
		<h1><u>Early Life</u></h1>
			<p class="bodyText">
				My name is Timothy Mathew Radder, and I was born July 13th, 1994 in Newmarket, Ontario. From a young age I was always fascinated with computers
				and wanted to more with them. I would play many games on my old computers and "attempt" to upgrade them, but with my very basic , almost non-exsistent,
				knowledge back then, I would almost always have something go wrong. I learned from those mistakes however, and slowly gained more knowledge over the years.
			</p>
			<h1><u>Early Education</u></h1>
			<p class="bodyText">
				I attended Baxter Central Public School from Kindergarten to Grade 8. From there I went on to attend Bear Creek Secondary School, which helped further my knowledge
				in computers and set in motion my desire to become a Computer programmer. In Grade 11 I took a computer programming class, where I learned basic java and basic JApplets
				and I exceeded in that class. I took the Grade 12 Computer Programmer class and developed my java skills even more. Along with these two computer programming classes,
				I took three Computer Engineering classes. One in Grade 10, one in Grade 11, and one in Grade 12. I finished the Grade 12 class with the highest mark in my class at a 97% overall.
				Throughout my Highschool studies, I managed to obtain honour role all four years and graduate with one of the highest averages.				 
			</p>
			<h1><u>Current Education</u></h1>
			<p class="bodyText">
				I am currently attending Georgian College for Computer Programmer Analyst. My Highschool education prepared me quite well for College and has made
				grasping the concepts and knowledge a lot easier for me. I'm very excited to put my new found knowledge into practice with a hopeful great, and successful Co-Op
				this winter. 	 
			</p>
			<h1><u>Work Experience</u></h1>
			<p class="bodyText">
				I haven't had a job in the IT industry as a professional, but I am often asked by friends and family to help them solve their computer problems. 
				My first job was cleaning up various plaza's throughout Barrie Ontario with two of my brothers and my father, getting paid next to nothing. As I was just in highschool t the time and having
				no need to spend money, it was ok. That lasted for about a year and a half until we couldn't take it any longer. After that, I got a job for a week as a door to 
				door salesperson selling satellite internet. I quickly found something else though, because I didn't believe in the product. I worked for a month and a half at a concrete construction company
				as a temp before finding my current job as a Tim Hortons employee.
			</p><br><Br>
			<img src="Images/profilePic.png" alt="ProfilePic"/>
    </div>
    <div data-theme="a" data-role="footer" data-position="fixed">
        <h5 class="footer">
			Tim Radder <br>
			Copyright &copy; 2013<br>
			<a href = "http://webdesign4.georgianc.on.ca/~200244040/AdvancedWeb/Profile/Desktop/index.html">Desktop Site</a>
        </h5>
    </div>
</div>

<!-- Projects -->
<div data-role="page" id="page3">
    <div data-theme="a" data-role="header">
        <h3 class="Header">
            Projects
        </h3>
        <div data-role="navbar" data-iconpos="bottom" class="navBar">
            <ul>
                <li>
                    <a href="#page1" data-transition="fade" data-theme="" data-icon="home">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#page2" data-transition="fade" data-theme="" data-icon="info">
                        About
                    </a>
                </li>
                <li>
                    <a href="#page3" data-transition="fade" data-theme="" data-icon="grid"  class="ui-btn-active ui-state-persist">
                        Projects
                    </a>
                </li>
                <li>
                    <a href="#page4" data-transition="fade" data-theme="" data-icon="edit">
                        Services
                    </a>
                </li>
                <li>
                    <a href="#page5" data-transition="fade" data-theme="" data-icon="search">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div data-role="content" class = "body">
		<h1><u>Sega Genesis</u></h1>
		<p class="bodyText">
			This was a website I made for the Sega Genesis in my Web Design class at Georgian College. It was my first real website that I've finished. I made
			it to showcase one of the most influential gaming consoles of my youth. The Sega Genesis helped shape my gaming life and pushed me to want to develop games myself.
			I made sure to include a few of Sega's catch phrases of the era, as well as a small gallery for the console and the games I played.
			It was great to see the result of just 4 months of learning and I'm proud of the way it turned out, although many changes could be made to it now to 
			improve it's overall quality and appeal. <br><br>
			If you would like to visit the website click <a href="http://webdesign4.georgianc.on.ca/~200244040/sega_genesis/index.html">here</a>
		</p>
		
		<br><br><Br>
		
		<h1><u>Content Manager</u></h1>
		<p class="bodyText">
			The content manager was my first big website that had PHP functionality built into it as was as mySQL. It was a final project for my Intro into 
			Web Programming class, also at Georgian College. I am very happy with the way it turned out and the features that I have managed to include. These features
			include: Sign Up, Login, changing the logo, editing users, adding new users, and adding new web pages. That was the first time I've done any of that with PHP on such
			a large scale. As you can see, the design carried over to this website quite a bit, because I really enjoyed the way I managed to give it a visually appealing look.
			<br><br>
			If you would like to visit the website click <a href="http://webdesign4.georgianc.on.ca/~200244040/web_programming/contentmanager/default.php?id=1">here</a>
		</p>
		
		<br><br><Br>
		
		<h1><u>EggBert</u></h1>
		<p class="bodyText">
			EggBert is an Wii remote controlled head that can pivot on the X axis and the Y axis. He has an Arduino as his heart and brain. I made EggBert
			for my Computer Architecture class at Georgian College. It was a basic final project that I think could have turned out better if I had a bigger arduino.
			The one I had was to small to have both the motor control and a digital screen. I decided to just have the audio and use a cardboard cut out for the face.
			The problem there was that the Servo classes I was using interfered with the audio class I was using and neither the teacher or I could solve this problem.
			So EggBert became a happy mute egg. 
			<br><br>
			If you wish to watch EggBert in action, click <a href="http://www.youtube.com/watch?v=whyV2JW5eM8&feature=share&list=UUzEPrOJChp2lpGEMcBT_Bog">here</a> 
		</p>
		
		<br><br><Br>
		
		<h1><u>Portfolio</u></h1>
		<p class="bodyText">
			The Portfolio is an assignment I did for my Advanced Web Programming class in Georgian College. It turned out great, and I tried a few new things that 
			I've never tried before and it helped bring the whole website together. I also think that it's my most visually appealing website to date and 
			I am very pleased with it. Although most of the design was taken from a previous assignment, <a href="#contentManager">here</a>, I feel that I improved
			it quite a bit and made it more unique and appealing. I believe that it is a job well done, but I'm sure there are some improvements that I can make to 
			it in the future as my skills and I develop into a more professional programmer. 
			<br><br>
			Wish to view it? Well you're already there! Use the navigation bar at the top to look around.
		</p>
		
		<br><br><Br>
		
		<h1><u>Sales Bonues Calculator</u></h1>
		<p class="bodyText">
			This was the first assignment in my Rapid Application development class at Georgian College. For it being the first assignment, and the first time I used C#
			I think it turned out great. This application allows the user to input their name, their employee number, how many hours they worked that month, and the total 
			monthly sales. The user can then click calculate to see how much of a sales bonus they've earned, clear everything, but the monthly sales, or send it to a print 
			preview. This application was also the first time I used the logo for Sun Lockdown. I like how it turned out, and I can't wait to add more projects like this to this list.
			<br><br>
			<div id="photo">
				<img src="Images/salesbonus.png" alt="SalesBonus" width = "300px" height = "200px"/><br>
				Screen shot of the program
			</div>
		</p>
    </div>
    <div data-theme="a" data-role="footer" data-position="fixed">
        <h5 class="footer">
			Tim Radder <br>
			Copyright &copy; 2013<br>
			<a href = "http://webdesign4.georgianc.on.ca/~200244040/AdvancedWeb/Profile/Desktop/index.html">Desktop Site</a>
        </h5>
    </div>
</div>


<!-- Services -->
<div data-role="page" id="page4">
    <div data-theme="a" data-role="header">
        <h3 class="Header">
            Services
        </h3>
        <div data-role="navbar" data-iconpos="bottom" class="navBar">
            <ul>
                <li>
                    <a href="#page1" data-transition="fade" data-theme="" data-icon="home">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#page2" data-transition="fade" data-theme="" data-icon="info">
                        About
                    </a>
                </li>
                <li>
                    <a href="#page3" data-transition="fade" data-theme="" data-icon="grid">
                        Projects
                    </a>
                </li>
                <li>
                    <a href="#page4" data-transition="fade" data-theme="" data-icon="edit"  class="ui-btn-active ui-state-persist">
                        Services
                    </a>
                </li>
                <li>
                    <a href="#page5" data-transition="fade" data-theme="" data-icon="search">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div data-role="content" class = "body">
		<p class="bodyText">
			Are you in need of a Java programmer, c# programmer, or even a web programmer / designer? If so, I offer these services at the best rates.
			I'll program your website and do a basic design for competitive prices. Need a applications developer, well you've come to the right place. <br><br>
			Need to	see more of my work before you contact me with services that you're interested in? You can view some of the various projects I've completed
			<a href="#page3">here</a>.<br><br>
			Want to use my services but don't know how to contact me? Click on the Contact Me link above, or click 
			<a href="#page5">here</a>.
		</p>
    </div>
    <div data-theme="a" data-role="footer" data-position="fixed">
        <h5 class="footer">
			Tim Radder <br>
			Copyright &copy; 2013<br>
			<a href = "http://webdesign4.georgianc.on.ca/~200244040/AdvancedWeb/Profile/Desktop/index.html">Desktop Site</a>
        </h5>
    </div>
</div>


<!-- Contact -->
<div data-role="page" id="page5">
    <div data-theme="a" data-role="header">
        <h3 class="Header">
            Contact
        </h3>
        <div data-role="navbar" data-iconpos="bottom" class="navBar">
            <ul>
                <li>
                    <a href="#page1" data-transition="fade" data-theme="" data-icon="home">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#page2" data-transition="fade" data-theme="" data-icon="info">
                        About
                    </a>
                </li>
                <li>
                    <a href="#page3" data-transition="fade" data-theme="" data-icon="grid">
                        Projects
                    </a>
                </li>
                <li>
                    <a href="#page4" data-transition="fade" data-theme="" data-icon="edit">
                        Services
                    </a>
                </li>
                <li>
                    <a href="#page5" data-transition="fade" data-theme="" data-icon="search"  class="ui-btn-active ui-state-persist">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div data-role="content" class = "body">
		<form action="send.php" method="POST" data-ajax="false">
            <div data-role="fieldcontain">
                <label for="Name">
                    Name
                </label>
                <input name="" id="Name" placeholder="Full Name" value="" type="text">
            </div>
            <div data-role="fieldcontain">
                <label for="Email">
                    Email
                </label>
                <input name="" id="Email" placeholder="example@email.com" value="" type="text">
            </div>
            <div data-role="fieldcontain">
                <label for="Comment">
                    Comment
                </label>
                <textarea name="" id="Comment" placeholder="Text..."></textarea>
            </div><br>
			<button>
			Send
			</button>
        </form>
    </div>
    <div data-theme="a" data-role="footer" data-position="fixed">
        <h5 class="footer">
			Tim Radder <br>
			Copyright &copy; 2013<br>
			<a href = "http://webdesign4.georgianc.on.ca/~200244040/AdvancedWeb/Profile/Desktop/index.html">Desktop Site</a>
        </h5>
    </div>
	
	<!-- business Contacts -->
<div data-role="page" id="businessContacts">
    <div data-theme="a" data-role="header">
        <h3 class="Header">
            Contacts
        </h3>
        <div data-role="navbar" data-iconpos="bottom" class="navBar">
            <ul>
                <li>
                    <a href="#page1" data-transition="fade" data-theme="" data-icon="home">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#page2" data-transition="fade" data-theme="" data-icon="info">
                        About
                    </a>
                </li>
                <li>
                    <a href="#page3" data-transition="fade" data-theme="" data-icon="grid">
                        Projects
                    </a>
                </li>
                <li>
                    <a href="#page4" data-transition="fade" data-theme="" data-icon="edit"  class="ui-btn-active ui-state-persist">
                        Services
                    </a>
                </li>
                <li>
                    <a href="#page5" data-transition="fade" data-theme="" data-icon="search">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div data-role="content" class = "body">
		<p class="bodyText">
			<?php
				//Start the session
				session_start();
				
				//Check to see if the user name is empty or not (whether or not they have signed in)
				if(empty($_SESSION['user_id'])){
					header('Location: #login');
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
		</p>
    </div>
    <div data-theme="a" data-role="footer" data-position="fixed">
        <h5 class="footer">
			Tim Radder <br><br>
			<a href = "#logout">Logout</a>
			<br>
			Copyright &copy; 2013<br>
			<a href = "http://webdesign4.georgianc.on.ca/~200244040/AdvancedWeb/Profile/Desktop/index.html">Desktop Site</a>
        </h5>
    </div>
	
		<!-- Login -->
<div data-role="page" id="login">
    <div data-theme="a" data-role="header">
        <h3 class="Header">
            Contacts
        </h3>
        <div data-role="navbar" data-iconpos="bottom" class="navBar">
            <ul>
                <li>
                    <a href="#page1" data-transition="fade" data-theme="" data-icon="home">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#page2" data-transition="fade" data-theme="" data-icon="info">
                        About
                    </a>
                </li>
                <li>
                    <a href="#page3" data-transition="fade" data-theme="" data-icon="grid">
                        Projects
                    </a>
                </li>
                <li>
                    <a href="#page4" data-transition="fade" data-theme="" data-icon="edit"  class="ui-btn-active ui-state-persist">
                        Services
                    </a>
                </li>
                <li>
                    <a href="#page5" data-transition="fade" data-theme="" data-icon="search">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div data-role="content" class = "body">
		<p class="bodyText">
			<?php
				//Start the session
				session_start();
				
				//Check to see if the user name is empty or not (whether or not they have signed in)
				if($_SESSION['user_id']){
					header('Location: #businessContacts');
				}
			?>
			
			<form method="post" action="#validate">

				<div>
					<label>Username</label>
					<input name="username" />
				</div>
				<div>
					<label>Password</label>
					<input name="password" type="password" />
				</div><br><br>
				<input type="submit" value="Login" />
			</form>
		</p>
    </div>
    <div data-theme="a" data-role="footer" data-position="fixed">
        <h5 class="footer">
			Tim Radder <br><br>
			<a href = "#businessContacts">Business Contacts</a>
			<br>
			Copyright &copy; 2013<br>
			<a href = "http://webdesign4.georgianc.on.ca/~200244040/AdvancedWeb/Profile/Desktop/index.html">Desktop Site</a>
        </h5>
    </div>
</div>

		<!-- Validation -->
<div data-role="page" id="validate">
   
    <div data-role="content" class = "body">
		<p class="bodyText">
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
					header('Location: #businessContacts');
				} else {
					echo 'Invalid Login';
				}

				mysqli_close($conn);				
				
			?>
			
		</p>
    </div>
</div>

		<!-- logout -->
<div data-role="page" id="logout">
   
    <div data-role="content" class = "body">
		<p class="bodyText">
			<?php
		
				//Start session
				session_start();
				
				//Remove any session values
				session_unset();
				
				//get rid of the current session
				session_destroy();
				
				header('Location: #login');
		
			?>
			
		</p>
    </div>
</div>

</div>
</body>
</html>
