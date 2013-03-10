<?php # Joseph J. Simpson Simple Survey Application 

// Set the page title and include the HTML header.
$page_title = 'Systems Concepts - Systems Science';

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
          <td width="100%"> <font size="4" color="#FFFFFF">SYSTEMS SCIENCE -- THEORY AND APPLICATION </font></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="4" cellpadding="4" align="center">
  <tr> 
    <td width="70%" valign="top">
      <hr /> 
      <p><font size="3">Systems science is an interdisciplinary domain of science.  Observations, insight and experience 
      from social, biological, natural and political systems provide the raw material upon which systems 
      scientists focus their attention.  General systems theory was developed to address this cross domain
      content.
      <p><font size="3">In this discussion, systems science is focused on the work of John N. Warfield. Warfield developed
      The Science of Generic Design (SGD) and other structured approaches to the application of general systems
      theory in the area of industrial process and product design.  The SGD is focused
      on large-scale, social-technical systems (STS) design and development. The STS of interest are composed 
      of three types of systems, physical-technical systems, social-information systems and systems constructed
      from a combination of physical-technical and social-information components.  The larger social and political 
      context sets the values, objectives and success criteria for any STS under design.  The SGD focuses on the 
      identification, documentation and communication of these design values and criteria.</p>  
      <p><font size="3">A key consideration in the application of SGD is impact on the organizational information flow and 
      decision making structure.  Evaluation of the system of interest as well as the systems environment is 
      a discriminating feature of the SGD. Specific design sciences contain a well developed set of design 
      knowledge that is usually associated with a specific type of problem set.  Generic design science relates 
      to and is composed of characteristics, attributes, phenomena, and conditions that are common to all 
      design situations.</p> 
      <p><font size="3">SGC has a solid foundation in theory which supports the methodology of the science.  The set of methods 
      include: The DELTA Chart, Nominal Group Technique, DELPHI, Ideawriting, Interpretive Structural Modeling,
      Options Field Methodology, Options Profile Methodology, and Tradeoff Analysis Methodology.  More detailed 
      information about systems science can be found at: <a href="http://www.jnwarfield.com/">Systems Science</a></p>
      
      
	  </p>
      </td>
  </tr>
</table>
<?php
include ('includes/footer_inc.php'); // Include the HTML footer.
?>