<?php  
/////////////// Login Section Start ///////////////
$login = $_POST['LoginName'];
//
$passwd = $_POST['Password'];
//
$submit = $_POST['login']; 
if (isset($submit)) {
	/////
	//require_once('inc/login.php');
}
/////////////// Login Section End ///////////////
/////////////// Send Email Function Start ///////////////
	$name = $_POST["name"];
	$email = $_POST["email"];	
////////////////////////////	
	$send = $_POST["submit"];
	//echo "lalalala ".$send."<br />";
////////////////////////////
if (isset($send)) {
	$sendTo = "aquitania99@gmail.com";
	$subject = "Request From the Website To Get VETA's Newsletter";
	$headers = "From: ".$email;
	$headers .= "<".$email.">\r\n";
	$headers .= "Reply-To: ".$email."\r\n"; 
	$message = "
			   From : $name \n
			   Email Address: $email \n
			   Subject : $subject \n\n\n";
	mail($sendTo, $subject, $message, $headers);
	}
/////////////// Send Email Function End ///////////////
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template VETA espanolnew.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../../images/favicon.ico" >
<!-- InstanceBeginEditable name="doctitle" -->
<title>Programas Tecnicos en Australia</title>
<meta name="description" content="Cursos de inglés general, académico y negocios, preparación para IELTS, diferentes colegios y ciudades en Australia que se ajustan a tu presupuesto" />
<!-- InstanceEndEditable -->
<meta name="keywords" content="Cursos de ingles en Australia, Universidades en Australia, Cursos tecnológicos en Australia, Escuelas vocacionales en Australia, Vivir en Australia, Estudiar en Australia, Trabajar en Australia, Migrar a Australia, Visas para Australia, Visa de estudiante, Viajar por Australia, Estudiar ingles en Australia, extensión visa de estudiante en Australia, Patrocinio de trabajos en Australia,  Australia, Carreras Tecnicas en Australia, Maestrias en Australia, Estudios Universitarios de Pregrado y Posgrado en Australia, migración a Australia, visa para Australia, residencia permanente, Preparación IELTS, Pregrado en Australia, Posgrado en Australia, para trabajar en australia, visa de trabajo para australia, visas de trabajo en australia, visa trabajo australia, visa de trabajo australia, como conseguir trabajo en australia, como buscar trabajo en australia, ofertas de trabajo australia, vivir en australia, cursos de inglés en australia, estudiar y trabajar australia, australia estudiar y trabajar, oferta de trabajo en australia, encontrar trabajo en australia, conseguir trabajo en australia, estudie en australia, estudiar inglés australia, estudia en australia, becas para estudiar en australia, estudios en australia, estudiar en australia becas, estudio en australia, estudiar en australia, estudios australia, beca para estudiar en australia, estudio australia, becas estudiar australia, estudia australia, cursos en australia, study in australia, estudiar en el exterior, escuelas de ingles australia, inglés australia
estudiar ingles en, visas para australia, work in australia, visa para australia, inglés en australia, becas estudiar ingles, maestria en australia
australia visas, empleo en australia, work and travel australia, aprender ingles australiano, clase de ingles, visa en australia, universidades de australia, becas para australia, visas a australia, emigrar en australia, clases ingles, trabajar en el extranjero, estudiar de ingles, visa estudiante australia, empleos en australia, australia universidades, quiero estudiar ingles, trabajo en el extranjero, aprende ingles en, migracion a australia, visa de estudiante en australia, visa de estudios, australiano en ingles, migración australia, visa para viajar a australia, residencia en australia, visa de estudiante australia, emigra a australia, universidades australia, institutos de ingles en, viajar a australia, visa turista para australia"/>

<script type="text/javascript" src="../../js/jquery.min.js"></script>
       
<script type="text/javascript" src="../../js/flowplayer-3.2.6.min.js"></script>
<link href="../../style.css" rel="stylesheet" type="text/css" />
<!-- jQuery - the core -->
        <!-- Sliding Effect Scripts Start --> 
        <script src="../../js/jquery-1.4.3.min.js" type="text/javascript"></script> 
        <script src="../../js/slide.js" type="text/javascript"></script> 
        <!-- Sliding Effect Scripts End --> 
		<!-- Slideshow Start -->
		<link href="../../css/nivo-slider.css" rel="stylesheet" type="text/css" />
		<link href="../../css/slide.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="../../js/jquery.nivo.slider.pack.js"></script>
		<!-- slideshow End -->
                <script src="../../js/livevalidation_standalone.js" type="text/javascript"></script>
                <link href="../../css/validateForm.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {color: #CC0000}
.style3 {color: #1F1D5D}
.style4 {color: #8CA3D1}
.style5 {color: #000000}
-->
.newsRegistryText {
	color: #FFF;
	font-style: italic;
	display: block;
	text-align: center;
	padding-top: 1em;
	padding-bottom: 1em;
	font-size: 16px;
	width: 200px;
	margin: auto;
}
.newsRegistryButton {
	width: 201px;
	height: 29px;
	background-image: url('../../images/Estudia-Trabaja-en-Australia-newsletter-registro.png');
	background-repeat: no-repeat;
	margin: auto;
	bottom: 0;
	cursor: pointer;
	margin-top:5px;
}
.newsRegistryButton:hover {
	background-position: 0 -29px;
}
.newsRegistryButton a {
	width: 201px;
	height: 29px;
	display:block;
}
.newsRegistrySpot {
	width:100%; 
	height:187px; 
	display:block; 
	margin:0 auto; 
	background-image: url('../../images/bgsuscribete1.jpg');
}
</style>
</style>
<!-- GOOGLE ANALYTICS SCRIPT START -->   
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26926972-1']);
  _gaq.push(['_setDomainName', 'australiaveta.com.au']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- GOOGLE ANALYTICS SCRIPT END -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href="../../stilos-menu.css" rel="stylesheet" type="text/css" />
<!-- Campañas de AdWords SCRIPT -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26926972-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- Campañas de AdWords SCRIPT END -->
</head>
<body>
<!-- Start Alexa Certify Javascript -->
<script type="text/javascript" src="https://d31qbv1cthcecs.cloudfront.net/atrk.js"></script><script type="text/javascript">_atrk_opts = { atrk_acct: "j0vQf1agwt00w/", domain:"australiaveta.com.au"}; atrk ();</script><noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=j0vQf1agwt00w/" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->
<!-- Top Slide Bar Start -->
<!-- Login TAB STUFF -->
            <!-- Login Panel Start -->
            <div id="toppanel">
                    <div id="panel">
                            <div class="content clearfix">
                                    <div class="left">
                                            <h1>Bienvenidos a Australia VETA</h1>
                                            <h2>secci&oacute;n Miembros</h2>		
                                            <p class="grey">Ofrecemos Oportunidades para Estudiantes, Profesionales e Inmigrantes.<br /><br />
                                              Viva, Estudie y Trabaje en Australia<br />
                     
                                              <br />
            <strong style="color:#FFF;">Llamanos Hoy!!</strong><br />
            <br />
           
                                      </p>
            </div>
                                    <div class="left">
                                            <!-- Login Form Start -->
                                            <form action="../../inc/login.php" method="post" name="login" id="login" target="_blank" class="clearfix">
                                                    <h1>Member Login</h1>
                                                    <label class="grey" for="LoginName">Username:</label>
                                                    <input class="field" type="text" name="LoginName" id="LoginName" value="" title="Please type the email registered with us" size="23" />
                                                    <label class="grey" for="Password">Password:</label>
                                                    <input class="field" type="password" name="Password" id="Password" title="Please type in your password" size="23" />
                                            <div class="clear"></div>
                                <div style="position:absolute; float:right"> <!-- Added as test - 16/05/2011 2:30pm -->
                                                    <input type="submit" name="login" value="Login" class="bt_login" />
                                </div>
                                      </form>
                                            <script src="../../js/login-tab.js" type="text/javascript"></script>
                            <!-- Login Form End -->
                  </div>
                                    <div class="left right">			
                                            <!-- Register Form Start --><!-- Register Form End -->
                                    </div>
                            </div>
            </div> <!-- /login -->	
                    <!-- The tab on top -->	
                    <div class="tab content" >
                <div id="login-button">
                            <ul class="login">
                              <li id="toggle">
                                      <a id="open" class="open" href="#" style="text-decoration:none">Login</a>
                                      <a id="close" style="display: none;" class="close" href="#">Close</a>			
                                    </li>
                            </ul> 
                    </div>
                    </div> 
                    <!-- / top -->

            </div> 
            <!-- / Login Panel End -->
            <!-- / Login TAB STUFF -->
<!-- Top Slide Bar End -->
<div id="area2">
<div id="box">
  <div id="logo"><a href="../viva-estudie-y-trabaje-en-australia.php"><img src="../../images/logo.gif" alt="Logo VETA-Viva Estudie y Trabaje en Australia" width="193" height="112" border="0" /></a></div>
  <div id="call"><img src="../../images/call_esp.gif" alt="Para consultas sobre como estudiar en Australia llamenos al +61 2 9299 14 58" title="Para consultas sobre como estudiar en Australia llamenos al +61 2 9299 14 58" width="211" height="72" border="0" usemap="#Map" />
<map name="Map" id="Map">
  <area shape="rect" coords="149,49,178,72" href="../../index.php" alt="Select your Language English" title="Select your Language English" />
  <area shape="rect" coords="180,48,210,73" href="../../portugues/live-estudo-e-trabalho-na-australia.php" alt="Selecione seu idioma - Portugues" title="Selecione seu idioma - Português" />
<area shape="rect" coords="121,50,149,70" href="../viva-estudie-y-trabaje-en-australia.php" alt="Seleccione su idioma - Español" title="Seleccione su idioma - Español" />
</map></div>
  <div id="menu"><div class="curved" id="content">
<div id="menuprincipal">
	<ul class="nav">
    	<li></li>
    	<li><a href="../viva-estudie-y-trabaje-en-australia.php" title="">INICIO</a>
      	</li>
        <li><img src="../../images/sep.gif" width="1" height="36" /></li>
  		<li><a href="#" title="">ESTUDIOS EN AUSTRALIA</a>
        	<ul>
            	<li><a href="cursos-de-ingles-en-australia.php" title="">CURSOS DE INGL&Eacute;S</a>
                </li>
          		<li><a href="programas-tecnicos-en-australia.php" title="">PROGRAMAS T&Eacute;CNICOS</a>
                </li>
                <li><a href="universidades-en-australia.php" title="">ESTUDIOS UNIVERSITARIOS</a>
                </li>
        	</ul>
        </li>
        <li><img src="../../images/sep.gif" width="1" height="36" /></li>
      	<li><a href="#" title="">VISAS PARA AUSTRALIA</a>  
        <ul>
            	<li><a href="../visas-para-australia/visa-de-estudio-para-australia.php" title="">VISA DE ESTUDIO</a>
                </li>
          		<li><a href="../visas-para-australia/visa-de-trabajo-para-australia.php" title="">VISA DE TRABAJO</a>
                </li>
        	</ul>    
        </li>
        <li><img src="../../images/sep.gif" width="1" height="36" /></li>
      	<li><a href="../vivir-en-australia.php" title="">VIVIR EN AUSTRALIA</a>
        </li>
        <li><img src="../../images/sep.gif" width="1" height="36" /></li>
      	<li><a href="#" title="">CONT&Aacute;CTENOS</a>
			<ul>
			  <li><a href="../consultores-de-educacion-en-australia.php">CONSULTORES</a></li>
              <li><a href="../contactenos.php">ESCRIBANOS</a></li>
            </ul>        
        </li>
        <li><img src="../../images/sep.gif" width="1" height="36" /></li>
      	<li><a href="../testimonios-de-estudiantes-en-australia.php" title="">TESTIMONIOS</a>
        </li>
	</ul>
</div>
</div></div>
  <div id="flashhomebanners">
    <div id="slider" class="nivoSlider"> 
    <img src="../../images/oficina-bogota-colombia-veta-education.jpg" alt="Nueva oficina en Bogota - Colombia VETA consultores en educacion para Australia" />
    <img src="../../images/Aplica-a-tu-visa-con-nosotros-y-obten-un-Trabajo-Profesional-y-la-Residencia-Australiana.jpg" alt="Aplica a tu visa con nosotros y obten un Trabajo Profesional y la Residencia Australiana" />  
    <img src="../../images/oficina-bogota-colombia-veta-education.jpg" alt="Nueva oficina en Bogota - Colombia VETA consultores en educacion para Australia" />   
    <img src="../../images/banner3mayo.jpg" alt="Studying hospitality or cookery in Australia" />
    <img src="../../images/oficina-bogota-colombia-veta-education.jpg" alt="Nueva oficina en Bogota - Colombia VETA consultores en educacion para Australia" />
    <img src="../../images/banner2mayo.jpg" alt="Who is Veta" /> 
    <img src="../../images/oficina-bogota-colombia-veta-education.jpg" alt="Nueva oficina en Bogota - Colombia VETA consultores en educacion para Australia" />
    <img src="../../images/bannerservicios.jpg" alt="Servicios" />
    </div>
    <script type="text/javascript">
                    $(window).load(function() {
                       $('#slider').nivoSlider({
                        effect:'boxRainGrow', // Specify sets like: 'fold,fade,sliceDown'
                        slices:15, // For slice animations
                        boxCols: 8, // For box animations
                        boxRows: 4, // For box animations
                        animSpeed:300, // Slide transition speed
                        pauseTime:7000, // How long each slide will show
                        startSlide:0, // Set starting Slide (0 index)
                        directionNav:false, // Next &amp; Prev navigation
                        directionNavHide:false, // Only show on hover
                        controlNav:true // 1,2,3... navigation
                    });
                });
                </script>
  </div>
  <div id="bgi"><!-- InstanceBeginEditable name="centro" -->
    <div id="centro">
      <div id="boxinter"> <br />
        <table width="97%" align="center" cellpadding="5" cellspacing="0">
          <tr>
            <td><div align="left">
              <h1><span class="style1">Programas - Cursos</span> <span class="style1">Tecnicos</span> en australia</h1>
            </div></td>
          </tr>
          <tr>
            <td align="left" valign="top"><br />
              <ul>
                <li>Negocios</li>
                <li>Técnico en sistemas</li>
                <li>Cuidado de niños </li>
                <li>Contabilidad</li>
                <li>Hotelería y turismo </li>
                <li>Peluquería</li>
                <li>Pastelería</li>
                <li>Cocina </li>
                <li>Otros</li>
              </ul>
                <p>&nbsp;</p>
                <p>Estos  <strong>cursos técnicos en Australia</strong> son una buena herramienta para personas que no hayan estudiado  estudios universitarios en sus países y estén buscando la forma más cómoda para  hacer un curso técnico y les <strong>abra las puertas en el campo laboral y también  obtener un grado de una manera más económica. </strong></p>
                <p><br />
                Para  personas profesionales es una buena forma de<strong> mejorar sus hojas de vidas</strong>, <strong>nivel  de ingles, becas con universidades y  opciones de trabajo en estas áreas. </strong></p>
                <p>También  muchas personas profesionales y no profesionales utilizan estos<strong> cursos técnicos  para aplicar a visas de trabajo, Sponsorship, </strong>y luego de tener experiencia en  sus trabajos a visas de residencia. </p>
                <p>&nbsp;</p>
                <h2>Si  quieres venir a estudiar a Australia por intermedio de una beca, estas son  algunas de las entidades y formas para aplicar a ellas en Colombia: </h2>
                <p>&nbsp;</p>
                <p><strong>Icetex:</strong> <br />
                  Este  entidad gubernamental ofrece préstamos educativos para estudios de Ingles, Cursos  técnicos, grados y post grados en Australia. <br />
                  Te  recomendamos que te contactes con las oficinas del <a href="http://www.icetex.gov.co/dnnpro5/es-co/inicio.aspx" target="_blank">Icetex</a> para que tengas todos  los detalles y requisitos que debes cumplir para obtener estas ayudas  económicas. <br />
                Esta  entidad también ha venido desarrollando buenas <strong>relaciones con universidades en  Australia</strong> para ofrecer becas a estudiantes que tengas un buen record de notas  en la universidad y un alto de nivel de Ingles y dar a ellos herramientas para  que sigan la crecimiento académico en Australia y posteriormente puedan  trabajar y obtener buena experiencia para poner en el futuro de sus vidas. </p>
                <p>&nbsp;</p>
                <p><strong>Colfuturos:</strong><strong> </strong><br />
                Esta es  otra entidad que también se enfoca a ofrecer herramientas, convenios con  universidades en Australia para aquellas personas que quieren desarrollar estudios  de Ingles, grado y post grado. </p>
                <p><a href="http://www.colfuturo.org/" target="_blank">Colfuturos</a> a creado relaciones con universidades de alto nombre en Australia las cuales  ofrecen una alta educación, también ayudan a sus estudiantes a ubicarse con  trabajos durante y una vez terminen sus estudios. </p>
                <p>&nbsp;</p>
              <p><img src="../../images/logos2.gif" width="718" height="487" border="0" usemap="#Map3" />
                <map name="Map3" id="Map3">
                  <area shape="rect" coords="13,23,112,97" href="http://www.aicl.nsw.edu.au/" target="_blank" />
                  <area shape="rect" coords="129,27,231,91" href="http://www.sbta.com.au/" target="_blank" />
                  <area shape="rect" coords="250,24,353,98" href="http://www.megtinstitute.com.au/Pages/default.aspx" target="_blank" />
                  <area shape="rect" coords="367,32,476,97" href="http://www.apc.edu.au/" target="_blank" />
                  <area shape="rect" coords="493,34,595,93" href="http://www.carrickeducation.edu.au/course" target="_blank" />
                  <area shape="rect" coords="613,33,717,87" href="http://www.acnt.edu.au/" target="_blank" />
                  <area shape="rect" coords="12,133,111,231" href="http://www.aipe.nsw.edu.au/" target="_blank" />
                  <area shape="rect" coords="129,158,234,206" href="http://www.aca.nsw.edu.au/" target="_blank" />
                  <area shape="rect" coords="246,161,350,209" href="http://www.hostec.com/" target="_blank" />
                  <area shape="rect" coords="367,164,475,203" href="http://www.strathfieldcollege.edu.au/" target="_blank" />
                  <area shape="rect" coords="489,133,590,231" href="http://www.kentinstitute.nsw.edu.au/" target="_blank" />
                  <area shape="rect" coords="611,131,715,225" href="http://www.iibit.edu.au/" target="_blank" />
                  <area shape="rect" coords="7,278,102,332" href="http://www.ssbt.nsw.edu.au/" target="_blank" />
                  <area shape="rect" coords="124,290,235,326" href="http://www.academia21.com/" target="_blank" />
                  <area shape="rect" coords="249,265,350,344" href="http://www.venus.nsw.edu.au/" target="_blank" />
                  <area shape="rect" coords="365,263,471,334" href="#" />
                  <area shape="rect" coords="486,270,596,322" href="http://www.cambridgecollegeinternational.nsw.edu.au/" target="_blank" />
                  <area shape="rect" coords="615,254,705,355" href="http://www.mercurycolleges.nsw.edu.au/" target="_blank" />
                  <area shape="rect" coords="9,380,105,480" href="http://www.lloydscollege.nsw.edu.au/" target="_blank" />
                  <area shape="rect" coords="118,390,231,479" href="http://www.catc.edu.au/" target="_blank" />
                  <area shape="rect" coords="244,393,353,452" href="http://www.martincollege.edu.au/" target="_blank" />
                  <area shape="rect" coords="365,391,471,441" href="http://www.studygroup.com/" target="_blank" />
                  <area shape="rect" coords="488,372,590,476" href="http://www.canterburyla.com.au/" target="_blank" />
                  <area shape="rect" coords="605,396,713,459" href="http://www.evolution.edu.au/" target="_blank" />
                </map>
                <map name="Map2Map2" id="Map2Map2">
                  <area shape="rect" coords="8,25,110,89" href="#" />
                  <area shape="rect" coords="129,30,221,100" href="#" />
                  <area shape="rect" coords="245,39,351,87" href="#" />
                  <area shape="rect" coords="369,22,468,107" href="#" />
                  <area shape="rect" coords="485,35,592,94" href="#" />
                  <area shape="rect" coords="619,13,698,108" href="#" />
                  <area shape="rect" coords="5,152,109,213" href="#" />
                  <area shape="rect" coords="125,151,231,209" href="#" />
                  <area shape="rect" coords="251,141,346,231" href="#" />
                  <area shape="rect" coords="371,136,464,225" href="#" />
                  <area shape="rect" coords="492,141,592,209" href="#" />
                  <area shape="rect" coords="617,135,703,233" href="#" />
                </map>
              </p></td>
          </tr>
        </table>
      </div>
    </div>
  <!-- InstanceEndEditable --><!-- InstanceBeginEditable name="columnader" -->
  <div id="columnader">
    <div id="Join"><img src="../../images/join.gif" alt="Únete a Nosotros" width="54" height="47" align="absmiddle" />Únete a Nosotros</div>
    <div class="boxsr">
      <table width="220" align="center" cellpadding="5" cellspacing="0">
        <tr>
          <td><div align="right"><a href="skype:yovanny1979?call"><img src="../../images/skype.jpg" alt="Skype" width="29" height="28" hspace="5" border="0" /></a><a href="https://www.facebook.com/australiaveta?bookmark_t=page" target="_blank"><img src="../../images/facebook.jpg" alt="Facebook" width="29" height="28" hspace="5" border="0" /></a><a href="https://twitter.com/#!/VETA_Education" target="_blank"><img src="../../images/iconotwitter.gif" alt="Twitter" width="40" height="28" hspace="5" border="0" /></a><a href="http://www.youtube.com/user/VETAEDUCATION/feed" target="_blank"><img src="../../images/iconoyoutube.gif" alt="YouTube" width="34" height="35" hspace="5" border="0" /></a></div></td>
        </tr>
      </table>
    </div>
    <div id="Newveta"><img src="../../images/newsveta.gif" alt="Twitter VETA" width="58" height="48" align="absmiddle" /><span id="result_box3"><span title="">Twitter </span></span> MMMigration</div>
    <div class="boxsr">
      <script src="http://widgets.twimg.com/j/2/widget.js"></script>
      <script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 1,
  interval: 6000,
  width: 229,
  height: 250,
  theme: {
    shell: {
      background: '#E9F2F9',
      color: '#3D3D66'
    },
    tweets: {
      background: '#ffffff',
      color: '#3D3D66',
      links: '#EB030F'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    hashtags: true,
    timestamp: true,
    avatars: false,
    behavior: 'all'
  }
}).render().setUser('MMMigration').start();
      </script>
    </div>
    <div id="bannersleft">
      <div align="center"><br />
        <img src="../../images/banners_left.jpg" alt="Banner horas laborales" width="202" height="246" border="0" usemap="#Map2" />
        <map name="Map2" id="Map22">
          <area shape="rect" coords="9,130,198,236" href="http://www.mmmigration.com.au/" target="_blank" alt="Para más información sobre cómo migrar a Australia visítenos en www.mmmigration.com.au" title="Para más información sobre cómo migrar a Australia visítenos en www.mmmigration.com.au"/>
        </map>
        <map name="Map2" id="Map22">
          <area shape="rect" coords="9,130,198,236" href="http://www.mmmigration.com.au/" target="_blank" alt="Para más información sobre cómo migrar a Australia visítenos en www.mmmigration.com.au" title="Para más información sobre cómo migrar a Australia visítenos en www.mmmigration.com.au"/>
        </map>
        <map name="Map2" id="Map22">
          <area shape="rect" coords="9,130,198,236" href="http://www.mmmigration.com.au/" target="_blank" />
        </map>
      </div>
    </div>
  </div>
  <!-- InstanceEndEditable --></div>
  <div id="firma"><br />
    <table width="1012" align="center" cellpadding="2" cellspacing="0">
      <tr>
        <td width="145" rowspan="7" align="left" valign="middle"><a href="../viva-estudie-y-trabaje-en-australia.php"><img src="../../images/logof.gif" alt="VETA Education Consultancy Viva Estudie y Trabaje en Australia" title="VETA Education Consultancy Viva Estudie y Trabaje en Australia" width="124" height="70" border="0" /></a></td>
        <td width="268" align="left" valign="top" class="pu">.</td>
        <td width="8" rowspan="7" align="left" valign="middle">&nbsp;</td>
        <td align="left" valign="middle" class="pu">.</td>
        <td width="44" rowspan="7" align="left" valign="middle">&nbsp;</td>
        <td width="220" rowspan="5" align="left" valign="middle" class="texservices style4">Suite 102, Level 1, 22 Market St<br />
          Sydney, NSW 2000, Australia<br />
          T+ 61 2 9299 14 58<br />
          F+ 61 2 9299 92 14</td>
      </tr>
      <tr>
        <td width="268" height="0" align="left" valign="middle" class="titufi"><a href="../viva-estudie-y-trabaje-en-australia.php" class="fl">INICIO</a></td>
        <td width="289" align="left" valign="middle" class="titufi"><span class="pu">.<a href="../visas-para-australia/visa-de-trabajo-para-australia.php" class="fl">VISAS DE TRABAJO PARA AUSTRALIA</a></span></td>
      </tr>
      <tr>
        <td width="268" height="0" align="left" valign="middle" class="titufi"><a href="cursos-de-ingles-en-australia.php" class="fl">CURSOS DE INGLES EN AUSTRALIA </a></td>
        <td width="289" align="left" valign="middle" class="titufi"><a href="../vivir-en-australia.php" class="fl">VIVIR EN AUSTRALIA </a></td>
        </tr>
      <tr>
        <td width="268" height="0" align="left" valign="middle" class="titufi"><a href="programas-tecnicos-en-australia.php" class="fl">PROGRAMAS TECNICOS EN AUSTRALIA </a></td>
        <td width="289" align="left" valign="middle" class="titufi"><a href="../contactenos.php" class="fl">CONTÁCTENOS </a></td>
        </tr>
      <tr>
        <td width="268" height="12" align="left" valign="middle" class="titufi"><a href="universidades-en-australia.php" class="fl">ESTUDIOS UNIVERSITARIOS EN AUSTRALIA </a></td>
        <td align="left" valign="middle" class="titufi"><a href="../consultores-de-educacion-en-australia.php" class="fl">CONSULTORES DE EDUCACION</a></td>
        </tr>
      <tr>
        <td width="268" align="left" valign="middle" class="titufi"><a href="../visas-para-australia/visa-de-estudio-para-australia.php" class="fl">VISAS DE ESTUDIO PARA AUSTRALIA</a></td>
        <td width="289" align="left" valign="middle" class="titufi"><a href="../testimonios-de-estudiantes-en-australia.php" class="fl">TESTIMONIOS DE ESTUDIANTES EN AUSTRALIA</a></td>
        <td height="0" align="left" valign="middle" class="texseven"><div align="right"></div></td>
      </tr>
      <tr>
        <td width="268" align="left" valign="middle" class="pu">&nbsp;</td>
        <td height="0" align="left" valign="middle" class="pu">&nbsp;</td>
        <td height="0" align="right" valign="middle" class="texseven"><span class="linkseven">Created by</span> <a href="http://www.sevenstudio.com.au/" target="_blank" class="linkseven">Seven Studio&nbsp;&nbsp;</a></td>
      </tr>
      </table>
  </div>
</div>
</div>
</body>
<!-- InstanceEnd --></html>
