<?php
//////////////////////////////////////////////////////
	//include("../inc/insertNewsletter.php");
/////////////////////////////////////////////////////
?>
<link href="../styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="instantedit.js"></script>
 <!-- Insert Form Starts -->
<!-- Insert Form Starts -->
 <!-- Insert New Stockist Start -->
<!-- -->
	<script src='multiFileUp/jquery.js' type="text/javascript"></script>
	<script src='multiFileUp/documentation.js' type="text/javascript"></script>
 <link href='multiFileUp/documentation.css' type="text/css" rel="stylesheet"/>
 <!--// code-highlighting //-->
	<script type="text/javaScript" src="/jquery/project/chili/jquery.chili-2.0.js"></script> 
	<!--///jquery/project/chili-toolbar/jquery.chili-toolbar.pack.js//-->
 <script type="text/javascript">try{ChiliBook.recipeFolder="/jquery/project/chili/"}catch(e){}</script>
 <!--// plugin-specific resources //-->
 <script src='multiFileUp/jquery.form.js' type="text/javascript" language="javascript"></script>
	<script src='multiFileUp/jquery.MetaData.js' type="text/javascript" language="javascript"></script>
 <script src='multiFileUp/jquery.MultiFile.js' type="text/javascript" language="javascript"></script>
 <script src='multiFileUp/jquery.blockUI.js' type="text/javascript" language="javascript"></script>
<!-- -->
  <link href="../styles.css" rel="stylesheet" type="text/css" />
  
<!-- TinyMCE Start -->
<!-- Load jQuery -->
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
        google.load("jquery", "1.3");
</script>
<!-- Load jQuery build -->
<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
        mode : "textareas",
        theme : "advanced",
        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

        // Theme options
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Skin options
        skin : "o2k7",
        skin_variant : "silver",

        // Example content CSS (should be your site CSS)
        content_css : "css/example.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "js/template_list.js",
        external_link_list_url : "js/link_list.js",
        external_image_list_url : "js/image_list.js",
        media_external_list_url : "js/media_list.js",

        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
});
</script>

<!-- / TinyMCE End -->
 <div id="insertBrand">
		
		<form action='<?php $_SERVER['PHP_SELF'];?>' method='POST' enctype="multipart/form-data">
		  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="admin_titu">
      <tr>
                <td><h1 align="left">&nbsp;&nbsp;&nbsp;Create a New Newsletter....</h1></td>
              </tr>
            </table>
		  <div align="center">
         <textarea name="content" style="width:100%"></textarea>
          </div>
   </form>
 </div>

