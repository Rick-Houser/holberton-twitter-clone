<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rettiwt</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta name="description" content="This webpage is about the incredible RETTIWT">
	<meta name="keywords" content="RETTIWT, Holberton, incredible, website, clone, twitter ">
  <script type="text/javascript" src="reply.js"></script>
  <script type="text/javascript" src="post_a_status.js"></script>
  <script type="text/javascript" src="toggle.js"></script>
  <script type="text/javascript" src="ajax.js"></script>
  <script type="text/javascript" src="load_more.js"></script>
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
        <div class="main-content"><!-- Main Content Wrapper -->
          <body>
            <form class="login" action="index.php" method="post">
              <label for="login">Login:</label>
              <input type="text" name="login" value="Login">
              <label for="password">Password:</label>
              <input type="password" name="password" value="Password">
              <input type="submit" name="submit button" value="Submit">
            </form>
          </body>
        </div><!-- Main Content Wrapper Ends -->
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
