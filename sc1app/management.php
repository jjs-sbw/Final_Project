<?php # Joseph J. Simpson Systems Concepts

// Set the page title and include the HTML header.
$page_title = 'Systems Concepts - Systems Mangement';

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
          <td width="100%"> <font size="4" color="#FFFFFF">SYSTEMS MANAGEMENT -- THEORY AND APPLICATION </font></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="4" cellpadding="4" align="center">
  <tr> 
    <td width="70%" valign="top"> <p><font size="3">Discussion of the development and application of systems management.</p>
      <hr /> 
      <p><font size="3">Systems management is discussed in the context of current system mangement approaches.</p>  
      <p><font size="3">Mangement styles, proceses and approaches will be addressed. </p> 

	  </p>
      </td>
  </tr>
</table>
<?php
include ('includes/footer_inc.php'); // Include the HTML footer.
?>