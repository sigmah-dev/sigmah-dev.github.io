<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=616&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:04:30 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:29:03 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000616: Reorganize administration global privileges - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_pagee241.html?return=%2Fissues%2Fview.php%3Fid%3D616%26history%3D1">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:29 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issuesd41d.xml?"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table><br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="3">View Issue Details&#160;<span class="small"><span class="bracket-link">[&#160;<a href="#bugnotes">Jump to Notes</a>&#160;]</span> </span></td><td class="center"><span class="small"></span></td><td class="right" colspan="2"><span class="small"><span class="bracket-link">[&#160;<a href="viewc40f.php?id=616&amp;history=1#history">Issue History</a>&#160;]</span> </span><span class="small"><span class="bracket-link">[&#160;<a href="print_bug_pageded7.php?bug_id=616">Print</a>&#160;]</span> </span></td></tr><tr><td class="category" width="15%">ID</td><td class="category" width="20%">Project</td><td class="category" width="15%">Category</td><td class="category" width="15%">View Status</td><td class="category" width="15%">Date Submitted</td><td class="category" width="20%">Last Update</td></tr><tr class="row-1"><td>0000616</td><td>sigmah</td><td>Administration</td><td>public</td><td>2014-03-13 10:56</td><td>2015-07-08 17:02</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">Reporter</td><td>osarrat</td><td colspan="4">&#160;</td></tr><tr class="row-1"><td class="category">Assigned To</td><td>rcalabro</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Priority</td><td>normal</td><td class="category">Severity</td><td>feature</td><td class="category">Reproducibility</td><td>N/A</td></tr><tr class="row-1"><td class="category">Status</td><td bgcolor="#c9ccc4">closed</td><td class="category">Resolution</td><td>fixed</td><td colspan="2">&#160;</td></tr><tr class="row-2"><td class="category">Platform</td><td></td><td class="category">OS</td><td></td><td class="category">OS Version</td><td></td></tr><tr class="row-1"><td class="category">Product Version</td><td>1.2</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Target Version</td><td>2.0</td><td class="category">Fixed in Version</td><td>2.0</td><td colspan="2">&#160;</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">Summary</td><td colspan="5">0000616: Reorganize administration global privileges</td></tr><tr class="row-2"><td class="category">Description</td><td colspan="5">Current administration global privileges are a bit messy:<br />
- &quot;View administration&quot; gives full privilege on the whole administration<br />
- &quot;Edit organisational units&quot; gives the right to modify the content of created orgunits<br />
- &quot;Manage users&quot; should grant &quot;authorisation to enter and modify user information&quot;, but has actually no effect<br />
<br />
And there is no solution to grant to some users only the right to manage orgunits (creation, etc.).<br />
<br />
As a consequence, and according to user request (see User Report URL), the new admin privileges should be created/renamed:<br />
- &quot;View Administration&quot; should be renamed &quot;Administration&quot;<br />
- &quot;Manage users&quot; objective should be &quot;Direct access button to the &quot;Users&quot; part of the administration&quot;, this privilege should add a button &quot;Manage Users&quot; in the menu on the Dashboard.<br />
- a new &quot;Manage organisational units&quot; privilege should be created in the same idea of modified &quot;Manage users&quot; privilege.</td></tr><tr class="row-1"><td class="category">Tags</td><td colspan="5">No tags attached.</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">User Report URL</td><td colspan="5"><a href="http://www.sigmah.org/node/682#comment-347">http://www.sigmah.org/node/682#comment-347</a> [<a href="http://www.sigmah.org/node/682#comment-347" target="_blank">^</a>]</td></tr><tr class="row-1"><td class="category">OS</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other OS</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">Browser</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other browser</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">ScreenURL</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">(ActivityInfo) Noticed in revision</td><td colspan="5"></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category"><a name="attachments" id="attachments" />Attached Files</td><td colspan="5"><a href="file_downloadaa37.php?file_id=205&amp;type=bug"><img src="images/fileicons/png.gif" alt="png file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_downloadaa37.php?file_id=205&amp;type=bug">01.profile_screen.png</a> [<a href="file_downloadaa37.php?file_id=205&amp;type=bug" target="_blank">^</a>] (39,247 bytes) <span class="italic">2014-07-21 20:14</span>
<br /><a href="file_downloadaa37.php?file_id=205&amp;type=bug"><img alt="" style="border: 0; max-height:250px;" src="01.profile_screen5136.png?file_id=205&amp;type=bug&amp;show_inline=1&amp;file_show_inline_token=201807256c110d3bec4e28c0ce122811426d80dfb09e4e90" /></a><br />
<br /><a href="file_downloadb424.php?file_id=206&amp;type=bug"><img src="images/fileicons/png.gif" alt="png file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_downloadb424.php?file_id=206&amp;type=bug">02.profile_screen.png</a> [<a href="file_downloadb424.php?file_id=206&amp;type=bug" target="_blank">^</a>] (38,612 bytes) <span class="italic">2014-07-21 20:14</span>
<br /><a href="file_downloadb424.php?file_id=206&amp;type=bug"><img alt="" style="border: 0; max-height:250px;" src="02.profile_screen2a8b.png?file_id=206&amp;type=bug&amp;show_inline=1&amp;file_show_inline_token=201807254186cd747c1ed6847eb1e36144cb174026f500e0" /></a><br />
<br /><a href="file_download5b72.php?file_id=209&amp;type=bug"><img src="images/fileicons/text.html" alt="txt file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download5b72.php?file_id=209&amp;type=bug">616_patch_v2.txt</a> [<a href="file_download5b72.php?file_id=209&amp;type=bug" target="_blank">^</a>] (80,546 bytes) <span class="italic">2014-07-25 04:35</span><script type="text/javascript" language="JavaScript">
<!--
function swap_content( span ) {
displayType = ( document.getElementById( span ).style.display == 'none' ) ? '' : 'none';
document.getElementById( span ).style.display = displayType;
}

 -->
 </script> <span id="hideSection_209">[<a class="small" href='#' id='attmlink_209' onclick='swap_content("hideSection_209");swap_content("showSection_209");return false;'>Show Content</a>]</span> <span style='display:none' id="showSection_209">[<a class="small" href='#' id='attmlink_209' onclick='swap_content("hideSection_209");swap_content("showSection_209");return false;'>Hide Content</a>]<pre>### Eclipse Workspace Patch 1.0
#P Sigmah
Index: src/main/java/org/sigmah/client/page/admin/management/AdminManagementPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminManagementPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminManagementPresenter.java	(working copy)
@@ -3,16 +3,16 @@
 import org.sigmah.client.EventBus;
 import org.sigmah.client.SigmahInjector;
 import org.sigmah.client.dispatch.Dispatcher;
+import org.sigmah.client.dispatch.remote.Authentication;
+import org.sigmah.client.i18n.I18N;
 import org.sigmah.client.page.admin.AdminPageState;
 import org.sigmah.client.page.admin.AdminSubPresenter;
+import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
+import org.sigmah.shared.dto.profile.ProfileUtils;
 
-import com.extjs.gxt.ui.client.Style.LayoutRegion;
-import com.extjs.gxt.ui.client.util.Margins;
 import com.extjs.gxt.ui.client.widget.Component;
 import com.extjs.gxt.ui.client.widget.ContentPanel;
-import com.extjs.gxt.ui.client.widget.LayoutContainer;
-import com.extjs.gxt.ui.client.widget.layout.HBoxLayout;
-import com.extjs.gxt.ui.client.widget.layout.HBoxLayoutData;
+import com.google.gwt.user.client.ui.HTML;
 import com.google.inject.Inject;
 
 /**
@@ -44,10 +44,12 @@
     private View view;
     private AdminPageState currentState;
     private AdminManagementSubPresenter[] subPresenters;
+	private Authentication authentication;
 
     @Inject
     public AdminManagementPresenter(final Dispatcher dispatcher, View view, final EventBus eventBus, final SigmahInjector injector) {
         this.view = view;
+        this.authentication = injector.getAuthentication();
 
         subPresenters = new AdminManagementSubPresenter[] {
                                                            injector.getAdminCoreManagementPresenter(),
@@ -70,6 +72,13 @@
 
     @Override
     public Component getView() {
+		if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_SETTINGS)) {
+			ContentPanel insufficientView = new ContentPanel();
+			final HTML insufficient = new HTML(I18N.CONSTANTS.permManageSettingsInsufficient());
+			insufficient.addStyleName(&quot;important-label&quot;);
+			insufficientView.add(insufficient);
+			return insufficientView;
+		}
         return view;
     }
 
Index: src/main/java/org/sigmah/client/page/project/ProjectPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/ProjectPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/ProjectPresenter.java	(working copy)
@@ -180,7 +180,7 @@
 				MAIN_TABS.add(I18N.CONSTANTS.projectTabIndicators());
 				MAIN_TABS.add(I18N.CONSTANTS.projectTabDataEntry());
 			}
-			if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_AGENDA))
+			if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_PROJECT_AGENDA))
 				MAIN_TABS.add(I18N.CONSTANTS.projectTabCalendar());
 			MAIN_TABS.add(I18N.CONSTANTS.projectTabReports());
 		}
@@ -203,7 +203,7 @@
 			this.presenters.add(projectIndicators);
 			this.presenters.add(pivot);
 		}
-		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_AGENDA))
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_PROJECT_AGENDA))
 			this.presenters.add(new ProjectCalendarPresenter(dispatcher, authentication, this));
 		this.presenters.add(new ProjectReportsPresenter(authentication, dispatcher, eventBus, this));
 
@@ -757,7 +757,7 @@
 
 		amendmentBox.add(amendmentListContainer, new VBoxLayoutData(0, 0, 3, 0));
 
-		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.LOCK_PROJECT_CORE)) {
 
 			// Displaying the available actions
 			final Amendment.Action[] actions;
Index: src/main/java/org/sigmah/client/page/admin/model/orgunit/AdminOrgUnitModelsPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/orgunit/AdminOrgUnitModelsPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/orgunit/AdminOrgUnitModelsPresenter.java	(working copy)
@@ -5,18 +5,22 @@
 import org.sigmah.client.dispatch.Dispatcher;
 import org.sigmah.client.dispatch.monitor.MaskingAsyncMonitor;
 import org.sigmah.client.dispatch.remote.Authentication;
+import org.sigmah.client.i18n.I18N;
 import org.sigmah.client.page.admin.AdminPageState;
 import org.sigmah.client.page.admin.AdminSubPresenter;
 import org.sigmah.client.page.admin.AdminUtil;
 import org.sigmah.shared.command.GetOrgUnitModels;
 import org.sigmah.shared.command.result.OrgUnitModelListResult;
+import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
 import org.sigmah.shared.dto.OrgUnitModelDTO;
+import org.sigmah.shared.dto.profile.ProfileUtils;
 
 import com.extjs.gxt.ui.client.store.ListStore;
 import com.extjs.gxt.ui.client.widget.Component;
 import com.extjs.gxt.ui.client.widget.ContentPanel;
 import com.extjs.gxt.ui.client.widget.grid.Grid;
 import com.google.gwt.user.client.rpc.AsyncCallback;
+import com.google.gwt.user.client.ui.HTML;
 import com.google.inject.ImplementedBy;
 import com.google.inject.Inject;
 
@@ -26,6 +30,7 @@
     private static boolean alert = false;
     private final Dispatcher dispatcher;
     private AdminPageState currentState;
+	private Authentication authentication;
     private int modelId = -1;
 
     @ImplementedBy(AdminOrgUnitModelsView.class)
@@ -52,6 +57,7 @@
         this.dispatcher = dispatcher;
         // this.authentication = authentication;
         this.view = new AdminOrgUnitModelsView(dispatcher, cache, eventBus);
+        this.authentication = authentication;
     }
 
     public static void refreshOrgUnitModelsPanel(Dispatcher dispatcher, final View view) {
@@ -77,6 +83,14 @@
 
     @Override
     public Component getView() {
+		if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_ORG_UNIT_MODELS)) {
+			ContentPanel insufficientView = new ContentPanel();
+			final HTML insufficient = new HTML(I18N.CONSTANTS.permManageOrgUnitModelsInsufficient());
+			insufficient.addStyleName(&quot;important-label&quot;);
+			insufficientView.add(insufficient);
+			return insufficientView;
+		}
+		
         refreshOrgUnitModelsPanel(dispatcher, view);
         if (currentState != null) {
             final Integer mod = currentState.getModel();
Index: src/main/java/org/sigmah/client/page/admin/orgunit/AdminOrgUnitPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/orgunit/AdminOrgUnitPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/orgunit/AdminOrgUnitPresenter.java	(working copy)
@@ -10,7 +10,9 @@
 import org.sigmah.client.util.Notification;
 import org.sigmah.shared.command.RemoveOrgUnit;
 import org.sigmah.shared.command.result.VoidResult;
+import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
 import org.sigmah.shared.dto.OrgUnitDTOLight;
+import org.sigmah.shared.dto.profile.ProfileUtils;
 import org.sigmah.shared.exception.RemoveException;
 
 import com.extjs.gxt.ui.client.event.BaseEvent;
@@ -29,13 +31,14 @@
 import com.extjs.gxt.ui.client.widget.treegrid.TreeGrid;
 import com.google.gwt.user.client.Timer;
 import com.google.gwt.user.client.rpc.AsyncCallback;
+import com.google.gwt.user.client.ui.HTML;
 
 public class AdminOrgUnitPresenter implements AdminSubPresenter {
-
     private final View view;
     @SuppressWarnings(&quot;unused&quot;)
     private final Dispatcher dispatcher;
     private final UserLocalCache cache;
+	private Authentication authentication;
 
     public static abstract class View extends ContentPanel {
 
@@ -57,6 +60,7 @@
         this.view = new AdminOrgUnitView(eventBus);
         this.dispatcher = dispatcher;
         this.cache = cache;
+        this.authentication = authentication;
 
         // Add.
         view.getAddButton().addListener(Events.OnClick, new Listener&lt;ButtonEvent&gt;() {
@@ -219,6 +223,13 @@
 
     @Override
     public Component getView() {
+		if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_ORG_UNITS)) {
+			ContentPanel insufficientView = new ContentPanel();
+			final HTML insufficient = new HTML(I18N.CONSTANTS.permManageOrgUnitsInsufficient());
+			insufficient.addStyleName(&quot;important-label&quot;);
+			insufficientView.add(insufficient);
+			return insufficientView;
+		}
 
         view.getAddButton().setEnabled(false);
         view.getMoveButton().setEnabled(false);
Index: src/main/java/org/sigmah/client/page/admin/importation/AdminImportPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/importation/AdminImportPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/importation/AdminImportPresenter.java	(working copy)
@@ -4,6 +4,8 @@
 
 import org.sigmah.client.dispatch.Dispatcher;
 import org.sigmah.client.dispatch.monitor.MaskingAsyncMonitor;
+import org.sigmah.client.dispatch.remote.Authentication;
+import org.sigmah.client.i18n.I18N;
 import org.sigmah.client.page.admin.AdminPageState;
 import org.sigmah.client.page.admin.AdminSubPresenter;
 import org.sigmah.client.page.admin.AdminUtil;
@@ -11,8 +13,10 @@
 import org.sigmah.client.page.common.toolbar.UIActions;
 import org.sigmah.shared.command.GetImportationSchemes;
 import org.sigmah.shared.command.result.ImportationSchemeListResult;
+import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
 import org.sigmah.shared.dto.importation.ImportationSchemeDTO;
 import org.sigmah.shared.dto.importation.VariableDTO;
+import org.sigmah.shared.dto.profile.ProfileUtils;
 
 import com.extjs.gxt.ui.client.event.BaseEvent;
 import com.extjs.gxt.ui.client.event.ButtonEvent;
@@ -24,11 +28,13 @@
 import com.extjs.gxt.ui.client.widget.button.Button;
 import com.extjs.gxt.ui.client.widget.grid.Grid;
 import com.google.gwt.user.client.rpc.AsyncCallback;
+import com.google.gwt.user.client.ui.HTML;
 import com.google.inject.ImplementedBy;
 
 public class AdminImportPresenter implements AdminSubPresenter {
 	private final View view;
 	private final Dispatcher dispatcher;
+	private final Authentication authentication;
 
 	@ImplementedBy(AdminImportView.class)
 	public static abstract class View extends ContentPanel {
@@ -71,14 +77,24 @@
 
 	}
 
-	public AdminImportPresenter(Dispatcher dispatcher) {
+	public AdminImportPresenter(Dispatcher dispatcher, Authentication authentication) {
 		this.view = new AdminImportView(dispatcher);
-		addListeners();
 		this.dispatcher = dispatcher;
+		this.authentication = authentication;
+		
+		addListeners();
 	}
 
 	@Override
 	public Component getView() {
+		if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_IMPORTATION_SCHEMES)) {
+			ContentPanel insufficientView = new ContentPanel();
+			final HTML insufficient = new HTML(I18N.CONSTANTS.permManageImportSchemesInsufficient());
+			insufficient.addStyleName(&quot;important-label&quot;);
+			insufficientView.add(insufficient);
+			return insufficientView;
+		}
+		
 		dispatcher.execute(new GetImportationSchemes(), view.getSchemesLoadingMonitor() , new AsyncCallback&lt;ImportationSchemeListResult&gt;() {
 
 			@Override
Index: src/main/java/org/sigmah/client/page/admin/category/AdminCategoryPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/category/AdminCategoryPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/category/AdminCategoryPresenter.java	(working copy)
@@ -5,6 +5,7 @@
 
 import org.sigmah.client.dispatch.Dispatcher;
 import org.sigmah.client.dispatch.monitor.MaskingAsyncMonitor;
+import org.sigmah.client.dispatch.remote.Authentication;
 import org.sigmah.client.i18n.I18N;
 import org.sigmah.client.page.admin.AdminPageState;
 import org.sigmah.client.page.admin.AdminUtil;
@@ -17,11 +18,13 @@
 import org.sigmah.shared.command.result.CategoriesListResult;
 import org.sigmah.shared.command.result.ProjectModelListResult;
 import org.sigmah.shared.command.result.VoidResult;
+import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
 import org.sigmah.shared.dto.ProjectModelDTO;
 import org.sigmah.shared.dto.category.CategoryElementDTO;
 import org.sigmah.shared.dto.category.CategoryTypeDTO;
 import org.sigmah.shared.dto.element.FlexibleElementDTO;
 import org.sigmah.shared.dto.element.QuestionElementDTO;
+import org.sigmah.shared.dto.profile.ProfileUtils;
 
 import com.extjs.gxt.ui.client.Style.Scroll;
 import com.extjs.gxt.ui.client.event.ButtonEvent;
@@ -35,6 +38,7 @@
 import com.extjs.gxt.ui.client.widget.button.Button;
 import com.extjs.gxt.ui.client.widget.grid.Grid;
 import com.google.gwt.user.client.rpc.AsyncCallback;
+import com.google.gwt.user.client.ui.HTML;
 
 public class AdminCategoryPresenter implements AdminModelSubPresenter {
 
@@ -43,6 +47,7 @@
     private final View view;
     private final Dispatcher dispatcher;
     private ProjectModelDTO projectModel;
+	private Authentication authentication;
 
     public static abstract class View extends ContentPanel {
 
@@ -65,9 +70,10 @@
         public abstract CategoryTypeDTO getCurrentCategoryType();
     }
 
-    public AdminCategoryPresenter(Dispatcher dispatcher) {
+    public AdminCategoryPresenter(Dispatcher dispatcher, Authentication authentication) {
         this.view = new AdminCategoryView(dispatcher);
         this.dispatcher = dispatcher;
+        this.authentication = authentication;
         // Add listeners
         addDeletionListeners();
 
@@ -75,6 +81,13 @@
 
     @Override
     public Component getView() {
+		if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_CATEGORIES)) {
+			ContentPanel insufficientView = new ContentPanel();
+			final HTML insufficient = new HTML(I18N.CONSTANTS.permManageCategoriesInsufficient());
+			insufficient.addStyleName(&quot;important-label&quot;);
+			insufficientView.add(insufficient);
+			return insufficientView;
+		}
 
         dispatcher.execute(new GetCategories(), null, new AsyncCallback&lt;CategoriesListResult&gt;() {
 
Index: src/main/java/org/sigmah/client/page/project/dashboard/ProjectDashboardView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/dashboard/ProjectDashboardView.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/dashboard/ProjectDashboardView.java	(working copy)
@@ -455,13 +455,13 @@
 		final ToolBar toolbar = new ToolBar();
 		toolbar.add(title);
 
-		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.RELATE_PROJECT)) {
 			toolbar.add(new SeparatorToolItem());
 			toolbar.add(addFinancialProjectButton);
 		}
 
 		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.CREATE_PROJECT,
-		                GlobalPermissionEnum.EDIT_PROJECT)) {
+		                GlobalPermissionEnum.RELATE_PROJECT)) {
 			toolbar.add(new SeparatorToolItem());
 			toolbar.add(createFinancialProjectButton);
 		}
@@ -518,13 +518,13 @@
 		final ToolBar toolbar = new ToolBar();
 		toolbar.add(title);
 
-		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.RELATE_PROJECT)) {
 			toolbar.add(new SeparatorToolItem());
 			toolbar.add(addLocalPartnerProjectButton);
 		}
 
 		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.CREATE_PROJECT,
-		                GlobalPermissionEnum.EDIT_PROJECT)) {
+		                GlobalPermissionEnum.RELATE_PROJECT)) {
 			toolbar.add(new SeparatorToolItem());
 			toolbar.add(createLocalPartnerProjectButton);
 		}
@@ -778,9 +778,8 @@
 		remindersGrid.getView().setForceFit(true);
 		remindersGrid.setBorders(false);
 
-		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)
-		                &amp;&amp; (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS) || ProfileUtils
-		                                .isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDERS))) {
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS) || ProfileUtils
+		                                .isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDERS)) {
 			remindersGrid.addPlugin((CheckColumnConfig) remindersGrid.getColumnModel().getColumn(0));
 		}
 		remindersGrid.setAutoExpandColumn(&quot;label&quot;);
@@ -845,9 +844,8 @@
 		final ToolBar toolbar = new ToolBar();
 		toolbar.setAlignment(HorizontalAlignment.LEFT);
 
-		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)
-		                &amp;&amp; (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS) || ProfileUtils
-		                                .isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDERS))) {
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS) || ProfileUtils
+		                                .isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDERS)) {
 			toolbar.add(addReminderButton);
 		}
 		toolbar.add(filterButton);
@@ -1030,9 +1028,8 @@
 		final ToolBar toolbar = new ToolBar();
 		toolbar.setAlignment(HorizontalAlignment.LEFT);
 
-		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)
-		                &amp;&amp; (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS) || ProfileUtils
-		                                .isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDERS))) {
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS) || ProfileUtils
+		                                .isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDERS)) {
 			toolbar.add(addMonitoredPointButton);
 		}
 		toolbar.add(filterButton);
@@ -1196,7 +1193,7 @@
 						creator = (authentication.getUserId() == hist.getUserId() ? true : false);
 				}
 
-				if (creator &amp;&amp; ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDERS)
+				if ((creator &amp;&amp; ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDERS))
 				                || ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS)) {
 					Boolean v = model.get(property);
 					String on = (v != null &amp;&amp; v) ? &quot;-on&quot; : &quot;&quot;;
@@ -1238,9 +1235,8 @@
 		labelColumn.setId(&quot;label&quot;);
 		labelColumn.setHeader(I18N.CONSTANTS.monitoredPointLabel());
 		labelColumn.setWidth(60);
-		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)
-		                &amp;&amp; (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS) || ProfileUtils
-		                                .isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDERS))) {
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS) || ProfileUtils
+		                                .isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDERS)) {
 			labelColumn.setRenderer(new MonitoredPointLabelCellRender(this, this.dispatcher, authentication));
 		}
 
@@ -1354,9 +1350,8 @@
 		labelColumn.setId(&quot;label&quot;);
 		labelColumn.setHeader(I18N.CONSTANTS.monitoredPointLabel());
 		labelColumn.setWidth(60);
-		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)
-		                &amp;&amp; (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS) || ProfileUtils
-		                                .isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDERS))) {
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS) || ProfileUtils
+		                                .isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDERS)) {
 			labelColumn.setRenderer(new ReminderLableCellRenderer(this, this.dispatcher, authentication));
 		}
 
Index: src/main/java/org/sigmah/client/page/orgunit/OrgUnitPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/orgunit/OrgUnitPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/orgunit/OrgUnitPresenter.java	(working copy)
@@ -106,7 +106,7 @@
 			MAIN_TABS.add(I18N.CONSTANTS.orgUnitTabOverview());
 			MAIN_TABS.add(I18N.CONSTANTS.orgUnitTabInformations());
 
-			if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_AGENDA))
+			if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_ORG_UNIT_AGENDA))
 				MAIN_TABS.add(I18N.CONSTANTS.projectTabCalendar());
 			MAIN_TABS.add(I18N.CONSTANTS.projectTabReports());
 		}
@@ -114,7 +114,7 @@
 		presenters.add(new OrgUnitDashboardPresenter(dispatcher, eventBus, authentication, this));
 		presenters.add(new OrgUnitDetailsPresenter(dispatcher, authentication, this, cache, eventBus));
 
-		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_AGENDA))
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_ORG_UNIT_AGENDA))
 			presenters.add(new OrgUnitCalendarPresenter(dispatcher, authentication, this));
 		presenters.add(new OrgUnitReportsPresenter(authentication, dispatcher, eventBus, this));
 
Index: src/main/java/org/sigmah/client/page/project/calendar/ProjectCalendarView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/calendar/ProjectCalendarView.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/calendar/ProjectCalendarView.java	(working copy)
@@ -231,8 +231,7 @@
 			}
 		});
 
-		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)
-						&amp;&amp; ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_AGENDA)) {
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT_AGENDA)) {
 			toolbar.add(addEventButton);
 		}
 
Index: src/main/java/org/sigmah/client/i18n/UIConstants_en.properties
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/i18n/UIConstants_en.properties	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/i18n/UIConstants_en.properties	(working copy)
@@ -16,7 +16,7 @@
 CHANGE_PHASE=Change phase
 CREATE_PROJECT=Create project
 DRAFT=Draft
-EDIT_PROJECT=Edit project
+EDIT_PROJECT=Edit project fields content
 DELETE_PROJECT=Delete project
 MANAGE_UNIT=Edit organisational units
 MANAGE_USER=Manage users
@@ -1079,7 +1079,7 @@
 adminPhaseModelDeleteDetail=The phase model has been deleted.
 deleteRootPhaseModelConfirm=Warning: This is the last phase of this project model. All fields using this phase will also be deleted. The projects using this project model may not work any more. Are you sure you want to delete it?
 deleteRootPhaseModelError=You can not delete this phase because it is the initial phase.
-VALIDER_AMENDEMENT=Validate amendment
+VALIDER_AMENDEMENT=Validate project core version
 adminFlexibleDeleteFlexibleElementsConfirm=The selected fields have been successfully deleted.
 changeOrgUnit=Change organisational unit
 changeOrgUnitDetails=Warning: The project will remain attached to the current country for indicators' sites management, not the country linked to the new organisational unit. Are you sure to continue ?
Index: src/main/java/org/sigmah/client/page/orgunit/details/OrgUnitDetailsPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/orgunit/details/OrgUnitDetailsPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/orgunit/details/OrgUnitDetailsPresenter.java	(working copy)
@@ -218,7 +218,7 @@
         final LayoutDTO layout = details.getLayout();
 
      // If the user has the right to modify the element
-        final boolean enabled = ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_UNIT);
+        final boolean enabled = ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ORG_UNIT);
         
         // Counts elements.
         int count = 0;
Index: src/main/java/org/sigmah/client/page/admin/AdminPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/AdminPresenter.java	(revision 1581)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/AdminPresenter.java	(working copy)
@@ -88,8 +88,8 @@
 		                new AdminOrgUnitPresenter(dispatcher, cache, authentication, eventBus),
 		                new AdminProjectModelsPresenter(dispatcher, cache, authentication, eventBus, currentState),
 		                new AdminOrgUnitModelsPresenter(dispatcher, cache, authentication, eventBus, currentState),
-		                new AdminReportModelPresenter(dispatcher), new AdminCategoryPresenter(dispatcher),
-		                new AdminImportPresenter(dispatcher), injector.getAdminManagementPresenter() };
+		                new AdminReportModelPresenter(dispatcher, authentication), new AdminCategoryPresenter(dispatcher, authentication),
+		                new AdminImportPresenter(dispatcher, authentication), injector.getAdminManagementPresenter() };
 		this.authentication = authentication;
 		for (int i = 0; i &lt; MAIN_TABS.length; i++) {
 			final int index = i;
Index: src/main/java/org/sigmah/client/page/dashboard/DashboardView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/dashboard/DashboardView.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/dashboard/DashboardView.java	(working copy)
@@ -244,7 +244,7 @@
 			                });
 		}
 
-		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_ADMIN)) {
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.CREATE_TEST_PROJECT)) {
 			addNavLink(eventBus, menuPanel, I18N.CONSTANTS.createTestProject(), IconImageBundle.ICONS.add(),
 			                new Listener&lt;ButtonEvent&gt;() {
 
Index: src/main/java/org/sigmah/client/ui/CalendarWidget.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/ui/CalendarWidget.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/ui/CalendarWidget.java	(working copy)
@@ -9,13 +9,10 @@
 import java.util.Map;
 import java.util.TreeSet;
 
-import org.sigmah.client.dispatch.remote.Authentication;
 import org.sigmah.client.i18n.I18N;
 import org.sigmah.shared.domain.calendar.ActivityCalendarIdentifier;
 import org.sigmah.shared.domain.calendar.Calendar;
 import org.sigmah.shared.domain.calendar.Event;
-import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
-import org.sigmah.shared.dto.profile.ProfileUtils;
 
 import com.google.gwt.dom.client.Element;
 import com.google.gwt.event.dom.client.ClickEvent;
@@ -199,14 +196,12 @@
 
 	private CalendarListener listener;
 	private Delegate delegate;
-
-	private final Authentication authentication;
+	private boolean editable = false;
 
-	public CalendarWidget(int displayHeaders, boolean displayWeekNumber, Authentication authentication) {
+	public CalendarWidget(int displayHeaders, boolean displayWeekNumber) {
 		this.calendars = new ArrayList&lt;Calendar&gt;();
 		this.displayHeaders = displayHeaders;
 		this.displayWeekNumber = displayWeekNumber;
-		this.authentication = authentication;
 
 		// final SimplePanel container;
 
@@ -222,6 +217,14 @@
 
 		today();
 	}
+	
+	public boolean isEditable() {
+		return editable;
+	}
+	
+	public void setEditable(boolean editable) {
+		this.editable = editable;
+	}
 
 	public void setDelegate(Delegate delegate) {
 		this.delegate = delegate;
@@ -715,9 +718,7 @@
 			} else
 				popupContent.setText(2, 0, &quot;&quot;);
 
-			if (event.getParent().isEditable()
-							&amp;&amp; ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT,
-											GlobalPermissionEnum.EDIT_AGENDA)) {
+			if (event.getParent().isEditable() &amp;&amp; isEditable()) {
 				final Anchor editAnchor = new Anchor(I18N.CONSTANTS.calendarEditEvent());
 				editAnchor.addClickHandler(new ClickHandler() {
 					@Override
Index: src/main/java/org/sigmah/client/page/admin/users/form/ProfileSigmahForm.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/users/form/ProfileSigmahForm.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/users/form/ProfileSigmahForm.java	(working copy)
@@ -7,7 +7,6 @@
 
 import java.util.ArrayList;
 import java.util.HashMap;
-import java.util.HashSet;
 import java.util.List;
 import java.util.Map;
 import java.util.Set;
@@ -17,6 +16,7 @@
 import org.sigmah.client.i18n.I18N;
 import org.sigmah.client.i18n.UIConstants;
 import org.sigmah.client.ui.ClickableLabel;
+import org.sigmah.client.ui.PermissionTree;
 import org.sigmah.client.util.Notification;
 import org.sigmah.shared.command.CreateEntity;
 import org.sigmah.shared.command.GetPrivacyGroups;
@@ -28,7 +28,6 @@
 import org.sigmah.shared.dto.profile.PrivacyGroupPermDTO;
 import org.sigmah.shared.dto.profile.ProfileDTO;
 
-import com.extjs.gxt.ui.client.Style.Orientation;
 import com.extjs.gxt.ui.client.event.ButtonEvent;
 import com.extjs.gxt.ui.client.event.Events;
 import com.extjs.gxt.ui.client.event.Listener;
@@ -36,22 +35,23 @@
 import com.extjs.gxt.ui.client.widget.LayoutContainer;
 import com.extjs.gxt.ui.client.widget.MessageBox;
 import com.extjs.gxt.ui.client.widget.button.Button;
+import com.extjs.gxt.ui.client.widget.form.AdapterField;
 import com.extjs.gxt.ui.client.widget.form.CheckBox;
-import com.extjs.gxt.ui.client.widget.form.CheckBoxGroup;
 import com.extjs.gxt.ui.client.widget.form.ComboBox;
 import com.extjs.gxt.ui.client.widget.form.ComboBox.TriggerAction;
 import com.extjs.gxt.ui.client.widget.form.FormPanel;
 import com.extjs.gxt.ui.client.widget.form.LabelField;
 import com.extjs.gxt.ui.client.widget.form.TextField;
-import com.extjs.gxt.ui.client.widget.layout.ColumnData;
-import com.extjs.gxt.ui.client.widget.layout.ColumnLayout;
 import com.extjs.gxt.ui.client.widget.layout.FormData;
 import com.extjs.gxt.ui.client.widget.layout.FormLayout;
 import com.google.gwt.core.client.GWT;
 import com.google.gwt.event.dom.client.ClickEvent;
 import com.google.gwt.event.dom.client.ClickHandler;
+import com.google.gwt.event.logical.shared.AttachEvent;
+import com.google.gwt.event.logical.shared.AttachEvent.Handler;
 import com.google.gwt.user.client.rpc.AsyncCallback;
 import com.google.gwt.user.client.ui.Grid;
+import com.google.gwt.user.client.ui.ScrollPanel;
 
 /**
  * Create profile form.
@@ -63,7 +63,7 @@
 
 	private final TextField&lt;String&gt; nameField;
 	private final ProfileDTO profileToUpdate;
-	private final List&lt;CheckBoxGroup&gt; checkGlobalPermissions;
+	private final PermissionTree permissionTree;
 	private final ComboBox&lt;PrivacyGroupDTO&gt; privacyGroupsListCombo;
 	private final ComboBox&lt;PrivacyGroupPermDTO&gt; privacyGroupsPermissionsListCombo;
 	private final Map&lt;PrivacyGroupDTO, PrivacyGroupPermissionEnum&gt; privacyGroupsPerms = new HashMap&lt;PrivacyGroupDTO, PrivacyGroupPermissionEnum&gt;();
@@ -91,36 +91,17 @@
 		LayoutContainer top = new LayoutContainer();
 		top.setLayout(layoutTop);
 
+		FormLayout layoutMain = new FormLayout();
+		layoutMain.setLabelWidth(LABEL_WIDTH);
+		
 		LayoutContainer main = new LayoutContainer();
-		main.setLayout(new ColumnLayout());
-
-		LayoutContainer left = new LayoutContainer();
-		left.setStyleAttribute(&quot;padding&quot;, &quot;5px 0px 5px 0px&quot;);
-		FormLayout layoutLeft = new FormLayout();
-		layoutLeft.setLabelAlign(LabelAlign.TOP);
-		// left.setStyleAttribute(&quot;margin&quot;, &quot;3px 0px 0px 3px&quot;);
-		// left.setAutoWidth(true);
-		left.setLayout(layoutLeft);
-
-		LayoutContainer middle = new LayoutContainer();
-		middle.setStyleAttribute(&quot;padding&quot;, &quot;5px 0px 5px 0px&quot;);
-		FormLayout layoutMiddle = new FormLayout();
-		layoutMiddle.setLabelAlign(LabelAlign.TOP);
-		// middle.setStyleAttribute(&quot;margin&quot;, &quot;3px 0px 0px 3px&quot;);
-		// middle.setAutoWidth(true);
-		middle.setLayout(layoutMiddle);
-
-		LayoutContainer right = new LayoutContainer();
-		right.setStyleAttribute(&quot;padding&quot;, &quot;5px 0px 5px 0px&quot;);
-		FormLayout layoutRight = new FormLayout();
-		layoutRight.setLabelAlign(LabelAlign.TOP);
-		// right.setStyleAttribute(&quot;margin&quot;, &quot;3px 0px 0px 3px&quot;);
-		// right.setAutoWidth(true);
-		right.setLayout(layoutRight);
+		main.setLayout(layoutMain);
+		main.setAutoWidth(true);
 
-		LayoutContainer bottom = new LayoutContainer();
 		FormLayout layoutBottom = new FormLayout();
 		layoutBottom.setLabelWidth(LABEL_WIDTH);
+		
+		LayoutContainer bottom = new LayoutContainer();
 		bottom.setLayout(layoutBottom);
 
 		nameField = new TextField&lt;String&gt;();
@@ -136,92 +117,27 @@
 		 * *******************************************
 		 */
 
-		checkGlobalPermissions = new ArrayList&lt;CheckBoxGroup&gt;();
-
-		CheckBoxGroup checkGPGroupLabel = new CheckBoxGroup();
-		checkGPGroupLabel.setOrientation(Orientation.VERTICAL);
-		checkGPGroupLabel.setFieldLabel(I18N.CONSTANTS.adminProfilesGlobalPermissions());
-
-		CheckBoxGroup checkGPGroupAdmin = new CheckBoxGroup();
-		checkGPGroupAdmin.setOrientation(Orientation.VERTICAL);
-		checkGPGroupAdmin.setFieldLabel(I18N.CONSTANTS.categoryAdministration());
-		checkGPGroupAdmin.setStyleAttribute(&quot;margin-bottom&quot;, &quot;5px&quot;);
-		checkGPGroupAdmin.setLabelStyle(&quot;font-weight:bold;&quot;);
-
-		CheckBoxGroup checkGPGroupProject = new CheckBoxGroup();
-		checkGPGroupProject.setOrientation(Orientation.VERTICAL);
-		checkGPGroupProject.setFieldLabel(I18N.CONSTANTS.categoryProject());
-		checkGPGroupProject.setLabelStyle(&quot;font-weight:bold;&quot;);
-
-		CheckBoxGroup checkGPGroupOthers = new CheckBoxGroup();
-		checkGPGroupOthers.setOrientation(Orientation.VERTICAL);
-		checkGPGroupOthers.setFieldLabel(I18N.CONSTANTS.categoryOthers());
-		checkGPGroupOthers.setLabelStyle(&quot;font-weight:bold;&quot;);
-
-		CheckBoxGroup checkGPGroupNotMapped = new CheckBoxGroup();
-		checkGPGroupNotMapped.setOrientation(Orientation.VERTICAL);
-		checkGPGroupNotMapped.setFieldLabel(I18N.CONSTANTS.categoryNotMapped());
-		checkGPGroupNotMapped.setLabelStyle(&quot;font-weight:bold;&quot;);
-
-		boolean notMappedEmpty = true;
-
-		String label = &quot;&quot;;
-		for (GlobalPermissionEnum enumItem : GlobalPermissionEnum.values()) {
-			label = GlobalPermissionEnum.getName(enumItem);
-			CheckBox box = createCheckBox(enumItem.toString(), label);
-			if (profileToUpdate != null &amp;&amp; profileToUpdate.getGlobalPermissions() != null
-			                &amp;&amp; profileToUpdate.getGlobalPermissions().contains(enumItem)) {
-				box.setValue(true);
-			}
-			if (GlobalPermissionEnum.getCategory(enumItem).equals(I18N.CONSTANTS.categoryAdministration())) {
-				checkGPGroupAdmin.add(box);
-				continue;
-			}
+		permissionTree = new PermissionTree();
+		permissionTree.expandAll();
 
-			if (GlobalPermissionEnum.getCategory(enumItem).equals(I18N.CONSTANTS.categoryProject())) {
-				checkGPGroupProject.add(box);
-				continue;
-			}
-			if (GlobalPermissionEnum.getCategory(enumItem).equals(I18N.CONSTANTS.categoryOthers())) {
-				checkGPGroupOthers.add(box);
-				continue;
-			}
-			if (GlobalPermissionEnum.getCategory(enumItem).equals(I18N.CONSTANTS.categoryNotMapped())) {
-				checkGPGroupNotMapped.add(box);
-				notMappedEmpty = false;
-				continue;
-			}
-		}
-		checkGlobalPermissions.add(checkGPGroupAdmin);
-		checkGlobalPermissions.add(checkGPGroupProject);
-		checkGlobalPermissions.add(checkGPGroupOthers);
-		if (!notMappedEmpty)
-			checkGlobalPermissions.add(checkGPGroupNotMapped);
-		// left.add(new Label(I18N.CONSTANTS.categoryProject()));
-
-		left.add(checkGPGroupLabel);
-
-		middle.add(checkGPGroupProject);
-
-		// right.add(new Label(I18N.CONSTANTS.categoryAdministration()));
-		right.add(checkGPGroupAdmin);
-
-		// right.add(new Label(I18N.CONSTANTS.categoryOthers()));
-		right.add(checkGPGroupOthers);
-
-		if (!notMappedEmpty) {
-			// right.add(new Label(I18N.CONSTANTS.categoryNotMapped()));
-			checkGPGroupOthers.setStyleAttribute(&quot;margin-bottom&quot;, &quot;5px&quot;);
-			right.add(checkGPGroupNotMapped);
+		if (profileToUpdate != null &amp;&amp; profileToUpdate.getGlobalPermissions() != null) {
+			permissionTree.setPermissions(profileToUpdate.getGlobalPermissions());
 		}
-
-		// main.add(left, new ColumnData(.333));
-		// main.add(middle, new ColumnData(.333));
-		// main.add(right, new ColumnData(.333));
-
-		main.add(left, new ColumnData(.20));
-		main.add(middle, new ColumnData(.30));
-		main.add(right, new ColumnData(.30));
+		
+		final ScrollPanel sp = new ScrollPanel();
+		sp.setWidget(permissionTree);
+		sp.addAttachHandler(new Handler() {
+			@Override
+			public void onAttachOrDetach(AttachEvent event) {
+				sp.setWidth(&quot;400px&quot;);
+			}
+		});
+		sp.setHeight(&quot;400px&quot;);
+		
+		AdapterField globalPermissionsField = new AdapterField(sp);
+		globalPermissionsField.setAutoWidth(false);
+		globalPermissionsField.setFieldLabel(I18N.CONSTANTS.adminProfilesGlobalPermissions());
+		main.add(globalPermissionsField);
 
 		/*
 		 * ************************************Privacy Groups
@@ -419,13 +335,7 @@
 		profileToSave.setName(name);
 
 		// global permissions
-		final Set&lt;GlobalPermissionEnum&gt; globalPerms = new HashSet&lt;GlobalPermissionEnum&gt;();
-		for (CheckBoxGroup checkGPGroup : checkGlobalPermissions) {
-			List&lt;CheckBox&gt; checkedGlobalPermissions = checkGPGroup.getValues();
-			for (CheckBox checkedGlobalPermission : checkedGlobalPermissions) {
-				globalPerms.add(GlobalPermissionEnum.valueOf(checkedGlobalPermission.getName()));
-			}
-		}
+		final Set&lt;GlobalPermissionEnum&gt; globalPerms = permissionTree.getPermissions();
 		profileToSave.setGlobalPermissions(globalPerms);
 		profileToSave.setPrivacyGroups(privacyGroupsPerms);
 		newProfileProperties.put(&quot;profile&quot;, profileToSave);
@@ -468,5 +378,4 @@
 		});
 
 	}
-
 }
Index: src/main/java/org/sigmah/client/page/project/logframe/ProjectLogFramePresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/logframe/ProjectLogFramePresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/logframe/ProjectLogFramePresenter.java	(working copy)
@@ -321,7 +321,6 @@
 	private boolean isEditable() {
 		return logFrame != null &amp;&amp; currentProjectDTO.getAmendmentState() == Amendment.State.DRAFT
 		                &amp;&amp; currentProjectDTO.getCurrentAmendment() == null
-		                &amp;&amp; ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)
 		                &amp;&amp; ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_LOGFRAME);
 	}
 
Index: src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java	(working copy)
@@ -1,5 +1,8 @@
 package org.sigmah.shared.domain.profile;
 
+import java.util.LinkedList;
+import java.util.List;
+
 import org.sigmah.client.i18n.I18N;
 
 /**
@@ -9,133 +12,296 @@
  * 
  */
 public enum GlobalPermissionEnum {
-
+	/*
+	 * Project-related permissions. 
+	 */
+	
 	/**
 	 * View the projects list and the project page.
 	 */
-	VIEW_PROJECT,
+	VIEW_PROJECT(GlobalPermissionCategoryEnum.PROJECT),
 
 	/**
-	 * Edit and save the project details, the project phases, the project
-	 * funding, the log frame and the calendar.
+	 * Create a new project or a new funding.
 	 */
-	EDIT_PROJECT,
+	CREATE_PROJECT(GlobalPermissionCategoryEnum.PROJECT),
 
 	/**
-	 * Create a new project or a new funding.
+	 * Create a new test project.
 	 */
-	CREATE_PROJECT,
+	CREATE_TEST_PROJECT(GlobalPermissionCategoryEnum.PROJECT),
+
+	/**
+	 * Edit and save the project content (details, project phases, project
+	 * funding and the log frame).
+	 */
+	EDIT_PROJECT(VIEW_PROJECT),
+	
+	/**
+	 * Remove a file (in the files list flexible element of projects).
+	 */
+	REMOVE_PROJECT_FILE(VIEW_PROJECT),
 
 	/**
 	 * Delete a project
 	 */
-	DELETE_PROJECT,
+	DELETE_PROJECT(VIEW_PROJECT),
 
 	/**
 	 * Close or activate a phase.
 	 */
-	CHANGE_PHASE,
+	CHANGE_PHASE(VIEW_PROJECT),
 
 	/**
-	 * View the admin link.
+	 * Lock the project core.
 	 */
-	VIEW_ADMIN,
+	LOCK_PROJECT_CORE(VIEW_PROJECT),
 
 	/**
-	 * View the admin page to manage users.
+	 * Validate the project core version.
 	 */
-	MANAGE_USER,
+	VALID_AMENDEMENT(LOCK_PROJECT_CORE),
 
 	/**
-	 * View the admin page to manage the org units.
+	 * View the logframe sub-tab
 	 */
-	MANAGE_UNIT,
+	VIEW_LOGFRAME(VIEW_PROJECT),
 
 	/**
-	 * Remove a file (in the files list flexible element).
+	 * For creating/modifying/deleting objectives, expected results, activities,
+	 * hypothesis or linking/unlinking indicators to the logframe.
 	 */
-	REMOVE_FILE,
+	EDIT_LOGFRAME(VIEW_LOGFRAME),
 
 	/**
-	 * View the ActivityInfo menu.
+	 * For viewing the agenda sub-tab of projects.
 	 */
-	// Removes temporarily the permission to avoid viewing non functional
-	// screens
-	// VIEW_ACTIVITYINFO,
+	VIEW_PROJECT_AGENDA(VIEW_PROJECT),
+
+	/**
+	 * For creating/deleting/modifying events in the agenda of projects.
+	 */
+	EDIT_PROJECT_AGENDA(VIEW_PROJECT_AGENDA),
+
+	/**
+	 * For creating/deleting/modifying/closing reminders created by the user.
+	 */
+	EDIT_OWN_REMINDERS(VIEW_PROJECT),
+
+	/**
+	 * For creating/deleting/modifying/closing reminders created by the user or by other users.
+	 */
+	EDIT_ALL_REMINDERS(EDIT_OWN_REMINDERS),
+
+	/**
+	 * For viewing the two indicator sub-tabs.
+	 */
+	VIEW_INDICATOR(VIEW_PROJECT),
 
 	/**
-	 * Validate the amendement.
+	 * For creating/deleting/modifying indicator definitions.
 	 */
-	VALID_AMENDEMENT,
+	MANAGE_INDICATOR(VIEW_INDICATOR),
 
 	/**
-	 * for viewing the logframe sub-tab
+	 * For editing values of existing indicators.
 	 */
-	VIEW_LOGFRAME,
+	EDIT_INDICATOR(VIEW_INDICATOR),
 
 	/**
-	 * for creating/modifying/deleting objectives, expected results, activities,
-	 * hypothesis or linking/unlinking indicators to the logframe
+	 * Show global export button in projects list.
 	 */
-	EDIT_LOGFRAME,
+	GLOBAL_EXPORT(VIEW_PROJECT),
 
 	/**
-	 * for viewing the agenda sub-tab
+	 * For relating projects.
 	 */
-	VIEW_AGENDA,
+	RELATE_PROJECT(VIEW_PROJECT),
 
+	/*
+	 * Org unit-related permissions. 
+	 */
+	
+	/**
+	 * Edit and save the org. unit content.
+	 */
+	EDIT_ORG_UNIT(GlobalPermissionCategoryEnum.ORG_UNIT),
+	
 	/**
-	 * 
-	 * for creating/deleting/modifying events in the agenda
+	 * Remove a file (in the files list flexible element of org. units).
 	 */
-	EDIT_AGENDA,
+	REMOVE_ORG_UNIT_FILE(GlobalPermissionCategoryEnum.ORG_UNIT),
 
 	/**
-	 * 
-	 * for creating/deleting/modifying/closing reminders created by the user
+	 * For viewing the agenda sub-tab of org. units.
+	 */
+	VIEW_ORG_UNIT_AGENDA(GlobalPermissionCategoryEnum.ORG_UNIT),
+	
+	/**
+	 * For creating/deleting/modifying events in the agenda of org. units.
+	 */
+	EDIT_ORG_UNIT_AGENDA(VIEW_ORG_UNIT_AGENDA),
+
+	/*
+	 * Administration-related permissions. 
+	 */
+	
+	/**
+	 * View the administration page.
+	 */
+	VIEW_ADMIN(GlobalPermissionCategoryEnum.ADMIN),
+
+	/**
+	 * View the admin page to manage users.
 	 */
+	MANAGE_USERS(VIEW_ADMIN),
 
-	EDIT_OWN_REMINDERS,
+	/**
+	 * View the admin page to manage the org. units.
+	 */
+	MANAGE_ORG_UNITS(VIEW_ADMIN),
 
 	/**
-	 * 
-	 * for creating/deleting/modifying/closing reminders created by the user or
-	 * by other users
+	 * View the admin page to manage project models.
 	 */
+	MANAGE_PROJECT_MODELS(VIEW_ADMIN),
 
-	EDIT_ALL_REMINDERS,
+	/**
+	 * View the admin page to manage org. unit models.
+	 */
+	MANAGE_ORG_UNIT_MODELS(VIEW_ADMIN),
 
 	/**
-	 * for viewing the two indicator sub-tabs
+	 * View the admin page to manage report models.
 	 */
-	VIEW_INDICATOR,
+	MANAGE_REPORT_MODELS(VIEW_ADMIN),
 
 	/**
-	 * for creating/deleting/modifying indicator definitions
+	 * View the admin page to manage categories.
 	 */
-	MANAGE_INDICATOR,
+	MANAGE_CATEGORIES(VIEW_ADMIN),
 
 	/**
-	 * for editing values of existing indicators
+	 * View the admin page to manage importation schemes.
 	 */
-	EDIT_INDICATOR,
+	MANAGE_IMPORTATION_SCHEMES(VIEW_ADMIN),
 
 	/**
-	 * Show global export button in projects list
+	 * View the admin page to manage system settings.
 	 */
-	GLOBAL_EXPORT;
+	MANAGE_SETTINGS(VIEW_ADMIN);
+
+	/*
+	 * Others. 
+	 */
+
+	//	/**
+	//	 * View the ActivityInfo menu.
+	//	 */
+	// Removes temporarily the permission to avoid viewing non functional
+	// screens
+	// VIEW_ACTIVITYINFO,
+	
+	public enum GlobalPermissionCategoryEnum {
+		PROJECT,
+		ORG_UNIT,
+		ADMIN,
+		OTHERS;
+	
+		public static String getName(GlobalPermissionCategoryEnum category) {
+			String name = I18N.CONSTANTS.categoryNotMapped();
+			switch (category) {
+			case PROJECT:
+				name = I18N.CONSTANTS.categoryProject();
+				break;
+			case ORG_UNIT:
+				name = I18N.CONSTANTS.categoryOrgUnit();
+				break;
+			case ADMIN:
+				name = I18N.CONSTANTS.categoryAdministration();
+				break;
+			case OTHERS:
+				name = I18N.CONSTANTS.categoryOthers();
+				break;
+			default:
+				break;
+			}
+			return name;
+		}
+
+		public List&lt;GlobalPermissionEnum&gt; getChildren() {
+			List&lt;GlobalPermissionEnum&gt; permissions = new LinkedList&lt;GlobalPermissionEnum&gt;();
+			for (GlobalPermissionEnum permission : GlobalPermissionEnum.values()) {
+				if (permission.getCategory() == this) {
+					permissions.add(permission);
+				}
+			}
+			return permissions;
+		}
+		
+		public boolean isEmpty() {
+			return getChildren().isEmpty();
+		}
+	}
 
+	private GlobalPermissionCategoryEnum category;
+	private GlobalPermissionEnum prerequisite;
+	
+	private GlobalPermissionEnum(GlobalPermissionCategoryEnum category) {
+		this.category = category;
+	}
+	
+	private GlobalPermissionEnum(GlobalPermissionEnum prerequisite) {
+		this.prerequisite = prerequisite;
+	}
+	
+	public GlobalPermissionCategoryEnum getCategory() {
+		return category;
+	}
+	
+	public GlobalPermissionEnum getPrerequisite() {
+		return prerequisite;
+	}
+	
+	public boolean hasDependency() {
+		return getPrerequisite() != null;
+	}
+	
+	public List&lt;GlobalPermissionEnum&gt; getChildren() {
+		List&lt;GlobalPermissionEnum&gt; children = new LinkedList&lt;GlobalPermissionEnum&gt;();
+		for (GlobalPermissionEnum permission : values()) {
+			if (permission != this &amp;&amp; permission.getPrerequisite() == this) {
+				children.add(permission);
+			}
+		}
+		return children;
+	}
+	
+	public boolean isRoot() {
+		return getPrerequisite() == null;
+	}
+	
+	public boolean isLeaf() {
+		return getChildren().isEmpty();
+	}
+	
 	public static String getName(GlobalPermissionEnum gp) {
 		String gpName = &quot;default&quot;;
 		switch (gp) {
+		case CREATE_PROJECT:
+			gpName = I18N.CONSTANTS.CREATE_PROJECT();
+			break;
+		case CREATE_TEST_PROJECT:
+			gpName = I18N.CONSTANTS.CREATE_TEST_PROJECT();
+			break;
 		case VIEW_PROJECT:
 			gpName = I18N.CONSTANTS.VIEW_PROJECT();
 			break;
 		case EDIT_PROJECT:
 			gpName = I18N.CONSTANTS.EDIT_PROJECT();
 			break;
-		case CREATE_PROJECT:
-			gpName = I18N.CONSTANTS.CREATE_PROJECT();
+		case REMOVE_PROJECT_FILE:
+			gpName = I18N.CONSTANTS.REMOVE_PROJECT_FILE();
 			break;
 		case DELETE_PROJECT:
 			gpName = I18N.CONSTANTS.DELETE_PROJECT();
@@ -143,21 +309,9 @@
 		case CHANGE_PHASE:
 			gpName = I18N.CONSTANTS.CHANGE_PHASE();
 			break;
-		case VIEW_ADMIN:
-			gpName = I18N.CONSTANTS.VIEW_ADMIN();
+		case LOCK_PROJECT_CORE:
+			gpName = I18N.CONSTANTS.LOCK_PROJECT_CORE();
 			break;
-		case MANAGE_USER:
-			gpName = I18N.CONSTANTS.MANAGE_USER();
-			break;
-		case MANAGE_UNIT:
-			gpName = I18N.CONSTANTS.MANAGE_UNIT();
-			break;
-		case REMOVE_FILE:
-			gpName = I18N.CONSTANTS.REMOVE_FILE();
-			break;
-		// case VIEW_ACTIVITYINFO:
-		// gpName = I18N.CONSTANTS.VIEW_ACTIVITYINFO();
-		// break;
 		case VALID_AMENDEMENT:
 			gpName = I18N.CONSTANTS.VALIDER_AMENDEMENT();
 			break;
@@ -167,11 +321,11 @@
 		case EDIT_LOGFRAME:
 			gpName = I18N.CONSTANTS.EDIT_LOGFRAME();
 			break;
-		case VIEW_AGENDA:
-			gpName = I18N.CONSTANTS.VIEW_AGENDA();
+		case VIEW_PROJECT_AGENDA:
+			gpName = I18N.CONSTANTS.VIEW_PROJECT_AGENDA();
 			break;
-		case EDIT_AGENDA:
-			gpName = I18N.CONSTANTS.EDIT_AGENDA();
+		case EDIT_PROJECT_AGENDA:
+			gpName = I18N.CONSTANTS.EDIT_PROJECT_AGENDA();
 			break;
 		case EDIT_ALL_REMINDERS:
 			gpName = I18N.CONSTANTS.EDIT_ALL_REMINDERS();
@@ -189,59 +343,57 @@
 			gpName = I18N.CONSTANTS.EDIT_INDICATOR();
 			break;
 		case GLOBAL_EXPORT:
-			gpName = I18N.CONSTANTS.globalExport();
+			gpName = I18N.CONSTANTS.GLOBAL_EXPORT();
 			break;
-
-		default:
-			gpName = null;
-		}
-
-		return gpName;
-	}
-
-	public static String getCategory(GlobalPermissionEnum gp) {
-		String gpCategory = I18N.CONSTANTS.categoryNotMapped();
-		switch (gp) {
-		case VIEW_PROJECT:
-			gpCategory = I18N.CONSTANTS.categoryProject();
+		case RELATE_PROJECT:
+			gpName = I18N.CONSTANTS.RELATE_PROJECT();
 			break;
-		case EDIT_PROJECT:
-			gpCategory = I18N.CONSTANTS.categoryProject();
+		case EDIT_ORG_UNIT:
+			gpName = I18N.CONSTANTS.EDIT_ORG_UNIT();
 			break;
-		case CREATE_PROJECT:
-			gpCategory = I18N.CONSTANTS.categoryProject();
+		case REMOVE_ORG_UNIT_FILE:
+			gpName = I18N.CONSTANTS.REMOVE_ORG_UNIT_FILE();
 			break;
-		case DELETE_PROJECT:
-			gpCategory = I18N.CONSTANTS.categoryProject();
+		case VIEW_ORG_UNIT_AGENDA:
+			gpName = I18N.CONSTANTS.VIEW_ORG_UNIT_AGENDA();
 			break;
-		case CHANGE_PHASE:
-			gpCategory = I18N.CONSTANTS.categoryProject();
+		case EDIT_ORG_UNIT_AGENDA:
+			gpName = I18N.CONSTANTS.EDIT_ORG_UNIT_AGENDA();
 			break;
 		case VIEW_ADMIN:
-			gpCategory = I18N.CONSTANTS.categoryAdministration();
+			gpName = I18N.CONSTANTS.VIEW_ADMIN();
+			break;
+		case MANAGE_USERS:
+			gpName = I18N.CONSTANTS.MANAGE_USERS();
+			break;
+		case MANAGE_ORG_UNITS:
+			gpName = I18N.CONSTANTS.MANAGE_ORG_UNITS();
 			break;
-		case MANAGE_USER:
-			gpCategory = I18N.CONSTANTS.categoryAdministration();
+		case MANAGE_PROJECT_MODELS:
+			gpName = I18N.CONSTANTS.MANAGE_PROJECT_MODELS();
 			break;
-		case MANAGE_UNIT:
-			gpCategory = I18N.CONSTANTS.categoryAdministration();
+		case MANAGE_ORG_UNIT_MODELS:
+			gpName = I18N.CONSTANTS.MANAGE_ORG_UNIT_MODELS();
 			break;
-		case REMOVE_FILE:
-			gpCategory = I18N.CONSTANTS.categoryOthers();
+		case MANAGE_REPORT_MODELS:
+			gpName = I18N.CONSTANTS.MANAGE_REPORT_MODELS();
+			break;
+		case MANAGE_CATEGORIES:
+			gpName = I18N.CONSTANTS.MANAGE_CATEGORIES();
+			break;
+		case MANAGE_IMPORTATION_SCHEMES:
+			gpName = I18N.CONSTANTS.MANAGE_IMPORTATION_SCHEMES();
+			break;
+		case MANAGE_SETTINGS:
+			gpName = I18N.CONSTANTS.MANAGE_SETTINGS();
 			break;
 		// case VIEW_ACTIVITYINFO:
 		// gpName = I18N.CONSTANTS.VIEW_ACTIVITYINFO();
 		// break;
-		case VALID_AMENDEMENT:
-			gpCategory = I18N.CONSTANTS.categoryProject();
-			break;
-		case GLOBAL_EXPORT:
-			gpCategory = I18N.CONSTANTS.categoryOthers();
-			break;
 		default:
-			break;
+			gpName = null;
 		}
 
-		return gpCategory;
+		return gpName;
 	}
 }
Index: src/main/java/org/sigmah/client/page/admin/users/AdminUsersView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/users/AdminUsersView.java	(revision 1581)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/users/AdminUsersView.java	(working copy)
@@ -33,6 +33,7 @@
 
 import com.extjs.gxt.ui.client.Style;
 import com.extjs.gxt.ui.client.Style.LayoutRegion;
+import com.extjs.gxt.ui.client.Style.Scroll;
 import com.extjs.gxt.ui.client.event.ButtonEvent;
 import com.extjs.gxt.ui.client.event.ComponentEvent;
 import com.extjs.gxt.ui.client.event.Events;
@@ -677,6 +678,7 @@
 		window.setModal(true);
 		window.setBlinkModal(true);
 		window.setLayout(new FitLayout());
+		window.setScrollMode(Scroll.AUTOY);
 
 		final ProfileSigmahForm form = new ProfileSigmahForm(dispatcher, cache, asyncCallback, profileToUpdate);
 
Index: src/main/java/org/sigmah/client/page/admin/model/project/AdminProjectModelsPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/project/AdminProjectModelsPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/project/AdminProjectModelsPresenter.java	(working copy)
@@ -5,18 +5,22 @@
 import org.sigmah.client.dispatch.Dispatcher;
 import org.sigmah.client.dispatch.monitor.MaskingAsyncMonitor;
 import org.sigmah.client.dispatch.remote.Authentication;
+import org.sigmah.client.i18n.I18N;
 import org.sigmah.client.page.admin.AdminPageState;
 import org.sigmah.client.page.admin.AdminSubPresenter;
 import org.sigmah.client.page.admin.AdminUtil;
 import org.sigmah.shared.command.GetProjectModels;
 import org.sigmah.shared.command.result.ProjectModelListResult;
+import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
 import org.sigmah.shared.dto.ProjectModelDTOLight;
+import org.sigmah.shared.dto.profile.ProfileUtils;
 
 import com.extjs.gxt.ui.client.store.ListStore;
 import com.extjs.gxt.ui.client.widget.Component;
 import com.extjs.gxt.ui.client.widget.ContentPanel;
 import com.extjs.gxt.ui.client.widget.grid.Grid;
 import com.google.gwt.user.client.rpc.AsyncCallback;
+import com.google.gwt.user.client.ui.HTML;
 import com.google.inject.ImplementedBy;
 import com.google.inject.Inject;
 
@@ -83,6 +87,14 @@
 
     @Override
     public Component getView() {
+		if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_PROJECT_MODELS)) {
+			ContentPanel insufficientView = new ContentPanel();
+			final HTML insufficient = new HTML(I18N.CONSTANTS.permManageProjectModelsInsufficient());
+			insufficient.addStyleName(&quot;important-label&quot;);
+			insufficientView.add(insufficient);
+			return insufficientView;
+		}
+
         refreshProjectModelsPanel(dispatcher, view);
         if (currentState != null) {
             final Integer mod = currentState.getModel();
Index: src/main/java/org/sigmah/client/ui/PermissionTree.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/ui/PermissionTree.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/ui/PermissionTree.java	(working copy)
@@ -0,0 +1,228 @@
+package org.sigmah.client.ui;
+
+import java.util.LinkedList;
+import java.util.List;
+import java.util.Set;
+
+import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
+import org.sigmah.shared.domain.profile.GlobalPermissionEnum.GlobalPermissionCategoryEnum;
+
+import com.google.gwt.cell.client.AbstractCell;
+import com.google.gwt.cell.client.Cell;
+import com.google.gwt.cell.client.CheckboxCell;
+import com.google.gwt.cell.client.CompositeCell;
+import com.google.gwt.cell.client.FieldUpdater;
+import com.google.gwt.cell.client.HasCell;
+import com.google.gwt.cell.client.TextCell;
+import com.google.gwt.core.client.GWT;
+import com.google.gwt.dom.client.Element;
+import com.google.gwt.dom.client.StyleInjector;
+import com.google.gwt.safehtml.shared.SafeHtmlBuilder;
+import com.google.gwt.user.cellview.client.CellTree;
+import com.google.gwt.user.cellview.client.TreeNode;
+import com.google.gwt.view.client.DefaultSelectionEventManager;
+import com.google.gwt.view.client.ListDataProvider;
+import com.google.gwt.view.client.MultiSelectionModel;
+import com.google.gwt.view.client.ProvidesKey;
+import com.google.gwt.view.client.SelectionChangeEvent;
+import com.google.gwt.view.client.SelectionChangeEvent.Handler;
+import com.google.gwt.view.client.TreeViewModel;
+
+public class PermissionTree extends CellTree {
+	public static class CategoryCell extends AbstractCell&lt;GlobalPermissionEnum.GlobalPermissionCategoryEnum&gt; {
+		@Override
+		public void render(Context context, GlobalPermissionEnum.GlobalPermissionCategoryEnum value, SafeHtmlBuilder sb) {
+			if (value != null) {
+				sb.appendEscaped(GlobalPermissionCategoryEnum.getName(value));
+			}
+		}
+	}
+	
+	public static class PermissionCell extends CompositeCell&lt;GlobalPermissionEnum&gt; {
+		public PermissionCell(MultiSelectionModel&lt;GlobalPermissionEnum&gt; selectionModel) {
+			super(createCells(selectionModel));
+		}
+
+		@Override
+		public void render(Context context, GlobalPermissionEnum value,
+				SafeHtmlBuilder sb) {
+			sb.appendHtmlConstant(&quot;&lt;table&gt;&lt;tbody&gt;&lt;tr&gt;&quot;);
+			super.render(context, value, sb);
+			sb.appendHtmlConstant(&quot;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&quot;);
+		}
+
+		@Override
+		protected Element getContainerElement(Element parent) {
+			// Return the first TR element in the table.
+			return parent.getFirstChildElement().getFirstChildElement()
+					.getFirstChildElement();
+		}
+
+		@Override
+		protected &lt;X&gt; void render(Context context, GlobalPermissionEnum value,
+				SafeHtmlBuilder sb, HasCell&lt;GlobalPermissionEnum, X&gt; hasCell) {
+			Cell&lt;X&gt; cell = hasCell.getCell();
+			sb.appendHtmlConstant(&quot;&lt;td&gt;&quot;);
+			cell.render(context, hasCell.getValue(value), sb);
+			sb.appendHtmlConstant(&quot;&lt;/td&gt;&quot;);
+		}
+
+		private static List&lt;HasCell&lt;GlobalPermissionEnum, ?&gt;&gt; createCells(final MultiSelectionModel&lt;GlobalPermissionEnum&gt; selectionModel) {
+			List&lt;HasCell&lt;GlobalPermissionEnum, ?&gt;&gt; cells = new LinkedList&lt;HasCell&lt;GlobalPermissionEnum,?&gt;&gt;();
+			cells.add(new HasCell&lt;GlobalPermissionEnum, Boolean&gt;() {
+				@Override
+				public Cell&lt;Boolean&gt; getCell() {
+					return new CheckboxCell();
+				}
+
+				@Override
+				public FieldUpdater&lt;GlobalPermissionEnum, Boolean&gt; getFieldUpdater() {
+					return null;
+				}
+
+				@Override
+				public Boolean getValue(GlobalPermissionEnum object) {
+					return selectionModel.isSelected(object);
+				}
+			});
+			cells.add(new HasCell&lt;GlobalPermissionEnum, String&gt;() {
+				@Override
+				public Cell&lt;String&gt; getCell() {
+					return new TextCell();
+				}
+
+				@Override
+				public FieldUpdater&lt;GlobalPermissionEnum, String&gt; getFieldUpdater() {
+					return null;
+				}
+
+				@Override
+				public String getValue(GlobalPermissionEnum object) {
+					return GlobalPermissionEnum.getName(object);
+				}
+			});
+			return cells;
+		}
+	}
+
+	public static class PermissionTreeModel implements TreeViewModel {
+		private final DefaultSelectionEventManager&lt;GlobalPermissionEnum&gt; selectionManager = DefaultSelectionEventManager.createCheckboxManager();
+		
+		private MultiSelectionModel&lt;GlobalPermissionEnum&gt; selectionModel = new MultiSelectionModel&lt;GlobalPermissionEnum&gt;(new ProvidesKey&lt;GlobalPermissionEnum&gt;() {
+			@Override
+			public Object getKey(GlobalPermissionEnum item) {
+				return item.name();
+			}
+		});
+		
+		public PermissionTreeModel() {
+			selectionModel.addSelectionChangeHandler(new Handler() {
+				@Override
+				public void onSelectionChange(SelectionChangeEvent event) {
+					for (GlobalPermissionEnum permission : GlobalPermissionEnum.values()) {
+						boolean selected = selectionModel.isSelected(permission);
+
+						GlobalPermissionEnum parent = permission.getPrerequisite();
+						while (parent != null) {
+							selected = selected &amp;&amp; selectionModel.isSelected(parent);
+							parent = parent.getPrerequisite();
+						}
+						
+						selectionModel.setSelected(permission, selected);
+					}
+				}
+			});
+		}
+		
+		public MultiSelectionModel&lt;GlobalPermissionEnum&gt; getSelectionModel() {
+			return selectionModel;
+		}
+		
+		@Override
+		public &lt;T&gt; NodeInfo&lt;?&gt; getNodeInfo(T value) {
+		    if (value == null) {
+				ListDataProvider&lt;GlobalPermissionCategoryEnum&gt; categories = new ListDataProvider&lt;GlobalPermissionCategoryEnum&gt;();
+				for (GlobalPermissionCategoryEnum category : GlobalPermissionCategoryEnum.values()) {
+					if (!category.isEmpty()) {
+						categories.getList().add(category);
+					}
+				}
+		        return new DefaultNodeInfo&lt;GlobalPermissionCategoryEnum&gt;(categories, new CategoryCell());
+		    } else if (value instanceof GlobalPermissionCategoryEnum) {
+		    	GlobalPermissionCategoryEnum category = (GlobalPermissionCategoryEnum) value;
+				ListDataProvider&lt;GlobalPermissionEnum&gt; rootPermissions = new ListDataProvider&lt;GlobalPermissionEnum&gt;(category.getChildren());
+				return new DefaultNodeInfo&lt;GlobalPermissionEnum&gt;(rootPermissions, new PermissionCell(selectionModel), selectionModel, selectionManager, null);
+			} else if (value instanceof GlobalPermissionEnum) {
+		    	GlobalPermissionEnum permission = (GlobalPermissionEnum) value;
+				ListDataProvider&lt;GlobalPermissionEnum&gt; childPermissions = new ListDataProvider&lt;GlobalPermissionEnum&gt;(permission.getChildren());
+				return new DefaultNodeInfo&lt;GlobalPermissionEnum&gt;(childPermissions, new PermissionCell(selectionModel), selectionModel, selectionManager, null);
+			}
+		    throw new IllegalArgumentException(&quot;Unknown value.&quot;);
+		}
+
+		@Override
+		public boolean isLeaf(Object value) {
+			if (value instanceof GlobalPermissionEnum) {
+				GlobalPermissionEnum permission = (GlobalPermissionEnum) value;
+				return permission.isLeaf();
+			}
+			return false;
+		}
+	}
+
+	private static Resources resources;
+	
+	private PermissionTreeModel model;
+	
+	public PermissionTree() {
+		this(new PermissionTreeModel());
+	}
+	
+	public PermissionTree(PermissionTreeModel model) {
+		super(model, null, createResources());
+		this.model = model;
+	}
+
+	public void expandAll() {
+		setOpen(getRootTreeNode(), true);
+	}
+	
+	public void collapseAll() {
+		setOpen(getRootTreeNode(), false);
+	}
+	
+	private void setOpen(TreeNode node, boolean open) {
+		if (node != null) {
+			for (int i = 0; i &lt; node.getChildCount(); i++) {
+				if (!node.isChildLeaf(i)) {
+					setOpen(node.setChildOpen(i, open), open);
+				}
+			}
+		}
+	}
+
+	public PermissionTreeModel getModel() {
+		return model;
+	}
+	
+	public void setPermissions(Set&lt;GlobalPermissionEnum&gt; permissions) {
+		for (GlobalPermissionEnum permission : permissions) {
+			getModel().getSelectionModel().setSelected(permission, true);
+		}
+	}
+	
+	public Set&lt;GlobalPermissionEnum&gt; getPermissions() {
+		return getModel().getSelectionModel().getSelectedSet();
+	}
+	
+	private static Resources createResources() {
+		if (resources == null) {
+		    resources = GWT.create(Resources.class);
+		    StyleInjector.injectAtEnd(&quot;.&quot; + resources.cellTreeStyle().cellTreeItem() + &quot; {padding-top: 2px; padding-bottom: 0px}&quot;);
+		    StyleInjector.injectAtEnd(&quot;.&quot; + resources.cellTreeStyle().cellTreeTopItem() + &quot; {margin-top: 0px;}&quot;);
+		    StyleInjector.injectAtEnd(&quot;.&quot; + resources.cellTreeStyle().cellTreeTopItem() + &quot; {margin-top: 0px;}&quot;);
+		    StyleInjector.injectAtEnd(&quot;.&quot; + resources.cellTreeStyle().cellTreeSelectedItem() + &quot; {background:none !important; color:#4B3E2D;}&quot;); // TODO
+		}
+		return resources;
+	}
+}
Index: src/main/java/org/sigmah/client/page/admin/report/AdminReportModelPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/report/AdminReportModelPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/report/AdminReportModelPresenter.java	(working copy)
@@ -8,6 +8,7 @@
 
 import org.sigmah.client.dispatch.Dispatcher;
 import org.sigmah.client.dispatch.monitor.MaskingAsyncMonitor;
+import org.sigmah.client.dispatch.remote.Authentication;
 import org.sigmah.client.i18n.I18N;
 import org.sigmah.client.page.admin.AdminPageState;
 import org.sigmah.client.page.admin.AdminUtil;
@@ -20,7 +21,9 @@
 import org.sigmah.shared.command.result.CreateResult;
 import org.sigmah.shared.command.result.ProjectReportModelResult;
 import org.sigmah.shared.command.result.ReportModelsListResult;
+import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
 import org.sigmah.shared.dto.ProjectModelDTO;
+import org.sigmah.shared.dto.profile.ProfileUtils;
 import org.sigmah.shared.dto.report.ProjectReportModelSectionDTO;
 import org.sigmah.shared.dto.report.ReportModelDTO;
 
@@ -40,6 +43,7 @@
 import com.extjs.gxt.ui.client.widget.grid.Grid;
 import com.google.gwt.dom.client.Element;
 import com.google.gwt.user.client.rpc.AsyncCallback;
+import com.google.gwt.user.client.ui.HTML;
 
 public class AdminReportModelPresenter implements AdminModelSubPresenter {
 
@@ -48,6 +52,7 @@
     private final View view;
     private final Dispatcher dispatcher;
     private ProjectModelDTO projectModel;
+	private Authentication authentication;
 
     private boolean projectReportModelUpdated;
 
@@ -87,9 +92,10 @@
 
     }
 
-    public AdminReportModelPresenter(Dispatcher dispatcher) {
+    public AdminReportModelPresenter(Dispatcher dispatcher, Authentication authentication) {
         this.view = new AdminReportModelView(dispatcher);
         this.dispatcher = dispatcher;
+        this.authentication = authentication;
 
         // Add all listeners or click-handlers
         addListeners();
@@ -105,6 +111,13 @@
 
     @Override
     public Component getView() {
+		if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_REPORT_MODELS)) {
+			ContentPanel insufficientView = new ContentPanel();
+			final HTML insufficient = new HTML(I18N.CONSTANTS.permManageReportsInsufficient());
+			insufficient.addStyleName(&quot;important-label&quot;);
+			insufficientView.add(insufficient);
+			return insufficientView;
+		}
 
         dispatcher.execute(new GetReportModels(), null, new AsyncCallback&lt;ReportModelsListResult&gt;() {
 
Index: src/main/java/org/sigmah/client/page/orgunit/calendar/OrgUnitCalendarPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/orgunit/calendar/OrgUnitCalendarPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/orgunit/calendar/OrgUnitCalendarPresenter.java	(working copy)
@@ -51,7 +51,8 @@
 	@Override
 	public Component getView() {
 		if (view == null) {
-			calendar = new CalendarWidget(CalendarWidget.COLUMN_HEADERS, true, authentication);
+			calendar = new CalendarWidget(CalendarWidget.COLUMN_HEADERS, true);
+			calendar.setEditable(ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ORG_UNIT_AGENDA));
 			calendarStore = new ListStore&lt;CalendarWrapper&gt;();
 			selectionModel = new CheckBoxSelectionModel&lt;CalendarWrapper&gt;();
 
@@ -91,8 +92,7 @@
 					selectionModel.select(calendarStore.getCount() - 1, true);
 
 					if (result.isEditable()
-									&amp;&amp; ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_AGENDA,
-													GlobalPermissionEnum.EDIT_PROJECT)) {
+									&amp;&amp; ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ORG_UNIT_AGENDA)) {
 						view.getAddEventButton().setEnabled(true);
 					}
 				}
Index: src/main/java/org/sigmah/shared/dto/element/FilesListElementDTO.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/element/FilesListElementDTO.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/element/FilesListElementDTO.java	(working copy)
@@ -20,6 +20,7 @@
 import org.sigmah.shared.command.result.ValueResult;
 import org.sigmah.shared.command.result.VoidResult;
 import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
+import org.sigmah.shared.dto.OrgUnitDTO;
 import org.sigmah.shared.dto.ProjectDTO;
 import org.sigmah.shared.dto.element.handler.RequiredValueEvent;
 import org.sigmah.shared.dto.profile.ProfileUtils;
@@ -466,6 +467,8 @@
 	 * @return The column model.
 	 */
 	private ColumnConfig[] getColumnModel(final boolean enabled) {
+		final Boolean deleteable = (currentContainerDTO instanceof ProjectDTO &amp;&amp; ProfileUtils.isGranted(authentication, GlobalPermissionEnum.REMOVE_PROJECT_FILE))
+											|| (currentContainerDTO instanceof OrgUnitDTO &amp;&amp; ProfileUtils.isGranted(authentication, GlobalPermissionEnum.REMOVE_ORG_UNIT_FILE));
 
 		// File's add date.
 		final ColumnConfig dateColumn = new ColumnConfig();
@@ -651,7 +654,7 @@
 					@Override
 					public void onClick(ClickEvent e) {
 
-						final FileDetailsWindow versionsWindow = new FileDetailsWindow(authentication, dispatcher, enabled);
+						final FileDetailsWindow versionsWindow = new FileDetailsWindow(authentication, dispatcher, enabled, deleteable);
 						versionsWindow.addListener(new FileDetailsWindow.FileDetailsWindowListener() {
 
 							@Override
@@ -735,7 +738,7 @@
 			}
 		});
 
-		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.REMOVE_FILE)) {
+		if (deleteable) {
 			return new ColumnConfig[] { dateColumn, nameColumn, authorColumn, versionColumn, addVersionColumn,
 			                historyColumn, deleteColumn };
 		} else {
@@ -801,15 +804,18 @@
 		 */
 		private final ArrayList&lt;FileDetailsWindowListener&gt; listeners = new ArrayList&lt;FileDetailsWindowListener&gt;();
 
+		private boolean deleteable;
+
 		/**
 		 * Builds the window.
 		 * 
 		 * @param dispatcher
 		 * @param enabled
 		 *            If the component is enabled.
+		 * @param deleteable 
 		 */
-		public FileDetailsWindow(final Authentication authentication, final Dispatcher dispatcher, boolean enabled) {
-
+		public FileDetailsWindow(final Authentication authentication, final Dispatcher dispatcher, boolean enabled, boolean deleteable) {
+			this.deleteable = deleteable;
 			this.authentication = authentication;
 			this.dispatcher = dispatcher;
 
@@ -1006,7 +1012,7 @@
 				}
 			});
 
-			if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.REMOVE_FILE)) {
+			if (deleteable) {
 				return new ColumnConfig[] {versionColumn, dateColumn, authorColumn, nameColumn, sizeColumn, deleteColumn };
 			} else {
 				return new ColumnConfig[] { versionColumn, dateColumn, authorColumn, nameColumn, sizeColumn };
Index: src/main/java/org/sigmah/client/i18n/UIConstants.properties
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties	(revision 1581)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties	(working copy)
@@ -24,25 +24,17 @@
 
 DRAFT = Draft
 
-EDIT_PROJECT = Edit project
-
 DELETE_PROJECT = Delete project
 
-MANAGE_UNIT = Manage organizational units
-
-MANAGE_USER = Manage user
-
 READY = Ready
 
-REMOVE_FILE = remove file
-
 UNAVAILABLE = Unavailable
 
 USED = Available \u0026 used
 
 VIEW_ACTIVITYINFO = View ActivityInfo
 
-VIEW_ADMIN = View admin
+VIEW_ADMIN = View administration
 
 # Global permissions
 VIEW_PROJECT = View project
@@ -51,10 +43,6 @@
 
 EDIT_LOGFRAME = Edit logframe
 
-VIEW_AGENDA = View Agenda
-
-EDIT_AGENDA = Edit agenda
-
 VIEW_INDICATOR = View indicator
 
 MANAGE_INDICATOR = Manage indicator
@@ -2120,8 +2108,6 @@
 deleteRootPhaseModelConfirm = Warning: This is the last phase model in this project model. All phases and fields using this phase model will be also deleted! The projects using this model maybe will not work any more. Are you sure to delete it?
 
 deleteRootPhaseModelError = You can not delete this phase because it is the phase chosen as initial for your project model.
- 
-VALIDER_AMENDEMENT = Validate amendment
 
 adminFlexibleDeleteFlexibleElementsConfirm = The selected fields have been already deleted.
 
@@ -2390,4 +2376,60 @@
 #Name for permission not included in any catebory
 categoryNotMapped = Not in any Category
 
+categoryOrgUnit = Organizational unit
+
+MANAGE_USERS = Manage users
+ 
+VALIDER_AMENDEMENT = Validate project core version
+
+CREATE_TEST_PROJECT = Create test project
+
+LOCK_PROJECT_CORE = Lock project core
+
+VIEW_PROJECT_AGENDA = View project agenda
+
+EDIT_PROJECT_AGENDA = Edit project agenda
+
+RELATE_PROJECT = Relate project
+
+GLOBAL_EXPORT = Global export
+
+EDIT_ORG_UNIT = Edit organizational unit fields content
+
+VIEW_ORG_UNIT_AGENDA = View organizational unit agenda
+
+EDIT_ORG_UNIT_AGENDA = Edit organizational unit agenda
 
+MANAGE_ORG_UNITS = Manage organizational units
+
+MANAGE_PROJECT_MODELS = Manage project models
+
+MANAGE_ORG_UNIT_MODELS = Manage organizational unit models
+
+MANAGE_REPORT_MODELS = Manage report models
+
+MANAGE_CATEGORIES = Manage categories
+
+MANAGE_IMPORTATION_SCHEMES = Manage importation schemes
+
+MANAGE_SETTINGS = Manage settings
+
+REMOVE_PROJECT_FILE = Remove project file
+
+REMOVE_ORG_UNIT_FILE = Remove organizational unit file
+
+EDIT_PROJECT = Edit project fields content
+
+permManageReportsInsufficient = Sorry, you don't have sufficient permissions to administer reports.
+
+permManageOrgUnitsInsufficient = Sorry, you don't have sufficient permissions to administer organizational units.
+
+permManageProjectModelsInsufficient = Sorry, you don't have sufficient permissions to administer project models.
+
+permManageOrgUnitModelsInsufficient = Sorry, you don't have sufficient permissions to administer organizational unit models.
+
+permManageCategoriesInsufficient = Sorry, you don't have sufficient permissions to administer categories.
+
+permManageImportSchemesInsufficient = Sorry, you don't have sufficient permissions to administer importation schemes.
+
+permManageSettingsInsufficient = Sorry, you don't have sufficient permissions to administer system settings.
Index: src/main/java/org/sigmah/client/page/admin/users/AdminUsersPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/users/AdminUsersPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/users/AdminUsersPresenter.java	(working copy)
@@ -32,6 +32,7 @@
 import com.extjs.gxt.ui.client.widget.MessageBox;
 import com.extjs.gxt.ui.client.widget.Window;
 import com.google.gwt.user.client.rpc.AsyncCallback;
+import com.google.gwt.user.client.ui.HTML;
 import com.google.inject.ImplementedBy;
 import com.google.inject.Inject;
 
@@ -102,20 +103,16 @@
         this.dispatcher = dispatcher;
         this.authentication = authentication;
         this.view = new AdminUsersView(dispatcher, cache);
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_USER)) {
 
-            // Getting Users
-            refreshUserPanel(dispatcher, view);
+		// Getting Users
+		refreshUserPanel(dispatcher, view);
 
-            // Getting profiles
-            refreshProfilePanel(dispatcher, view);
+		// Getting profiles
+		refreshProfilePanel(dispatcher, view);
 
-            // Getting privacy groups
-            refreshPrivacyGroupPanel(dispatcher, view);
-            view.sufficient();
-        } else {
-            view.insufficient();
-        }
+		// Getting privacy groups
+		refreshPrivacyGroupPanel(dispatcher, view);
+		view.sufficient();
     }
 
     private static void alertPbmData() {
@@ -127,6 +124,13 @@
 
     @Override
     public Component getView() {
+		if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_USERS)) {
+			ContentPanel insufficientView = new ContentPanel();
+			final HTML insufficient = new HTML(I18N.CONSTANTS.permManageUsersInsufficient());
+			insufficient.addStyleName(&quot;important-label&quot;);
+			insufficientView.add(insufficient);
+			return insufficientView;
+		}
         /*
          * if(!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_USER)){ ContentPanel insufficientView
          * = new ContentPanel(); final HTML insufficient = new HTML(I18N.CONSTANTS.permManageUsersInsufficient());
Index: src/main/java/org/sigmah/client/page/project/calendar/ProjectCalendarPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/calendar/ProjectCalendarPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/calendar/ProjectCalendarPresenter.java	(working copy)
@@ -17,7 +17,9 @@
 import org.sigmah.shared.domain.calendar.CalendarType;
 import org.sigmah.shared.domain.calendar.MonitoredPointCalendarIdentifier;
 import org.sigmah.shared.domain.calendar.ReminderCalendarIdentifier;
+import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
 import org.sigmah.shared.dto.ProjectDTO;
+import org.sigmah.shared.dto.profile.ProfileUtils;
 
 import com.allen_sauer.gwt.log.client.Log;
 import com.extjs.gxt.ui.client.data.BaseModel;
@@ -120,7 +122,8 @@
 	@Override
 	public Component getView() {
 		if (view == null) {
-			calendar = new CalendarWidget(CalendarWidget.COLUMN_HEADERS, true, authentication);
+			calendar = new CalendarWidget(CalendarWidget.COLUMN_HEADERS, true);
+			calendar.setEditable(ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT_AGENDA));
 			calendarStore = new ListStore&lt;CalendarWrapper&gt;();
 			selectionModel = new CheckBoxSelectionModel&lt;CalendarWrapper&gt;();
 
Index: src/main/java/org/sigmah/client/page/orgunit/reports/OrgUnitReportsView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/orgunit/reports/OrgUnitReportsView.java	(revision 1581)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/orgunit/reports/OrgUnitReportsView.java	(working copy)
@@ -189,7 +189,7 @@
 
         attachButton = new Button(I18N.CONSTANTS.flexibleElementFilesListAddDocument(), icons.attach());
 
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_UNIT)) {
+        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ORG_UNIT)) {
             toolBar.add(attachButton);
             toolBar.add(new SeparatorToolItem());
             toolBar.add(createReportButton);
@@ -660,7 +660,7 @@
         } else {
             final Button editReportButton = new Button(I18N.CONSTANTS.edit(), icons.editPage());
 
-            if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_UNIT)) {
+            if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ORG_UNIT)) {
                 toolBar.add(editReportButton);
             }
 
</pre></span>
<br />
<a href="file_download04a2.php?file_id=210&amp;type=bug"><img src="images/fileicons/generic.gif" alt="? file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download04a2.php?file_id=210&amp;type=bug">616_scheme_updates.sql</a> [<a href="file_download04a2.php?file_id=210&amp;type=bug" target="_blank">^</a>] (4,112 bytes) <span class="italic">2014-07-25 04:35</span></td></tr><tr align="center"><td align="center" colspan="6"><table><tr class="vcenter"><td class="center"></td><td class="center"></td><td class="center"></td><td class="center"></td></tr></table></td></tr></table><br />

<div id="relationships_open"><table class="width100" cellspacing="1">
<tr class="row-2" valign="top">
	<td width="15%" class="form-title" colspan="2">
		<a href="#" onclick="ToggleDiv( 'relationships' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;Relationships	</td>
</tr>
<tr>
	<td colspan="2"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr bgcolor="#c9ccc4"><td><span class="nowrap">parent of</span>&#160;</td><td><a href="view42a9.html?id=625">0000625</a></td><td><span class="issue-status" title="fixed">closed</span></td><td><span class="nowrap"><a href="view_user_page95dc.html?id=29">renatoaf</a></span>&#160;</td><td>Create new permission to relate projects&#160;</td></tr>
<tr bgcolor="#c9ccc4"><td><span class="nowrap">parent of</span>&#160;</td><td><a href="view3085.html?id=507">0000507</a></td><td><span class="issue-status" title="fixed">closed</span></td><td><span class="nowrap"><a href="view_user_page95dc.html?id=29">renatoaf</a></span>&#160;</td><td>Modification of locked content&#160;</td></tr>
<tr bgcolor="#c9ccc4"><td><span class="nowrap">has duplicate</span>&#160;</td><td><a href="view792e.php?id=606">0000606</a></td><td><span class="issue-status" title="duplicate">closed</span></td><td><span class="nowrap"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></span>&#160;</td><td>Reorder the global permission on the profile form&#160;</td></tr>
<tr bgcolor="#c9ccc4"><td><span class="nowrap">related to</span>&#160;</td><td><a href="viewac86.php?id=574">0000574</a></td><td><span class="issue-status" title="fixed">closed</span></td><td><span class="nowrap"><a href="view_user_page95dc.html?id=29">renatoaf</a></span>&#160;</td><td>Indicators still editable for a user having only View Project privilege&#160;</td></tr>
<tr bgcolor="#fcbdbd"><td><span class="nowrap">related to</span>&#160;</td><td><a href="view2b7b.html?id=628">0000628</a></td><td><span class="issue-status" title="open">new</span></td><td>&#160;</td><td>Mark file as final version (File List field)&#160;</td></tr>
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
<tr class="bugnote" id="c1457">
        <td class="bugnote-public">
				<span class="small">(<a href="view6e0a.html?id=616#c1457" title="Direct link to note">0001457)</a></span><br />
		<a href="view_user_page3ebc.html?id=64">somzzz</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-07-04 11:44</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Hi renatoaf,<br />
<br />
An idea for the global permissions:<br />
<br />
Currently, the global permissions are independent one from another. On the profile creation form, each can be selected/ticked without influencing the possiblity to select another permission.<br />
<br />
What if we have a hierarchy of permissions? A user can view a page or edit the content of the page. Editing the page depends on viewing it. Of course, if the page is not displayed at all, no modifications can be made to its content. BUT when handling the profile permissions, an admin can still give the user the permission to edit the page, even though he does not have the permission to view it. This is pointless and not very clear for the user.<br />
<br />
Relationships between permissions could be added: if permission Y and Z depend on permission X, it should not be possible to select either Y or Z without having X already selected for the respective profile. Similarly, if X, Y and Z are all selected, and X is removed, then Y and Z should be automatically removed from the profile permission list.<br />
<br />
In the profile creation form, this could be reflected graphically by disabling the dependant fields when the parent permission field is not selected. <br />
<br />
What is your opinion about this idea? Do you believe it could be implemented as part of this issue?	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1459">
        <td class="bugnote-public">
				<span class="small">(<a href="view6e0a.html?id=616#c1459" title="Direct link to note">0001459)</a></span><br />
		<a href="view_user_page95dc.html?id=29">renatoaf</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-07-17 00:46</span><br />
		<span class="small">edited on:&#32;2014-07-17 10:29</span><br />		<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Hi somzzz, I like your idea! Yes, I can implement it as part of <a href="view6e0a.html?id=616" title="[closed] Reorganize administration global privileges" class="resolved">0000616</a>. I think it will only impact in the graphic interface. GWT/GXT has plenty of widgets to represent trees (such as <a href="http://examples.roughian.com/index.htm#Widgets~Tree">http://examples.roughian.com/index.htm#Widgets~Tree</a> [<a href="http://examples.roughian.com/index.htm#Widgets~Tree" target="_blank">^</a>]), so the implementation is really straight-forward.<br />
<br />
I've encountered other inconsistencies in the current model. For example, there is a “EDIT AGENDA” permission which is valid for both projects and org units. The same logic applies to “VIEW AGENDA” permission. I believe separated permissions would be more flexible.<br />
<br />
The final hierarchy considering dependencies (as suggested by somzzz), would look like this:<br />
<br />
* Administration-related<br />
<br />
- View administration<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage users<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage org units<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage project models<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage org unit models<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage report models<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage categories<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage importation schemes<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage settings<br />
<br />
* Organisational unit-related<br />
<br />
- Edit organisational unit fields content(equivalent to the current &quot;manage org unit&quot; permission)<br />
- View organisational unit agenda<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Edit org unit agenda<br />
<br />
* Project-related<br />
<br />
- Create project<br />
- Create test project<br />
- View projects<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Edit project fields content<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Delete project<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Change phase<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Lock project core<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Validate project core version<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Edit own reminders<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Edit all reminders<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- View logframe<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Edit logframe<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- View project agenda<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Edit project agenda<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- View indicators<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Edit indicators<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage indicators<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Global export<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Relate project (related to <a href="view42a9.html?id=625" title="[closed] Create new permission to relate projects" class="resolved">0000625</a>)<br />
<br />
* Others<br />
<br />
- Edit own password (related to <a href="view0fbe.html?id=438" title="[closed] Own password modification by user" class="resolved">0000438</a>)<br />
<br />
<br />
I would, of course, create a SQL script to adapt the existing profiles to the new structure. Existing profiles with the old “View Administration” global permission, for example, will have all &quot;Manage ...&quot; privileges, since they can edit the whole administration page in the current version of Sigmah.<br />
<br />
What do you think?<br />
<br />
	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1461">
        <td class="bugnote-public">
				<span class="small">(<a href="view6e0a.html?id=616#c1461" title="Direct link to note">0001461)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2014-07-17 10:32</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		I like this idea very much too !<br />
I've edited your organisation of the privileges directly into your comment.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1462">
        <td class="bugnote-public">
				<span class="small">(<a href="view6e0a.html?id=616#c1462" title="Direct link to note">0001462)</a></span><br />
		<a href="view_user_page3ebc.html?id=64">somzzz</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-07-17 15:16</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		That's great, renatoaf!<br />
<br />
As a comment, my project will add the following branch to the hierarchy you described:<br />
* Project-related<br />
<br />
&#160;- View projects<br />
&#160;&#160;&#160;&#160;&#160;- View MapTab<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage sites (create/edit/delete)<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage main site<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Export HXL	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1465">
        <td class="bugnote-public">
				<span class="small">(<a href="view6e0a.html?id=616#c1465" title="Direct link to note">0001465)</a></span><br />
		<a href="view_user_page95dc.html?id=29">renatoaf</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-07-21 20:15</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Great! I'm working on it.<br />
I've attached some pictures of the new add/edit profile screen.<br />
As soon as I finish adjusting the code to the new permissions, I'll send a patch.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1467">
        <td class="bugnote-public">
				<span class="small">(<a href="view6e0a.html?id=616#c1467" title="Direct link to note">0001467)</a></span><br />
		<a href="view_user_page95dc.html?id=29">renatoaf</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-07-25 04:43</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		The files:<br />
- 616_patch_v2.txt<br />
- 616_scheme_updates.sql<br />
<br />
Address both issues <a href="view6e0a.html?id=616" title="[closed] Reorganize administration global privileges" class="resolved">0000616</a> and <a href="view42a9.html?id=625" title="[closed] Create new permission to relate projects" class="resolved">0000625</a>.<br />
<br />
This SQL file does not make any schema changes, it only makes sure that every existing profile will keep the same privileges they have with the current permission organization.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1469">
        <td class="bugnote-public">
				<span class="small">(<a href="view6e0a.html?id=616#c1469" title="Direct link to note">0001469)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2014-07-25 09:51</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Thanks for this patch! I will let tmiette review it when he will be available.<br />
Regarding schema update, we keep them all centralized on a wiki page, and don't include them as SQL file on the issue. I let you go through this information to know more about this: <a href="https://code.google.com/p/sigma-h/wiki/SchemaChangeLog#Remarks_for_developers_in_need_to_change_the_database_model">https://code.google.com/p/sigma-h/wiki/SchemaChangeLog#Remarks_for_developers_in_need_to_change_the_database_model</a> [<a href="https://code.google.com/p/sigma-h/wiki/SchemaChangeLog#Remarks_for_developers_in_need_to_change_the_database_model" target="_blank">^</a>]<br />
Best !	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1490">
        <td class="bugnote-public">
				<span class="small">(<a href="view6e0a.html?id=616#c1490" title="Direct link to note">0001490)</a></span><br />
		<a href="view_user_page95dc.html?id=29">renatoaf</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-08-10 22:06</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		I've merged all my GSoC work into a single patch to simplify the synchronization, so please ignore this patch. I'll update the wiki page with the SQL modifications.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1518">
        <td class="bugnote-public">
				<span class="small">(<a href="view6e0a.html?id=616#c1518" title="Direct link to note">0001518)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2014-12-12 10:22</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Patch to fix this issue attached as a larger patch on issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1590">
        <td class="bugnote-public">
				<span class="small">(<a href="view6e0a.html?id=616#c1590" title="Direct link to note">0001590)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-04-07 16:07</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue set as resolved because apparently resolved in v2.0-rc1.<br />
Must be tested to confirm resolution before closure.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1591">
        <td class="bugnote-public">
				<span class="small">(<a href="view6e0a.html?id=616#c1591" title="Direct link to note">0001591)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-04-07 16:12</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Some little modifications to finalize this very useful reorganisation of global privileges :<br />
- &quot;Edit own reminders&quot; (and below &quot;Edit all reminders&quot;) should be below &quot;View project&quot;<br />
- &quot;Lock project&quot; (which will be renamed &quot;Lock project core&quot; by the translators) should be below &quot;Edit project&quot;<br />
- &quot;Export HXL&quot; could be hidden because not active yet<br />
- &quot;View project map&quot; could be directly below &quot;View project&quot;	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1884">
        <td class="bugnote-public">
				<span class="small">(<a href="view6e0a.html?id=616#c1884" title="Direct link to note">0001884)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-07-08 17:02</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue closed because acceptable behavior checked on v2.0-rc6, even if slightly different from last expectations in last note.	</td>
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
		2014-03-13 10:56	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		New Issue	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-07-01 19:51	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; renatoaf	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-07-01 19:51	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-07-04 11:44	</td>
	<td class="small-caption">
		<a href="view_user_page3ebc.html?id=64">somzzz</a>	</td>
	<td class="small-caption">
		Note Added: 0001457	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-07-17 00:46	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Note Added: 0001459	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-07-17 06:04	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		parent of 0000625	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-07-17 08:33	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		related to 0000574	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-07-17 08:57	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		related to 0000628	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-07-17 08:58	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Note Edited: 0001459	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page1505.php?bugnote_id=1459#r465">View Revisions</a>	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-07-17 10:12	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Edited: 0001459	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page1505.php?bugnote_id=1459#r466">View Revisions</a>	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-07-17 10:14	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Edited: 0001459	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page1505.php?bugnote_id=1459#r467">View Revisions</a>	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-07-17 10:29	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Edited: 0001459	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page1505.php?bugnote_id=1459#r468">View Revisions</a>	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-07-17 10:32	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001461	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-07-17 15:16	</td>
	<td class="small-caption">
		<a href="view_user_page3ebc.html?id=64">somzzz</a>	</td>
	<td class="small-caption">
		Note Added: 0001462	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-07-21 20:14	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 01.profile_screen.png	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-07-21 20:14	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 02.profile_screen.png	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-07-21 20:15	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Note Added: 0001465	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-07-25 04:35	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 616_patch_v2.txt	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-07-25 04:35	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 616_scheme_updates.sql	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-07-25 04:43	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Note Added: 0001467	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-07-25 09:51	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001469	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-08-10 21:57	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		parent of 0000507	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-08-10 22:06	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Note Added: 0001490	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-08-13 15:45	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		unplanned =&gt; 2.0	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-12-10 13:36	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		has duplicate 0000606	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-12-12 10:22	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001518	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-07 16:07	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001590	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-07 16:07	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; resolved	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-07 16:07	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Fixed in Version	</td>
	<td class="small-caption">
		 =&gt; 2.0	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-07 16:07	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		open =&gt; fixed	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-07 16:07	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		renatoaf =&gt; rcalabro	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-07 16:07	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		resolved =&gt; assigned	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-07 16:12	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001591	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-07-08 17:02	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001884	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-07-08 17:02	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; closed	</td>
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

<!-- Mirrored from www.sigmah.org/issues/view.php?id=616&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:04:31 GMT -->
</html>
