<!DOCTYPE html>
<?php
$users = [
    array("id" => 1, "login" => "user1", "password" => "password1", "full_name" => "User 1"),
    array("id" => 2, "login" => "user2", "password" => "password2", "full_name" => "User 2"),
    array("id" => 3, "login" => "user3", "password" => "password3", "full_name" => "User 3"),
  ];

function userExists($login, $password, $users) {
	foreach ($users as $user) {
		if ($user["login"] == $login && $user["password"] == $password) {
			return $user;
		}
	}
  return false;
}
?>
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
        <div class="main-content"><!-- Main Content Wrapper -->
                <div class="body"> <!-- Body Begins -->
                <div class="replyclass" id="ask-post-status">
	                <ul class="menu-btns-alt">
	                   <li><a href="#ask-post-status" id="poststatusbtn">Post A New Status</a></li>
	                </ul>
	                <div id="statuspost">
	                  <h2>Post New Status:</h2>
	                	<label for="textarea"></label><textarea id="textarea" name="status" rows=3 cols=55 ></textarea><br>
										<label for="checkbox"></label>
	                	<input type="checkbox" name="location" id="checkbox" value="yes" checked>Include Location<br>
	                  <ul class="menu-btns-alt">
	                    <li><a href="#" class="posts">Post</a></li>
	                	</ul>
	                </div>
                </div>
                <div class="user-status">
                    <img class="user-imgs" src="greenuser.png" alt="User Icon">
                    <h2> USER NAME | February 1, 2016 - 1:50PM </h2>
                    <hr>
                    <p>
                        Bacon ipsum dolor amet corned beef tail brisket fatback boudin pork. Porchetta tail flank ham hock, venison meatloaf drumstick bresaola hamburger prosciutto. Pork capicola pork belly chicken tail.
                    </p>
                </div>
                <div class="ask-post-status" data-attribute="hidden">
                    <ul class="menu-btns-alt">
                        <li><a href="#" class="reply">Reply</a></li>
                    </ul>
                </div>
                <div class="reply_post">
                    <h2>Reply:</h2>
                    <hr>
                    <div>
												<label for="reply_text1"></label>
                         <textarea id="reply_text1" name="reply" rows=3 cols=55 ></textarea><br>
												 <label for="check1"></label>
		 	                	<input type="checkbox" name="location" id="check1" value="yes" checked>Include Location<br>                         <ul class="menu-btns-alt">
                            <li><a href="#" class="post">Post</a></li>
                        </ul>
                    </div>
                </div>
                <div class="user-status">
                    <img class="user-imgs" src="blueuser.png" alt="User Icon">
                    <h2> USER NAME | January 19, 2016 - 8:30PM </h2>
                    <hr>
                    <p>
                        Andouille shoulder pancetta pork loin tri-tip tongue kevin kielbasa tenderloin bacon short loin rump. Pork chop pancetta sirloin ham hock meatloaf. Corned beef leberkas cupim tri-tip kevin ball tip. Drumstick corned beef picanha rump ball tip sirloin short ribs fatback strip steak spare ribs ribeye turkey boudin. Fatback pork pancetta flank kevin rump spare ribs prosciutto jerky biltong meatball capicola filet mignon tenderloin. Ham hock pancetta strip steak pig pastrami cupim.
                    </p>
                </div>
                <div class="ask-post-status">
                    <ul class="menu-btns-alt">
                       <li><a href="#" class="reply">Reply</a></li>
                    </ul>
                </div>
                 <div class="reply_post">
                    <h2>Reply:</h2>
                    <hr>
                    <div>
												<label for="reply_text2"></label>
                         <textarea id="reply_text2" name="reply" rows=3 cols=55 ></textarea><br>
												 <label for="check2"></label>
		 	                	<input type="checkbox" name="location" id="check2" value="yes" checked>Include Location<br>                        <ul class="menu-btns-alt">
                            <li><a href="#" class="post">Post</a></li>
                        </ul>
                    </div>
                </div>
                <div class="user-status">
                    <img class="user-imgs" src="greenuser.png" alt="User Icon">
                    <h2> USER NAME | January 11, 2016 - 4:30PM </h2>
                    <hr>
                    <p>
                        T-bone meatball cupim, filet mignon beef ribs pork belly shank pork loin kielbasa andouille pancetta. Meatball tail turkey pastrami ball tip, venison pig swine cow salami chicken. Corned beef ham hock t-bone, tri-tip pork belly shank bresaola meatball drumstick bacon cow rump jerky sausage turducken.
                    </p>
                </div>
                <div class="ask-post-status">
                    <ul class="menu-btns-alt">
                       <li><a href="#" class="reply">Reply</a></li>
                    </ul>
                </div>
                 <div class="reply_post">
                    <h2>Reply:</h2>
                    <hr>
                    <div>
												<label for="reply_text3"></label>
                         <textarea id="reply_text3" name="reply" rows=3 cols=55 ></textarea><br>
												 <label for="check3"></label>
		 	                	<input type="checkbox" name="location" id="check3" value="yes" checked>Include Location<br>                        <ul class="menu-btns-alt">
                            <li><a href="#" class="post">Post</a></li>
                        </ul>
                    </div>
                </div>
                <div class="user-status">
                    <img class="user-imgs" src="blueuser.png" alt="User Icon">
                    <h2> USER NAME | January 1, 2016 - 1:40AM </h2>
                    <hr>
                    <p>
                        Jowl pork ham, tri-tip shank brisket pork belly shankle flank biltong tongue strip steak. Corned beef pork loin turducken doner turkey, alcatra meatball salami tenderloin capicola t-bone leberkas pastrami. Picanha salami pancetta, strip steak chuck porchetta short ribs corned beef capicola andouille. Drumstick alcatra beef, chicken sirloin doner shankle fatback beef ribs brisket.
                    </p>
                </div>
                <div class="ask-post-status">
                    <ul class="menu-btns-alt">
                       <li><a href="#" class="reply">Reply</a></li>
                    </ul>
                </div>
                 <div class="reply_post">
                    <h2>Reply:</h2>
                    <hr>
                    <div>
												<label for="reply_text4"></label>
                         <textarea id="reply_text4" name="reply" rows=3 cols=55 ></textarea><br>
												 <label for="check4"></label>
		 	                	<input type="checkbox" name="location" id="check4" value="yes" checked>Include Location<br>                        <ul class="menu-btns-alt">
                            <li><a href="#" class="post">Post</a></li>
                        </ul>
                    </div>
                </div>
                 <div class="user-status">
                    <img class="user-imgs" src="greenuser.png" alt="User Icon">
                    <h2> USER NAME | February 1, 2016 - 1:50PM </h2>
                    <hr>
                    <p>
                        Bacon ipsum dolor amet corned beef tail brisket fatback boudin pork. Porchetta tail flank ham hock, venison meatloaf drumstick bresaola hamburger prosciutto. Pork capicola pork belly chicken tail.
                    </p>
                </div>
                <div class="ask-post-status" data-attribute="hidden">
                    <ul class="menu-btns-alt">
                        <li><a href="#" class="reply">Reply</a></li>
                    </ul>
                </div>
                <div class="reply_post">
                    <h2>Reply:</h2>
                    <hr>
                    <div>
												<label for="reply_text5"></label>
                         <textarea id="reply_text5" name="reply" rows=3 cols=55 ></textarea><br>
												 <label for="check10"></label>
		 	                	<input type="checkbox" name="location" id="check10" value="yes" checked>Include Location<br>                         <ul class="menu-btns-alt">
                            <li><a href="#" class="post">Post</a></li>
                        </ul>
                    </div>
                </div>
                 <div class="user-status">
                    <img class="user-imgs" src="greenuser.png" alt="User Icon">
                    <h2> USER NAME | February 1, 2016 - 1:50PM </h2>
                    <hr>
                    <p>
                        Bacon ipsum dolor amet corned beef tail brisket fatback boudin pork. Porchetta tail flank ham hock, venison meatloaf drumstick bresaola hamburger prosciutto. Pork capicola pork belly chicken tail.
                    </p>
                </div>
                <div class="ask-post-status" data-attribute="hidden">
                    <ul class="menu-btns-alt">
                        <li><a href="#" class="reply">Reply</a></li>
                    </ul>
                </div>
                <div class="reply_post">
                    <h2>Reply:</h2>
                    <hr>
                    <div>
												<label for="reply_text6"></label>
                         <textarea id="reply_text6" name="reply" rows=3 cols=55 ></textarea><br>
												 <label for="check5"></label>
		 	                	<input type="checkbox" name="location" id="check5" value="yes" checked>Include Location<br>                         <ul class="menu-btns-alt">
                            <li><a href="#" class="post">Post</a></li>
                        </ul>
                    </div>
                </div>
                 <div class="user-status">
                    <img class="user-imgs" src="greenuser.png" alt="User Icon">
                    <h2> USER NAME | February 1, 2016 - 1:50PM </h2>
                    <hr>
                    <p>
                        Bacon ipsum dolor amet corned beef tail brisket fatback boudin pork. Porchetta tail flank ham hock, venison meatloaf drumstick bresaola hamburger prosciutto. Pork capicola pork belly chicken tail.
                    </p>
                </div>
                <div class="ask-post-status" data-attribute="hidden">
                    <ul class="menu-btns-alt">
                        <li><a href="#" class="reply">Reply</a></li>
                    </ul>
                </div>
                <div class="reply_post">
                    <h2>Reply:</h2>
                    <hr>
                    <div>
												<label for="reply_text7"></label>
                         <textarea id="reply_text7" name="reply" rows=3 cols=55 ></textarea><br>
												 <label for="check6"></label>
		 	                	<input type="checkbox" name="location" id="check6" value="yes" checked>Include Location<br>                         <ul class="menu-btns-alt">
                            <li><a href="#" class="post">Post</a></li>
                        </ul>
                    </div>
                </div>
                 <div class="user-status">
                    <img class="user-imgs" src="blueuser.png" alt="User Icon">
                    <h2> USER NAME | February 1, 2016 - 1:50PM </h2>
                    <hr>
                    <p>
                        Bacon ipsum dolor amet corned beef tail brisket fatback boudin pork. Porchetta tail flank ham hock, venison meatloaf drumstick bresaola hamburger prosciutto. Pork capicola pork belly chicken tail.
                    </p>
                </div>
                <div class="ask-post-status" data-attribute="hidden">
                    <ul class="menu-btns-alt">
                        <li><a href="#" class="reply">Reply</a></li>
                    </ul>
                </div>
                <div class="reply_post">
                    <h2>Reply:</h2>
                    <hr>
                    <div>
												<label for="reply_text8"></label>
                         <textarea id="reply_text8" name="reply" rows=3 cols=55 ></textarea><br>
												 <label for="check7"></label>
		 	                	<input type="checkbox" name="location" id="check7" value="yes" checked>Include Location<br>                         <ul class="menu-btns-alt">
                            <li><a href="#" class="post">Post</a></li>
                        </ul>
                    </div>
                </div>
                 <div class="user-status">
                    <img class="user-imgs" src="blueuser.png" alt="User Icon">
                    <h2> USER NAME | February 1, 2016 - 1:50PM </h2>
                    <hr>
                    <p>
                        Bacon ipsum dolor amet corned beef tail brisket fatback boudin pork. Porchetta tail flank ham hock, venison meatloaf drumstick bresaola hamburger prosciutto. Pork capicola pork belly chicken tail.
                    </p>
                </div>
                <div class="ask-post-status" data-attribute="hidden">
                    <ul class="menu-btns-alt">
                        <li><a href="#" class="reply">Reply</a></li>
                    </ul>
                </div>
                <div class="reply_post">
                    <h2>Reply:</h2>
                    <hr>
                    <div>
												<label for="reply_text9"></label>
                         <textarea id="reply_text9" name="reply" rows=3 cols=55 ></textarea><br>
												 <label for="check8"></label>
		 	                	<input type="checkbox" name="location" id="check8" value="yes" checked>Include Location<br>                         <ul class="menu-btns-alt">
                            <li><a href="#" class="post">Post</a></li>
                        </ul>
                    </div>
                </div>
                 <div class="user-status">
                    <img class="user-imgs" src="blueuser.png" alt="User Icon">
                    <h2> USER NAME | February 1, 2016 - 1:50PM </h2>
                    <hr>
                    <p>
                        Bacon ipsum dolor amet corned beef tail brisket fatback boudin pork. Porchetta tail flank ham hock, venison meatloaf drumstick bresaola hamburger prosciutto. Pork capicola pork belly chicken tail.
                    </p>
                </div>
                <div class="ask-post-status" data-attribute="hidden">
                    <ul class="menu-btns-alt">
                        <li><a href="#" class="reply">Reply</a></li>
                    </ul>
                </div>
                <div class="reply_post">
                    <h2>Reply:</h2>
                    <hr>
                    <div>
												<label for="reply_text10"></label>
                         <textarea id="reply_text10" name="reply" rows=3 cols=55 ></textarea><br>
												 <label for="check9"></label>
		 	                	<input type="checkbox" name="location" id="check9" value="yes" checked>Include Location<br>                         <ul class="menu-btns-alt">
                            <li><a href="#" class="post">Post</a></li>
                        </ul>
                    </div>
                </div>
                 <div id="show-more-status">
                    <ul class="menu-btns-alt">
                        <li><a href="#" id="showmore">See more statuses</a></li>
                    </ul>
                </div>
            </div><!-- Body Content Ends -->
            <div class="aside-wrapper"> <!-- Aside Begins -->
                <div class="aside">
                    <h1> Featured Users: </h1>
                    <div class="user-feat">
                        <img class="user-imgs" src="blueuser.png" alt="User Icon">
                        <h2> USER NAME </h2>
                        <hr>
                        <p>
                            Hamburger doner prosciutto, shoulder meatloaf beef ribs chuck bresaola pork belly. Spare ribs andouille meatloaf ribeye, pastrami chuck meatball kielbasa pork belly beef ribs shoulder.
                        </p>
                    </div>
                </div>
                <div class="aside">
                    <h1> User Of The Month: </h1>
                    <div class="user-feat">
                        <img class="user-imgs" src="blueuser.png" alt="User Icon">
                        <h2> USER NAME </h2>
                        <hr>
                        <p>
                            Hamburger doner prosciutto, shoulder meatloaf beef ribs chuck bresaola pork belly. Spare ribs andouille meatloaf ribeye, pastrami chuck meatball kielbasa pork belly beef ribs shoulder.
                        </p>
                    </div>
                </div>
                <div class="advise-box">
                    <p>*RETTIWT is in beta. Thanks for your patience.</p>
                </div>
            </div><!-- Aside Ends -->
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
