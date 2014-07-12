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
<link rel="shortcut icon" href="../images/favicon.ico" >
<!-- InstanceBeginEditable name="doctitle" -->
<title>Vivir en Australia</title>
<meta name="description" content="Algunos datos de interés sobre como es la vida en Australia" />
<!-- InstanceEndEditable -->
<meta name="keywords" content="Cursos de ingles en Australia, Universidades en Australia, Cursos tecnológicos en Australia, Escuelas vocacionales en Australia, Vivir en Australia, Estudiar en Australia, Trabajar en Australia, Migrar a Australia, Visas para Australia, Visa de estudiante, Viajar por Australia, Estudiar ingles en Australia, extensión visa de estudiante en Australia, Patrocinio de trabajos en Australia,  Australia, Carreras Tecnicas en Australia, Maestrias en Australia, Estudios Universitarios de Pregrado y Posgrado en Australia, migración a Australia, visa para Australia, residencia permanente, Preparación IELTS, Pregrado en Australia, Posgrado en Australia, para trabajar en australia, visa de trabajo para australia, visas de trabajo en australia, visa trabajo australia, visa de trabajo australia, como conseguir trabajo en australia, como buscar trabajo en australia, ofertas de trabajo australia, vivir en australia, cursos de inglés en australia, estudiar y trabajar australia, australia estudiar y trabajar, oferta de trabajo en australia, encontrar trabajo en australia, conseguir trabajo en australia, estudie en australia, estudiar inglés australia, estudia en australia, becas para estudiar en australia, estudios en australia, estudiar en australia becas, estudio en australia, estudiar en australia, estudios australia, beca para estudiar en australia, estudio australia, becas estudiar australia, estudia australia, cursos en australia, study in australia, estudiar en el exterior, escuelas de ingles australia, inglés australia
estudiar ingles en, visas para australia, work in australia, visa para australia, inglés en australia, becas estudiar ingles, maestria en australia
australia visas, empleo en australia, work and travel australia, aprender ingles australiano, clase de ingles, visa en australia, universidades de australia, becas para australia, visas a australia, emigrar en australia, clases ingles, trabajar en el extranjero, estudiar de ingles, visa estudiante australia, empleos en australia, australia universidades, quiero estudiar ingles, trabajo en el extranjero, aprende ingles en, migracion a australia, visa de estudiante en australia, visa de estudios, australiano en ingles, migración australia, visa para viajar a australia, residencia en australia, visa de estudiante australia, emigra a australia, universidades australia, institutos de ingles en, viajar a australia, visa turista para australia"/>

<script type="text/javascript" src="../js/jquery.min.js"></script>
       
<script type="text/javascript" src="../js/flowplayer-3.2.6.min.js"></script>
<link href="../style.css" rel="stylesheet" type="text/css" />
<!-- jQuery - the core -->
        <!-- Sliding Effect Scripts Start --> 
        <script src="../js/jquery-1.4.3.min.js" type="text/javascript"></script> 
        <script src="../js/slide.js" type="text/javascript"></script> 
        <!-- Sliding Effect Scripts End --> 
		<!-- Slideshow Start -->
		<link href="../css/nivo-slider.css" rel="stylesheet" type="text/css" />
		<link href="../css/slide.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="../js/jquery.nivo.slider.pack.js"></script>
		<!-- slideshow End -->
                <script src="../js/livevalidation_standalone.js" type="text/javascript"></script>
                <link href="../css/validateForm.css" rel="stylesheet" type="text/css" />
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
	background-image: url('../images/Estudia-Trabaja-en-Australia-newsletter-registro.png');
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
	background-image: url('../images/bgsuscribete1.jpg');
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
<link href="../stilos-menu.css" rel="stylesheet" type="text/css" />
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
                                            <form action="../inc/login.php" method="post" name="login" id="login" target="_blank" class="clearfix">
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
                                            <script src="../js/login-tab.js" type="text/javascript"></script>
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
  <div id="logo"><a href="viva-estudie-y-trabaje-en-australia.php"><img src="../images/logo.gif" alt="Logo VETA-Viva Estudie y Trabaje en Australia" width="193" height="112" border="0" /></a></div>
  <div id="call"><img src="../images/call_esp.gif" alt="Para consultas sobre como estudiar en Australia llamenos al +61 2 9299 14 58" title="Para consultas sobre como estudiar en Australia llamenos al +61 2 9299 14 58" width="211" height="72" border="0" usemap="#Map" />
<map name="Map" id="Map">
  <area shape="rect" coords="149,49,178,72" href="../index.php" alt="Select your Language English" title="Select your Language English" />
  <area shape="rect" coords="180,48,210,73" href="../portugues/live-estudo-e-trabalho-na-australia.php" alt="Selecione seu idioma - Portugues" title="Selecione seu idioma - Português" />
<area shape="rect" coords="121,50,149,70" href="viva-estudie-y-trabaje-en-australia.php" alt="Seleccione su idioma - Español" title="Seleccione su idioma - Español" />
</map></div>
  <div id="menu"><div class="curved" id="content">
<div id="menuprincipal">
	<ul class="nav">
    	<li></li>
    	<li><a href="viva-estudie-y-trabaje-en-australia.php" title="">INICIO</a>
      	</li>
        <li><img src="../images/sep.gif" width="1" height="36" /></li>
  		<li><a href="#" title="">ESTUDIOS EN AUSTRALIA</a>
        	<ul>
            	<li><a href="estudios-en-australia/cursos-de-ingles-en-australia.php" title="">CURSOS DE INGL&Eacute;S</a>
                </li>
          		<li><a href="estudios-en-australia/programas-tecnicos-en-australia.php" title="">PROGRAMAS T&Eacute;CNICOS</a>
                </li>
                <li><a href="estudios-en-australia/universidades-en-australia.php" title="">ESTUDIOS UNIVERSITARIOS</a>
                </li>
        	</ul>
        </li>
        <li><img src="../images/sep.gif" width="1" height="36" /></li>
      	<li><a href="#" title="">VISAS PARA AUSTRALIA</a>  
        <ul>
            	<li><a href="visas-para-australia/visa-de-estudio-para-australia.php" title="">VISA DE ESTUDIO</a>
                </li>
          		<li><a href="visas-para-australia/visa-de-trabajo-para-australia.php" title="">VISA DE TRABAJO</a>
                </li>
        	</ul>    
        </li>
        <li><img src="../images/sep.gif" width="1" height="36" /></li>
      	<li><a href="vivir-en-australia.php" title="">VIVIR EN AUSTRALIA</a>
        </li>
        <li><img src="../images/sep.gif" width="1" height="36" /></li>
      	<li><a href="#" title="">CONT&Aacute;CTENOS</a>
			<ul>
			  <li><a href="consultores-de-educacion-en-australia.php">CONSULTORES</a></li>
              <li><a href="contactenos.php">ESCRIBANOS</a></li>
            </ul>        
        </li>
        <li><img src="../images/sep.gif" width="1" height="36" /></li>
      	<li><a href="testimonios-de-estudiantes-en-australia.php" title="">TESTIMONIOS</a>
        </li>
	</ul>
</div>
</div></div>
  <div id="flashhomebanners">
    <div id="slider" class="nivoSlider"> 
    <img src="../images/oficina-bogota-colombia-veta-education.jpg" alt="Nueva oficina en Bogota - Colombia VETA consultores en educacion para Australia" />
    <img src="../images/Aplica-a-tu-visa-con-nosotros-y-obten-un-Trabajo-Profesional-y-la-Residencia-Australiana.jpg" alt="Aplica a tu visa con nosotros y obten un Trabajo Profesional y la Residencia Australiana" />  
    <img src="../images/oficina-bogota-colombia-veta-education.jpg" alt="Nueva oficina en Bogota - Colombia VETA consultores en educacion para Australia" />   
    <img src="../images/banner3mayo.jpg" alt="Studying hospitality or cookery in Australia" />
    <img src="../images/oficina-bogota-colombia-veta-education.jpg" alt="Nueva oficina en Bogota - Colombia VETA consultores en educacion para Australia" />
    <img src="../images/banner2mayo.jpg" alt="Who is Veta" /> 
    <img src="../images/oficina-bogota-colombia-veta-education.jpg" alt="Nueva oficina en Bogota - Colombia VETA consultores en educacion para Australia" />
    <img src="../images/bannerservicios.jpg" alt="Servicios" />
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
              <h1><span class="style1">vivir en</span> Australia</h1>
            </div></td>
          </tr>
          <tr>
            <td align="left" valign="top"><table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="left">
              <tr>
                <td valign="top" align="left"><h2><br />
                  <img src="../images/About5.gif" width="266" height="230" hspace="8" vspace="8" align="left" /> Australia<br />
</h2>
                  <p><strong>Ubicación</strong> <br />
Oceanía <br />
<strong>Referencia horaria</strong> <br />
Australia  tiene tres usos horarios: <strong><br />
</strong></p>
                  <ul>
                    <li><strong>Zona Noreste y Sureste:</strong> GMT + 10 (GMT + 11 de octubre a mayo excepto en  Queensland). <strong><br />
                      </strong></li>
                    <li><strong>Zona Central: </strong>GMT + 9.5 (GMT + 10.5 de octubre a mayo excepto los  Territorios del Norte). <strong><br />
                      </strong></li>
                    <li><strong>Zona Oeste: </strong>GMT + 8. <br />
                    </li>
                    </ul>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p><strong>Superficie</strong> <br />
                    7.682.300  km². </p>
                  <p><br />
                    <strong>Población</strong><br />
                    22’000.000 Aprox. Censo Julio 2008 </p>
                  <p><br />
                  </p>
                  <p><strong>Densidad de Población</strong> <br />
                    2,54  habitantes por km². <br />
                    <br />
  <strong>Capital</strong> <br />
                    Canberra. <strong>Población: </strong>323.004 habitantes  (2003). <br />
                    <br />
  <strong>Geografía</strong> <br />
                    Australia  está bañada por los Mares de Arafura y Timor al norte; los mares de Coral y  Tasmania (en el Pacífico Sur) al este, el Océano Meridional al sur y el Océano  Indico al oeste. El litoral costero tiene una extensión de 36.738 km. La  mayoría de la población habita en las franjas costeras del este y del sureste.  La mayor parte del paisaje australiano está formado sobre todo por llanuras  salpicadas de lagos y atravesadas por ríos además de algunas cadenas montañosas  situadas en el litoral. En el extremo nororiental (Península de <em>Cape York</em>) hay selvas tropicales. El  sureste de Australia es una enorme llanura muy fértil. Aunque el país en  general es bastante seco, existen zonas nevadas del tamaño de Suiza. <br />
                    <br />
  <strong>Sistema Político</strong> <br />
                    Monarquía  Constitucional. Obtuvo su independencia del Reino Unido en 1901. Australia en  miembro de la Commonwealth. <br />
                    <br />
  <strong>Idioma</strong> <br />
                    El idioma  oficial es el inglés. Las minorías que viven en Australia hablan lenguas  aborígenes, italiano, alemán, griego, chino y vietnamita. </p>
                  <p><br />                    
                    <strong>Moneda</strong>: Dólar Australiano AUD<br />
                    <br />                    
                    <strong>Día Nacional</strong>: 26 Enero “ Australian Day”</p>
                  <p>&nbsp;</p>
                  <p><strong>Religión</strong> <br />
                    El 26 %  de la población es católica romana; el 24% es protestante. Además hay otras  religiones minoritarias. <br />
                    <br />
  <strong>Electricidad</strong> <br />
                    El  servicio de electricidad en Australia funciona a 220 /240  voltios, 50 ciclos con un  enchufe tipo inglés con tres clavijas. Asegúrate que todos los  electrodomésticos que traes contigo son adecuados para diferentes voltajes. No  enchufes un electrodoméstico que funciona a 110 voltios a una corriente que  funciona a 240 voltios. <br />
                    <br />
Puedes traer un adaptador contigo, o también puedes comprar uno cuando llegues  a Australia. </p>
                  <p>&nbsp;</p>
                  <p><strong>Agua Potable</strong></p>
                  <p>Tanto en Cairns como  en el resto de Australia se puede beber el agua del grifo, pero si lo  prefieres, en todas las tiendas se puede encontrar agua embotellada. El agua  que llevan ríos y arroyos también suele ser potable, sobre todo en las  montañas, pero asegúrate antes si existe alguna duda. </p>
                  <p><br />
  <br />
  <strong>Convenciones sociales</strong> <br />
  En  Australia la atmósfera es bastante relajada e informal. El apretón de manos es  la forma más común para saludar. La ropa informal se usa en casi todas partes,  excepto en los restaurantes muy exclusivos, eventos sociales o reuniones  importantes de negocios.</p>
<p>&nbsp;</p>
                  <p><br />
                    • Es el 5to país con mejor calidad de vida en el mundo.<br />
                    • Es un país multicultural que permite a los estudiantes internacionales relacionarse con australianos y estudiantes de  una gran variedad de países.<br />
                    •	Es un país que da la oportunidad  a profesionales cuyas profesiones estén en demanda de aplicar a una visa de residente permanente y luego obtener la nacionalidad australiana.</p>
                  <p><br />
                  </p>
                  <p>&nbsp;</p>
                  <h2><img src="../images/About1.jpg" width="202" height="142" hspace="5" vspace="5" align="right" />Organizaci&Oacute;n territorial y Principales ciudades</h2>
                  <p><br />
                    Australia está conformado por 6 estados; Nueva Gales del Sur (NSW) (Sydney), Victoria (VIC) (Melbourne), Queensland (QLD) (Brisbane),  Australia Meridional (SA) (Adelaida), Australia Occidental (WA) (Perth), Tasmania (TAS) (Hobart), y dos territorios;  Territorio de la capital australiana (ACT) (Canberra).  Territorio del Norte (NT) (Darwin).</p>
                  <p>&nbsp;</p>
                  <h2><br />
                    Diferencia Horaria  </h2>
                  <p>La mayoría de las áreas de Australia están de 16-20 horas delante del continente Americano, 9-10 horas delante de Europa y 2-3 horas adelante de Asia. </p>
<p>&nbsp;</p>
                  <h2>Transporte</h2>
                  <p>Australia ofrece un eficiente sistema de transporte  que cuenta con trenes, buses y ferries a costos muy razonables.</p>
                  <p>Los tiquetes para trenes y ferries los puede adquirir directamente en las estaciones. Para el uso del servicio de los buses pude pagar el pasaje directamente en el bus. </p>
                  <p> Si quiere ahorrar dinero en transporte puede adquirir el tiquete semanal o mensual en cualquier estación.</p>
                  <p>&nbsp;</p>
                  <h2><img src="../images/About2.jpg" width="202" height="130" hspace="5" vspace="5" align="left" /><br />
                    Clima</h2>
                  <p>Australia presenta las cuatro estaciones durante el año.<br />
                    <strong>Verano: </strong>Diciembre a Febrero.<br />
                    <strong>Otoño:</strong> Marzo a Mayo.<br />
                    <strong>Invierno:</strong> Junio a Agosto. </p>
                  <p><strong>Primavera:</strong> Septiembre a Noviembre.<br />
                    Las temperaturas en cada una de las estaciones pueden variar de acuerdo a la ciudad.</p>
                  <p><br />
                  </p>
                  <h2>Moneda y denominación</h2>
                  <p>Dólar Australiano AUD<br />
                    <strong>Monedas:</strong> 5c, 10c, 20c, 50c “Color plateado”. $1 y $2 “Color Dorado”.<br />
                    <strong>Billetes:</strong> $5 “Color Purpura”, $10 “Color Azul”, $20 “Color Naranja”, $50 “Color Amarillo” y $100 “Color Verde”. Todos los billetes son plásticos.</p>
                  <p>&nbsp;</p>
                  <h2><strong>TELÉFONOS MÓVILES</strong></h2>
                  <p>La telefonía móvil en  Australia opera sobre una red digital, es decir, GSM. La mayoría de los  teléfonos europeos operan a través de esta red. Y si tu teléfono no está  bloqueado, simplemente podrás comprar una tarjeta SIM australiana y ponerla en  tu teléfono. Si tu teléfono no es compatible con la red GSM entonces lo mejor  es que compres un pack de prepago, que normalmente incluye un teléfono y una  tarjeta SIM. Las compañías más importantes de telefonía móvil de Australia son <a href="http://www.optus.com.au/" target="_blank"><strong>Optus</strong></a>, <a href="http://www.vodafone.com.au/" target="_blank"><strong>Vodaphone</strong></a>, <a href="http://www.telstra.com.au/" target="_blank"><strong>Telstra</strong></a>, <a href="http://www.three.com.au/" target="_blank"><strong>Three</strong></a> y <a href="http://www.virginmobile.com.au/" target="_blank"><strong>Virgin Mobile</strong></a>. También existen un gran número de operadores  que venden teléfonos de sus propias marcas pero utilizan redes de otras  compañías, así que tienes mucho donde elegir y, al haber tanta competencia, los  precios no suelen ser demasiado altos. En general, los precios de estas últimas  compañías tienden a ser más baratos, aunque si vas a permanecer en Australia  durante un largo período de tiempo, puede que encuentres una buena oferta si  optas por un contrato en vez de prepago con cualquiera de las compañías  principales, ya que premian a los clientes leales.<br />
  <br />
                    Te encontrarás con que en muchas de las zonas remotas, y a veces no tan  remotas, de Australia ningún teléfono móvil tiene cobertura, elijas la compañía  que elijas. Si vas a viajar a estas zonas, la mejor compañía para ello es  Telstra, aunque también es la más cara de todas ellas. Optus también cubre la  mayor parte de las áreas del país, aunque no tantas como Telstra, pero también  es más barata. Three, la última compañía en incorporarse al mercado, ofrece  algunos servicios únicos, como poder hacer llamadas de Skype desde tu teléfono  móvil o llamar gratis a otros móviles de la misma compañía. Sin embargo, Three  sólo tiene cobertura en los núcleos urbanos más importantes de Australia.  Vodafone tiene una cobertura bastante limitada, pero ofrece algunas ofertas a  tener en cuenta comprando una tarjeta de prepago. Virgin Mobile utiliza la red  de Optus y ofrece llamadas a muy buen precio.<br />
  <br />
                    La mejor opción, y la más barata, es que compres una tarjeta SIM cuando llegues  a Australia en vez de hacerlo a través de internet desde tu país de origen. Si decides  dejar tu tarjeta SIM en el teléfono una vez que salgas de tu país, tendrás que  pagar unos precios exorbitantes cada vez que hagas, y recibas, llamadas en tu  teléfono móvil. Si aún así decides dejar la tarjeta SIM de tu país de  procedencia en el teléfono móvil, la opción más barata es que uses un número  SkypeIn (un número de teléfono real, donde puedes recibir llamadas) y derives  este número a tu teléfono móvil. También tendrás que pagar por recibir  llamadas, pero las tarifas son mucho más bajas y no tendrás que comprar una  tarjeta SIM nueva cada vez que visites un país diferente.<br />
  <br />
                    Pero si la única razón por la que vas a utilizar tu teléfono móvil es para  llamar a casa, la mejor opción es que compres una tarjeta de teléfono, que  puedes encontrar en cualquier supermercado, tienda de periódicos y tienda de  ultramarinos. Léete bien la letra pequeña, ya que hay enormes diferencias de  precio entre unas y otras. Una recomendación antes de comprar la tarjeta. Busca  en la lista de ciudades desde las que puedes establecer la llamada localmente  que se encuentre la ciudad o ciudades que vas a visitar. Si tienes que llamar a  un número gratuito o semi gratuito (1800 o 1300) el precio de la llamada  aumentará enormemente, con lo que el tiempo de comunicación será mucho menor.                  </p>
<p>&nbsp;</p>
                  <h2><strong><img src="../images/About3.jpg" width="202" height="130" hspace="8" vspace="8" align="right" /></strong>Costo de Vida </h2>
                  <p>Australia permite trabajar a los estudiantes internacionales 20 hrs/semana mientras estudia y 40hrs/semana  en periodo de vacaciones.</p>
                  <p>El índice de desempleo es del 5%.</p>
                  <p>El estudiante internacional promedio gasta aproximadamente $ 250 AUD/semana. Esto incluye:<br />
                    Alojamiento                $ 125<br />
                    Alimentación              $   30<br />
                    Transporte                  $   35<br />
                    Celular y Teléfono      $   40<br />
                    Entretenimiento         $   20</p>
                  <p>El estudiante puede gastar más o menos dependiendo su estilo de vida.</p>
                  <p>&nbsp;</p>
                  <h2>PROPINAS 
                  </h2>
                  <p>Dejar  propina no es la costumbre en Australia, tampoco es costumbre que se añadan  cargos por servicio en hoteles y restaurantes. Por supuesto, está aceptado que  quieras dar una propina al portero del hotel o a los camareros de bares y restaurantes  si su servicio ha sido bueno. En cualquier ocasión, dejar propina es decisión  tuya, pero si alguna vez has trabajado en el sector de la hostelería entenderás  que las propinas son siempre bien recibidas. </p>
                  <p>&nbsp;</p>
                  <h2>GASTRONOMÍA Y RESTAURANTES</h2>
                  <p> <br />
                    A pesar de que pueda dudarlo,  podemos garantizarle de que en Australia  comerá de forma estupenda. Ciertamente no existe una comida  típicamente australiana, pero si hay platos típicamente  australianos que son toda una delicia, sobre todo, por la frescura y la alta calidad de sus ingredientes. Por otro lado, gracias al  fenómeno de inmigración, Australia es un verdadero paraíso culinario de gran  importancia. <br />
                    </p>
                  <p>&nbsp;</p>
                  <p>En cuanto a vinos, no hace falta decir que  Australia cuenta con muy buena reputación. Gracias al buen clima de  determinadas zonas, como las del Valle de Hunter o el Valle de Barossa, el país  produce excelentes vinos de variedades tan clásicas como el Cabernet  Sauvignon, Shiraz, Riesling, Chardonnay o Malbeec. <br />
                    </p>
                  <p>&nbsp;</p>
                  <p>En muchos establecimientos encontrará la  palabra BYO que quiere decir que en ese lugar no tienen permiso  para servir bebidas alcohólicas pero que en cambio, si  están autorizados a dejar entrar a los clientes con su  propio vino o cerveza. </p></td>
              </tr>
            </table></td>
          </tr>
        </table>
      </div>
    </div>
  <!-- InstanceEndEditable --><!-- InstanceBeginEditable name="columnader" -->
  <div id="columnader">
    <div id="Join"><img src="../images/join.gif" alt="Únete a Nosotros" width="54" height="47" align="absmiddle" />Únete a Nosotros</div>
    <div class="boxsr">
      <table width="220" align="center" cellpadding="5" cellspacing="0">
        <tr>
          <td><div align="right"><a href="skype:yovanny1979?call"><img src="../images/skype.jpg" alt="Skype" width="29" height="28" hspace="5" border="0" /></a><a href="https://www.facebook.com/australiaveta?bookmark_t=page" target="_blank"><img src="../images/facebook.jpg" alt="Facebook" width="29" height="28" hspace="5" border="0" /></a><a href="https://twitter.com/#!/VETA_Education" target="_blank"><img src="../images/iconotwitter.gif" alt="Twitter" width="40" height="28" hspace="5" border="0" /></a><a href="http://www.youtube.com/user/VETAEDUCATION/feed" target="_blank"><img src="../images/iconoyoutube.gif" alt="YouTube" width="34" height="35" hspace="5" border="0" /></a></div></td>
        </tr>
      </table>
    </div>
    <div id="Newveta"><img src="../images/newsveta.gif" alt="Twitter VETA" width="58" height="48" align="absmiddle" /><span id="result_box3"><span title="">Twitter </span></span> MMMigration</div>
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
        <img src="../images/banners_left.jpg" alt="Banner horas laborales" width="202" height="246" border="0" usemap="#Map2" />
        <map name="Map2" id="Map22">
          <area shape="rect" coords="9,130,198,236" href="http://www.mmmigration.com.au/" target="_blank" alt="Para más información sobre cómo migrar a Australia visítenos en www.mmmigration.com.au" title="Para más información sobre cómo migrar a Australia visítenos en www.mmmigration.com.au"/>
        </map>
        <map name="Map2" id="Map2">
          <area shape="rect" coords="9,130,198,236" href="http://www.mmmigration.com.au/" target="_blank" />
        </map>
      </div>
    </div>
  </div>
  <!-- InstanceEndEditable --></div>
  <div id="firma"><br />
    <table width="1012" align="center" cellpadding="2" cellspacing="0">
      <tr>
        <td width="145" rowspan="7" align="left" valign="middle"><a href="viva-estudie-y-trabaje-en-australia.php"><img src="../images/logof.gif" alt="VETA Education Consultancy Viva Estudie y Trabaje en Australia" title="VETA Education Consultancy Viva Estudie y Trabaje en Australia" width="124" height="70" border="0" /></a></td>
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
        <td width="268" height="0" align="left" valign="middle" class="titufi"><a href="viva-estudie-y-trabaje-en-australia.php" class="fl">INICIO</a></td>
        <td width="289" align="left" valign="middle" class="titufi"><span class="pu">.<a href="visas-para-australia/visa-de-trabajo-para-australia.php" class="fl">VISAS DE TRABAJO PARA AUSTRALIA</a></span></td>
      </tr>
      <tr>
        <td width="268" height="0" align="left" valign="middle" class="titufi"><a href="estudios-en-australia/cursos-de-ingles-en-australia.php" class="fl">CURSOS DE INGLES EN AUSTRALIA </a></td>
        <td width="289" align="left" valign="middle" class="titufi"><a href="vivir-en-australia.php" class="fl">VIVIR EN AUSTRALIA </a></td>
        </tr>
      <tr>
        <td width="268" height="0" align="left" valign="middle" class="titufi"><a href="estudios-en-australia/programas-tecnicos-en-australia.php" class="fl">PROGRAMAS TECNICOS EN AUSTRALIA </a></td>
        <td width="289" align="left" valign="middle" class="titufi"><a href="contactenos.php" class="fl">CONTÁCTENOS </a></td>
        </tr>
      <tr>
        <td width="268" height="12" align="left" valign="middle" class="titufi"><a href="estudios-en-australia/universidades-en-australia.php" class="fl">ESTUDIOS UNIVERSITARIOS EN AUSTRALIA </a></td>
        <td align="left" valign="middle" class="titufi"><a href="consultores-de-educacion-en-australia.php" class="fl">CONSULTORES DE EDUCACION</a></td>
        </tr>
      <tr>
        <td width="268" align="left" valign="middle" class="titufi"><a href="visas-para-australia/visa-de-estudio-para-australia.php" class="fl">VISAS DE ESTUDIO PARA AUSTRALIA</a></td>
        <td width="289" align="left" valign="middle" class="titufi"><a href="testimonios-de-estudiantes-en-australia.php" class="fl">TESTIMONIOS DE ESTUDIANTES EN AUSTRALIA</a></td>
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
