<?php # Joseph J. Simpson Systems Concepts

// Set the page title and include the HTML header.
$page_title = 'Systems Concepts - Cluster Analysis';

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
          <td width="100%"> <font size="4" color="#FFFFFF">CLUSTER ANALYSIS -- THEORY AND APPLICATION </font></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="4" cellpadding="4" align="center">
  <tr> 
    <td width="70%" valign="top"><h1>Working Paper - System Analysis and Identification</h1>
     <p><font size="3">Cluster analysis is a structured process 
    using scientific methods focused on the discovery of general properties of objects, 
    and the general types into which objects may be categorized or classed. There are two
    basic types of activities associated with cluster analysis.</p>
      <hr /> 
      <p><font size="3">The first type of activity is the identification of general properties
      of objects and is named V-analysis or variable analysis. The objective of V-analysis 
      is the identification of the degree of similarity among the variables that are used 
      to identify and describe the object properties. Different types of V-analysis can be 
      used to identify the dimensions upon which the objects will be clustered and evaluated.</p>  
      <p><font size="3">The second type of activity is the identification of the general 
      types into which objects may be categorized or classed is termed O-analysis or 
      object analysis. The objective of O-analysis is the construction of a formal, 
      planned, scientific classification. Object analysis activity can be traced back 
      before the time of Linnaeus in 1753 to the work of Aristotle. Object analysis is not 
      just the mere placement of objects in predefined classes but also includes the 
      identification and naming of the object class types.</p> 
      <p><font size="3">The use of Abstract Relation Types (ART) in the analysis of system 
      structure and system component clustering is the primary focus of the working paper. Two 
      basic system definitions are presented along with two, object-clustering definitions 
      which were obtained from a literature search. The ART analysis approach is applied 
      to classical N-Squared Charts and Design Structure Matrices (DSM), with specific 
      emphasis on clustering methods, types and meaning. The primary structuring 
      relationship associated with N-Squared ART and DSM ART are evaluated and discussed. 
      Multiple DSM ART solution approaches and techniques are detailed</p>  
      <p><font size="3">PDF copy of the working paper available for download and review:
      <a href="static/Cluster_wp.pdf">Working Paper</a></p>
      

	  </p>
      </td>
  </tr>
</table>
<?php
include ('includes/footer_inc.php'); // Include the HTML footer.
?>