<?php
session_start();
if(!session_is_registered('login')){
header("location:../index.php");
}
/////////////////////// UPLOAD Newsletter Images END
include('../inc/updateSeminar.php');
/////////////////////////////////////////////////////
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Invitations / Seminars Module - VETA</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<!-- Add images and text Start -->
<script src='multiFileUp/jquery.js' type="text/javascript"></script>
<script src='multiFileUp/documentation.js' type="text/javascript"></script>
<!-- -->
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
		mode : "textareas",
		theme : "simple"
	});
</script>
<!-- / TinyMCE End -->
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<style type="text/css">
<!--
.style16 {color: #009900}
.style17 {color: #0033FF}
.style18 {color: #CC6600}
-->
</style>
</head>

<body onload="MM_preloadImages('images/estructurainvi1.png')">
<?php
if (!isset($go))
{ 
?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="1000" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF" class="bordes">
    <tr>
      <td colspan="3" valign="top"><table width="100%" border="0">
        
        <tr>
          <td width="0"><img src="images/logomodulo.gif" width="194" height="106" align="absmiddle" /></td>
          <td width="0"><h1 align="center">Invitations MODULe  VETA</h1></td>
          <td width="0" align="right" valign="middle"><a href="../menu.php"><img src="images/boton1.png" width="155" height="50" border="0" /></a><a href="../logout.php"><img src="images/logout.png" width="134" height="50" border="0" /></a></td>
        </tr>
      </table></td>
    </tr>
    
    <tr>
      <td width="0" valign="top"><fieldset>
      <legend class="style2 style18">Date </legend>
      <p>
        <input type="text" name="date" id="date" value="<?php echo $date; ?>" />
      </p>
      </fieldset></td>
      <td width="0" valign="top"><fieldset>
      <legend class="style3 style17">Title 1</legend>
      <p class="style3 style17">
        <input type="text" name="title1" id="title1" value="<?php echo $titleOne; ?>" />
      </p>
      </fieldset></td>
      <td width="0" rowspan="4" valign="top"><fieldset>
        <legend>Framework</legend>
        <h6><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','images/estructurainvi1.png',1)"><img src="images/estructurainvi.png" name="Image1" width="495" height="737" border="0" id="Image2" /></a></h6>
      </fieldset>      </td>
    </tr>
    <tr>
      <td valign="top"><fieldset>
      <legend class="style4 style16">Spanish</legend>
      <p>
        <textarea name="text1" cols="45" rows="20" id="text1"><?php echo $textOne; ?></textarea>
      </p>
      </fieldset></td>
      <td valign="top"><fieldset>
      <legend class="style5">English</legend>
      <p>English
        <textarea name="text2" cols="45" rows="20" id="text2"><?php echo $textTwo; ?></textarea>
      </p>
      </fieldset></td>
    </tr>
    
    <tr>
      <td valign="top"><fieldset>
      <legend class="style5">Portuguese</legend>
      <p>
        <textarea name="text_br" cols="45" rows="20" id="text_br"><?php echo $text_br; ?></textarea>
      </p>
      </fieldset></td>  
      <td valign="top"><fieldset>
      <legend class="style13">Area 3</legend>
      <p>Title 3
        <input type="text" name="title3" id="title3" value="<?php echo $titleThree; ?>"/>
      </p>
      Image 3: <?php echo $imageThree; ?><br  />
      <p>Image 3
        <input type="file" class="multi max-1 accept-" accept="gif|jpg|png" name="brImgs3[]" id="brImgs3" size="20"/>
        <input name="brImgsPath" type="hidden" id="brImgsPath" value="../../images/seminars/" />
      </p>
      <p>Text 3
        <textarea name="text3" cols="45" rows="5" id="text3"><?php echo $textThree; ?></textarea>
      </p>
      </fieldset></td>
    </tr>
      <tr>
      <td valign="top"><fieldset>
      <legend><span class="style15 style15">Area 4</span></legend>
      <p>Title 4
        <input type="text" name="title4" id="title4" value="<?php echo $titleFour; ?>" />
      </p>
      Image 4: <?php echo $imageFour; ?><br />
      <p>Image 4
        <input type="file" class="multi max-1 accept-" accept="gif|jpg|png" name="brImgs4[]" id="brImgs4" size="20"/>
        <input name="brImgsPath" type="hidden" id="brImgsPath" value="../../images/seminars/" />
      </p>
      <p>Text 4
        <textarea name="text4" cols="45" rows="5" id="text4"><?php echo $textFour; ?></textarea>
      </p>
      </fieldset></td>
          <td>&nbsp;</td>    
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td height="50" colspan="3" align="center" valign="middle">
      <input name="submit" style="cursor:pointer;" type="submit" class="boton" id="submit" value="" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php } ?>
