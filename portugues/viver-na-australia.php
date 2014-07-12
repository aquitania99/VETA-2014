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
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template VETA portugues.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../images/favicon.ico" >
<!-- InstanceBeginEditable name="doctitle" -->
<title>Sobre a Austrália - VETA Português</title>
<!-- InstanceEndEditable -->
<meta name="keywords" content="Aprenda Inglês na Austrália, Universidades na Austrália, cursos tecnológicos na Austrália, escolas profissionais na Austrália, viver na Austrália, Estudar na Austrália Trabalho na Austrália, a migração para a Austrália, Austrália Vistos, Visto de Estudante, Viajar na Austrália, Estudar Inglês na Austrália, estudante de prorrogação do visto na Austrália, os trabalhos de Patrocínio na Austrália, Austrália, Carreiras técnicos na Austrália, Masters na Austrália, graduação e Pós-Graduação da Universidade na Austrália, a migração para a Austrália, visto Austrália, residência permanente, Preparação IELTS, graduação Australia, Austrália Pós-Graduação, live estudo e trabalho na austrália, trabalhar na austrália, trabalho na austrália, trabalho austrália, trabalhar austrália, estudar na austrália, viajar para austrália
austrália trabalho, intercâmbio para austrália, curso de inglês na austrália, morar na austrália, australia intercambio, cursos na austrália, viver na austrália, cursos de inglês na austrália, viajar australia, viva na austrália, work experience australia, viajar para a australia, visto para austrália, escolas na australia, viver australia, custo de vida na australia, visto austrália, tudo sobre australia, trabalho sobre australia, austrália visto"/>
<script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/jquery.nivo.slider.pack.js"></script>
        <link rel="stylesheet" href="../css/nivo-slider.css" type="text/css" media="screen" />
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
                                            <h1>Welcome to Australia VETA</h1>
                                            <h2>Members Section</h2>		
                                            <p class="grey">+ Optimise your applications...<br />
                                              + Save time, save paper, save space<br />
                                              + Organise everything right here...<br />
                                              <br />
            <strong style="color:#FFF;">Don't have a Login?</strong><br />
            <br />
            Simply fill up the form in our home page and we will set one up for you right away!
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
<div id="area1">
<div id="box">
  <div id="logo"><a href="live-estudo-e-trabalho-na-australia.php"><img src="../images/logo.gif" alt="Logo VETA" width="193" height="112" border="0" /></a></div>
  <div id="call"><img src="../images/call_portugues.gif" alt="Call" width="211" height="72" border="0" usemap="#Map" />
<map name="Map" id="Map">
  <area shape="rect" coords="149,49,178,72" href="../index.php" />
  <area shape="rect" coords="180,49,210,74" href="live-estudo-e-trabalho-na-australia.php" />
<area shape="rect" coords="121,50,149,70" href="../espanol/viva-estudie-y-trabaje-en-australia.php" />
</map></div>
<div id="menu">
<div class="curved" id="content">
<div id="menuprincipal">
	<ul class="nav">
    	<li></li>
    	<li><a href="live-estudo-e-trabalho-na-australia.php" title="">INICIO</a>
      	</li>
        <li><img src="../images/sep.gif" width="1" height="36" /></li>
  		<li><a href="#" title=""> ESTUDAR NA AUSTR&Aacute;LIA</a>
        	<ul>
            	<li><a href="cursos-de-ingles.php" title="">CURSOS DE INGL&Ecirc;S</a>
                </li>
          		<li><a href="cursos-tecnicos.php" title="">CURSOS TÉCNICOS</a>
                </li>
                <li><a href="cursos-university.php" title="">CURSOS UNIVERSITY E DE P&Oacute;S-GRADUA&Ccedil;AO</a>
                </li>
        	</ul>
        </li>
        <li><img src="../images/sep.gif" width="1" height="36" /></li>
      	<li><a href="#" title=""> VISTOS PARA AUSTRÁLIA </a>  
        <ul>
            	<li><a href="vistos-para-estudos.php" title="">VISOS PARA ESTUDIOS</a>
                </li>
          		<li><a href="vistos-para-trabalho.php" title="">VISTOS PARA TRABALHO</a>
                </li>
        	</ul>    
        </li>
        <li><img src="../images/sep.gif" width="1" height="36" /></li>
      	<li><a href="viver-na-australia.php" title=""> VIVER NA AUSTRÁLIA </a>
        </li>
        <li><img src="../images/sep.gif" width="1" height="36" /></li>
      	<li><a href="#" title="">CONTATO</a>
			<ul>
			  <li><a href="consultores-para-estudantes.php">CONSULTORES PARA ESTUDANTES</a></li>
              <li><a href="contacto.php">FALE CONOSCO</a></li>
            </ul>        
        </li>
        <li><img src="../images/sep.gif" width="1" height="36" /></li>
      	<li><a href="testemunho.php" title="">TESTEMUNHO</a>
        </li>
	</ul>
</div>
</div></div>
  <div id="flashhomebanners">
    <div id="slider" class="nivoSlider"> 
    <img src="../images/Apply-to-your-visa-with-us-and-obtain-a-Professional-Job-and-Australian-Residence.jpg" alt="Apply to your visa with us and obtain a Professional Job and Australian Residence" /> 
    <img src="../images/banner3mayo_portugues.jpg" alt="Studying hospitality or cookery in Australia" /> 
    <img src="../images/banner2mayo_portugues.jpg" alt="Who is Veta" /> 
    <img src="../images/bannerserviciosportugues.jpg" alt="Servicios" /></div>
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
            <td class="ttitupun"><div align="left"> sobre a <span class="style1">Austr&Aacute;lia</span></div></td>
          </tr>
          <tr>
            <td align="left" valign="top"><table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="left">
              <tr>
                <td valign="top" align="left"><h2><br />                  
                    <img src="../images/About5.gif" width="266" height="230" hspace="8" vspace="8" align="left" />Austr&Aacute;lia </h2>
                  <p><br />
                    <strong>Capital: </strong>Canberra<br />
                    <strong>Idioma</strong>: Inglês<br />
                    <strong>Moeda:</strong>&nbsp;DólarAustraliano&nbsp;AUD<br />
                    <strong>População:</strong>&nbsp;22'000&nbsp;0,000&nbsp;Aprox.&nbsp;Censo&nbsp;julho 2008<br />
                    <strong>Dia Nacional:</strong>&nbsp;26 de janeiro&nbsp;&quot;Dia da Austrália&quot; </p>
                  <p>É um continente&nbsp;localizado na&nbsp;Oceania, considerado como 5&deg; maior&nbsp;do mundo&nbsp;e um país com&nbsp;a melhor&nbsp;qualidade de vida. É um país&nbsp;multicultural&nbsp;que permite os alunos interagirem com&nbsp;estudantes australianos e&nbsp;internacionais a partir de&nbsp;uma diversidade de&nbsp;países.<br />
                    <br />
                    É&nbsp;um país que&nbsp;oferece oportunidades para&nbsp;profissionais&nbsp;cujas profissões&nbsp;estão em demanda para&nbsp;solicitar um visto de&nbsp;residência permanente e, em seguida,&nbsp;obter a cidadania&nbsp;australiana.&nbsp;&quot;<br />
                  </p>
                  <h2><strong ><img src="../images/About1.jpg" width="202" height="142" hspace="5" vspace="5" align="right" /></strong>Principais  cidades e&nbsp;distribui<strong>çã</strong>o territorial</h2>
                  <p>Austrália&nbsp;é composta  de&nbsp;6 estados, New  South Wales&nbsp;(NSW) (Sydney), Victoria&nbsp;(VIC) (Melbourne), Queensland&nbsp;(QLD) (Brisbane),&nbsp;Austrália do Sul (SA) (Adelaide),  Western Australia&nbsp;(WA) (Perth&nbsp;), Tasmania&nbsp;(TAS) (Hobart) e&nbsp;dois territórios,&nbsp;território da Capital Australiana&nbsp;(ACT) (Canberra).&nbsp;Northern Territory&nbsp;(NT) (Darwin).
                  <br />
                </p>
<h2>FUSO HOR&Aacute;RIO </h2>
                  <p>A maioria das áreas&nbsp;da  Austrália são&nbsp;16-20&nbsp;horas à  frente&nbsp;do  continente americano, <br />
                    9-10&nbsp;horas à frente&nbsp;da Europa&nbsp;e 2-3&nbsp;horas à frente&nbsp;da Ásia.                  </p>
                  <h2>Transporte</h2>
                  <p>Austrália oferece&nbsp;um sistema de transporte&nbsp;eficiente, que&nbsp;inclui&nbsp;trêns, ônibus&nbsp;e balsas, a preços muito&nbsp;razoáveis.<br />
                    Os bilhetes para&nbsp;trêns e balsas&nbsp;podem ser comprados&nbsp;nas estações.&nbsp;Para usar o serviço&nbsp;você pode pagar o&nbsp;bilhete&nbsp;directamente no ônibus ou comprar&nbsp;um bilhete&nbsp;com desconto.Se você&nbsp;quiser economizar  dinheiro&nbsp;no  transporte&nbsp;você pode comprar&nbsp;o bilhete&nbsp;semanal ou mensal, em qualquer&nbsp;estação.<strong> </strong></p>
                  <h2><img src="../images/About2.jpg" width="202" height="130" hspace="5" vspace="5" align="left" /><br />
                    Clima</h2>
                  <p>A Austrália tem as quatro estações do ano.<br />
                    <strong>Verão: </strong>dezembro a fevereiro.<br />
                    <strong>Outono:</strong> março a maio.<br />
                    <strong>Inverno:</strong> junho a agosto.<br />
                    <strong>Primavera:</strong> setembro a novembro.<br />
                    As temperaturas em cada uma das estações podem variar de acordo com a cidade. <br />
                    <br />
                  </p>
                  <h2> Dinheiro e nome</h2>
                  <p>Dólar Australiano AUD<br />
                    <strong>Moedas:</strong> 5c, 10c, 20c, 50c “Cor prateado”. $1 y $2 “Cor Dourado”.<br />
                    <strong>Notas:</strong> $5 &ldquo;Cor Purpura&rdquo;, $10 &ldquo;Cor Azul&rdquo;, $20 &ldquo;Cor Laranja&rdquo;, $50 &ldquo;Cor Amarelo&rdquo; e $100 &ldquo;Cor Verde&rdquo;. Todas as notas são de plástico.</p>
                  <p>&nbsp;</p>
                  <h2><strong><img src="../images/About3.jpg" width="202" height="130" hspace="8" vspace="8" align="right" /></strong><strong>Custo de Vida </strong>
                  </h2>
                  <p>Australia permite trabalhar aos estudantes internacionais 20 horas por semana, quanto você estiver estudando, e trabalhar em tempo integral  durante as suas férias escolares.</p>
                  <p>O índice de desemprego é de 5%.</p>
                  <p>O estudante internacional gasta aproximadamente $ 250 AUD/semana. Isto inclui:<br />
                    Acomodacao                $ 125<br />
                    Alimentacao              $   30<br />
                    Transporte                  $   35<br />
                    Celular/Telefone      $   40<br />
                    Entretenimento         $   20</p>
                  <p>O estudante pode gastar mais ou menos, dependendo do seu estilo de vida.</p>
                  <p>&nbsp;</p></td>
              </tr>
            </table></td>
          </tr>
        </table>
      </div>
    </div>
  <!-- InstanceEndEditable --><!-- InstanceBeginEditable name="columnader" -->
  <div id="columnader">
    <div id="Join"><img src="../images/join.gif" width="54" height="47" align="absmiddle" />Únete a Nosotros</div>
    <div class="boxsr">
      <table width="220" align="center" cellpadding="5" cellspacing="0">
        <tr>
          <td><div align="right"><a href="skype:Llanosulloa?call"><img src="../images/skype.jpg" width="29" height="28" hspace="5" border="0" /></a><a href="https://www.facebook.com/australiaveta?bookmark_t=page" target="_blank"><img src="../images/facebook.jpg" alt="Facebook" width="29" height="28" hspace="5" border="0" /></a><a href="https://twitter.com/#!/VETA_Education" target="_blank"><img src="../images/iconotwitter.gif" width="40" height="28" hspace="5" border="0" /></a><a href="http://www.youtube.com/user/VETAEDUCATION/feed" target="_blank"><img src="../images/iconoyoutube.gif" width="34" height="35" hspace="5" border="0" /></a></div></td>
        </tr>
      </table>
    </div>
    <div id="Newveta"><img src="../images/newsveta.gif" width="58" height="48" align="absmiddle" /><span id="result_box3"><span title="">Twitter </span></span> MMMigration</div>
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
        <img src="../images/banners_left.jpg" width="202" height="246" border="0" usemap="#Map2" />
        <map name="Map2" id="Map2">
          <area shape="rect" coords="9,130,198,236" href="http://www.mmmigration.com.au/" target="_blank" />
        </map>
      </div>
    </div>
  </div>
  <!-- InstanceEndEditable --></div>
  <div id="firma">
    <br />
    <table width="1000" align="center" cellpadding="2" cellspacing="0">
      <tr>
        <td width="182" rowspan="7" align="left" valign="middle"><a href="live-estudo-e-trabalho-na-australia.php"><img src="../images/logof.gif" alt="VETA" width="124" height="70" border="0" /></a></td>
        <td align="left" valign="middle" class="pu">.</td>
        <td width="12" rowspan="7" align="left" valign="middle">&nbsp;</td>
        <td align="left" valign="middle" class="pu">&nbsp;</td>
        <td width="311" rowspan="7" align="left" valign="middle">&nbsp;</td>
        <td width="216" rowspan="5" align="left" valign="middle" class="texservices style4">Suite 102, Level 1, 22 Market St<br />
          Sydney, NSW 2000, Australia<br />
          T+ 61 2 9299 14 58<br />
          F+ 61 2 9299 92 14<br /></td>
      </tr>
      <tr>
        <td width="99" height="0" align="left" valign="middle" class="titufi"><a href="live-estudo-e-trabalho-na-australia.php"> INICIO </a> </td>
        <td width="118" align="left" valign="middle" class="titufi"><a href="viver-na-australia.php">VIVER NA AUSTRÁLIA </a><a href="viver-na-australia.php"></a></td>
      </tr>
      <tr>
        <td width="99" height="0" align="left" valign="middle" class="titufi"><a href="cursos-de-ingles.php"> EDUCAÇÃO </a></td>
        <td width="118" align="left" valign="middle" class="titufi"><a href="contacto.php">CONTATO </a><a href="../espanol/contactenos.php" class="fl"></a></td>
      </tr>
      <tr>
        <td height="0" align="left" valign="middle" class="titufi"><a href="vistos-para-trabalho.php"> VISTOS </a></td>
        <td align="left" valign="middle" class="titufi"><a href="testemunho.php"> TESTEMUNHO </a></td>
      </tr>
      <tr>
        <td width="99" height="12" align="left" valign="middle" class="pu">.</td>
        <td width="118" align="left" valign="middle" class="pu">.</td>
      </tr>
      <tr>
        <td height="0" align="left" valign="middle" class="pu">&nbsp;</td>
        <td height="0" align="left" valign="middle" class="pu">&nbsp;</td>
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
