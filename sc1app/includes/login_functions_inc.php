<?php #login_functions_inc.php
      /* Define two functions used in the logi - logout process 
         -- redirect_user
         -- check_login
      */
      
/* Redirect user determines the absolute URL and redirects the user to the URL
   -- One argument - the target redirection page
   -- Default argument is index.php
*/

function redirect_user ($page = 'index.php')
{
	// Start the the process of defining the URL....
	// URL is "http://" plus the host name, plus the current directory
	$url = 'http://'. $_SERVER['HTTP_HOST']. dirname($_SERVER['PHP_SELF']);
	
	// Remove any trailing slashes
	$url = rtrim($url, '/\\');
	
	// Append the page name
	$url = $url .'/'. $page;
	
	// Redirect the user
	header("Location: $url");
	
	// Exit and stop the script
	exit();
	
} // end of redirect_user() function

/* The check_login function validates user supplied information from the form.
   The email address and password are checked.
   -- If both are present, the database is queried.
   -- The function requires a database connection.
   -- The function returns an array of information including:
      -- A TRUE/FALSE indication of success
      -- An array or erors or the database result data
*/

function check_login($dbc, $email = '', $pass = '')
{    
 	// Initialize the error array
	$errors = array();
	
	// Validate the email address
	if (empty($email))
	{
		$errors[] = 'You forgot to enter your email address.';
	}
	else
	{
		$e = mysqli_real_escape_string($dbc, trim($email));
	} // end validate email
	
	// Validate the password
	if (empty($pass))
	{
		$errors[] = 'You forgot to enter your password.';
	}
	else
	{
		$p = mysqli_real_escape_string($dbc, trim($pass));
	} // end validate password
	
	// If there are no errors 
	if (empty($errors))
	{
		// Retrieve the user_id and first_name for the given email-password combination
		//$q = "SELECT user_id, first_name FROM users WHERE email=$e AND pass=SHA1('$p')";
		//$q = "SELECT user_id, first_name FROM users WHERE email=$e";
		$q = "SELECT user_id, first_name FROM users WHERE email='$e' AND pass=SHA1('$p')";
		// Execute the query -- get result
		$r = mysqli_query($dbc, $q);
		//$row = mysqli_fetch_array($result);
		// Check the result
		if ( $r == false)
		{
			$errors[] = 'The database query failed to return a valid response.';
		
		}
		else if (mysqli_num_rows($r) == 1)
		//if ($r === true)
		//if ($row)
		{
			// Fetch the record
			$row = mysqli_fetch_array ($r, MYSQLI_ASSOC);
			
			// Return true and the record
			return array(true, $row);
		}
		else
		{
			// Not a match -- bad email or password
			$errors[] = 'The email address and password entered do not match 
			those on file.';
		}
	} // end if there are no errors 
	
	// Return false and the errors
	return array(false, $errors);
	
} // end of login_check function
