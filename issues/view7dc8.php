<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=456&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:11:55 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:40:46 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000456: Data separation - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page92bd.html?return=%2Fissues%2Fview.php%3Fid%3D456%26history%3D1">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:40 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issuesd41d.xml?"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table><br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="3">View Issue Details&#160;<span class="small"><span class="bracket-link">[&#160;<a href="#bugnotes">Jump to Notes</a>&#160;]</span> </span></td><td class="center"><span class="small"></span></td><td class="right" colspan="2"><span class="small"><span class="bracket-link">[&#160;<a href="view7dc8.php?id=456&amp;history=1#history">Issue History</a>&#160;]</span> </span><span class="small"><span class="bracket-link">[&#160;<a href="print_bug_pagea5bc.php?bug_id=456">Print</a>&#160;]</span> </span></td></tr><tr><td class="category" width="15%">ID</td><td class="category" width="20%">Project</td><td class="category" width="15%">Category</td><td class="category" width="15%">View Status</td><td class="category" width="15%">Date Submitted</td><td class="category" width="20%">Last Update</td></tr><tr class="row-1"><td>0000456</td><td>sigmah</td><td>[All Projects] General</td><td>public</td><td>2012-04-02 17:53</td><td>2013-07-26 10:42</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">Reporter</td><td>aponcon</td><td colspan="4">&#160;</td></tr><tr class="row-1"><td class="category">Assigned To</td><td>tmiette</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Priority</td><td>high</td><td class="category">Severity</td><td>feature</td><td class="category">Reproducibility</td><td>N/A</td></tr><tr class="row-1"><td class="category">Status</td><td bgcolor="#c9ccc4">closed</td><td class="category">Resolution</td><td>fixed</td><td colspan="2">&#160;</td></tr><tr class="row-2"><td class="category">Platform</td><td></td><td class="category">OS</td><td></td><td class="category">OS Version</td><td></td></tr><tr class="row-1"><td class="category">Product Version</td><td>1.1.1</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Target Version</td><td>1.2</td><td class="category">Fixed in Version</td><td>1.2</td><td colspan="2">&#160;</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">Summary</td><td colspan="5">0000456: Data separation</td></tr><tr class="row-2"><td class="category">Description</td><td colspan="5">In order to separate all data from each NGO and also increase security, one database will be assigned to one NGO.</td></tr><tr class="row-1"><td class="category">Tags</td><td colspan="5">No tags attached.</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">User Report URL</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">OS</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other OS</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">Browser</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other browser</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">ScreenURL</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">(ActivityInfo) Noticed in revision</td><td colspan="5"></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category"><a name="attachments" id="attachments" />Attached Files</td><td colspan="5"></td></tr><tr align="center"><td align="center" colspan="6"><table><tr class="vcenter"><td class="center"></td><td class="center"></td><td class="center"></td><td class="center"></td></tr></table></td></tr></table><br />

<div id="relationships_open"><table class="width100" cellspacing="1">
<tr class="row-2" valign="top">
	<td width="15%" class="form-title" colspan="2">
		<a href="#" onclick="ToggleDiv( 'relationships' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;Relationships	</td>
</tr>
<tr>
	<td colspan="2"></td>
</tr>
</table>

</div><div id="relationships_closed" class="hidden"><table class="width100" cellspacing="1">
<tr>
	<td class="form-title">
		<a href="#" onclick="ToggleDiv( 'relationships' ); return false;"
			><img border="0" src="images/plus.html" alt="+" /></a>&#160;Relationships	</td>
</tr>
</table>

</div>
<a name="bugnotes" id="bugnotes" /><br />

<div id="bugnotes_open"><table class="width100" cellspacing="1">
<tr>
	<td class="form-title" colspan="2">
<a href="#" onclick="ToggleDiv( 'bugnotes' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;		Notes	</td>
</tr>
<tr class="bugnote" id="c918">
        <td class="bugnote-public">
				<span class="small">(<a href="viewc9f8.html?id=456#c918" title="Direct link to note">0000918)</a></span><br />
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2012-05-09 14:31</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Patch by Aurélien Ponçon : forces the &quot;order by&quot; clause by id to avoid random sort from the dbms (issue <a href="viewc9f8.html?id=456" title="[closed] Data separation" class="resolved">0000456</a>).<br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/layout/LayoutGroup.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/report/ProjectReportModelSection.java<br />
	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1321">
        <td class="bugnote-public">
				<span class="small">(<a href="viewc9f8.html?id=456#c1321" title="Direct link to note">0001321)</a></span><br />
		<a href="view_user_paged61c.html?id=5">tmiette</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2013-07-25 17:57</span><br />
		<span class="small">edited on:&#32;2013-07-25 17:57</span><br />		<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		The migration of &quot;Sigmah Central&quot; infrastructure has been performed today (25th of July).<br />
<br />
Now each NGO has one dedicated applications server, one dedicated PostgreSQL db instance and one dedicated storage space for the files.<br />
<br />
	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1323">
        <td class="bugnote-public">
				<span class="small">(<a href="viewc9f8.html?id=456#c1323" title="Direct link to note">0001323)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2013-07-26 10:42</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue closed because correct behavior checked on <a href="http://central.sigmah.org/">http://central.sigmah.org.</a> [<a href="http://central.sigmah.org/" target="_blank">^</a>]<br />
Congrats for this big piece of collective work!!<br />
<br />
Source code for data separation is available in trunk/scripts/data-separation (<a href="http://code.google.com/p/sigma-h/source/browse/#svn%2Ftrunk%2Fscripts%2Fdata-separation">http://code.google.com/p/sigma-h/source/browse/#svn%2Ftrunk%2Fscripts%2Fdata-separation</a> [<a href="http://code.google.com/p/sigma-h/source/browse/#svn%2Ftrunk%2Fscripts%2Fdata-separation" target="_blank">^</a>]).<br />
Documentation on how to use those data separation scripts are available here: <a href="http://code.google.com/p/sigma-h/wiki/DataSeparation">http://code.google.com/p/sigma-h/wiki/DataSeparation</a> [<a href="http://code.google.com/p/sigma-h/wiki/DataSeparation" target="_blank">^</a>]	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
</table>

</div><div id="bugnotes_closed" class="hidden">
<table class="width100" cellspacing="1">
<tr>
	<td class="form-title" colspan="2">
		<a href="#" onclick="ToggleDiv( 'bugnotes' ); return false;"
			><img border="0" src="images/plus.html" alt="+" /></a>&#160;		Notes	</td>
</tr>
</table>
</div>
<a name="history" id="history" /><br />

<div id="history_open"><table class="width100" cellspacing="0">
<tr>
	<td class="form-title" colspan="4">
<a href="#" onclick="ToggleDiv( 'history' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;Issue History	</td>
</tr>
<tr class="row-category-history">
	<td class="small-caption">
		Date Modified	</td>
	<td class="small-caption">
		Username	</td>
	<td class="small-caption">
		Field	</td>
	<td class="small-caption">
		Change	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2012-04-02 17:53	</td>
	<td class="small-caption">
		<a href="view_user_pageea25.html?id=24">aponcon</a>	</td>
	<td class="small-caption">
		New Issue	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2012-04-02 17:53	</td>
	<td class="small-caption">
		<a href="view_user_pageea25.html?id=24">aponcon</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2012-04-02 17:53	</td>
	<td class="small-caption">
		<a href="view_user_pageea25.html?id=24">aponcon</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; aponcon	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2012-04-06 15:42	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		1.1.1 =&gt; 1.2	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2012-05-09 14:31	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Checkin	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2012-05-09 14:31	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Note Added: 0000918	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-04-19 16:49	</td>
	<td class="small-caption">
		<a href="view_user_paged61c.html?id=5">tmiette</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		aponcon =&gt; tmiette	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-07-25 17:57	</td>
	<td class="small-caption">
		<a href="view_user_paged61c.html?id=5">tmiette</a>	</td>
	<td class="small-caption">
		Note Added: 0001321	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-07-25 17:57	</td>
	<td class="small-caption">
		<a href="view_user_paged61c.html?id=5">tmiette</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; resolved	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-07-25 17:57	</td>
	<td class="small-caption">
		<a href="view_user_paged61c.html?id=5">tmiette</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		open =&gt; fixed	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-07-25 17:57	</td>
	<td class="small-caption">
		<a href="view_user_paged61c.html?id=5">tmiette</a>	</td>
	<td class="small-caption">
		Note Edited: 0001321	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page5bf4.php?bugnote_id=1321#r419">View Revisions</a>	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-07-26 10:42	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		OS	</td>
	<td class="small-caption">
		Windows XP =&gt; NA	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-07-26 10:42	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Browser	</td>
	<td class="small-caption">
		Mozilla Firefox 3.0 (Gran Paradiso) =&gt; NA	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-07-26 10:42	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001323	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-07-26 10:42	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		resolved =&gt; closed	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-07-26 10:42	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Fixed in Version	</td>
	<td class="small-caption">
		 =&gt; 1.2	</td>
</tr>
</table>
</div><div id="history_closed" class="hidden"><table class="width100" cellspacing="0">
<tr>
	<td class="form-title" colspan="4">
	<a href="#" onclick="ToggleDiv( 'history' ); return false;"
			><img border="0" src="images/plus.html" alt="+" /></a>&#160;Issue History	</td>
</tr>
</table>

</div>	<br />
	<hr size="1" />
<table border="0" width="100%" cellspacing="0" cellpadding="0"><tr valign="top"><td>	<address>Copyright &copy; 2000 - 2018 MantisBT Team</address>
</td><td>
	<div align="right"><a href="http://www.mantisbt.org/" title="Free Web Based Bug Tracker"><img src="images/mantis_logo.html" width="145" height="50" alt="Powered by Mantis Bugtracker" border="0" /></a></div>
</td></tr></table>
</body>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=456&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:11:55 GMT -->
</html>
