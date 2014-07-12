<?php
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
///
require_once 'inc/insRecord.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><!-- InstanceBegin template="/Templates/templateseven.dwt.php" codeOutsideHTMLIsLocked="false" -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="The best web studio in south Sydney, website design, web development and heaps of internet knowledge at your service . Seven Studio, new ways of thinking the web experience!." />
        <meta name="keywords" content="website design Sydney, website development sydney south, web development penshurst,website design penshurst, graphic design penshurst, email marketing, web design sydney south, seo, mobile apps, android development " />
        <!-- InstanceBeginEditable name="doctitle" -->
        <title>inquiry - contact form - web development Penshurst NSW</title>
        <!-- InstanceEndEditable -->
		<!-- InstanceBeginEditable name="stilo" -->
                <link rel="icon" href="favicon.png" type="image/png" />
        <link rel="icon" href="favicon.ico" type="image/ico" />
        <link href="css/main1.css" rel="stylesheet" media="all" type="text/css" />
        <link href="css/internal1.css" rel="stylesheet" media="all" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>

        <link href='http://fonts.googleapis.com/css?family=Prociono' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Coda+Caption:800' rel='stylesheet' type='text/css' />
        <style type="text/css" media="all">
            #navbar .contact{
                background:#000;
                color:white !important;
            }
            #navbar .contact:hover {
                background:#000;
                color:white !important;
            }
        </style><!-- InstanceEndEditable -->
        <!-- Analytics Code Starts -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25825966-1']);
  _gaq.push(['_setDomainName', 'sevenstudio.com.au']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
        <!-- Analytics Code Ends -->
        <!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>
    <body>

    
<div id="main-container">
        <div id="top">
          <div id="header">
                <div id="logo" class="fltlft">
                    <img src="images/web-design-sydney-south-seven-studio-logo.png" alt="Seven Studio web design Sydney south" title="Seven Studio New Ways of Thinking the web"/>                </div>
                <div id="likeas"><img src="images/Like-Us.png" width="100" height="29" /><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fsevenstudio.sydney&amp;send=false&amp;layout=standard&amp;width=50&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=25&amp;appId=277578462308148" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:50px; height:25px;" allowTransparency="true"></iframe></div>
<div id="navbar" class="fltrt">
                    <ul class="nav_ul"><!-- InstanceBeginEditable name="menu" -->
                        <li><a href="index.php" class="curved">HOME</a></li>
                        <li><a href="services/seven-studio-main-services.php" class="curved">SERVICES</a></li>
                        <li><a href="portfolio.php" class="curved">PORTFOLIO</a></li>
                        <li><a href="contact.php" class="curved contact">CONTACT</a></li><!-- InstanceEndEditable -->
                    </ul>
            </div>
                <div id="centerSection" class="curved"><!-- InstanceBeginEditable name="contenido" -->
                <div id="contactUs" class="fltlft">
                      <div class="contacTitle">CONTACT US</div>
                      <div id="contactBlurb">
                        
                            <b>Penshurst, NSW 2222<br/>
                                Sydney, Australia<br/>
                            mobile. 042 428 6635<br/>
                            e-mail. info@sevenstudio.com.au
                            </b>
                        
						
                     </div>
                      <div id="contactForm">
                    <form action="" method="post" class="selectBox-dropdown" id="contact" name="contact">
                            <label for="fullName">Full Name</label><input type="text" name="fullName" id="fullName"  /><br />
                            <label for="email">Email</label><input type="text" name="email" id="email" /><br />
                            <label for="phone">Phone</label><input type="text" name="phone" id="phone"  /><br />
                            <label for="industry">What Industry are you in</label>
                            <select name="selectInd" class="selectBox-dropdown">
								<option value=" ">.......</option>
                                <option value="Agriculture-Mining">Agriculture, Mining</option>
                                <option value="Construction">Construction</option>
                                <option value="Finance, Insurance, Real Estate">Finance, Insurance, Real Estate</option>
                                <option value="Government">Government</option>
                                <option value="Health Care">Health Care</option>
                                <option value="Internet">Internet</option>
                                <option value="Manufacturing">Manufacturing</option>        
                                <option value="Retail, Wholesale">Retail, Wholesale</option>
                                <option value="Services">Services</option>
                                <option value="Transportation">Transportation</option>
                                <option value="Communications">Communications, Utilities</option>
                                <option value="Nonprofit">Nonprofit</option>
                                <option value="Other">Other</option>
                            </select>
							<script type="text/javascript">
								var industry = new LiveValidation('selectInd');
								industry.add( Validate.Exclusion, { within: [ ' ' ] } );
							</script>
							<br /><br />
                            <label for="enquiry" class="services" style="padding-top:20px;"><b>Let us know how can we help you.</b><br /></label>
                            <br />
                            <label for="services" class="enqBlurb"><input type="checkbox" name="service[]" class="service" value="web design" /> Website design | Website development</label>
                            <label for="services" class="enqBlurb"><input type="checkbox" name="service[]" class="service" value="graphic design" /> Graphic Design</label>
                            <label for="services" class="enqBlurb"><input type="checkbox" name="service[]" class="service" value="e-mail marketing" /> E-mail Marketing</label>
                            <label for="services" class="enqBlurb"><input type="checkbox" name="service[]" class="service" value="mobile apps" /> Mobile Apps</label>
                            <label for="services" class="enqBlurb"><input type="checkbox" name="service[]" class="service" value="hosting_domain" /> Hosting &amp; Domain</label>
							<br />
                            <label for="enquiry" class="enqBlurb" style="padding-top:20px;">Drop us a line, let us help you with your <b>website development</b>.</label>
                            <textarea name="enquiry" id="enquiry" rows="3"></textarea><br />
                            <input type="hidden" id="sendbutton" name="sendbutton" />
                            <input type="button" id="sendForm" name="sendForm" value="Send" class="submitBtn" onclick="submitform()"/>
                    </form>
                    <script type="text/javascript">
                             /* Submit Form */
                             function submitform()
                                    {
                                    if(document.contact.onsubmit &&
                                            !document.contact.onsubmit())
                                            {
                                                    //alert("SOMETHING INSIDE.... ???");
                                                return;
                                                                    }
                                            document.contact.submit();
                                            //alert("SOMETHING OUTSIDE THE IF INSIDE.... ???");
                                    }
                             </script>
                                     <script type="text/javascript">
                                            /* Validate Form */
                                            $(document).ready(function(){
                                                    //////
                                                    var fullName = new LiveValidation( 'fullName', {onlyOnSubmit: true } );
                                                    fullName.add( Validate.Presence );
                                                    //////
													var email = new LiveValidation('email', {onlyOnSubmit: true } );
                                                    email.add( Validate.Presence );
                                                    email.add( Validate.Email );
                                                    //////
													var phone = new LiveValidation( 'phone', {onlyOnSubmit: true } );
                                                    phone.add( Validate.Presence );
                                                    //////
													var industry = new LiveValidation('selectInd', {onlyOnSubmit: true });
													industry.add( Validate.Exclusion, { within: [ ' ' ] } );
                                                    //////
													var service = new LiveValidation( 'service', {onlyOnSubmit: true } );
                                                    service.add( Validate.Acceptance );
                                                    //////
                                                    var enquiry = new LiveValidation( 'enquiry', {onlyOnSubmit: true } );
                                                    enquiry.add( Validate.Presence );
                                                    ////
                                                    var automaticOnSubmit = fullName.contact.onsubmit();
                                                    fullName.contact.onsubmit = function(){
                                                    var valid = automaticOnSubmit();
                                                    //if(valid)alert('The form is valid!');
                                                            if(valid) {
                                                                      function submitform()
                                                                            {
                                                                             //if(document.signUp.onsubmit())
                                                                             if(document.getElementById('contact').submit())
                                                                             {
                                                                                    //document.signUp.submit();
                                                                                    document.getElementById('contact').submit();
                                                                             }
                                                                    }
                                                                    //return false;
                                                                    };
                                                            };
                                                    });
                                    </script>
                    </div>
                      <div id="locationMap">
                        <iframe width="350" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://local.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=6-8+Nelson+St,+Penshurst+NSW,+Australia&amp;aq=0&amp;sll=-33.873651,151.20689&amp;sspn=0.037983,0.077162&amp;vpsrc=0&amp;ie=UTF8&amp;hq=&amp;hnear=6-8+Nelson+St,+Penshurst+New+South+Wales+2222,+Australia&amp;t=m&amp;ll=-33.965003,151.084328&amp;spn=0.024915,0.030041&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                        <br />
                        <small><a href="http://local.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=6-8+Nelson+St,+Penshurst+NSW,+Australia&amp;aq=0&amp;sll=-33.873651,151.20689&amp;sspn=0.037983,0.077162&amp;vpsrc=0&amp;ie=UTF8&amp;hq=&amp;hnear=6-8+Nelson+St,+Penshurst+New+South+Wales+2222,+Australia&amp;t=m&amp;ll=-33.965003,151.084328&amp;spn=0.024915,0.030041&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left; font-family: arial;">View Larger Map</a></small>
                  </div>  
                      <div style="clear:both; overflow: hidden;"></div>
                  </div>

             
          <!-- InstanceEndEditable --></div>      
            <div id="quoteGirl" onclick="window.location='http://www.sevenstudio.com.au/contact.php'"> </div>
                <!-- InstanceBeginEditable name="wel" --><!-- InstanceEndEditable -->
                <div id="boxmed">
            <div class="middleCol">
              <div class="midTitle">
                <h1 class="bottomLine">Welcome</h1>
                <p> Here at <b>Seven Studio</b>,  we offer you exclusive <b>web design</b> plus <b>web development</b> specialists, willing to help you build not just, unique and authentic websites, or great mobile applications, but also <b>successful websites</b> able to skyrocket your business making it more <b>successful</b> than what it is right now! So come on and <a href="website-design-sydney-online-quote.php" style="color:#FF009A;"><b>get started now!</b></a> </p>
              </div>
            </div>
                <div class="middleCol">              <div class="midTitle">
                    <h1 class="bottomLine">Why Us</h1>
                  <p> In Seven Studio we're not just passionate about <b>web design</b> and <b>web development</b>.
                      We are also passionate about new trends and technologies within the web field and <b>more importantly</b>, 
                      we love to put all that knowledge and passion into our work for our clients, 
                      making each <a href="portfolio.php" title="website design and graphic design portfolio"><b style="color:#FF009A;">project</b></a> <b>unique</b>. <br />
                            <br />
                  </p>
            </div></div>
                <!-- InstanceBeginEditable name="twitter" -->
                <div class="middleCol"></div>
        <!-- InstanceEndEditable -->
				<!-- InstanceBeginEditable name="recent" -->
                <div class="middleCol"></div>
                <!-- InstanceEndEditable -->
                </div>
			<!-- InstanceBeginEditable name="banner" --><!-- InstanceEndEditable --></div>
            <div style="clear:both;"></div>
      <div style="position:relative; float:left; width:100%;"><!-- InstanceBeginEditable name="tw" -->
        <div id="twitter_m">
          <div id="twitter_t"></div>
          <div id="twitter_container">
            <ul id="twitter_update_list">
            </ul>
          </div>
        </div>
      <!-- InstanceEndEditable --></div>
  </div>
     </div>
      <div id="divbar"></div>    
      <div id="bottom">
      <div id="footer">
                <div class="footerCol">
                    <ul>
                        <li><a href="index.php" title="Seven Studio Home"><b>HOME</b></a></li>
                        <li><a href="portfolio.php" title="Seven Studio Portfolio"><b>PORTFOLIO</b></a></li>
                        <li><a href="contact.php" title="Seven Studio Contact"><b>CONTACT</b></a></li>
                    </ul>
                </div>
                <div class="footerCol">
                  <ul>
                    <li class="footitle"><b >SERVICES</b></li>
                    <li class="footlink"><a href="services/web-development-penshurst.html" title="Website Development Penshurst">Web Development</a></li>
                    <li class="footlink"><a href="services/website-design-sydney-south.html" title="Website Design Sydney South">Web Design</a></li>
                    <li class="footlink"><a href="services/graphic-design-sydney.html" title="Graphic Design Penshurst">Graphic Design</a></li>
                    <li class="footlink"><a href="services/email-marketing-sydney.html" title="Email Marketing Sydney South">Email Marketing</a></li>
                    <li class="footlink"><a href="services/mobile-applications-sydney.html" title="android and ios Mobile Applications">Mobile Apps</a></li>
                    <li class="footlink"><a href="services/hosting-and-domain-sydney.html" title="Web Hosting &amp; Domain Sydney South">Hosting &amp; Domain</a></li>
                  </ul>
              </div>
          <div class="footerCol">
                    <ul>
                        <li class="footitle"><b >SOCIAL MEDIA</b></li>
                        <li class="footlink"><div class="facebook"><a href="http://www.facebook.com/pages/Seven-Studio/113064035436565" target="_blank" style="margin-left: 30px;" title="Seven Studio on Facebook">Facebook</a></div></li>
                        <li class="footlink"><div class="google-plus"><a href="https://plus.google.com/103695505434616818800" target="_blank" style="margin-left: 30px;"  title="Seven Studio on Google Plus">Google+</a></div></li>
                        <li class="footlink"><div class="twitter"><a href="http://twitter.com/7StudioAU" target="_blank" style="margin-left: 30px;"  title="Seven Studio on Twitter">Twitter</a></div></li>
                        <li class="footlink"><div class="blog"><a href="http://7studio-website-design-sydney.blogspot.com/" target="_blank" style="margin-left: 30px;"  title="Seven Studio Blog">Blog</a></div></li>
                    </ul>
        </div>
              <div class="StudioBottomLogo"><br />
                <br />
                <br />
                <br />
                Penshurst NSW 222
                <br />
                Sydney, Australia<br />
info@sevenstudio.com.au<br />
www.sevenstudio.com.au
                <br />
              Seven Studio © 2011</div>
        </div>
    </div>
 <script src="http://twitter.com/javascripts/blogger.js" type="text/javascript"></script>
<script src="http://twitter.com/statuses/user_timeline/7StudioAU.json?callback=twitterCallback2&count=1" type="text/javascript"></script>       
</body>
<!-- InstanceEnd --></html>