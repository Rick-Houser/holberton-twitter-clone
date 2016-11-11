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
