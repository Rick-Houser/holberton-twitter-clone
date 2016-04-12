<div class="header"> <!-- Header Begins -->
	<div class="header-content">
		<div class="header-left">
			<img src="siteicon.png" alt="Our Icon!">
			<h1>
				Welcome To RETTIWT!
			</h1>
		</div>
		<div class="header-right">
			<ul>
				<li><a href="profile.html" target="_blank">Edit my profile</a></li>
				<li><a href="#">Logout</a></li>
			</ul>
      <div class="welcome">
        <?php
          if (array_key_exists('login', $_POST)) {
            if (userExists($_POST["login"], $_POST["password"], $users) == false) {
              echo "<p>Hello, there!</p>";
              echo "<p>Invalid Credentials</p>";
            }
            else {
              echo "<p>Hello, " . userExists($_POST['login'], $_POST['password'], $users)['full_name'],"!</p>";
              echo "<p>Your rot13’d login is: " . str_rot13($_POST['login']),"</p>";
              echo "<p>The length of your login is: " . strlen($_POST['login']),"</p>";
            }
          }
          else {
            echo "<p>Hello, there!</p>";
          }
        ?>
      </div>
		</div>
	</div>
	<ul class="menu-btns">
		<li><a href="index.html">Home</a></li>
		<li><a href="profile.html">My statuses</a></li>
		<li><a href="users.html">All users</a></li>
		<li><a href="about.html">About The Site</a></li>
	</ul>
</div><!-- Header Ends -->
