<!DOCTYPE html>
<html>
<head>
	<title>Impossible Octopus Fitness</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta name="description" content="This webpage is about the incredible fitness skills of octopoda and RETTIWT">
	<meta name="keywords" content="impossible octopus fitness, Octopus, RETTIWT, fitness, Holberton, Octopoda, impossible, Chandler, Mayo, Rick, Houser, incredible, website, clone, workouts, aquatic, ocean, twitter, exercise, Octo, Deep, Sea, devilfish, squid, tentacles, octopuses, octopi, Takoyaki, Calamari">
</head>
<body>
	<div class="wrapper"> <!-- This is a wrapper for all of our content. It is set to a max size of 992px -->
		<div class="header"> <!-- Header Begins -->
			<div class="header-content">
				<div class="header-left">
					<img src="siteicon.png" alt="Our Icon!">
					<h1>
						Welcome To RETTIWT!
					</h1>
				</div>
				<ul class="header-right">
					<li><a href="profile.html" target="_blank">Edit my profile</a></li>
					<li><a href="#">Logout</a></li>
				</ul>
			</div>
			<ul class="menu-btns">
				<li><a href="index.html">Home</a></li>
				<li><a href="profile.html">My statuses</a></li>
				<li><a href="users.html">All users</a></li>
				<li><a href="about.html">About The Site</a></li>
			</ul>
		</div><!-- Header Ends -->
		<div class="about-container">
			<div class="about-box">
				<img class="abt-img" src="impossible_octopus_fitness.png" alt="Impossible Octopus Fitness">
				<h1>Login To RETTIWT</h1>
				<hr>
				<form id='login' action='index.php' method='post' accept-charset='UTF-8'>
				<fieldset >
				<input type='hidden' name='submitted' id='submitted' value='1'/>
				 
				<label for='username' >Username:</label>
				<input type='text' name='login' id='username'  maxlength="50" />
				 
				<label for='password' >Password:</label>
				<input type='password' name='password' id='password' maxlength="50" />
				 
				<input type='submit' name='Submit' value='Submit' />
				 
				</fieldset>
				</form>
			</div>
			
		</div>
		<div class="advise-box">
			*RETTIWT is in beta. Thanks for your patience. 
		</div>
		<div class="footer">
         <div class="footer-text">
            <h2><a href="users.html">All users</a> - <a href="profile.html">Profile</a> - <a href="about.html">About The Site</a></h2>
             <hr>
            <h2> Built by <a href="https://github.com/chandler767/">Chandler Mayo</a> and <a href="https://github.com/frakentoaster/">Rick Houser</a> for <a href="https://www.holbertonschool.com/">Holberton School.</a></h2>
            </div>
        </div>
	</div>
</body>
</html>