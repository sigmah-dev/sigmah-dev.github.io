<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/bug_revision_view_page.php?rev_id=327 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:09:17 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:36:54 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000419: Project/orgunit models modifications with Available status - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page89dc.html?return=%2Fissues%2Fbug_revision_view_page.php%3Frev_id%3D327">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:36 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issues2478.xml?project_id=0"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table>
<br />
<table class="width100" cellspacing="1">

<tr>
<td class="form-title" colspan="2">View Revisions: Issue #419</td>
<td class="right" colspan="2">
<span class="bracket-link">[&#160;<a href="bug_revision_view_pageaf00.html?bug_id=419">All Revisions</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="viewcd66.html?id=419">Back to Issue</a>&#160;]</span> </td>
</tr>

<tr class="row-1">
<td class="category" width="15%">Summary</td>
<td colspan="3">0000419: Project/orgunit models modifications with Available status</td>
</tr>

<tr class="spacer"><td><a name="r327"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2013-02-26 15:40 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Description</td>
<td colspan="3">To be able to modify a project/orgunit models even though project/orgunit have been created from them, the following minor modifications should be allowed on &quot;Available&quot; models:<br />
- add new fields<br />
- add new groups<br />
- delete empty groups<br />
- rename fields and groups (but not change its type)<br />
- increase the limits of fields (increase number of allowed files, increase max number of characters), but decrease not allowed<br />
- move a field inside the same container (change of group, position)<br />
- disable fields: disabled fields won't be anymore visible if not in closed phase<br />
- modify the field's mandatory status (for existing projects whose phase containing an empty not mandatory field becoming now mandatory is closed, technical feasability should be checked: does it created a problem to have closed phase with mandotory field empty?)<br />
- for report fields, be able to change the attached report model so that new reports created from that field will use the new model ; for old reports created from old report model, there will be no change (all reports - new and old - will be visible in the 'report and documents)<br />
- for list of choice field: be able to add new items in the list, or disable an existing item (disabled items won't be anymore available to be selected as value for fields which haven't yet selected a value, but will remain the value for fields which have already selected them)<br />
- modify the content of the project/orgunit banner<br />
- increase the maximum limits of number of elements in the logframe (ie: increase number of expected results, add possibility to have groups for specific objectives, etc.)<br />
- change privacy groups attached to a field<br />
<br />
The following major modifications are not allowed:<br />
- adding or removing a phase<br />
- modify the core version of the project (disable amendable fields, or set as &quot;amendable&quot; fields which are not yet amendable)<br />
- modification of type of existing fields<br />
<br />
To make those model modifications without too much impact on the users, &quot;Available &amp; used&quot; models can be set to a temporary secondary status: &quot;Under maintenance&quot;. A new &quot;Under maintenance&quot; checkbox will be available in the project/orgunit model banner: when checked, the administrator can set a timer (30 minutes by default) to let user know when their project will be no more accessible because &quot;under maintenance&quot;. As soon as the admin check this checkbox, user having opened a project using this project model will be an information in the banner of the project : &quot;Your project will be temporary no more accessible for maintenance in XX minutes&quot;. As soon as the admin unckeck the checkbox, the projects/orgunit become normally accessible again. The admin must check this checkbox to be allowed to do all the allowed minor modifications on &quot;Available&quot; project/orgunit models, and he will be allowed to do those modifications only after the timer he has set has elapsed.</td>
</tr>

	<tr class="spacer"><td><a name="r306"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2013-02-05 10:42 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Description</td>
<td colspan="3">Users have reported (see user report url) that they need to be able to modify project models even when their status has been set to &quot;available&quot;.<br />
There might be less types of modifications allowed (like banning deletion of a field), but it should be still possibe to update as much as possible a model even if set to &quot;available&quot;. <br />
We could maybe add another status &quot;locked&quot; to be sure that a specific model won't be modified by users not having the right privilege.<br />
<br />
Similar need has been expressed for the orgunit models.</td>
</tr>

	<tr class="spacer"><td><a name="r305"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2013-02-05 10:42 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Description</td>
<td colspan="3">Users have reported (see user report url) that they need to be able to modify project models even when their status has been set to &quot;available&quot;.<br />
There might be less types of modifications allowed (like banning deletion of a field), but it should be still possibe to update as much as possible a model even if set to &quot;available&quot;. <br />
We could maybe add another status &quot;locked&quot; to be sure that a specific model won't be modified by users not having the right privilege.</td>
</tr>

	
</table>

	<br />
	<hr size="1" />
<table border="0" width="100%" cellspacing="0" cellpadding="0"><tr valign="top"><td>	<address>Copyright &copy; 2000 - 2018 MantisBT Team</address>
</td><td>
	<div align="right"><a href="http://www.mantisbt.org/" title="Free Web Based Bug Tracker"><img src="images/mantis_logo.html" width="145" height="50" alt="Powered by Mantis Bugtracker" border="0" /></a></div>
</td></tr></table>
</body>

<!-- Mirrored from www.sigmah.org/issues/bug_revision_view_page.php?rev_id=327 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:09:17 GMT -->
</html>
