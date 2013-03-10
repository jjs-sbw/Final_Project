<?php # mysgli_connect.php -- database connection
	  # Contains database access information and establishes a connection
	  # Selects the database and sets the encoding
	  
	  // Set the database access information as constants
	  DEFINE ('DB_USER', 'root');
	  DEFINE ('DB_PASSWORD', '09()L1nux');
	  DEFINE ('DB_HOST', 'localhost');
	  DEFINE ('DB_NAME', 'scdb');
	  
	  // Make the connection
	  $dbc = @mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die
	  ('Could not connect to MySQL: ' . mysqli_connect_error() );
	  
	  // Set the encoding
	  mysqli_set_charset($dbc, 'utf8');
	  
	  echo '<h1> Connected to database </h1>';