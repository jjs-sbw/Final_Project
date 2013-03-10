<?php # Joseph J. Simpson Systems Concepts

// Set the page title and include the HTML header.
$page_title = 'Systems Concepts - Site Search';

// if login in check is ok.. user logged in
	if (isset($_COOKIE['user_id']))
	{
		
		include ('includes/header_1_inc.php');
		include ('includes/header_1_li_inc.php');
		
	}
	else // not logged in 
	{
	  	include ('includes/header_1_inc.php');
		include ('includes/header_1_nli_inc.php');
	}

?>
<table width="90%" border="0" cellspacing="2" cellpadding="4" align="center">
  <tr bgcolor="097CB5"> 
    <td> 
   <table width="100%" border="0" cellspacing="0" cellpadding="4">
        <tr> 
          <td bgcolor="#00FF00">&nbsp;&nbsp;</td>
          <td width="100%"> <font size="4" color="#FFFFFF">SITE SEARCH -- PUBLICATIONS AND PRESENTATIONS </font></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="4" cellpadding="4" align="center">	
  <tr> 
    <td width="70%" valign="top"> <p><font size="5">Year Search</p>
      <hr /> 
      <p><font size="3">Select the year from the list below.</p>  
      <p><font size="3">Will search all documents stored in the database. </p> 
    </td>
  </tr>	
  <tr> 
    <td width="70%" valign="top"> <p><font size="5">Author Search</p>
      <hr /> 
      <p><font size="3">Enter author name.</p>  
      <p><font size="3">Will search all documents stored in the database. </p> 
    </td>
  </tr>
  <tr> 
    <td width="70%" valign="top"> <p><font size="5">Keyword Search</p>
      <hr /> 
      <p><font size="3">Enter search term or word.</p>  
      <p><font size="3">Will search all documents stored in the database. </p> 
    </td>
  </tr>
  <tr> 
    <td width="70%" valign="top"> <p><font size="5">Title Search</p>
      <hr /> 
      <p><font size="3">Enter document title.</p>  
      <p><font size="3">Will search all documents stored in the database. </p> 
    </td>
  </tr>
</table>
<?php
include ('includes/footer_inc.php'); // Include the HTML footer.
?>