<?php # Joseph J. Simpson Systems Concepts

// Set the page title and include the HTML header.
$page_title = 'Systems Engineering Educaion Workshop';

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
          <td width="100%"> <font size="4" color="#FFFFFF">UNIVERSITY OF WASHINGTON -- SE EDUCATION WORKSHOP</font></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="4" cellpadding="4" align="center">
  <tr> 
    <td width="70%" valign="top"> <p><font size="3">University of Washington Tacoma, 
    Systems Engineering Education Workshop, was held on March 30, 2012 at UWT. The workshop 
    provided a forum for the discussion of system engineering educational requirements.</p>
      <hr /> 
      <p><font size="3">The workshop website is located at: <a href="http://faculty.washington.edu/gmobus/Academics/SystemsEngineering/SEworkshop.html">UWT Workshop</a>.</p>  
      <p><font size="3">Presentation by Systems Concepts: <a href="static/UW_SE_WS_S.pdf">Systems Concepts Presentation</a>. </p> 
      <p><font size="3">System Engineering Capabilities: <a href="static/UW_SE_WS_F.pdf">Presentation Feedback Sheet</a>.</p>
	  <p><font size="3">Systems Engineering and Integration: Technology Transition to Target(T4),
	  a presentation given to Pacific Northwest National Laboratory (PNNL) on April 5th, 2010.
	  The presentation focuses on the issues and assumptions associated with standard 
	  technology readiness levels and the production of a small number of complex technical
	  products <a href="static/PNNL_Final.pdf">Technology Transition to Target (T4)</a>.</p>
	  <p><font size="3">Empowering Collaborative Intelligence, a presentation to the Seattle
	  Semantic Meetup Group on April 17th, 2011.  This presentation explores the connection
	  between semantic technologies and systems engineering <a href="static/SSMU.pdf">Pragmatic Complexity Reduction</a>. </p>
	  <p><font size="4">Featured Web Links</p>
	  <p align="left"><span style=""><font size="3">The
International Council On Systems Engineering: <a href="http://www.incose.org/">INCOSE</a></font></span></p>
<p align="left"><font size="3">The International Society for the System Sciences: <a href="http://www.isss.org/">ISSS</a></p>
<p align="left"><font size="3">SAVE International - The Value Society: <a href="http://www.value-eng.org/">SAVE</a></p>
<p style="" align="left"><font size="3">The Center for
the Study of Complex Systems: <a href="http://www.cscs.umich.edu/">CSCS</a>
</font></p>
<p align="left"><span style=""><font size="3">New
England Complex Systems Institute: <a href="http://necsi.org/">NECSI</a></font></span></p>
<p align="left"><span style=""><font size="3">Stuart
C. Dodd Institute for Social Innovation: </font></span><a href="http://www.stuartcdoddinstitute.org/">Stuart
Dodd Institute</a></p>
<p align="left"><font size="3">Ackoff Center for Advancement of System Approaches: <a href="http://www.acasa.upenn.edu/">ACASA</a></p>
<p align="left"><font size="3">The Institute of Electrical &nbsp;and Electronic
Engineers; Systems, Man and Cybernetics:&nbsp;<span style="text-decoration: underline;"><a href="http://www.ieeesmc.org/">IEEE
SMC</a></span></p>
<p align="left"><span style=""><font size="3">John Sowa's web
site:&nbsp;<span style="text-decoration: underline;"><a href="http://www.jfsowa.com/">SOWA</a></span></font></span></p>
<p align="left"><span style=""><font size="3">John Warfields web
site:&nbsp;<span style="text-decoration: underline;"><a href="http://www.jnwarfield.com/">Warfield</a></span></font></span></p>
<p align="left"><a href="http://www.stuartcdoddinstitute.org/"></a></p>
<p align="left"><br>
	  
      </td>
  </tr>
</table>
<?php
include ('includes/footer_inc.php'); // Include the HTML footer.
?>