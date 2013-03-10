<?php  # logout.php -- logs the user out by removing the cookies
		
// Check for user cookie -- if no cookie redirect user to main index
if (!isset($_COOKIE['user_id']))
{
	// Get support functions
	require ('includes/login_functions_inc.php');
	
	// redirect user
	redirect_user();

}
else  // Delete the existing cookies
{
	//setcookie ('user_id', '', time()-3600, '/','',0,0);
	//setcookie ('first_name', '', time()-3600, '/','',0,0);
	setcookie ('user_id', '', time()-3600);
	setcookie ('first_name', '', time()-3600);

}

// set page title

$page_title = 'Logged Out!';

// include header files
include ('includes/header_1_inc.php');
include ('includes/header_1_nli_inc.php');

// Display user message
echo "<h1>Logged Out!</h1>
<p>You are now logged out, {$_COOKIE['first_name']}!</p>";

include ('includes/footer_inc.php');

?>