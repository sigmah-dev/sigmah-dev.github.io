<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=844&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:02:25 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:26:52 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000844: Out of memory error when importing large file into large project database - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page41f8-2.html?return=%2Fissues%2Fview.php%3Fid%3D844%26history%3D1">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:26 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issuesd41d.xml?"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table><br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="3">View Issue Details&#160;<span class="small"><span class="bracket-link">[&#160;<a href="#bugnotes">Jump to Notes</a>&#160;]</span> </span></td><td class="center"><span class="small"></span></td><td class="right" colspan="2"><span class="small"><span class="bracket-link">[&#160;<a href="view475f.php?id=844&amp;history=1#history">Issue History</a>&#160;]</span> </span><span class="small"><span class="bracket-link">[&#160;<a href="print_bug_page5a1e.php?bug_id=844">Print</a>&#160;]</span> </span></td></tr><tr><td class="category" width="15%">ID</td><td class="category" width="20%">Project</td><td class="category" width="15%">Category</td><td class="category" width="15%">View Status</td><td class="category" width="15%">Date Submitted</td><td class="category" width="20%">Last Update</td></tr><tr class="row-1"><td>0000844</td><td>sigmah</td><td>Import</td><td>public</td><td>2016-01-20 17:20</td><td>2016-11-22 14:56</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">Reporter</td><td>osarrat</td><td colspan="4">&#160;</td></tr><tr class="row-1"><td class="category">Assigned To</td><td></td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Priority</td><td>high</td><td class="category">Severity</td><td>major</td><td class="category">Reproducibility</td><td>sometimes</td></tr><tr class="row-1"><td class="category">Status</td><td bgcolor="#c9ccc4">closed</td><td class="category">Resolution</td><td>fixed</td><td colspan="2">&#160;</td></tr><tr class="row-2"><td class="category">Platform</td><td></td><td class="category">OS</td><td></td><td class="category">OS Version</td><td></td></tr><tr class="row-1"><td class="category">Product Version</td><td>2.0.2</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Target Version</td><td>2.2</td><td class="category">Fixed in Version</td><td>2.2</td><td colspan="2">&#160;</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">Summary</td><td colspan="5">0000844: Out of memory error when importing large file into large project database</td></tr><tr class="row-2"><td class="category">Description</td><td colspan="5">With a file with about 120 rows for a database of about 250 projects, the importation process is interrupted before showing the import confirmation popup.<br />
On the server log, you get a &quot;GC overhead limit exceeded&quot; error message (see full log below).</td></tr><tr class="row-1"><td class="category">Additional Information</td><td colspan="5">See attached &quot;outOfMemory.log&quot; log file for initial error.</td></tr><tr class="row-2"><td class="category">Tags</td><td colspan="5">No tags attached.</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">User Report URL</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">OS</td><td colspan="5">NA</td></tr><tr class="row-1"><td class="category">Other OS</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">Browser</td><td colspan="5">NA</td></tr><tr class="row-1"><td class="category">Other browser</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">ScreenURL</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">(ActivityInfo) Noticed in revision</td><td colspan="5"></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category"><a name="attachments" id="attachments" />Attached Files</td><td colspan="5"><a href="file_downloada25d.php?file_id=300&amp;type=bug"><img src="images/fileicons/text.html" alt="log file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_downloada25d.php?file_id=300&amp;type=bug">outOfMemory.log</a> [<a href="file_downloada25d.php?file_id=300&amp;type=bug" target="_blank">^</a>] (150,833 bytes) <span class="italic">2016-01-21 14:09</span><br />
<a href="file_download11c0.php?file_id=301&amp;type=bug"><img src="images/fileicons/text.html" alt="log file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download11c0.php?file_id=301&amp;type=bug">TrialWith2GB-sigmah.log</a> [<a href="file_download11c0.php?file_id=301&amp;type=bug" target="_blank">^</a>] (12,598 bytes) <span class="italic">2016-01-22 10:29</span><br />
<a href="file_download475f.php?file_id=302&amp;type=bug"><img src="images/fileicons/generic.gif" alt="? file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download475f.php?file_id=302&amp;type=bug">import-script-example.sql</a> [<a href="file_download475f.php?file_id=302&amp;type=bug" target="_blank">^</a>] (1,592 bytes) <span class="italic">2016-01-26 16:09</span></td></tr><tr align="center"><td align="center" colspan="6"><table><tr class="vcenter"><td class="center"></td><td class="center"></td><td class="center"></td><td class="center"></td></tr></table></td></tr></table><br />

<div id="relationships_open"><table class="width100" cellspacing="1">
<tr class="row-2" valign="top">
	<td width="15%" class="form-title" colspan="2">
		<a href="#" onclick="ToggleDiv( 'relationships' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;Relationships	</td>
</tr>
<tr>
	<td colspan="2"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr bgcolor="#c9ccc4"><td><span class="nowrap">related to</span>&#160;</td><td><a href="viewf3fd.html?id=845">0000845</a></td><td><span class="issue-status" title="fixed">closed</span></td><td><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td>Mass import option for large import files&#160;</td></tr>
<tr bgcolor="#c9ccc4"><td><span class="nowrap">related to</span>&#160;</td><td><a href="viewb3ec.html?id=862">0000862</a></td><td><span class="issue-status" title="fixed">closed</span></td><td><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td>More than 5 minutes delay to create a project in a more than 300 projects database&#160;</td></tr>
</table></td>
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
<tr class="bugnote" id="c1953">
        <td class="bugnote-public">
				<span class="small">(<a href="viewf379.html?id=844#c1953" title="Direct link to note">0001953)</a></span><br />
		<a href="view_user_pagedcfd.html?id=4">rcalabro</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2016-01-21 10:03</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		What amount of memory have you allocated to Sigmah ? If it is inferior to 1G, try setting a higher value.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1955">
        <td class="bugnote-public">
				<span class="small">(<a href="viewf379.html?id=844#c1955" title="Direct link to note">0001955)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2016-01-22 10:30</span><br />
		<span class="small">edited on:&#32;2016-01-22 10:42</span><br />		<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Thanks for the tip, I have set up a &quot;setenv.bat&quot; file with this command line : set JAVA_OPTS=%JAVA_OPTS% -Xms128m -Xmx2048m .<br />
Then, I've re-launched the import process at about 15:50, and it hasn't crashed as it did it before after 10-20 minutes. Actually, when I left the office about 18:30, it was still running! This morning, I saw that the import process as finally crashed but with a NoClassDefFoundError error message at 23:22, and with a first OutOfMemoryError error at 23:13 (see attached TrialWith2GB log file, provided with two previous WARN which might be also useful).<br />
<br />
It might have no link with the problem, but in the &quot;localhost_access_log&quot;, there are &quot;GET /2.0.2/sigmah/online.nocache.json HTTP/1.1&quot; rows about one every 1 to 3 minutes before 23:22:29, and starting from 23:22:29 those message appears by hundreds for each second! At 23:22:29, there is actually a &quot;POST /2.0.2/sigmah/dispatch HTTP/1.1&quot; that I see in the log only twice at 15:55:15.<br />
<br />
What would you suggest now?<br />
<br />
	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1956">
        <td class="bugnote-public">
				<span class="small">(<a href="viewf379.html?id=844#c1956" title="Direct link to note">0001956)</a></span><br />
		<a href="view_user_pagedcfd.html?id=4">rcalabro</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2016-01-22 16:31</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		I would suggest you to divide the files in smaller pieces and try importing them.<br />
<br />
(Otherwise, the two WARN are unrelated to this problem).	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1957">
        <td class="bugnote-public">
				<span class="small">(<a href="viewf379.html?id=844#c1957" title="Direct link to note">0001957)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2016-01-25 15:42</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Thanks for the suggestion!<br />
I've tried it, and the importation does work with small files of about 10 rows. When I increase this number of row to 20 or more, I get the bug and much faster with my previous file of more than 100 rows which took 7 hours to crash the import.<br />
<br />
But in the final real case, the file to import may have more than 300 rows... which means to divide it in 30 files, and import them one by one. It would in the end be maybe faster to do the modification by hand in the application...<br />
<br />
Does this report I give to you help you to think of a fast solution to fix this? Why 20 rows would crash the import when 10 do not?	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1958">
        <td class="bugnote-public">
				<span class="small">(<a href="viewf379.html?id=844#c1958" title="Direct link to note">0001958)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2016-01-26 16:12</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		A workaround solution has been found: converting the Excel file to import into a SQL script. The just attached &quot;import-script-example.sql&quot; SQL file is an example of a query making the relevant modification in datatabase.<br />
<br />
This workaround solution can be used with caution until this issue is properly fixed.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1964">
        <td class="bugnote-public">
				<span class="small">(<a href="viewf379.html?id=844#c1964" title="Direct link to note">0001964)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2016-02-08 11:33</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Fix of this issue postponed to a later version since it would require a major rewrite of the whole import feature, and this rewriting would just extend the limit at which this bug occurs.<br />
As a bypass solution, feature <a href="viewf3fd.html?id=845" title="[closed] Mass import option for large import files" class="resolved">0000845</a> has been designed and requested.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c2231">
        <td class="bugnote-public">
				<span class="small">(<a href="viewf379.html?id=844#c2231" title="Direct link to note">0002231)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2016-11-22 14:55</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue closed indirectly by the fix of <a href="viewb3ec.html?id=862" title="[closed] More than 5 minutes delay to create a project in a more than 300 projects database" class="resolved">0000862</a>.	</td>
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
<tr class="row-1">
	<td class="small-caption">
		2016-01-20 17:20	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		New Issue	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-01-20 17:20	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-01-20 17:20	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; osarrat	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-01-20 17:22	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Priority	</td>
	<td class="small-caption">
		normal =&gt; high	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-01-20 17:22	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Additional Information Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page9475.php?rev_id=761#r761">View Revisions</a>	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-01-21 09:43	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		osarrat =&gt; rcalabro	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-01-21 10:03	</td>
	<td class="small-caption">
		<a href="view_user_pagedcfd.html?id=4">rcalabro</a>	</td>
	<td class="small-caption">
		Note Added: 0001953	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-01-21 14:09	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		File Added: outOfMemory.log	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-01-22 10:29	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		File Added: TrialWith2GB-sigmah.log	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-01-22 10:30	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001955	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-01-22 10:30	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Additional Information Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page9fb9.php?rev_id=762#r762">View Revisions</a>	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-01-22 10:42	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Edited: 0001955	</td>
	<td class="small-caption">
		<a href="bug_revision_view_pagebe2b.php?bugnote_id=1955#r764">View Revisions</a>	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-01-22 16:31	</td>
	<td class="small-caption">
		<a href="view_user_pagedcfd.html?id=4">rcalabro</a>	</td>
	<td class="small-caption">
		Note Added: 0001956	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-01-25 15:42	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001957	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-01-26 16:09	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		File Added: import-script-example.sql	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-01-26 16:12	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001958	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-02-08 11:31	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		related to 0000845	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-02-08 11:33	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001964	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-02-08 11:33	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		rcalabro =&gt; 	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-02-08 11:33	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; new	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-02-08 11:33	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		2.1 =&gt; next-but-one	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-11-22 14:55	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0002231	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-11-22 14:55	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; closed	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-11-22 14:55	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		open =&gt; fixed	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-11-22 14:55	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		next-but-one =&gt; 2.2	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-11-22 14:55	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		related to 0000862	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-11-22 14:56	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Fixed in Version	</td>
	<td class="small-caption">
		 =&gt; 2.2	</td>
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

<!-- Mirrored from www.sigmah.org/issues/view.php?id=844&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:02:25 GMT -->
</html>
