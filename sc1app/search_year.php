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
      <p><font size="3">The named document will be presented.</p> 
    </td>
  </tr>	
  <tr> 
    <td width="70%" valign="top"> <p><font size="3">Back to Basics    <a href="year/1992/INCOSE92_BB.html">1992</a></p>
      <hr /> 
      <p><font size="3">Back to Basics Again   <a href="year/1997/INCOSE97_BBASDSE.html">1997</a></p>  
      <p><font size="3">Concept Mapping as a Communications Tool in Systems Engineering <a href="year/1999/INCOSE99_CMCTSE.html">1999</a> </p> 
      <p><font size="3">U.S. Dept. of Defense Systems Engineering <a href="year/2000/EUSEC00.html">2000</a></p>  	
      <p><font size="3">U.S. DoD Legacy SE <a href="year/2001/INCOSE01_UDSE.html">2001</a></p> 
      <p><font size="3">FRAT - A Basic Framework For Systems Engineering <a href="year/2002/INCOSE02_FBFSE.html">2002</a></p> 
      <p><font size="3">Innovation and Technology Management <a href="year/2002/INCOSE02_ITM.html">2002</a></p> 
      <p><font size="3">Market Your Systems Engineering With Business Skills <a href="year/2002/INCOSE02_MYSEWBS.html">2002</a></p> 
      <p><font size="3">Systems and Objects <a href="year/2003/INCOSE03_SO.html">2003</a></p> 
      <p><font size="3">System Frameworks <a href="year/2004/CSER04_SEF.html">2004</a></p> 
      <p><font size="3">A Generic, Adaptive Systems Engineering Information Model <a href="year/2004/Thesis04_GASEIM.html">2004</a></p> 
      <p><font size="3">A Meeting of the Minds <a href="year/2005/CSER05_AMOTM.html">2005</a></p> 
      <p><font size="3">Systems Engineering Experience with UML on a Complex System <a href="year/2005/CSER05_SEEUCS.html">2005</a></p> 
      <p><font size="3">A Generic, Adaptive Systems Engineering Information Model <a href="year/2005/INCOSE05_AGASEIM.html">2005</a></p> 
      <p><font size="3">System Integration Frameworks <a href="year/2005/INCOSE05_SIF.html">2005</a></p> 
      <p><font size="3">Formal Systems Concepts <a href="year/2006/CSER06_FSC.html">2006</a></p> 
      <p><font size="3">Systems Engineering (SE) Patterns and Pattern Language (CSER) <a href="year/2006/CSER06_SEPat.html">2006</a></p> 
      <p><font size="3">Systems Engineering (SE) Patterns and Pattern Language (INCOSE) <a href="year/2006/INCOSE06_SEPat.html">2006</a></p> 
      <p><font size="3">Formal Systems Concepts (SMC) <a href="year/2006/SMC_INCOSE06_FSC.html">2006</a></p> 
      <p><font size="3">Systems Engineering (SE) Patterns and Pattern Language (SMC) <a href="year/2006/SMC_INCOSE06_SEPat.html">2006</a></p> 
      <p><font size="3">Development of Abstract Relation types for Systems.. Evaluation <a href="year/2007/CSER07_ART.html">2007</a></p> 
      <p><font size="3">System Evaluation and Description Using Abstract Relation Types (ART) <a href="year/2007/IEEE07_ART.html">2007</a></p> 
      <p><font size="3">Development .. of Abstract Relation Types for .. System Evaluation <a href="year/2007/INCOSE07_ART.html">2007</a></p> 
      <p><font size="3">Evolutionary Computation Applied to System Architecture Development <a href="year/2008/CSER08.html">2008</a></p> 
      <p><font size="3">System of Systems Architecture Generation and Evaluation .. <a href="year/2008/IEEE08_SOS_.html">2008</a></p> 
      <p><font size="3">Secure Adaptive Response Potential (SARP): A System Security Metric <a href="year/2008/INCOSE08_SARP.html">2008</a></p> 
      <p><font size="3">System of Systems Architecture Evaluation using Evolutionary Computation <a href="year/2008/INCOSE08_SSAEEC.html">2008</a></p> 
      <p><font size="3">System of Systems Complexity Identification and Control <a href="year/2009/IEEE09_SOS.html">2009</a></p> 
      <p><font size="3">A Pragmatic Complexity Framework <a href="year/2009/INCOSE09_SC.html">2009</a></p> 
      <p><font size="3">A Systematic Approach to Information Systems Security Education <a href="year/2010/CISSE10_SAISSE.html">2010</a></p> 
      <p><font size="3">Secure Software Education - A Contextual Model-Based Appraoch <a href="year/2010/IJSSE10.html">2010</a></p> 
      <p><font size="3">Complexity Reduction: A Pragmatic Appraoch <a href="year/2010/INCOSE10_Journal.html">2010</a></p> 
      <p><font size="3"> <a href="year/ "></a></p> 
    </td>
  </tr>
  
</table>
<?php
include ('includes/footer_inc.php'); // Include the HTML footer.
?>