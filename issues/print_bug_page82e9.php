<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=637 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:20 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:28:04 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000637: Deleted reminders still visible in Calendar - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000637</td><td class="print">sigmah</td><td class="print">Calendar</td><td class="print">public</td><td class="print">2014-10-05 13:27</td><td class="print">2015-12-03 16:23</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">rcalabro</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">minor</td><td class="print-category">Reproducibility</td><td class="print">have not tried</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">1.2</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0.2</td><td class="print-category">Fixed in Version</td><td class="print">2.0.2</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000637: Deleted reminders still visible in Calendar</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">Even if a reminder is deleted with the &quot;Delete&quot; button, it remains visible in the Calendar.<br />
<br />
NOTE: This bug has alrady been fixed by attached patc, and patch just need to be revised and integrated.</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5">1-create a reminder for a date<br />
2-open the Calendar sub-tab and search for the chosen date =&gt; reminder is here<br />
3-delete the reminder (click on the reminder in Management board to open the reminder edition pop-up, and click on the Delete button) =&gt; the reminder is no more visible afterwards in the Management board<br />
3-go back on the same date in the Calendar =&gt; the reminder is still visible</td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5"><a href='tag_view_page5916.html?tag_id=15' title='Easiest issues to pick up when starting to contribute on the project.'>LowHangingFruits</a></td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/text.html" alt="patch" />&#160;637.patch (1,513) <span class="italic">2014-12-26 16:17</span><br />http://www.sigmah.org/issues/file_download.php?file_id=235&amp;type=bug</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2014-10-05 13:27</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2014-10-05 13:28</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Tag Attached: NewComersSpecial</td><td class="print"></td></tr><tr class="print"><td class="print">2014-12-26 13:42</td><td class="print"><a href="view_user_pagebc58.html?id=78">ssn155</a></td><td class="print">Assigned To</td><td class="print"> =&gt; ssn155</td></tr><tr class="print"><td class="print">2014-12-26 13:42</td><td class="print"><a href="view_user_pagebc58.html?id=78">ssn155</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2014-12-26 16:17</td><td class="print"><a href="view_user_pagebc58.html?id=78">ssn155</a></td><td class="print">File Added: 637.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-07 15:42</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print">ssn155 =&gt; rcalabro</td></tr><tr class="print"><td class="print">2015-07-08 17:05</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print">rcalabro =&gt; </td></tr><tr class="print"><td class="print">2015-07-08 17:05</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">assigned =&gt; new</td></tr><tr class="print"><td class="print">2015-07-08 17:05</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">2.0 =&gt; next-but-one</td></tr><tr class="print"><td class="print">2015-11-06 13:02</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">next-but-one =&gt; 2.1</td></tr><tr class="print"><td class="print">2015-11-06 13:02</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=715#r715</td></tr><tr class="print"><td class="print">2015-12-02 19:00</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 2e94ed1a</td></tr><tr class="print"><td class="print">2015-12-03 09:56</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Status</td><td class="print">new =&gt; resolved</td></tr><tr class="print"><td class="print">2015-12-03 09:56</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2015-12-03 09:56</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Assigned To</td><td class="print"> =&gt; rcalabro</td></tr><tr class="print"><td class="print">2015-12-03 16:23</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001939</td><td class="print"></td></tr><tr class="print"><td class="print">2015-12-03 16:23</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr><tr class="print"><td class="print">2015-12-03 16:23</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0.2</td></tr><tr class="print"><td class="print">2015-12-03 16:23</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">2.1 =&gt; 2.0.2</td></tr><tr class="print"><td class="print">2016-03-03 09:39</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Tag Renamed</td><td class="print">NewComersSpecial =&gt; LowHangingFruits</td></tr></table>
<br />
<table class="width100" cellspacing="1">
<tr>
	<td class="form-title" colspan="2">
		Notes	</td>
</tr>
<tr>
	<td class="print-spacer" colspan="2">
		<hr size="1" />
	</td>
</tr>
<tr>
	<td class="nopad" valign="top" width="20%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				(0001939)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-12-03 16:23&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because correct behavior checked on v2.0.2.			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=637 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:20 GMT -->
</html>
