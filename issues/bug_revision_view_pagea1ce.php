<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/bug_revision_view_page.php?rev_id=450 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:07:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<link rel="stylesheet" type="text/css" href="css/default.html" />
	<script type="text/javascript"><!--
		if(document.layers) {document.write("<style>td{padding:0px;}<\/style>")}
	// --></script>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Cache-Control" content="no-cache" />
	<meta http-equiv="Pragma-directive" content="no-cache" />
	<meta http-equiv="Cache-Directive" content="no-cache" />
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:34:18 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000612: Project Map sub-tab with OpenStreetMap and Project Location - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page5b8d.html?return=%2Fissues%2Fbug_revision_view_page.php%3Frev_id%3D450">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:34 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issues2478.xml?project_id=0"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table>
<br />
<table class="width100" cellspacing="1">

<tr>
<td class="form-title" colspan="2">View Revisions: Issue #612</td>
<td class="right" colspan="2">
<span class="bracket-link">[&#160;<a href="bug_revision_view_page39e2.html?bug_id=612">All Revisions</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="view4a10.html?id=612">Back to Issue</a>&#160;]</span> </td>
</tr>

<tr class="row-1">
<td class="category" width="15%">Summary</td>
<td colspan="3">0000612: Project Map sub-tab with OpenStreetMap and Project Location</td>
</tr>

<tr class="spacer"><td><a name="r469"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2014-07-25 12:31 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Description</td>
<td colspan="3">Sites management in the &quot;indicator management&quot; sub-tab was uneasy for many users.<br />
To make things easier, a &quot;Map&quot; sub-tab should be added.<br />
In this map sub-tab, support for OpenStreetMap basemap and to pin a Project Location (Main site) would be two good features to have.</td>
</tr>

	<tr class="spacer"><td><a name="r450"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2014-03-10 11:11 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Description</td>
<td colspan="3">In order to be able to share the position and objective of a project using the HXL standard, a new sub-tab &quot;Map&quot; should be added.<br />
This Map sub-tab should concentrate all geographic informations for the project. First of all, it should be the screen where the list of sites are managed. The management of sites should be removed from the &quot;Indicator management&quot; screen and moved to this screen.<br />
<br />
Here is the user story describing the features expected for this HXL export from this new &quot;Map&quot; sub-tab.<br />
<br />
User Story:<br />
<br />
&#160;&#160;&#160;- An organisation O is using a Sigmah set up in order to be able to share HXL 4W data, depending on the will of project manager. (we can also imagine a mode in which HXL data is automatically published for all projects)<br />
&#160;&#160;&#160;- A user U of this organisation O has created a new project P, with a title and an implementation period<br />
&#160;&#160;&#160;- In the &quot;Map&quot; sub-tab of his project P, U can pin on a map a point representing the project, and can choose one or several activities type among the one defined in the HXL standard.<br />
&#160;&#160;&#160;- Once he had fill those 2 informations, a &quot;Share 4W data&quot; button is enabled.<br />
&#160;&#160;&#160;- U clicks on the &quot;Share 4W data&quot; button, and the button is renamed &quot;4W data shared publicy&quot; and remains pressed. </td>
</tr>

	<tr class="spacer"><td><a name="r449"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2014-03-04 19:49 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Description</td>
<td colspan="3">In order to be able to share the position and objective of a project using the HXL standard, a new sub-tab &quot;Map&quot; should be added.<br />
<br />
Here is the user story describing the features expected for this HXL export from this new &quot;Map&quot; sub-tab.<br />
<br />
User Story:<br />
<br />
&#160;&#160;&#160;- An organisation O is using a Sigmah set up in order to be able to share HXL 4W data, depending on the will of project manager. (we can also imagine a mode in which HXL data is automatically published for all projects)<br />
&#160;&#160;&#160;- A user U of this organisation O has created a new project P, with a title and an implementation period<br />
&#160;&#160;&#160;- In the &quot;Map&quot; sub-tab of his project P, U can pin on a map a point representing the project, and can choose one or several activities type among the one defined in the HXL standard.<br />
&#160;&#160;&#160;- Once he had fill those 2 informations, a &quot;Share 4W data&quot; button is enabled.<br />
&#160;&#160;&#160;- U clicks on the &quot;Share 4W data&quot; button, and the button is renamed &quot;4W data shared publicy&quot; and remains pressed. </td>
</tr>

	
</table>

	<br />
	<hr size="1" />
<table border="0" width="100%" cellspacing="0" cellpadding="0"><tr valign="top"><td>	<address>Copyright &copy; 2000 - 2018 MantisBT Team</address>
</td><td>
	<div align="right"><a href="http://www.mantisbt.org/" title="Free Web Based Bug Tracker"><img src="images/mantis_logo.html" width="145" height="50" alt="Powered by Mantis Bugtracker" border="0" /></a></div>
</td></tr></table>
</body>

<!-- Mirrored from www.sigmah.org/issues/bug_revision_view_page.php?rev_id=450 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:07:57 GMT -->
</html>
