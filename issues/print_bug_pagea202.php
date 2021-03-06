<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=673 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:07:34 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:32:38 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000673: &quot;Map&quot; sub-tab unavailable - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000673</td><td class="print">sigmah</td><td class="print">Indicator Management</td><td class="print">public</td><td class="print">2015-03-31 16:54</td><td class="print">2015-05-04 15:29</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">Assistcom</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">rcalabro</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">block</td><td class="print-category">Reproducibility</td><td class="print">always</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">2.0</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0</td><td class="print-category">Fixed in Version</td><td class="print">2.0</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000673: &quot;Map&quot; sub-tab unavailable</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">App 140 : impossible to access to the &quot;Map&quot; sub-tab, the error message appears: &quot;An unexpected error has occured.&quot;</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5">Tested on v2.0-rc1.<br />
No more information get explicitly printed in the logs.<br />
<br />
The only information printed in the log a the same time are :<br />
[WARN ] {08/04/2015 16:21:02.606} [http-apr-8888-exec-8] o.s.s.security.impl.AccessRights - No security permission can be found for token 'null'. Did you forget to declare corresponding 'sperm'?<br />
<br />
<br />
<br />
<br />
[DEBUG] {08/04/2015 16:24:49.566} [http-apr-8888-exec-5] o.s.s.s.i.AuthenticationSecureSessionValidator - Starting validation of authentication token '7076a74e4c64a75a04f96697deb9538b' for resource 'org.sigmah.shared.command.SecureNavigationCommand'.<br />
[DEBUG] {08/04/2015 16:24:49.570} [http-apr-8888-exec-5] o.s.s.dispatch.impl.UserDispatch - EXECUTING COMMAND - Command: 'org.sigmah.shared.command.SecureNavigationCommand[page=project-indicators-map]' ; Handler: '<a href="mailto:org.sigmah.server.handler.SecureNavigationCommandHandler@25e7fa54">org.sigmah.server.handler.SecureNavigationCommandHandler@25e7fa54</a>[]' ; User: 'Admin Sigmah'.<br />
[DEBUG] {08/04/2015 16:24:49.629} [http-apr-8888-exec-5] o.s.s.dispatch.impl.UserDispatch - COMMAND 'org.sigmah.shared.command.SecureNavigationCommand[page=project-indicators-map]' EXECUTED IN 57 MS.<br />
[DEBUG] {08/04/2015 16:24:49.757} [http-apr-8888-exec-9] o.s.s.s.i.AuthenticationSecureSessionValidator - Starting validation of authentication token '7076a74e4c64a75a04f96697deb9538b' for resource 'org.sigmah.shared.command.GetValue'.<br />
[DEBUG] {08/04/2015 16:24:49.766} [http-apr-8888-exec-9] o.s.s.dispatch.impl.UserDispatch - EXECUTING COMMAND - Command: 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1135, elementEntityName=element.DefaultFlexibleElement]' ; Handler: '<a href="mailto:org.sigmah.server.handler.GetValueHandler@7454433">org.sigmah.server.handler.GetValueHandler@7454433</a>[]' ; User: 'Admin Sigmah'.<br />
[DEBUG] {08/04/2015 16:24:49.767} [http-apr-8888-exec-9] o.s.server.handler.GetValueHandler - Getting value object from the database for command: 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1135, elementEntityName=element.DefaultFlexibleElement]'.<br />
[DEBUG] {08/04/2015 16:24:49.770} [http-apr-8888-exec-9] o.s.server.handler.GetValueHandler - No value for this flexible element #1135.<br />
[DEBUG] {08/04/2015 16:24:49.770} [http-apr-8888-exec-9] o.s.s.dispatch.impl.UserDispatch - COMMAND 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1135, elementEntityName=element.DefaultFlexibleElement]' EXECUTED IN 3 MS.<br />
[DEBUG] {08/04/2015 16:24:49.777} [http-apr-8888-exec-10] o.s.s.s.i.AuthenticationSecureSessionValidator - Starting validation of authentication token '7076a74e4c64a75a04f96697deb9538b' for resource 'org.sigmah.shared.command.GetValue'.<br />
[DEBUG] {08/04/2015 16:24:49.785} [http-apr-8888-exec-10] o.s.s.dispatch.impl.UserDispatch - EXECUTING COMMAND - Command: 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1136, elementEntityName=element.DefaultFlexibleElement]' ; Handler: '<a href="mailto:org.sigmah.server.handler.GetValueHandler@7454433">org.sigmah.server.handler.GetValueHandler@7454433</a>[]' ; User: 'Admin Sigmah'.<br />
[DEBUG] {08/04/2015 16:24:49.786} [http-apr-8888-exec-10] o.s.server.handler.GetValueHandler - Getting value object from the database for command: 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1136, elementEntityName=element.DefaultFlexibleElement]'.<br />
[DEBUG] {08/04/2015 16:24:50.267} [http-apr-8888-exec-10] o.s.server.handler.GetValueHandler - No value for this flexible element #1136.<br />
[DEBUG] {08/04/2015 16:24:50.267} [http-apr-8888-exec-2] o.s.s.s.i.AuthenticationSecureSessionValidator - Starting validation of authentication token '7076a74e4c64a75a04f96697deb9538b' for resource 'org.sigmah.shared.command.GetValue'.<br />
[DEBUG] {08/04/2015 16:24:50.267} [http-apr-8888-exec-10] o.s.s.dispatch.impl.UserDispatch - COMMAND 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1136, elementEntityName=element.DefaultFlexibleElement]' EXECUTED IN 481 MS.<br />
[DEBUG] {08/04/2015 16:24:50.306} [http-apr-8888-exec-2] o.s.s.dispatch.impl.UserDispatch - EXECUTING COMMAND - Command: 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1137, elementEntityName=element.DefaultFlexibleElement]' ; Handler: '<a href="mailto:org.sigmah.server.handler.GetValueHandler@7454433">org.sigmah.server.handler.GetValueHandler@7454433</a>[]' ; User: 'Admin Sigmah'.<br />
[DEBUG] {08/04/2015 16:24:50.295} [http-apr-8888-exec-6] o.s.s.s.i.AuthenticationSecureSessionValidator - Starting validation of authentication token '7076a74e4c64a75a04f96697deb9538b' for resource 'org.sigmah.shared.command.GetValue'.<br />
[DEBUG] {08/04/2015 16:24:50.316} [http-apr-8888-exec-8] o.s.s.servlet.base.AbstractServlet - Executing specific 'doGet' servlet method.<br />
[DEBUG] {08/04/2015 16:24:50.320} [http-apr-8888-exec-2] o.s.server.handler.GetValueHandler - Getting value object from the database for command: 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1137, elementEntityName=element.DefaultFlexibleElement]'.<br />
[DEBUG] {08/04/2015 16:24:50.557} [http-apr-8888-exec-8] o.s.s.servlet.base.AbstractServlet - Retrieving by reflection the given servlet method 'downloadLogo'.<br />
[DEBUG] {08/04/2015 16:24:50.604} [http-apr-8888-exec-8] o.s.s.s.i.AuthenticationSecureSessionValidator - Starting validation of authentication token '7076a74e4c64a75a04f96697deb9538b' for resource 'null'.<br />
[WARN ] {08/04/2015 16:24:50.613} [http-apr-8888-exec-8] o.s.s.security.impl.AccessRights - No security permission can be found for token 'null'. Did you forget to declare corresponding 'sperm'?<br />
[DEBUG] {08/04/2015 16:24:50.624} [http-apr-8888-exec-2] o.s.server.handler.GetValueHandler - No value for this flexible element #1137.<br />
[DEBUG] {08/04/2015 16:24:50.625} [http-apr-8888-exec-2] o.s.s.dispatch.impl.UserDispatch - COMMAND 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1137, elementEntityName=element.DefaultFlexibleElement]' EXECUTED IN 304 MS.<br />
[DEBUG] {08/04/2015 16:24:50.669} [http-apr-8888-exec-6] o.s.s.dispatch.impl.UserDispatch - EXECUTING COMMAND - Command: 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1138, elementEntityName=element.BudgetElement]' ; Handler: '<a href="mailto:org.sigmah.server.handler.GetValueHandler@7454433">org.sigmah.server.handler.GetValueHandler@7454433</a>[]' ; User: 'Admin Sigmah'.<br />
[DEBUG] {08/04/2015 16:24:50.669} [http-apr-8888-exec-6] o.s.server.handler.GetValueHandler - Getting value object from the database for command: 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1138, elementEntityName=element.BudgetElement]'.<br />
[DEBUG] {08/04/2015 16:24:50.670} [http-apr-8888-exec-8] o.s.s.servlet.base.AbstractServlet - SERVLET METHOD EXECUTION GRANTED - Servlet method: 'protected void org.sigmah.server.servlet.FileServlet.downloadLogo(javax.servlet.http.HttpServletRequest,javax.servlet.http.HttpServletResponse,org.sigmah.server.servlet.base.ServletExecutionContext) throws java.lang.Exception' ; User: 'A. Sigmah (35)'.<br />
[DEBUG] {08/04/2015 16:24:50.671} [http-apr-8888-exec-8] o.sigmah.server.servlet.FileServlet - Downloads logo with id 'csud.png'.<br />
[INFO ] {08/04/2015 16:24:50.672} [http-apr-8888-exec-8] o.s.s.conf.ReloadableProperties - Reloading properties.<br />
[INFO ] {08/04/2015 16:24:50.672} [http-apr-8888-exec-8] o.s.server.conf.BasicProperties - Loading properties from file 'sigmah.properties'.<br />
[INFO ] {08/04/2015 16:24:50.675} [http-apr-8888-exec-8] o.s.server.conf.BasicProperties - Loading properties from file 'version.properties'.<br />
[INFO ] {08/04/2015 16:24:50.675} [http-apr-8888-exec-8] o.s.s.conf.ReloadableProperties - Reloading properties.<br />
[DEBUG] {08/04/2015 16:24:50.675} [http-apr-8888-exec-6] o.s.server.handler.GetValueHandler - No value for this flexible element #1138.<br />
[DEBUG] {08/04/2015 16:24:50.675} [http-apr-8888-exec-6] o.s.s.dispatch.impl.UserDispatch - COMMAND 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1138, elementEntityName=element.BudgetElement]' EXECUTED IN 6 MS.<br />
[INFO ] {08/04/2015 16:24:50.675} [http-apr-8888-exec-8] o.s.server.conf.BasicProperties - Loading properties from file 'sigmah.properties'.<br />
[INFO ] {08/04/2015 16:24:50.807} [http-apr-8888-exec-8] o.s.server.conf.BasicProperties - Loading properties from file 'version.properties'.<br />
[DEBUG] {08/04/2015 16:24:50.807} [http-apr-8888-exec-8] o.s.s.servlet.util.ResponseHelper - [DOWNLOAD] DOWNLOADING FILE 'null' WITH CONTENT-TYPE 'image/png' AND LENGTH null.<br />
[DEBUG] {08/04/2015 16:24:50.809} [http-apr-8888-exec-8] o.s.s.servlet.base.AbstractServlet - SERVLET METHOD 'protected void org.sigmah.server.servlet.FileServlet.downloadLogo(javax.servlet.http.HttpServletRequest,javax.servlet.http.HttpServletResponse,org.sigmah.server.servlet.base.ServletExecutionContext) throws java.lang.Exception' EXECUTED IN 137 MS.<br />
</td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5">No tags attached.</td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2015-03-31 16:54</td><td class="print"><a href="view_user_page0641.html?id=88">Assistcom</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2015-03-31 16:54</td><td class="print"><a href="view_user_page0641.html?id=88">Assistcom</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2015-03-31 16:54</td><td class="print"><a href="view_user_page0641.html?id=88">Assistcom</a></td><td class="print">Assigned To</td><td class="print"> =&gt; rcalabro</td></tr><tr class="print"><td class="print">2015-04-03 11:59</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=526#r526</td></tr><tr class="print"><td class="print">2015-04-03 11:59</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=528#r528</td></tr><tr class="print"><td class="print">2015-04-08 16:25</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=544#r544</td></tr><tr class="print"><td class="print">2015-04-13 19:57</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Severity</td><td class="print">minor =&gt; block</td></tr><tr class="print"><td class="print">2015-04-14 17:13</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Note Added: 0001599</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-14 17:13</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2015-04-14 17:13</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0 rc2</td></tr><tr class="print"><td class="print">2015-04-14 17:13</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2015-04-14 18:00</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master de2aac52</td></tr><tr class="print"><td class="print">2015-04-14 18:00</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 298aff03</td></tr><tr class="print"><td class="print">2015-04-15 10:28</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print">2.0 rc2 =&gt; 2.0</td></tr><tr class="print"><td class="print">2015-04-15 10:29</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001618</td><td class="print"></td></tr><tr class="print"><td class="print">2015-05-04 15:29</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001668</td><td class="print"></td></tr><tr class="print"><td class="print">2015-05-04 15:29</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr><tr class="print"><td class="print">2015-05-04 15:29</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Product Version</td><td class="print"> =&gt; 2.0</td></tr><tr class="print"><td class="print">2015-05-04 15:29</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Summary</td><td class="print">&quot;Map&quot; sub-tab unvailable =&gt; &quot;Map&quot; sub-tab unavailable</td></tr></table>
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
				(0001599)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_pagedcfd.html?id=4">rcalabro</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-04-14 17:13&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Added missing files to load OpenLayers.			</td>
		</tr>
		</table>
	</td>
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
				(0001618)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-04-15 10:29&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Fixed in v2.0-rc2 by rcalabro.			</td>
		</tr>
		</table>
	</td>
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
				(0001668)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-05-04 15:29&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because correct behavior on v2.0-rc2.			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=673 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:07:34 GMT -->
</html>
