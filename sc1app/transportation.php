<?php # Joseph J. Simpson Systems Concepts

// Set the page title and include the HTML header.
$page_title = 'Systems Concepts - Transportation';

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
          <td width="100%"> <font size="4" color="#FFFFFF">ELECTRIFICATION OF TRANSPORTATION IN WASHINGTON STATE </font></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="4" cellpadding="4" align="center">
  <tr> 
    <td width="70%" valign="top"> <p><font size="3">Washington State generates an large volume
    of renewable energy with the existing capability to generate much more.  The electrification of 
    transportation in Washington State will reduce dependence on foreign oil, create jobs,
    reduce the carbon footprint and provide opportunities for the application of innovative 
    technology.  The Washington State site is located at: <a href="http://www.electricdrive.wa.gov/">Electric Drive</a></p>
      <hr /> 
      <p><font size="3">The Pacific Northwest's multiobjective energy policy is designed to meet
      the needs of all of the area residents. The Renewable Gas Tank is an innovative approach
      to the local, distributed generation and use of electric power.  The report "Doing
      Home Energy Better - The Renewable Gas Tank" may be found here: <a href="static/R_GT_R4.pdf">Report File</a></p>  
      <p><font size="3">"Green Power for Sustainable Transportation" analysis: <a href="static/GPST.pdf">Report File</a>  </p> 
      <p><font size="3"> </p> 
      <p><font size="3">Household carbon footprint reduction: <a href="static/HHC.pdf">Report File</a> </p> 

	  </p>
      </td>
  </tr>
</table>
<?php
include ('includes/footer_inc.php'); // Include the HTML footer.
?>