<?php # Joseph J. Simpson Simple Survey Application 

// Set the page title and include the HTML header.
$page_title = 'Systems Concepts - Systems Enginering';
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
  <tr bgcolor="#097CB5"> 
    <td> 
   <table width="100%" border="0" cellspacing="0" cellpadding="4">
        <tr> 
          <td bgcolor="#00FF00">&nbsp;&nbsp;</td>
          <td width="100%"> <font size="4" color="#FFFFFF">SYSTEMS ENGINEERING -- THEORY AND APPLICATION </font></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="4" cellpadding="4" align="center">
  <tr> 
    <td width="70%" valign="top"> <p><font size="3">Discussion of the development and application of systems engineering</p>
      <hr /> 
      <p><font size="3"> The topic of systems engineering is developed from a clasical enginering and group problem solving approach.</p>  
      <p><font size="3"> Large scale system development approaches in govenrment and industry are discussed.</p> 

	  </p>
      </td>
  </tr>
</table>
<?php
include ('includes/footer_inc.php'); // Include the HTML footer.
?>