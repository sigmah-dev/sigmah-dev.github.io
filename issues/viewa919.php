<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=1015&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:01:30 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:26:06 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0001015: Unexpected error when editing a field code from a computation field edition popup - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page422f.html?return=%2Fissues%2Fview.php%3Fid%3D1015%26history%3D1">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:26 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issuesd41d.xml?"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table><br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="3">View Issue Details&#160;<span class="small"><span class="bracket-link">[&#160;<a href="#bugnotes">Jump to Notes</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="#changesets">Related Changesets</a>&#160;]</span> </span></td><td class="center"><span class="small"></span></td><td class="right" colspan="2"><span class="small"><span class="bracket-link">[&#160;<a href="viewa919.php?id=1015&amp;history=1#history">Issue History</a>&#160;]</span> </span><span class="small"><span class="bracket-link">[&#160;<a href="print_bug_pageb771.php?bug_id=1015">Print</a>&#160;]</span> </span></td></tr><tr><td class="category" width="15%">ID</td><td class="category" width="20%">Project</td><td class="category" width="15%">Category</td><td class="category" width="15%">View Status</td><td class="category" width="15%">Date Submitted</td><td class="category" width="20%">Last Update</td></tr><tr class="row-1"><td>0001015</td><td>sigmah</td><td>Administration</td><td>public</td><td>2016-11-07 18:04</td><td>2017-01-12 16:44</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">Reporter</td><td>osarrat</td><td colspan="4">&#160;</td></tr><tr class="row-1"><td class="category">Assigned To</td><td>rcalabro</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Priority</td><td>normal</td><td class="category">Severity</td><td>major</td><td class="category">Reproducibility</td><td>always</td></tr><tr class="row-1"><td class="category">Status</td><td bgcolor="#c9ccc4">closed</td><td class="category">Resolution</td><td>fixed</td><td colspan="2">&#160;</td></tr><tr class="row-2"><td class="category">Platform</td><td></td><td class="category">OS</td><td></td><td class="category">OS Version</td><td></td></tr><tr class="row-1"><td class="category">Product Version</td><td>2.2</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Target Version</td><td>2.2</td><td class="category">Fixed in Version</td><td>2.2</td><td colspan="2">&#160;</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">Summary</td><td colspan="5">0001015: Unexpected error when editing a field code from a computation field edition popup</td></tr><tr class="row-2"><td class="category">Description</td><td colspan="5">On v2.2-rc1, whenever a user modifies a field code from a computation field edition popup, he will get an Unexpected error.<br />
<br />
See attached screenshot and log for more details.</td></tr><tr class="row-1"><td class="category">Additional Information</td><td colspan="5">[ERROR] {07/11/2016 18:00:07.711} [http-apr-8080-exec-2] o.s.s.d.SecureDispatchServlet - COMMAND EXECUTION FAILED - Command execution: 'org.sigmah.client.security.SecureDispatchAsync$CommandExecution[authToken=43ca6e4de51c96de0b2b31ab8c03e313, command=org.sigmah.shared.command.UpdateEntity[id=9897, entityName=ProjectModel, changes={projectModel=org.sigmah.shared.dto.ProjectModelDTO[entity=ProjectModel, id=9897, name=FPU-1, status=DRAFT], flexibleElement=org.sigmah.shared.dto.element.TextAreaElementDTO[entity=element.TextAreaElement, id=9987, type=N, minValue=0, maxValue=9, length=null, isDecimal=false], contactModel=org.sigmah.shared.dto.ProjectModelDTO[entity=ProjectModel, id=9897, name=FPU-1, status=DRAFT], oldFieldProperties={}, code=safety, orgUnitModel=org.sigmah.shared.dto.ProjectModelDTO[entity=ProjectModel, id=9897, name=FPU-1, status=DRAFT]}], currentPageToken=flexible-element-edit]' ; User: 'A. Sigmah (35)' ; RuntimeException while executing.<br />
java.lang.NullPointerException: null<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.service.util.ModelUtil.persistFlexibleElement(ModelUtil.java:178) ~[ModelUtil.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.service.ProjectModelService.update(ProjectModelService.java:383) ~[ProjectModelService.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.service.ProjectModelService.update(ProjectModelService.java:68) ~[ProjectModelService.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.UpdateEntityHandler.performUpdate(UpdateEntityHandler.java:106) ~[UpdateEntityHandler.class:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.persist.jpa.JpaLocalTxnInterceptor.invoke(JpaLocalTxnInterceptor.java:66) ~[guice-persist-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.UpdateEntityHandler.execute(UpdateEntityHandler.java:89) ~[UpdateEntityHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.UpdateEntityHandler.execute(UpdateEntityHandler.java:50) ~[UpdateEntityHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:117) ~[AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:341) ~[UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.execute(UserDispatch.java:251) ~[UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.SecureDispatchServlet.execute(SecureDispatchServlet.java:170) ~[SecureDispatchServlet.class:na]</td></tr><tr class="row-2"><td class="category">Tags</td><td colspan="5">No tags attached.</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">User Report URL</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">OS</td><td colspan="5">NA</td></tr><tr class="row-1"><td class="category">Other OS</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">Browser</td><td colspan="5">NA</td></tr><tr class="row-1"><td class="category">Other browser</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">ScreenURL</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">(ActivityInfo) Noticed in revision</td><td colspan="5"></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category"><a name="attachments" id="attachments" />Attached Files</td><td colspan="5"><a href="file_download21a4.php?file_id=353&amp;type=bug"><img src="images/fileicons/png.gif" alt="png file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download21a4.php?file_id=353&amp;type=bug">ImpossibleToEditFieldCodeFromComputationField.PNG</a> [<a href="file_download21a4.php?file_id=353&amp;type=bug" target="_blank">^</a>] (25,878 bytes) <span class="italic">2016-11-07 18:04</span>
<br /><a href="file_download21a4.php?file_id=353&amp;type=bug"><img alt="" style="border: 0; max-height:250px;" src="ImpossibleToEditFieldCodeFromComputationFieldc093.PNG?file_id=353&amp;type=bug&amp;show_inline=1&amp;file_show_inline_token=20180725fd759f78d1a5287b5832a1644bd71ce41a5f48da" /></a></td></tr><tr align="center"><td align="center" colspan="6"><table><tr class="vcenter"><td class="center"></td><td class="center"></td><td class="center"></td><td class="center"></td></tr></table></td></tr></table><br />

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
<tr class="bugnote" id="c2229">
        <td class="bugnote-public">
				<span class="small">(<a href="viewda0d.html?id=1015#c2229" title="Direct link to note">0002229)</a></span><br />
		<a href="view_user_pageb182.html?id=100">ftavin</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2016-11-22 10:51</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Fixed by next pull request.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c2235">
        <td class="bugnote-public">
				<span class="small">(<a href="viewda0d.html?id=1015#c2235" title="Direct link to note">0002235)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2016-11-23 15:38</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Set as resolved by pull request <a href="https://github.com/sigmah-dev/sigmah/pull/61">https://github.com/sigmah-dev/sigmah/pull/61</a> [<a href="https://github.com/sigmah-dev/sigmah/pull/61" target="_blank">^</a>]	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c2237">
        <td class="bugnote-public">
				<span class="small">(<a href="viewda0d.html?id=1015#c2237" title="Direct link to note">0002237)</a></span><br />
		<a href="view_user_pagec3c9.html?id=8">anonymous</a>		<span class="small">(viewer)</span>
				<br />
		<span class="small">2016-11-24 11:00</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Fix committed to master branch.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c2306">
        <td class="bugnote-public">
				<span class="small">(<a href="viewda0d.html?id=1015#c2306" title="Direct link to note">0002306)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2017-01-12 16:44</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue closed because correct behavior checked on v2.2-rc2.	</td>
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
</div><div id="Source_open"><br/>
<a name="changesets"/>
<table class="width100" cellspacing="1">

<tr>
	<td class="form-title"><a href="#" onclick="ToggleDiv( 'Source' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;Related Changesets</td>
</tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="2">
	<a name="changeset2179">sigmah: master e6795168</a>
	<br/><span class="small">Timestamp: 2016-11-22 10:51:29</span>
	<br/><span class="small">Author: FranÃ§ois Tavin</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin2547.php?page=Source/view&amp;id=2179">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e6795168bf0d633a05d3d507267f918c4d2b4871">Diff</a>&#160;]</span> </td>
<td colspan="3">Fix Unexpected error editing a field code from a computation field edition<br />
<br />
(resolves <a href="viewda0d.html?id=1015" title="[closed] Unexpected error when editing a field code from a computation field edition popup" class="resolved">0001015</a>)<br />
<br />
Change-Id: I467f9739863aef666fab53e8815f62154577fc29</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/service/util/ModelUtil.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e6795168bf0d633a05d3d507267f918c4d2b4871">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e6795168bf0d633a05d3d507267f918c4d2b4871/src/main/java/org/sigmah/server/service/util/ModelUtil.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		</table>
</div><div id="Source_closed" class="hidden"><br/>
<table class="width100" cellspacing="1">

<tr>
	<td class="form-title"><a href="#" onclick="ToggleDiv( 'Source' ); return false;"
			><img border="0" src="images/plus.html" alt="+" /></a>&#160;Related Changesets</td>
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
		2016-11-07 18:04	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		New Issue	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-11-07 18:04	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-11-07 18:04	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; rcalabro	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-11-07 18:04	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		File Added: ImpossibleToEditFieldCodeFromComputationField.PNG	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-11-22 10:51	</td>
	<td class="small-caption">
		<a href="view_user_pageb182.html?id=100">ftavin</a>	</td>
	<td class="small-caption">
		Note Added: 0002229	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-11-23 15:38	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; resolved	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-11-23 15:38	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0002235	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-11-24 11:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master e6795168	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-11-24 11:00	</td>
	<td class="small-caption">
		<a href="view_user_pagec3c9.html?id=8">anonymous</a>	</td>
	<td class="small-caption">
		Note Added: 0002237	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-11-24 11:00	</td>
	<td class="small-caption">
		<a href="view_user_pagec3c9.html?id=8">anonymous</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		open =&gt; fixed	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2017-01-12 16:44	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0002306	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2017-01-12 16:44	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		resolved =&gt; closed	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2017-01-12 16:44	</td>
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

<!-- Mirrored from www.sigmah.org/issues/view.php?id=1015&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:01:30 GMT -->
</html>
