<?php # Joseph J. Simpson Systems Concepts

// Set the page title and include the HTML header.
$page_title = 'Systems Concepts - 442 Final';

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
          <td width="100%"> <font size="4" color="#FFFFFF"> --- PHP FUN PROJECT --- THINGS ARE LOOKING UP -- </font></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="4" cellpadding="4" align="center">
  <tr> 
    <td width="70%" valign="top"> <p><font size="3"></p>
      <hr /> 
      <p><font size="4">What problem did I try to solve?</p>  
      <p><font size="3">Transform an old style, static website to a more dynamic format. 
      	<ul>
      		<li><font size="3">Provide topic categorization with a menu bar.</li>
      		<li><font size="3">Provide different types of search capabilities.</li>
      		<li><font size="3">Provide database support.</li>
      		<li><font size="3">Provide individual accounts and login for discussion threads.</li>
      	</ul>
      </p> 
	  <p><font size="4">How did I tackle the problem?</p>  
      <p><font size="3">I am using a phased, top-down approach to specify and create the new site. 
      	<ul>
      		<li><font size="3">Phase One: Created an informal website content hierarchy.</li>
      		<li><font size="3">Phase Two: Allocated existing site content to new format.</li>
      		<li><font size="3">Phase Three: Allocated new dynamic functions to new format.</li>
      		<li><font size="3">Phase Four: Create a "proof of concept" website.</li>
      		<li><font size="3">Next: Create a formal website specification and implement the specification.</li>
      	</ul>
      </p> 
	  <p><font size="4">What did I learn?</p>  
      <p><font size="3">A massive amount of stuff.... 
      	<ul>
      		<li><font size="3">How to use github, with a group. I just used an individual account before.</li>
      		<li><font size="3">PHP frameworks are messed up.. composer saves the day.</li>
      		<li><font size="3">Continuous integration is very valuable.. looking at a local Hudson setup.</li>
      		<li><font size="3">PHP is broken in many ways.. must be careful with code structure.</li>
      		<li><font size="3">Learned that it is a good idea to check out Python web frameworks next.</li>
      	</ul>
      </p> 	
	  </p>
      </td>
  </tr>
</table>
<?php
include ('includes/footer_inc.php'); // Include the HTML footer.
?>