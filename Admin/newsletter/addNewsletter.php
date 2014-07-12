<?php
session_start();
/////////////////////// UPLOAD Newsletter Images END
$go = $_POST['submit'];
//echo "Button Clicked... ".$go."<br />";
if (isset($go))
{
//////////////////////////////////////////////////////
include('../inc/insertNewsletter.php');
/////////////////////////////////////////////////////
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #666666;
}
legend {
	font-size: 14px;
	font-weight: bold;
	color: #990000;
	text-decoration: none;
}
-->
</style>
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
</head>

<body>
<?php
if (!isset($go))
{ 
?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="1000" border="0" align="center" cellpadding="4" cellspacing="4">
    <tr>
      <td width="0" valign="top"><fieldset>
      <legend><strong>Area 1</strong></legend>
      <p>Title 1 
        <input type="text" name="title1" id="title1" />
      </p>
      <p>Text 1 
        <textarea name="text1" id="text1" cols="45" rows="5"></textarea>
      </p>
      </fieldset>      </td>
      <td width="0" valign="top"><fieldset>
      <legend><strong>Area 2</strong></legend>
      <p>Title 2
        <input type="text" name="title2" id="title2" />
      </p>
      <p>Images 
        <input type="file" class="multi max-3 accept-" accept="gif|jpg|png" name="brImgs2[]" id="brImgs2" size="20"/>
        <input name="brImgsPath" type="hidden" id="brImgsPath" value="images/Newsletter/" />
	  </p>
      </fieldset>      </td>
      <td width="0" valign="top"><fieldset>
      <legend><strong>Area 3</strong></legend>
      <p>Title 3 
        <input type="text" name="title3" id="title3" />
        </p>
       <p>Image 3 
        <input type="file" class="multi max-1 accept-" accept="gif|jpg|png" name="brImgs3[]" id="brImgs3" size="20"/>
        <input name="brImgsPath" type="hidden" id="brImgsPath" value="images/Newsletter/" />
	  </p>
      <p>Text 3 
        <textarea name="text3" cols="45" rows="5" wrap="virtual" id="text3"></textarea>
      </p>
      </fieldset>      </td>
    </tr>
    <tr>
      <td valign="top"><fieldset>
      <legend><strong>Area 4</strong></legend>
      <p>Title 4
        <input type="text" name="title4" id="title4" />
      </p>
      <p>Image 4 
        <input type="file" class="multi max-1 accept-" accept="gif|jpg|png" name="brImgs4[]" id="brImgs4" size="20"/>
        <input name="brImgsPath" type="hidden" id="brImgsPath" value="images/Newsletter/" />
	  </p>
      <p>Text 4
        <textarea name="text4" cols="45" rows="5" wrap="virtual" id="text4"></textarea>
      </p>
      </fieldset></td>
      <td valign="top"><fieldset>
      <legend><strong>Area 5</strong></legend>
      <p>Title 5
        <input type="text" name="title5" id="title5" />
      </p>
      <p>Image 5 
        <input type="file" class="multi max-1 accept-" accept="gif|jpg|png" name="brImgs5[]" id="brImgs5" size="20"/>
        <input name="brImgsPath" type="hidden" id="brImgsPath" value="images/Newsletter/" />
	  </p>
      <p>Text 5
        <textarea name="text5" cols="45" rows="5" wrap="virtual" id="text5"></textarea>
      </p>
      </fieldset></td>
      <td valign="top"><fieldset>
      <legend><strong>Area 6</strong></legend>
      <p>Title 6
        <input type="text" name="title6" id="title6" />
      </p>
      <p>Text 6
        <textarea name="text6" cols="45" rows="5" wrap="virtual" id="text6"></textarea>
      </p>
      <p>&nbsp;</p>
      </fieldset>
      <h6>&nbsp;</h6></td>
    </tr>
    <tr>
      <td valign="top"><fieldset>
      <legend>Area 7</legend>
      <p>Title 7
        <input type="text" name="title7" id="title7" />
      </p>
      <p>Image 7 
        <input type="file" class="multi max-1 accept-" accept="gif|jpg|png" name="brImgs7[]" id="brImgs7" size="20"/>
        <input name="brImgsPath" type="hidden" id="brImgsPath" value="images/Newsletter/" />
	  </p>
      <p>Text 7
        <textarea name="text7" cols="45" rows="5" wrap="virtual" id="text7"></textarea>
      </p>
      </fieldset></td>
      <td valign="top"><fieldset>
      <legend>Area 8</legend>
      <p>Title 8
        <input type="text" name="title8" id="title8" />
      </p>
      <p>Image 8 
        <input type="file" class="multi max-1 accept-" accept="gif|jpg|png" name="brImgs8[]" id="brImgs8" size="20"/>
        <input name="brImgsPath" type="hidden" id="brImgsPath" value="images/Newsletter/" />
	  </p>
      <p>Text 8
        <textarea name="text8" cols="45" rows="5" wrap="virtual" id="text8"></textarea>
      </p>
      </fieldset></td>
      <td valign="top"><fieldset>
      <legend>Area 9</legend>
      <p>Title 9
        <input type="text" name="title9" id="title9" />
      </p>
      <p>Image 9
        <input type="file" class="multi max-1 accept-" accept="gif|jpg|png" name="brImgs9[]" id="brImgs9" size="20"/>
        <input name="brImgsPath" type="hidden" id="brImgsPath" value="images/Newsletter/" />
	  </p>
      <p>Text 9
        <textarea name="text9" cols="45" rows="5" wrap="virtual" id="text9"></textarea>
      </p>
      </fieldset></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top"><input type="submit" name="submit" style="cursor:pointer;" id="submit" value="Preview" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php 
}
?>