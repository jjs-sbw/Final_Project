<?php # login.php
      # Site login or register page to process login actions
      # Upon successful login the user is redirected 
      # Two included files are necessary to complete the actions.
      # NOTHING is sent to the web browser before the setcookie() call....
      
// Check to see if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
    // Get database connection
	require ('includes/mysqli_connect_inc.php');
	
	
	// Functions needed to process the login
	require ('includes/login_functions_inc.php');
	
	// Get database connection
	//require ('includes/mysqli_connect_inc.php');
	
	// Check the login
	list ($check, $data) = check_login($dbc, $_POST['email'], $_POST['pass']);
	
	// if login in check is ok..
	if ($check)
	{
		// Set the cookies
		setcookie ('user_id', $data['user_id']);
		setcookie ('first_name', $data['first_name']);
		
		// Redirect user to logged in page
		redirect_user('loggedin.php');
	}
	else // login failed ..
	{
	  	// Prepare for error reporting in the login_page_inc.php code
	  	$errors = $data; 	
	}
	
	// Close the database connection
	mysqli_close($dbc);

} // end of data submission check

// Create the login page
include ('includes/login_page_inc.php');

?>