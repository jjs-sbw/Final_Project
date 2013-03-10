<?php # Joseph J. Simpson Systems Concepts

// Set the page title and include the HTML header.
$page_title = 'Systems Concepts - Entropy';

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
          <td width="100%"> <font size="4" color="#FFFFFF">SYSTEM ENTROPY -- THEORY AND APPLICATION </font></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="4" cellpadding="4" align="center">
  <tr> 
    <td width="70%" valign="top"><h1>Published in Systems Engineering Journal - Entropy 
    Metrics for System Identification and Analysis</h1> 
    <p><font size="3">Whole system metrics and measures are valuable tools for use in 
    systems science and engineering. Entropy measures are defined, developed and 
    demonstrated in this paper. Based on classical systems engineering methods and 
    practices, these entropy measures indicate the degree of order/disorder in any given 
    system. A physical entropy based metric and an information base entropy metric are 
    aligned with the two primary components of a system: objects and relationships. The 
    physical entropy based metric is called a connection score, and the information based 
    metric is called an object score. A well-defined process, using these metrics, is used 
    to evaluate the reduction of entropy and complexity associated with any specific 
    system. The metrics and processes developed in this work have a prose component, a 
    graphic component, and a mathematical component. These three components are aligned 
    with the systems science techniques developed by John N. Warfield.</p>
      <hr /> 
      <p><font size="3">Original Draft Working Paper: <a href="static/Entropy_wp.pdf">Download</a></p>
      <p><font size="3">Reviewer One Comments -- The first set of reviewer comments for the
      "Entropy Measures for System Identification and Analysis" are presented in the form 
      of a Reviewer Comment Response Record prepared by Systems Concepts. The published 
      works referenced by the reviewer as also linked below to support review by other
      interested researchers. </p>  
      <p><font size="3">PDF copy of the first working paper comment record:<a href="static/Entropy_wp_cr1.pdf">Download</a></p> 
      <p><font size="3">PDF copy of referenced work one:<a href="static/Entropy_wp_rw1.pdf">Download</a></p> 
      <p><font size="3">PDF copy of referenced work two:<a href="static/Entropy_wp_rw2.pdf">Download</a></p> 
      <p><font size="3">Reviewer Two and Three Comments -- The second set of comments associated
      with the working paper are addressed in another Reviewer Comment Response Record prepared
      by Systems Concepts. The main ideas and concepts in the working paper needed further 
      development.  The paper was rewritten, reorganized and updated to address those concerns.
      The updated paper was redistributed to the reviewers that  commented on the first working
      draft.  The authors believe the new draft paper better expresses the authors intent 
      and establishes a foundation for further exploration in this area. </p> 
      <p><font size="3">PDF copy of the second working paper comment record:<a href="static/arrem.pdf">Download</a></p> 
      <p><font size="3">The authors discovered, during the literature search for this paper,
      that there are no published standard matrix examples that may be used for benchmarking
      different problem solving approaches.  A set of standard matrix examples were prepared
      to address this issue.  These standard problem examples are under development and the 
      authors are seeking collaboration with other people interested in this type of 
      standard benchmarking tool set.  The draft set is located here: <a href="sc_sme_v001/SME.html">Standard Matrix Examples</a></p> 
      <p><font size="3">A compressed file containing the matrix examples is available here: <a href="sc_sme_v001/sme_cd_data_v002.zip">Matrix File</a></p> 
      <p><font size="3"> </p> 
       <p><font size="3"> </p> 
      <p><font size="3"> </p> 

	  </p>
      </td>
  </tr>
</table>
<?php
include ('includes/footer_inc.php'); // Include the HTML footer.
?>