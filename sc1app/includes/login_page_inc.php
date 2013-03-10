<?php # login_page_inc.php
      /* This page displays any errors associated with loggin in
      and it creates the complete login and register page for this site.
      */
      
      $page_title = 'Login';
      
      // Include the headers..
      include ('includes/header_1_inc.php');
      include ('includes/header_1_nli_inc.php');
      
      // Display any existing error messages
      if (isset($errors) && !empty($errors))
      {
      	echo '<h1>Error!</h1><p class="error">The following error(s) occured:<br />';
      	foreach ($errors as $msg)
      	{
      		echo " - $msg<br />\n";
      	}
      	
      	echo '</p><p>Please try again.</p>';
      	  
      } // end of error check
      
// Display the login form and registration message
?><h1> Please login or Register.. </h1>
<form action="login.php" method="post">
	<p>Email Address: <input type="text" name="email" size="20" maxlength="80"/>
	</p>
	<p>Password: <input type="password" name="pass" size="20" maxlength="32" />
	</p>
	<p><input type="submit" name="submit" value="Login" /></p>
</form>

<h2>To Register, send an email request to the site moderator.</h2>

<?php include ('includes/footer_inc.php');
?>
      