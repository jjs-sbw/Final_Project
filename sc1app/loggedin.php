<?php # loggedin.php
      # If user logged in  -- cookie set -- provide access to member services
      # If user not logged in -- cookie not set -- redirect to main index....
      
// If no cookie is present, redirect the user
if (!isset($_COOKIE['user_id']))
{
	// get needed functions
	require ('includes/login_functions_inc.php');
	
	// Redirect user to main index
	redirect_user();

}

// Set the page title 
$page_title = 'Logged In!';

// Include the page headers
include ('includes/header_1_inc.php');
include ('includes/header_1_li_inc.php');

// Display logged in message
echo "<h2>Logged In </h2> ";
echo "<br /><p>{$_COOKIE['first_name']}, your are now logged in!</p>";

include ('includes/footer_inc.php');

?>




