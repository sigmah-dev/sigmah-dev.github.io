<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/bug_revision_view_page.php?rev_id=583 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:04:56 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:29:34 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000671: Problem when Backup all last versions of files from top orgunit  - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page84fc.html?return=%2Fissues%2Fbug_revision_view_page.php%3Frev_id%3D583">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:29 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issues2478.xml?project_id=0"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table>
<br />
<table class="width100" cellspacing="1">

<tr>
<td class="form-title" colspan="2">View Revisions: Issue #671</td>
<td class="right" colspan="2">
<span class="bracket-link">[&#160;<a href="bug_revision_view_page8b7f.html?bug_id=671">All Revisions</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="view1798.html?id=671">Back to Issue</a>&#160;]</span> </td>
</tr>

<tr class="row-1">
<td class="category" width="15%">Summary</td>
<td colspan="3">0000671: Problem when Backup all last versions of files from top orgunit </td>
</tr>

<tr class="spacer"><td><a name="r584"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2015-04-29 23:29 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Description</td>
<td colspan="3">On v2.0-rc1 with step 3 of test case app-133, not all orgunit are on zip file dowloaded from the &quot;Back up all files&quot; block&quot; with the &quot;Only the last version of each file&quot; option.<br />
<br />
For example in my case Africa was missing, and it was consequently impossible to get the files from project IF1389 (project which actually contains files).<br />
<br />
Actually, whatever you do, the files will always be the files from orgunit &quot;Asie&quot;.</td>
</tr>

	<tr class="spacer"><td><a name="r583"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2015-04-29 23:26 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Description</td>
<td colspan="3">On v2.0-rc1 with step 3 of test case app-133, not all orgunit are on zip file dowloaded from the &quot;Back up all files&quot; block&quot; with the &quot;Only the last version of each file&quot; option.<br />
<br />
For example in my case Africa was missing, and it was consequently impossible to get the files from project IF1389 (project which actually contains files).</td>
</tr>

	<tr class="spacer"><td><a name="r582"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2015-03-31 16:35 by Assistcom</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Description</td>
<td colspan="3">App 133 - step 3  : Not all orgunit are on zip file dowloaded from the &quot;Back up all files&quot; block&quot; with the &quot;Only the last version of each file&quot; option</td>
</tr>

	
</table>

	<br />
	<hr size="1" />
<table border="0" width="100%" cellspacing="0" cellpadding="0"><tr valign="top"><td>	<address>Copyright &copy; 2000 - 2018 MantisBT Team</address>
</td><td>
	<div align="right"><a href="http://www.mantisbt.org/" title="Free Web Based Bug Tracker"><img src="images/mantis_logo.html" width="145" height="50" alt="Powered by Mantis Bugtracker" border="0" /></a></div>
</td></tr></table>
</body>

<!-- Mirrored from www.sigmah.org/issues/bug_revision_view_page.php?rev_id=583 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:04:56 GMT -->
</html>
