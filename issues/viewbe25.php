<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=580&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:07:42 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:33:04 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000580: Add a Group and a Container columns to Global export configuration fields table - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page7a5c.html?return=%2Fissues%2Fview.php%3Fid%3D580%26history%3D1">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:33 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issuesd41d.xml?"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table><br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="3">View Issue Details&#160;<span class="small"><span class="bracket-link">[&#160;<a href="#bugnotes">Jump to Notes</a>&#160;]</span> </span></td><td class="center"><span class="small"></span></td><td class="right" colspan="2"><span class="small"><span class="bracket-link">[&#160;<a href="viewbe25.php?id=580&amp;history=1#history">Issue History</a>&#160;]</span> </span><span class="small"><span class="bracket-link">[&#160;<a href="print_bug_pagedafc.php?bug_id=580">Print</a>&#160;]</span> </span></td></tr><tr><td class="category" width="15%">ID</td><td class="category" width="20%">Project</td><td class="category" width="15%">Category</td><td class="category" width="15%">View Status</td><td class="category" width="15%">Date Submitted</td><td class="category" width="20%">Last Update</td></tr><tr class="row-1"><td>0000580</td><td>sigmah</td><td>Project</td><td>public</td><td>2013-06-27 12:52</td><td>2015-05-04 09:39</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">Reporter</td><td>osarrat</td><td colspan="4">&#160;</td></tr><tr class="row-1"><td class="category">Assigned To</td><td>ZamZam</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Priority</td><td>normal</td><td class="category">Severity</td><td>feature</td><td class="category">Reproducibility</td><td>N/A</td></tr><tr class="row-1"><td class="category">Status</td><td bgcolor="#c9ccc4">closed</td><td class="category">Resolution</td><td>fixed</td><td colspan="2">&#160;</td></tr><tr class="row-2"><td class="category">Platform</td><td></td><td class="category">OS</td><td></td><td class="category">OS Version</td><td></td></tr><tr class="row-1"><td class="category">Product Version</td><td>1.2</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Target Version</td><td>2.0</td><td class="category">Fixed in Version</td><td>2.0</td><td colspan="2">&#160;</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">Summary</td><td colspan="5">0000580: Add a Group and a Container columns to Global export configuration fields table</td></tr><tr class="row-2"><td class="category">Description</td><td colspan="5">To find and recognize more quickly the fields to add or remove from Global exports, the Global export configuration window should be enlarged and 2 columns should be added in the table of fields: Group, and Container.</td></tr><tr class="row-1"><td class="category">Additional Information</td><td colspan="5">Replies to jason90 questions (<a href="https://groups.google.com/d/msg/sigmah-dev/w4wXPXs4Scg/25O5QrOMZsUJ">https://groups.google.com/d/msg/sigmah-dev/w4wXPXs4Scg/25O5QrOMZsUJ</a> [<a href="https://groups.google.com/d/msg/sigmah-dev/w4wXPXs4Scg/25O5QrOMZsUJ" target="_blank">^</a>] )<br />
&gt; &quot;..to add or remove..&quot;, what do you mean by this?<br />
I meant add or remove fields to be exported in the Global export.<br />
&gt; Global export configuration window, here I can see a grid with 3 column (Model Name | Export? Name), right?<br />
yes<br />
&gt; And this grid should have a Group and Container column?<br />
exactly :)<br />
&gt; And what values should be in the new columns? <br />
Each field coming from Project model has one parent Group, and each group as one parent Container. Values expected in those columns are for each field the parent group and the parent container.<br />
&gt; And the new columns will be displayed in the export?<br />
No, those new columns won't be displayed in the export.</td></tr><tr class="row-2"><td class="category">Tags</td><td colspan="5"><a href='tag_view_page5916.html?tag_id=15' title='Easiest issues to pick up when starting to contribute on the project.'>LowHangingFruits</a></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">User Report URL</td><td colspan="5"><a href="http://www.sigmah.org/node/773">http://www.sigmah.org/node/773</a> [<a href="http://www.sigmah.org/node/773" target="_blank">^</a>]</td></tr><tr class="row-2"><td class="category">OS</td><td colspan="5">NA</td></tr><tr class="row-1"><td class="category">Other OS</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">Browser</td><td colspan="5">NA</td></tr><tr class="row-1"><td class="category">Other browser</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">ScreenURL</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">(ActivityInfo) Noticed in revision</td><td colspan="5"></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category"><a name="attachments" id="attachments" />Attached Files</td><td colspan="5"><a href="file_downloada0af.php?file_id=153&amp;type=bug"><img src="images/fileicons/text.html" alt="patch file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_downloada0af.php?file_id=153&amp;type=bug">issue580.patch</a> [<a href="file_downloada0af.php?file_id=153&amp;type=bug" target="_blank">^</a>] (8,669 bytes) <span class="italic">2014-03-12 17:21</span><script type="text/javascript" language="JavaScript">
<!--
function swap_content( span ) {
displayType = ( document.getElementById( span ).style.display == 'none' ) ? '' : 'none';
document.getElementById( span ).style.display = displayType;
}

 -->
 </script> <span id="hideSection_153">[<a class="small" href='#' id='attmlink_153' onclick='swap_content("hideSection_153");swap_content("showSection_153");return false;'>Show Content</a>]</span> <span style='display:none' id="showSection_153">[<a class="small" href='#' id='attmlink_153' onclick='swap_content("hideSection_153");swap_content("showSection_153");return false;'>Hide Content</a>]<pre>Index: sigmah/src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java
===================================================================
--- sigmah/src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java   (revision 1561)
+++ sigmah/src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java   (working copy)
@@ -176,33 +176,51 @@
          List&lt;FlexibleElementDTO&gt; allElements = new ArrayList&lt;FlexibleElementDTO&gt;();
          
          List&lt;LayoutGroupDTO&gt; layoutGroupDTOs=new ArrayList&lt;LayoutGroupDTO&gt;();
+         
          //add phase groups
-         for(PhaseModelDTO phaseDTO : getPhaseModelsDTO()){
-              layoutGroupDTOs.addAll(phaseDTO.getLayoutDTO().getLayoutGroupsDTO());
+         for(PhaseModelDTO phaseDTO : getPhaseModelsDTO()){          
+         for(LayoutGroupDTO lg : phaseDTO.getLayoutDTO().getLayoutGroupsDTO()){
+                   for(LayoutConstraintDTO lc : lg.getLayoutConstraintsDTO()){
+                        FlexibleElementDTO element = lc.getFlexibleElementDTO();
+                        element.setGroup(lg);
+                        element.setConstraint(lc);
+                        element.setContainerModel(phaseDTO);
+                        
+                        ElementTypeEnum type=element.getElementType();
+                        if(ElementTypeEnum.DEFAULT.equals(type)||
+                                  ElementTypeEnum.CHECKBOX.equals(type)||
+                                  ElementTypeEnum.TEXT_AREA.equals(type)||
+                                  ElementTypeEnum.TRIPLETS.equals(type)||
+                                  ElementTypeEnum.QUESTION.equals(type)){                     
+                             allElements.add(element);
+                        } 
+                   }
+              }
                
          }
          //add details groups
+         ProjectDetailsDTO p = getProjectDetailsDTO();
+         p.setName();
+         setProjectDetailsDTO(p);
          if(getProjectDetailsDTO().getLayoutDTO()!=null){
-              layoutGroupDTOs.addAll(getProjectDetailsDTO().getLayoutDTO().getLayoutGroupsDTO());
+         for(LayoutGroupDTO lg : getProjectDetailsDTO().getLayoutDTO().getLayoutGroupsDTO()){
+                   for(LayoutConstraintDTO lc : lg.getLayoutConstraintsDTO()){
+                        FlexibleElementDTO element = lc.getFlexibleElementDTO();
+                        element.setGroup(lg);
+                        element.setConstraint(lc);
+                        element.setContainerModel(getProjectDetailsDTO());
+                        
+                        ElementTypeEnum type=element.getElementType();
+                        if(ElementTypeEnum.DEFAULT.equals(type)||
+                                  ElementTypeEnum.CHECKBOX.equals(type)||
+                                  ElementTypeEnum.TEXT_AREA.equals(type)||
+                                  ElementTypeEnum.TRIPLETS.equals(type)||
+                                  ElementTypeEnum.QUESTION.equals(type)){                     
+                             allElements.add(element);
+                        } 
+                   }
+              }
          }
-         
-         //gather elements
-         for(LayoutGroupDTO lg : layoutGroupDTOs){
-              for(LayoutConstraintDTO lc : lg.getLayoutConstraintsDTO()){
-                   FlexibleElementDTO element = lc.getFlexibleElementDTO();
-                   ElementTypeEnum type=element.getElementType();
-                   
-                   if(ElementTypeEnum.DEFAULT.equals(type)||
-                             ElementTypeEnum.CHECKBOX.equals(type)||
-                             ElementTypeEnum.TEXT_AREA.equals(type)||
-                             ElementTypeEnum.TRIPLETS.equals(type)||
-                             ElementTypeEnum.QUESTION.equals(type)){                     
-                        allElements.add(element);
-                   }
-                   
-                   
-              }
-         }
                    
          return allElements;            
     }
Index: sigmah/src/main/java/org/sigmah/client/ui/GlobalExportSettingsForm.java
===================================================================
--- sigmah/src/main/java/org/sigmah/client/ui/GlobalExportSettingsForm.java     (revision 1561)
+++ sigmah/src/main/java/org/sigmah/client/ui/GlobalExportSettingsForm.java     (working copy)
@@ -24,6 +24,8 @@
 import org.sigmah.shared.dto.UpdateGlobalExportSettings;
 import org.sigmah.shared.dto.element.DefaultFlexibleElementDTO;
 import org.sigmah.shared.dto.element.FlexibleElementDTO;
+import org.sigmah.shared.dto.layout.LayoutGroupDTO;
+
 
 import com.extjs.gxt.ui.client.Style.Orientation;
 import com.extjs.gxt.ui.client.data.BaseModelData;
@@ -135,7 +137,7 @@
          w.setModal(true);
          w.setBlinkModal(true);
          w.setLayout(new FitLayout());
-         w.setSize(600, 420);
+         w.setSize(900, 420);
          w.setHeading(I18N.CONSTANTS.globalExportConfiguration());
 
          final FormPanel panel = new FormPanel();
@@ -363,10 +365,12 @@
               public Object render(FlexibleElementDTO model, String property, ColumnData config, int rowIndex,
                               int colIndex, ListStore&lt;FlexibleElementDTO&gt; store, Grid&lt;FlexibleElementDTO&gt; grid) {
                    String title = null;
-                   if (ElementTypeEnum.DEFAULT.equals(model.getElementType()))
-                        title = DefaultFlexibleElementType.getName(((DefaultFlexibleElementDTO) model).getType());
-                   else
+                   
+                   if (ElementTypeEnum.DEFAULT.equals(model.getElementType())){                         
+                        title = DefaultFlexibleElementType.getName(((DefaultFlexibleElementDTO) model).getType());                    
+                   }else{
                         title = model.getLabel();
+                   }
                    final Text text = AdminUtil.createGridText(title);
                    text.setTitle(title);
                    return text;
@@ -374,10 +378,56 @@
 
          });
          configs.add(column);
+         
+         column = new ColumnConfig(&quot;container&quot;,I18N.CONSTANTS.adminFlexibleContainer(), 120);   
+        column.setRenderer(new GridCellRenderer&lt;FlexibleElementDTO&gt;(){
+
+              @Override
+              public Object render(FlexibleElementDTO model, String property,
+                        ColumnData config, int rowIndex, int colIndex,
+                        ListStore&lt;FlexibleElementDTO&gt; store, Grid&lt;FlexibleElementDTO&gt; grid) { 
+                   
+                   /**
+                   if (ElementTypeEnum.DEFAULT.equals(model.getElementType())){
+                        
+                        //System.out.println(&quot;Property ::: &quot;+property);
+                        //System.out.println(&quot;Model Properties :::: &quot;+model.getLabel());
+                        //System.out.println(&quot;Model ::: &quot;+model);
+                        //System.out.println(&quot;Model Properties :::: &quot;+model.getContainerModel().getProperties().toString());
+                        
+                        return AdminUtil.createGridText(&quot;DEFAULT_CASE&quot;);
+                   }else{
+                   **/
+                        BaseModelData container = model.getContainerModel();
+                        return AdminUtil.createGridText((String)container.get(&quot;name&quot;));
+                        
+                   //}
+              
+              
+              }
+         
+        }); 
+         configs.add(column);
+         
+         column = new ColumnConfig(&quot;group&quot;,I18N.CONSTANTS.adminFlexibleGroup(), 200);   
+         column.setRenderer(new GridCellRenderer&lt;FlexibleElementDTO&gt;(){
+
+              @Override
+              public Object render(final FlexibleElementDTO model, String property,
+                        ColumnData config, int rowIndex, int colIndex,
+                        ListStore&lt;FlexibleElementDTO&gt; store, Grid&lt;FlexibleElementDTO&gt; grid) { 
+                        
+                        LayoutGroupDTO group = model.getGroup();
+                        return AdminUtil.createGridText((String)group.get(&quot;title&quot;));
+              }         
+        }); 
+         configs.add(column);
+         
+         
          ColumnModel cm = new ColumnModel(configs);
          Grid&lt;FlexibleElementDTO&gt; grid = new Grid&lt;FlexibleElementDTO&gt;(fieldsStore, cm);
          grid.setStyleName(&quot;global-export-fields-table&quot;);
-         grid.setSize(250, 200);
+         grid.setSize(500, 200);
          grid.getView().setForceFit(true);
          return grid;
     }
</pre></span>
</td></tr><tr align="center"><td align="center" colspan="6"><table><tr class="vcenter"><td class="center"></td><td class="center"></td><td class="center"></td><td class="center"></td></tr></table></td></tr></table><br />

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
<tr class="bugnote" id="c1391">
        <td class="bugnote-public">
				<span class="small">(<a href="viewa38c.html?id=580#c1391" title="Direct link to note">0001391)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2014-03-12 11:42</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Replies to jason90 questions (<a href="https://groups.google.com/d/msg/sigmah-dev/w4wXPXs4Scg/25O5QrOMZsUJ">https://groups.google.com/d/msg/sigmah-dev/w4wXPXs4Scg/25O5QrOMZsUJ</a> [<a href="https://groups.google.com/d/msg/sigmah-dev/w4wXPXs4Scg/25O5QrOMZsUJ" target="_blank">^</a>] ) as Additionnal information.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1392">
        <td class="bugnote-public">
				<span class="small">(<a href="viewa38c.html?id=580#c1392" title="Direct link to note">0001392)</a></span><br />
		<a href="view_user_page76a2.html?id=72">ZamZam</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-03-12 17:24</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		I am new to the sigmah community. I have setup my developers environment. and I have attached a patch (issue580.patch) for this issue. please review my patch. and tell me if this solves the issue.Thanks.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1449">
        <td class="bugnote-public">
				<span class="small">(<a href="viewa38c.html?id=580#c1449" title="Direct link to note">0001449)</a></span><br />
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-06-24 13:38</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Patch by ZamZam : Add a Group and a Container columns to Global export configuration fields table. (fixes issue <a href="viewa38c.html?id=580" title="[closed] Add a Group and a Container columns to Global export configuration fields table" class="resolved">0000580</a>)<br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/ui/GlobalExportSettingsForm.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java<br />
Modified : /trunk/sigmah/src/main/webapp/WEB-INF<br />
	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1663">
        <td class="bugnote-public">
				<span class="small">(<a href="viewa38c.html?id=580#c1663" title="Direct link to note">0001663)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-05-04 09:39</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue closed because correct behavior checked on v2.0-rc1.<br />
<br />
Congratulations ZamZam !!	</td>
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
		2013-06-27 12:52	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		New Issue	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-03-08 20:21	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Tag Attached: NewComersSpecial	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-03-11 09:34	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; jason90	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-03-11 09:34	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-03-12 11:42	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001391	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-03-12 11:42	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Additional Information Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_pagea603.php?rev_id=454#r454">View Revisions</a>	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-03-12 17:21	</td>
	<td class="small-caption">
		<a href="view_user_page76a2.html?id=72">ZamZam</a>	</td>
	<td class="small-caption">
		File Added: issue580.patch	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-03-12 17:24	</td>
	<td class="small-caption">
		<a href="view_user_page76a2.html?id=72">ZamZam</a>	</td>
	<td class="small-caption">
		Note Added: 0001392	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-03-12 17:26	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		jason90 =&gt; ZamZam	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-24 13:38	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Checkin	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-06-24 13:38	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Note Added: 0001449	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-24 13:38	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; resolved	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-06-24 13:38	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		open =&gt; fixed	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-24 14:05	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		next-but-one =&gt; 2.0	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-05-04 09:39	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001663	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-05-04 09:39	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		resolved =&gt; closed	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-05-04 09:39	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Fixed in Version	</td>
	<td class="small-caption">
		 =&gt; 2.0	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-03-03 09:39	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Tag Renamed	</td>
	<td class="small-caption">
		NewComersSpecial =&gt; LowHangingFruits	</td>
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

<!-- Mirrored from www.sigmah.org/issues/view.php?id=580&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:07:42 GMT -->
</html>
