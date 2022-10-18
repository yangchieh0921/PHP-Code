<?php
// This is the login page
// Set the page title and include the header file
define('TITLE', 'User Login');
include('templates/header.html');
// Ask the user to login
print '<h2>Login Form</h2>
	<p>Log in to earn Super Duper loyalty points</p>';
// Check if the form has been submitted 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Handle the form
	if ( (!empty($_post['email'])) && (!empty($_post['password'])) ) {
		if ( (strtolower($_POST['email']) == 'test@test.com') && ($_POST['password'] == 'test') ) { // Correct!
			ob_end_clean(); //
			header('Location: specials.php');
			exit();
		} else { //Wrong user or password
			print '<p class="text--error">Email or Password does not match.<br />Go back and try again.</p>';
		}
	} else { // FOrgot a field
		print '<p class="text--error">Email address and password are required.<br />Go back and try again.</p>';
	}
} else { // Display the form
	print '<form action="login.php" method="post" class="form--inline">
	<p><label for="email">Email Address:</label><input type="email" name="email" size="20"></p>
	<p><label for="password">Password:</label><input type="password" name="password" size="20"></p>
	<p><input type="submit" name="submit" value="Log In" class="button--pill"></p>
	</form>';
}
include('templates/footer.html'); // include the footer file
?>
		