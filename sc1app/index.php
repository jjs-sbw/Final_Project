<?php //Joseph J. Simpson System Concepts LLC Dynamic Page


// Set the page title and include the HTML header.
$page_title = 'Systems Concepts ';


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
<table align="center" border="0" cellpadding="4" cellspacing="2" width="90%">

<tr bgcolor="#097CB5"> 

    <td> 

   <table border="0" cellpadding="4" cellspacing="0" width="100%">

        <tr> 

          <td bgcolor="00ff00">&nbsp;&nbsp;</td>

          <td width="100%"> <font size="4" color="#ffffff">EMPOWERING GROUP INTELLIGENCE...</font></td>

        </tr>

   </table></td>

  </tr>
</table>

<table align="center" border="0" cellpadding="4" cellspacing="4" width="90%">

<tr> 

<td valign="top" width="70%"> 
<p><font size="3">This site is dedicated to the discussion, development and distribution
of professional material associated with the application of systems concepts to 
effectively engage complexity. System methods and techniques that empower group 
intelligence are of particular interest. The primary functions of this site are: web
publishing of technical papers, development of "discussion and publication themes", and
the establishment of a broad-based editorial board to review candidate papers. If
you wish to submit a paper for consideration, please contact: Joseph Simpson at --
jjs0sbw(at)gmail.com or jjs-sbw(at)eskimo.com.</p>

<p><font size="3">All aspects of systems concepts are valid topics for presentation and
discussion on this site. The evaluation of system concepts starts
with the definition of a system and moves on to an overview of system
components and applications. A system is defined as a relationship
mapped over a set of objects. This general definition provides wide
latitude in the discussion of system concepts and configurations.</p>

<p><font size="3">At the most basic level, a system has a boundary that separates the system
components (inside the boundary) from the environment (outside the boundary). The system 
boundary can be physical, logical, or temporal.  In the case of dynamic
systems, the boundary may change over a period of time.  Each system has one or more primary 
goals, objectives and/or functions.</p>

<p><font size="3">System concepts are used in two basic modes: 1) discovery mode and 2) design mode.
In discovery mode, the system objects are known (or assumed) and the binding system 
relationship is the subject of discovery.  In design mode, the system relationship ( or function)
is known and the system component objects are the subject of design.  During large scale 
system investigation and evaluation activities these modes may be applied in sequencial and/or 
concurrent manner.</p>

<p><font size="3">The "Current Topics" section of this site offers a discussion of the systems 
analysis techniques associated with entropy and object clustering along with a focus on the
electrification of transportation.
</p>

<p><font size="3">The "Systems" section of this site offers papers, links to other sites and a general 
discussion of systems engineering, science, thinking and management.
</p>

<p><font size="3">The "Search" section of this site provides the capability to search the site papers, 
articles, and abstract to locate specific types of information and data.
</p>

<p><font size="3">The "Login" section of this site allows a registered user to login or 
a new user to register.
</p>

<p><font size="3">Once a user is logged in to this site, a registered user is presented with 
a "comment" menu item that allows a user to comment on site content and a "logout" item that
allows a logged in user to logout.
</p>
<hr/> 


	</td>
  </tr>
</table>
<?php 
include ('includes/footer_inc.php'); // Include the HTML footer.
?>
