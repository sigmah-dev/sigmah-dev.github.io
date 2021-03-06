<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=605 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:09:28 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:37:05 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000605: Resumable transfer of files - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000605</td><td class="print">sigmah</td><td class="print">[All Projects] General</td><td class="print">public</td><td class="print">2013-08-02 16:53</td><td class="print">2015-04-03 16:48</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">spM</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">feature</td><td class="print-category">Reproducibility</td><td class="print">N/A</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">1.1.1</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0</td><td class="print-category">Fixed in Version</td><td class="print">2.0</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000605: Resumable transfer of files</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">In context where the Internet connection is weak, the connection is often not very stable neither. This means that it may take for example 10 minutes to slowly upload a file until a micro-shutdown of the connection interrupts the transfer before its end, and the whole upload needs to be started from scratch once again. A solution to be able to pause the uploading of files when there is no more connection should be found.</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5">Look at this mockup to see how the resume of file transfer could be controled: <a href="mockups/OfflineMode/index.html">http://www.sigmah.org/issues/mockups/OfflineMode/</a> [<a href="mockups/OfflineMode/index.html" target="_blank">^</a>]</td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5">No tags attached.</td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr><td class="print"><span class="nowrap">child of</span>&#160;</td><td class="print">0000633</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td class="print">Background transfer of files&#160;</td></tr></table></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2013-08-02 16:53</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2013-10-02 10:41</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; tharindum</td></tr><tr class="print"><td class="print">2013-10-02 10:41</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2014-02-14 16:04</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print">tharindum =&gt; </td></tr><tr class="print"><td class="print">2014-02-14 16:04</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">assigned =&gt; new</td></tr><tr class="print"><td class="print">2014-06-05 11:02</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; spM</td></tr><tr class="print"><td class="print">2014-06-05 11:02</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2014-06-10 18:11</td><td class="print"><a href="view_user_page3162.html?id=26">spM</a></td><td class="print">Note Added: 0001423</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-13 16:52</td><td class="print"><a href="view_user_page23df.php?id=74">jbriand</a></td><td class="print">Note Added: 0001425</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-19 01:48</td><td class="print"><a href="view_user_page3162.html?id=26">spM</a></td><td class="print">Note Added: 0001431</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-23 16:56</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001438</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-23 17:58</td><td class="print"><a href="view_user_page3162.html?id=26">spM</a></td><td class="print">Note Added: 0001441</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-25 09:43</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001468</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-25 10:09</td><td class="print"><a href="view_user_page3162.html?id=26">spM</a></td><td class="print">Note Added: 0001470</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-25 11:29</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001471</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-25 11:30</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000528</td></tr><tr class="print"><td class="print">2014-08-28 17:31</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001498</td><td class="print"></td></tr><tr class="print"><td class="print">2014-08-29 17:50</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">child of 0000633</td></tr><tr class="print"><td class="print">2014-08-29 17:50</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship deleted</td><td class="print">related to 0000528</td></tr><tr class="print"><td class="print">2014-08-29 17:52</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Summary</td><td class="print">Background and robust uploading of files =&gt; Resumable transfer of files</td></tr><tr class="print"><td class="print">2014-08-29 17:52</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=475#r475</td></tr><tr class="print"><td class="print">2014-08-29 17:52</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=477#r477</td></tr><tr class="print"><td class="print">2015-04-03 16:48</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001568</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-03 16:48</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">assigned =&gt; closed</td></tr><tr class="print"><td class="print">2015-04-03 16:48</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2015-04-03 16:48</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0</td></tr></table>
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
				(0001423)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page3162.html?id=26">spM</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-06-10 18:11&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				I am currently working on this issue, and Olivier asked me to post my technical questions to this thread for record.<br />
<br />
So I am currently ready with a prototype of the protocol that I had proposed in my GSoC proposal, the current frontend client is written using jquery and works perfectly file with the latest Firefox and Chrome browsers (all browsers which have the HTML5 FileAPI implemented) , and the backend interactions are handled by nodejs.<br />
<br />
So now my task is to port it into Sigmah. I wanted to include jquery and my fileAPI interactions using jquery code using the Java Native Interface (JNI) provided by GWT directly, and then write a servlet which handles the bakend interactions according to the protocol.<br />
<br />
So, is it accepted according to the Sigmah coding principles if I want to include the whole of jquery and some extra raw jquery code into the pages ?			</td>
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
				(0001425)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page23df.php?id=74">jbriand</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-06-13 16:52&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				I am not really keen on using jquery within GWT. An it's normally not the purpose of GWT.<br />
<br />
Why don't you implement your solution in classique gwt ? Is there any feature in jquery you cannot render with GWT ?			</td>
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
				(0001431)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page3162.html?id=26">spM</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-06-19 01:48&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Hi jbriand,<br />
<br />
I understand, but for now I have written an implementation of the feature using just jquery in clientside and nodejs on backend, so I was hoping if it was okay to have a part of the clientside code in jquery.<br />
<br />
And I mainly wanted to use the HTML5 File API, upon more research I found this implementation (<a href="https://code.google.com/p/lib-gwt-file/">https://code.google.com/p/lib-gwt-file/</a> [<a href="https://code.google.com/p/lib-gwt-file/" target="_blank">^</a>]) which looks promising. I will be building around this to implement the client side interactions if its a strong no for jquery.<br />
Thanks for your inputs :)			</td>
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
				(0001438)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-06-23 16:56&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				I've tested your Proof-Of-Concept on <a href="http://web.iiit.ac.in:11988/demo/index.html">http://web.iiit.ac.in:11988/demo/index.html</a> [<a href="http://web.iiit.ac.in:11988/demo/index.html" target="_blank">^</a>] .<br />
Result of my test of an upload of 25MB file:<br />
- 1rst unplug of my network cable after 15% of the file uploaded: when I have replugged the cable, the progression bar has come back to 1% (or 0?)<br />
- 2nd unplug of my network cable after 30% of the file uploaded: I had a javascript alert message informing me that there has been an error while I was offline<br />
<br />
Have you also experienced those 2 cases?			</td>
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
				(0001441)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page3162.html?id=26">spM</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-06-23 17:58&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				osarrat : We I had tested it disconnection gaps of upto 10minutes, and it still works for me, I would still have a look at it from different connections and get back to you on this. Maybe I should implement better logs on the server side of the implementation to figure out what could be the issue behind these errors.			</td>
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
				(0001468)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-07-25 09:43&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				spM, I would have a suggestion about the design of the technical reply for this feature request. Could we imagine to have a higher-level solution than the one you propose? A service which would chunk files in small pieces on the client side and build back the original files from the pieces on the server side?<br />
rcalabro, how should such a service be designed to be reused for the offline mode?			</td>
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
				(0001470)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page3162.html?id=26">spM</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-07-25 10:09&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				osarrat : For now I do the same thing. I use the HTML5 File API to chunk a big file into small parts and upload individual parts one by one marked by an ID which says which file these chunks belong to and the offset. Then on the server side, the servlet is receiving these chunks and combining them into the original file. <br />
(For now, I am testing using CURL on the servlet I have written and it works great !!) <br />
But when simulating really bad connections with faux disconnections in between....then sometimes things mess up because of GWT RPC disconnections :'( <br />
<br />
So for that, my current approach which I am looking at, is to set a custom timeout for the GWT RPC connections I will be using, and then in case of the GWT RPC timeout, I simply try doing it again.<br />
(Reference : <a href="https://groups.google.com/forum/#!topic/google-web-toolkit/EZYMKOGi2es">https://groups.google.com/forum/#!topic/google-web-toolkit/EZYMKOGi2es</a> [<a href="https://groups.google.com/forum/#!topic/google-web-toolkit/EZYMKOGi2es" target="_blank">^</a>] )			</td>
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
				(0001471)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-07-25 11:29&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Good !<br />
And regarding link with the offline mode (issue <a href="viewcb7b.html?id=528" title="[closed] Offline mode" class="resolved">0000528</a>), best would be to have a good API on the work you do so that the file stream which will be used for synchronization will also be able to use your work and resist to bad connections.			</td>
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
				(0001498)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-08-28 17:31&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				spM, a full mockup of the offline mode including file transfer has just been published. It could give you hint on how the whole thing could be integrated in Sigmah v2.0-rc1 by the end of September if possible.<br />
Your work in this could be to extend your code to make it work both for uploads and downloads and plug it to this GUI. Does it seem feasible for you in time for v2.0-rc1 ?<br />
<a href="mockups/OfflineMode/index.html">http://www.sigmah.org/issues/mockups/OfflineMode/</a> [<a href="mockups/OfflineMode/index.html" target="_blank">^</a>]			</td>
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
				(0001568)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-04-03 16:48&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because correct behavior checked on v2.0-rc1.<br />
The resume of file transfers is automatic and not manual, but the behavior is well replying to the need.			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=605 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:09:28 GMT -->
</html>
