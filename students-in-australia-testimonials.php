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
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/TemplateVETA englishnew.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="images/favicon.ico" >
<!-- InstanceBeginEditable name="doctitle" -->
<title>Students in Australia Testimonials (Spanish)</title>
<!-- InstanceEndEditable -->
<meta name="keywords" content="abroad study in australia,agency work in australia, applying for work visa in australia, australia live and work, can i study in australia, can i work in australia, construction work in australia, contract work in australia, cost of study in australia, cost of studying in australia, courses to study in australia, english study australia, find work in australia, finding work in australia, get work in australia, getting a visa to work in australia, getting a work visa for australia, getting a work visa in australia, getting work in australia, go study australia, go study in australia, higher studies in australia, higher study in australia, how can i study in australia, how can i work in australia, how do i get a work visa for australia, how do i work in australia, how much to study in australia, how to apply working visa in australia, how to get a work visa to australia, how to get study visa for australia, how to get work in australia, how to live and work in australia, how to study in australia, how to work and live in australia, how to work in australia, i want study in australia, i want to live and work in australia, i want to study in australia, i want to work and live in australia, i want to work in australia, international study in australia, is there work in australia, it study in australia, it work australia, it work in australia, jobs australia, jobs in australia, live & work in australia, live and study in australia, live and work australia, live and work in australia, live and work in australia and new zealand,, live in work australia, live work australia, live work in australia, living and working in australia, living in australia, living working australia, looking for work in australia, overseas students studying in australia, live work and study in australia"/>

<script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
        <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/flowplayer-3.2.6.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- jQuery - the core -->
        <!-- Sliding Effect Scripts Start --> 
        <script src="js/jquery-1.4.3.min.js" type="text/javascript"></script> 
        <script src="js/slide.js" type="text/javascript"></script> 
        <!-- Sliding Effect Scripts End --> 
		<!-- Slideshow Start -->
		<link href="css/nivo-slider.css" rel="stylesheet" type="text/css" />
		<link href="css/slide.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
		<!-- slideshow End -->
                <script src="js/livevalidation_standalone.js" type="text/javascript"></script>
                <link href="css/validateForm.css" rel="stylesheet" type="text/css" />
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
.newsRegistryText {
    color: #FFF;
    font-style: italic;
    display: block;
    text-align: center;
    padding-top: 0.5em;
    padding-bottom: 1.2em;
    font-size: 16px;
    width: 155px;
    margin: auto;
}
.newsRegistryButton {
    width: 201px;
    height: 29px;
    background-image: url('images/study-in-australia-newsletter-registry.png');
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
    background-image: url('images/bgsuscribete1.jpg');
}

-->
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
<link href="stilos-menu.css" rel="stylesheet" type="text/css" />

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
                                            <h1>Welcome to Australia VETA</h1>
                                            <h2>Members Section</h2>		
                                            <p class="grey">We offer opportunities for Students, Professionals and Immigrants.<br />
                                              <br />Live, Study and Work in Australia<br />
            <strong style="color:#FFF;">Call Now!</strong><br />
            <br />

                                      </p>
            </div>
                                    <div class="left">
                                            <!-- Login Form Start -->
                                            <form action="inc/login.php" method="post" name="login" id="login" target="_blank" class="clearfix">
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
                                            <script src="js/login-tab.js" type="text/javascript"></script>
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
<div id="area3">
<div id="box">
  <div id="logo"><a href="index.php"><img src="images/logo.gif" alt="VETA Education Consultancy Viva Estudie y Trabaje en Australia" title="VETA Education Consultancy Viva Estudie y Trabaje en Australia" width="193" height="112" border="0" /></a></div>
  <div id="call"><img src="images/call.gif" alt="For enquiries about study english in Australia call VETA on 61 2 9299 14 58" title="For enquiries about study english in Australia call VETA on 61 2 9299 14 58" width="211" height="72" border="0" usemap="#Map" />
<map name="Map" id="Map">
  <area shape="rect" coords="149,49,178,72" href="index.php" alt="Select your Language English" title="Select your Language English"/>
  <area shape="rect" coords="180,48,210,73" href="portugues/live-estudo-e-trabalho-na-australia.php" alt="Selecione seu idioma - Português" title="Selecione seu idioma - Português" />
<area shape="rect" coords="121,50,149,70" href="espanol/viva-estudie-y-trabaje-en-australia.php" alt="Seleccione su idioma - Español" title="Seleccione su idioma - Español" />
</map></div>
<div id="menu"><div class="curved" id="content">
<div id="menuprincipal">
	<ul class="nav">
    	<li></li>
    	<li><a href="index.php" title="">HOME</a>
      	</li>
        <li><img src="images/sep.gif" width="1" height="36" /></li>
  		<li><a href="#" title=""> STUDY IN AUSTRALIA </a>
        	<ul>
            	<li><a href="study-in-australia/english-courses.php" title="">ENGLISH COURSES</a>
                </li>
          		<li><a href="study-in-australia/technical-courses.php" title="">TECHNICAL COURSES</a>
                </li>
                <li><a href="study-in-australia/university-degrees-postgraduate-courses.php" title="">UNIVERSITY DEGREES & POSTGRADUATE COURSES</a>
                </li>
        	</ul>
        </li>
        <li><img src="images/sep.gif" width="1" height="36" /></li>
      	<li><a href="#" title=""> VISAS FOR AUSTRALIA </a>  
        <ul>
            	<li><a href="visas-for-australia/student-visa.php" title="">STUDENT VISAS</a>
                </li>
          		<li><a href="visas-for-australia/work-visas.php" title="">WORK VISAS</a>
                </li>
        	</ul>    
        </li>
        <li><img src="images/sep.gif" width="1" height="36" /></li>
      	<li><a href="live-in-australia.php" title=""> LIVE IN AUSTRALIA </a>
        </li>
        <li><img src="images/sep.gif" width="1" height="36" /></li>
      	<li><a href="#" title="">CONTACT US</a>
			<ul>
			  <li><a href="education-consultancy-in-australia.php">EDUCATION CONSULTANCY</a></li>
              <li><a href="contact-form.php">CONTACT FORM</a></li>
            </ul>        
        </li>
        <li><img src="images/sep.gif" width="1" height="36" /></li>
      	<li><a href="students-in-australia-testimonials.php" title="">TESTIMONIALS</a>
        </li>
	</ul>
</div>
</div></div>
  <div id="flashhomebanners">
    <div id="slider" class="nivoSlider"> 
    <img src="images/oficina-bogota-colombia-veta-education.jpg" alt="Nueva oficina en Bogota - Colombia VETA consultores en educacion para Australia" />
    <img src="images/Apply-to-your-visa-with-us-and-obtain-a-Professional-Job-and-Australian-Residence.jpg" alt="Apply to your visa with us and obtain a Professional Job and Australian Residence" />
     <img src="images/banner3mayo.jpg" alt="Studying hospitality or cookery in Australia" /> 
     <img src="images/oficina-bogota-colombia-veta-education.jpg" alt="Nueva oficina en Bogota - Colombia VETA consultores en educacion para Australia" />
     <img src="images/banner2mayo.jpg" alt="Who is Veta" /> 
     <img src="images/bannerservices.jpg" alt="Services" /></div>
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
              <h1>students in australia testimonials <span class="style1">(Spanish)</span></h1>
            </div>
              <br /></td>
          </tr>
          <tr>
            <td align="left" valign="top"><h2>Elizabeth Escalona y familia<br />
              <span class="style3">venezuela</span></h2>
              <p><span class="titubold"><img src="images/testimonials/Testimonio-VETA-Elizabeth-Escalona-y-familia.jpg" width="308" height="195" hspace="10" vspace="5" align="left" /></span>&quot;Tomamos la decisión  de emigrar de nuestro país Venezuela en busca de calidad de vida, ya que en  Venezuela, nuestro país de origen, la inseguridad e inestabilidad política  entre otras cosas hacen que la vida diaria sea toda una&nbsp;odisea,&nbsp;pensamos  en muchos destinos y <strong>escogimos a Australia</strong> por ser un país donde&nbsp;existe un  marco normativo a favor de la inmigración,&nbsp;en nuestro caso nos venimos mi  esposo, mi hija de 4 años y yo con una <strong>visa de estudiante&nbsp;(Inglés)</strong>&nbsp;que  nos permite <strong>trabajar 20 horas semanales a cada uno</strong>, un amigo que reside en  Sydney nos <strong>recomendó la agencia VETA</strong> con sede en Sydney y desde que tuvimos la  primera entrevista con nuestro Advisor Maricela Morales&nbsp;su atención fue  excepcional,&nbsp;haciendo el <strong>seguimiento personalizado </strong>de nuestro caso y&nbsp;asesorándonos&nbsp;en  todos los detalles&nbsp;de&nbsp;nuestro proceso, en nuestro caso desde  el&nbsp;la primera entrevista hasta que&nbsp;llegamos a Sydney pasaron menos de  2 meses,&nbsp;la verdad que el p<strong>rofesionalismo y seriedad de la&nbsp;agencia  VETA</strong>&nbsp;hicieron&nbsp;nuestro proceso de migración todo un éxito. </p>
              <p>&nbsp;</p>
              <p><strong>El college  de Inglés&nbsp;donde estoy estudiando es de excelente calidad </strong>y me inglés a  mejorado muchísimo sólo en el mes y medio que tenemos aquí.</p>
              <p><br />
                Otra cosa importante que  quiero comentar de <strong>VETA</strong> es que luego que llegas a Australia&nbsp;<strong>te siguen  acompañando y asesorando en todo lo que se refiere trabajar y estudiar en  Australia </strong>y ese plus es muy importante cuando te encuentras en un país  desconocido con un idioma diferente al tuyo, en este sentido <strong>nuestro advisor  Maricela Morales</strong> a sido un excelente y útil apoyo&nbsp;para  superar&nbsp;el&nbsp;periodo de adaptación.<br />
                Por todos estos motivos no  dudaría ni un segundo en recomendar a VETA como agencia educativa. Si tu planes  son venir a estudiar y a trabajar en Australia....&quot;</p>
              <p>&nbsp;</p>
  <p class="ttitupun"></p>
  <p>&nbsp;</p>
  <h2><b><img src="images/tes6.jpg" width="308" height="232" hspace="10" vspace="5" align="right" />GABY MACHADO</b> <br />
                <span class="style3">Venezuela</span></h2>
              <p>&nbsp;</p>
              <p><span lang="es" xml:lang="es">Somos una pareja de <strong>recién casados venezolanos</strong>. Decidimos venirnos a Australia para<strong> comenzar nuestra vida</strong> aquí y aspirar a una mejor calidad de vida para nuestros hijos en el futuro. <strong>VETA ha sido nuestra columna vertebral</strong> en todo este proceso, a parte de recibir la mejor asesoría, logramos gestionar todo a través de ellos y sin salir de casa.</span></p>
              <p><span lang="es" xml:lang="es">Tan solo con 3 meses viviendo en Melbourne, podemos apreciar lo asertivo que son los chicos de VETA, nos sentimos muy complacidos, ya que el trayecto para lograr <strong>nuestro sueño ha sido mucho mas fácil y rápido gracias <br />
                a ellos. </strong></span></p>
              <p>&nbsp;</p>
              <p class="ttitupun">&nbsp;</p>
              <h2><br />
                Nicolas Marino y Ana Maria Henao <br />
                <span class="style3">Colombia - Bogotá</span></h2>
              <p><span class="titubold"><img src="images/tes2.jpg" width="308" height="196" hspace="10" vspace="5" align="left" /></span>Somos una  pareja de ingenieros civiles que decidio venir a Australia a <strong>estudiar ingles</strong> por 6 meses.<br />
                Al finalizar nuestro curso conocimos a <strong>VETA</strong>&nbsp;y a  traves&nbsp;de<strong>&nbsp;Melanie Macfarlane</strong>&nbsp;nos mostro la opcion de extender  nuestra visa de estudiante para hacer un <strong>diplomado en negocios y posteriormente  un master en mineria.</strong><br />
                <br />
                Gracias a la asistencia de <strong>VETA&nbsp;y Melanie Macfalane </strong>, tuvimos la  oportunidad de <strong>estudiar y aplicar a nuestra residencia</strong> al mismo tiempo, siempre  recibimos la mejor asesoria en cuanto a centros educativos, documentos, fechas  limites&nbsp; y prioridades relacionadas con nuestra aplicacion a la residencia  permanente. <br />
                Ya somos residentes permanentes y nuestro proceso en Australia&nbsp; ha  sido&nbsp; todo un exito, &nbsp;debido al profesionalismo y la experiencia  tanto de VETA&nbsp;y Melanie Macfalane&nbsp;como<strong> agente de inmigracion</strong>. </p>
              <p class="ttitupun">&nbsp;</p>
              <h2 align="left"><br />
                DIEGO JULIAN BOHORQUEZ  ARIAS<br />
                <span class="style3">Colombia - Bucaramanga</span></h2>
              <p align="left"><img src="images/tes3.jpg" width="308" height="196" hspace="10" vspace="5" align="right" />Australia es conocida por su estilo de vida juvenil, por tener <strong>excelentes institutos de aprendizaje</strong> y por su buena calidad de vida, así que decidí venir a  Sydney, Australia   para <strong>aprender Ingles</strong>. Las indicaciones de<strong> VETA</strong> fueron muy precisas y lo más importante es que la asesoría es continua y sigo en permanente contacto aún estando acá. </p>
              <p align="left">&nbsp;</p>
              <p align="left">La aplicación a la <strong>Visa de estudiante</strong> salió sin ningún inconveniente y esta  fue otorgada  por un año, así que llegue a <strong>estudiar, viajar y trabajar</strong>. Me siento muy afortunado de estar en este país, de tener amigos de todos los continentes y de conocer el mundo.</p>
              <p align="left">&nbsp;</p>
              <p align="left" class="ttitupun">&nbsp;</p>
              <h2 align="left"><br />
                DIANA CAROLINA TORRES PINTO<br />
                <span class="style3">Colombia - Bucaramanga</span></h2>
              <p align="left"><img src="images/tes4.jpg" width="308" height="196" hspace="10" vspace="5" align="left" />El tomar la decisión de <strong>emigrar</strong> a otro país no es nada fácil y más aún cuando tienes de por medio metas y propósitos que cumplir, simplemente escoge el mejor camino, que sea lleno de oportunidades y posibilidades para triunfar. Pocos meses atrás tome mi mejor decisión, emigrar a Australia, gracias a <strong>VETA</strong> quien me brindó un <strong>asesoría profesional y efectiva</strong> me permitió visualizar  mis propósitos, sugerir la mejor decisión y cumplir con todo lo pactado de la <strong>manera más fácil y rápida</strong>. </p>
              <p align="left">&nbsp;</p>
              <p align="left">Lo más importante de llegar a un país totalmente desconocido, es tener el apoyo de personas que te pueden guiar y mostrar las oportunidades de triunfar en este país, es por esto que agradezco a esta compañía, porque más que <strong>asesoría y calidad en su trabajo</strong>, me brindó apoyo y ganas de salir adelante en un país, que sí te abre las puertas, que tienen una buena<strong> calidad de vida</strong>, es <strong>multicultural </strong>y lo más importante te brinda<strong> tranquilidad</strong> y grandes beneficios que tanto estabas buscando. </p>
              <p align="left" class="ttitupun">&nbsp;</p>
              <h2 align="left"><br />
                CARLOS ANDRES NUÑES DIAS <br />
                <span class="style3">Colombia - Ibagué </span></h2>
              <p align="left">&nbsp;</p>
              <p align="left"><img src="images/tes5.jpg" width="308" height="196" hspace="10" vspace="5" align="right" />Antes de terminar mi carrera universitaria mi sueño era <strong>vivir en Australia</strong>, gracias a <strong>VETA</strong> mi sueño se hizo realidad; ahora estudio, vivo y trabajo en Australia, esta ha sido una oportunidad muy grande que me ha dado la vida y a través de esta compañía <strong>el trámite del visado se hizo de una manera eficiente y eficaz.</strong><br />
              </p>
              <p>&nbsp;</p></td>
          </tr>
          </table>
      </div>
  </div>
  <!-- InstanceEndEditable --><!-- InstanceBeginEditable name="columnader" -->
  <div id="columnader">
    <div id="Join"><img src="images/join.gif" alt="VETA Social Media"title="VETA Social Media" width="54" height="47" align="absmiddle" />Join Us VETA</div>
    <div class="boxsr">
      <table width="220" align="center" cellpadding="5" cellspacing="0">
        <tr>
          <td><div align="right"><a href="skype:yovanny1979?call"><img src="images/skype.jpg" alt="Skype Me!" title="Skype Me!" width="29" height="28" hspace="5" border="0" /></a><a href="https://www.facebook.com/australiaveta?bookmark_t=page" target="_blank"><img src="images/facebook.jpg" alt="Facebook" title="Facebook" width="29" height="28" hspace="5" border="0" /></a><a href="https://twitter.com/#!/VETA_Education" target="_blank"><img src="images/iconotwitter.gif" alt="Twitter" title="Twitter" width="40" height="28" hspace="5" border="0" /></a><a href="http://www.youtube.com/user/VETAEDUCATION/feed" target="_blank"><img src="images/iconoyoutube.gif" alt="YouTube" title="YouTube" width="34" height="35" hspace="5" border="0" /></a></div></td>
        </tr>
      </table>
    </div>
    <div id="Newveta"><img src="images/newsveta.gif" alt="Twitter Veta" title="Twitter Veta" width="58" height="48" align="absmiddle" /><span id="result_box3"><span title="">Twitter </span></span> MMMigration</div>
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
        <img src="images/banners_left.jpg" alt="Working Hours" title="Working Hours" width="202" height="246" border="0" usemap="#Map2" />
        <map name="Map2" id="Map22">
          <area shape="rect" coords="9,130,198,236" href="http://www.mmmigration.com.au/" target="_blank" alt=" For more information on how to migrate to Australia  visit us at www.mmmigration.com.au" title=" For more information on how to migrate to Australia  visit us at www.mmmigration.com.au" />
        </map>
        <map name="Map2" id="Map2">
          <area shape="rect" coords="9,130,198,236" href="http://www.mmmigration.com.au/" target="_blank" />
        </map>
      </div>
    </div>
  </div>
  <!-- InstanceEndEditable --></div>
  <div id="firma">
    <br />
    <table width="1012" align="center" cellpadding="2" cellspacing="0">
      <tr>
        <td width="152" rowspan="7" align="left" valign="middle"><a href="index.php"><img src="images/logof.gif" alt="VETA Education Consultancy Viva Estudie y Trabaje en Australia" title="VETA Education Consultancy Viva Estudie y Trabaje en Australia" width="124" height="70" border="0" /></a></td>
        <td align="left" valign="middle" class="pu">.</td>
        <td width="5" rowspan="7" align="left" valign="middle">&nbsp;</td>
        <td align="left" valign="middle" class="pu">.</td>
        <td width="271" rowspan="7" align="left" valign="middle">&nbsp;</td>
        <td width="238" rowspan="5" align="left" valign="middle" class="texservices style4">Suite 102, Level 1, 22 Market St<br />
          Sydney, NSW 2000, Australia<br />
          T+ 61 2 9299 14 58<br />
          F+ 61 2 9299 92 14</td>
      </tr>
      <tr>
        <td width="156" height="0" align="left" valign="middle" class="titufi"><a href="index.php" class="fl">HOME</a></td>
        <td width="164" height="0" align="left" valign="middle" class="titufi"><a href="visas-for-australia/work-visas.php" title="">WORK VISAS</a></td>
      </tr>
      <tr>
        <td width="156" height="0" align="left" valign="middle" class="titufi"><a href="study-in-australia/english-courses.php" title="">ENGLISH COURSES</a></td>
        <td width="164" height="0" align="left" valign="middle" class="titufi"><a href="live-in-australia.php" title=""> LIVE IN AUSTRALIA </a></td>
      </tr>
      <tr>
        <td height="0" align="left" valign="middle" class="titufi"><a href="study-in-australia/technical-courses.php" title="">TECHNICAL COURSES</a></td>
        <td width="164" height="0" align="left" valign="middle" class="titufi"><a href="education-consultancy-in-australia.php">EDUCATION CONSULTANCY</a></td>
        </tr>
      <tr>
        <td width="156" height="0" align="left" valign="middle" class="titufi"><a href="study-in-australia/university-degrees-postgraduate-courses.php" title="">UNIVERSITY COURSES</a></td>
        <td width="164" height="0" align="left" valign="middle" class="titufi"><a href="contact-form.php">CONTACT FORM</a></td>
        </tr>
      <tr>
        <td height="0" align="left" valign="middle" class="titufi"><a href="visas-for-australia/student-visa.php" title="">STUDENT VISAS</a></td>
        <td height="0" align="left" valign="middle" class="titufi"><a href="students-in-australia-testimonials.php" title="">STUDENTS TESTIMONIALS</a></td>
        <td height="0" align="left" valign="middle" class="texseven"><div align="right"></div></td>
      </tr>
      <tr>
        <td height="0" align="left" valign="middle" class="pu">&nbsp;</td>
        <td height="0" align="left" valign="middle" class="pu">&nbsp;</td>
        <td height="0" align="right" valign="middle" class="texseven"><span class="linkseven">Created by</span> <a href="http://www.sevenstudio.com.au/" target="_blank" class="linkseven">Seven Studio&nbsp;&nbsp;</a></td>
      </tr>
    </table>
  </div>
</div>
</div>
</body>
<!-- InstanceEnd --></html>
