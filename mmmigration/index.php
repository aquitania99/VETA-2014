<?php require_once( 'admin/cms.php' ); ?>

<cms:template clonable='1' nested_pages='1' title='Index' order='1'>

	<cms:editable name="keywords" type="text" label="Keywords" />

	<cms:editable name="desc" type="text" label="Description" />

	<cms:editable name='paragraph' label='Content' type='richtext' toolbar="full"/>   

	<cms:repeat count='3' startcount='1' >
    
    <cms:editable 
              name="banner_<cms:show k_count />"
              label="Rotatin Image <cms:show k_count />"
              width='580'
              height='100'
              crop='1'
              quality='100'
              desc="Upload banner image here" 
              show_preview="1"
              group="banners"
              type="image" />  
              
    </cms:repeat>
    
    <cms:editable 
              name="banners"
              label="Rotating Images"
              type="group" 
        />
    
      <cms:repeat count='3' startcount='1' >
  	 
        <cms:editable
              name="text_<cms:show k_count />"
              label="Title"
              type="text" 
              toolbar="full"
              group="prop_uploads_<cms:show k_count />"
        />    
        
        <cms:editable 
              name="prop_image_<cms:show k_count />"
              label="Image"
              width='180'
              height='55'
              crop='1'
              quality='100'
              desc="Upload main image here" 
              show_preview="1"
              group="prop_uploads_<cms:show k_count />"
              type="image" /> 
        
        
        <cms:editable
              name="tab_<cms:show k_count />"
              type="text"
              label="Link to the page" 
              group="prop_uploads_<cms:show k_count />"
        />
        
        <cms:editable 
              name="prop_uploads_<cms:show k_count />"
              label="Widget <cms:show k_count />"
              type="group" 
        />
    
    </cms:repeat>
    
            <cms:editable
              name="color_tab_3"
              type="text"
              label="HTML Color code" 
              group="prop_uploads_3"
        />

</cms:template>


<cms:if k_is_page>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="<cms:show keywords/>" />
<meta name="description" content="<cms:show desc/>" />
<title>Migration Agent, Sydney, CBD, Australia | Migration services; student visas, graduate skilled migration visas, occupational trainee visas, sponsorship visas | MMMigration - <cms:show k_page_title/></title>
<!-- wzWjaI-noRKo-JfgSx4rWRr8HQQ -->
<link type="text/css" rel="stylesheet" href="../../css/style.css">
<link type="text/css" rel="stylesheet" href="../../css/nivo-slider.css">
<link type="text/css" href="../../jscrollpane/jquery.jscrollpane.css" rel="stylesheet" media="all" />

<!--[if IE]> <style>#stripnav ul li { zoom:1; *display: inline; _height: 30px; }</style> <![endif]-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js" type="text/javascript"></script>   
<script type="text/javascript" src="../../jscrollpane/jquery.mousewheel.js"></script>
<script type="text/javascript" src="../../jscrollpane/jquery.jscrollpane.js"></script>
<script src="../../js/jclock.js" type="text/javascript"></script>		
<script src="../../js/animations.js" type="text/javascript"></script>
<script type="text/javascript" src="../../js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
			$(function()
			{
			setTimeout(function(){
      			$('.scroll-pane').jScrollPane();
			},500);
			});
		</script> 	
<script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>

<script type="text/javascript">

JQTWEET = {
     
    // Set twitter username, number of tweets & id/class to append tweets
    user: "<cms:get_custom_field 'twitter_acc' masterpage='globals.php' />",
	<cms:set newsparagr="<cms:pages page_name='news'><cms:excerptHTML count='25' ignore='img'><cms:show paragraph /></cms:excerptHTML></cms:pages>" />
    <cms:if "<cms:not_empty newsparagr />">
    numTweets: 2,
	<cms:else />
	numTweets: 4,
	</cms:if>
    appendTo: '#twitter',
 
    // core function of jqtweet
    loadTweets: function() {
        $.ajax({
            url: 'http://api.twitter.com/1/statuses/user_timeline.json/',
            type: 'GET',
            dataType: 'jsonp',
            data: {
                screen_name: JQTWEET.user,
                include_rts: true,
                count: JQTWEET.numTweets,
                include_entities: true
            },
            success: function(data, textStatus, xhr) {
 
                 var html = '<div class="tweet">TWEET_TEXT<div class="time">AGO</div>';
         
                 // append tweets into page
                 for (var i = 0; i < data.length; i++) {
                    $(JQTWEET.appendTo).append(
                        html.replace('TWEET_TEXT', JQTWEET.ify.clean(data[i].text) )
                            .replace(/USER/g, data[i].user.screen_name)
                            .replace('AGO', JQTWEET.timeAgo(data[i].created_at) )
                            .replace(/ID/g, data[i].id_str)
                    );
                 }                 
            }  
 
        });
         
    },
     
         
    /**
      * relative time calculator FROM TWITTER
      * @param {string} twitter date string returned from Twitter API
      * @return {string} relative time like "2 minutes ago"
      */
    timeAgo: function(dateString) {
        var rightNow = new Date();
        var then = new Date(dateString);
         
        if ($.browser.msie) {
            // IE can't parse these crazy Ruby dates
            then = Date.parse(dateString.replace(/( \+)/, ' UTC$1'));
        }
 
        var diff = rightNow - then;
 
        var second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24,
        week = day * 7;
 
        if (isNaN(diff) || diff < 0) {
            return ""; // return blank string if unknown
        }
 
        if (diff < second * 2) {
            // within 2 seconds
            return "right now";
        }
 
        if (diff < minute) {
            return Math.floor(diff / second) + " seconds ago";
        }
 
        if (diff < minute * 2) {
            return "about 1 minute ago";
        }
 
        if (diff < hour) {
            return Math.floor(diff / minute) + " minutes ago";
        }
 
        if (diff < hour * 2) {
            return "about 1 hour ago";
        }
 
        if (diff < day) {
            return  Math.floor(diff / hour) + " hours ago";
        }
 
        if (diff > day && diff < day * 2) {
            return "yesterday";
        }
 
        if (diff < day * 365) {
            return Math.floor(diff / day) + " days ago";
        }
 
        else {
            return "over a year ago";
        }
    }, // timeAgo()
     
     
    /**
      * The Twitalinkahashifyer!
      * http://www.dustindiaz.com/basement/ify.html
      * Eg:
      * ify.clean('your tweet text');
      */
    ify:  {
      link: function(tweet) {
        return tweet.replace(/\b(((https*\:\/\/)|www\.)[^\"\']+?)(([!?,.\)]+)?(\s|$))/g, function(link, m1, m2, m3, m4) {
          var http = m2.match(/w/) ? 'http://' : '';
          return '<a class="twtr-hyperlink" target="_blank" href="' + http + m1 + '">' + ((m1.length > 25) ? m1.substr(0, 24) + '...' : m1) + '</a>' + m4;
        });
      },
 
      at: function(tweet) {
        return tweet.replace(/\B[@＠]([a-zA-Z0-9_]{1,20})/g, function(m, username) {
          return '<a target="_blank" class="twtr-atreply" href="http://twitter.com/intent/user?screen_name=' + username + '">@' + username + '</a>';
        });
      },
 
      list: function(tweet) {
        return tweet.replace(/\B[@＠]([a-zA-Z0-9_]{1,20}\/\w+)/g, function(m, userlist) {
          return '<a target="_blank" class="twtr-atreply" href="http://twitter.com/' + userlist + '">@' + userlist + '</a>';
        });
      },
 
      hash: function(tweet) {
        return tweet.replace(/(^|\s+)#(\w+)/gi, function(m, before, hash) {
          return before + '<a target="_blank" class="twtr-hashtag" href="http://twitter.com/search?q=%23' + hash + '">#' + hash + '</a>';
        });
      },
 
      clean: function(tweet) {
        return this.hash(this.at(this.list(this.link(tweet))));
      }
    } // ify
 
     
};
 
 
 
$(document).ready(function () {
    // start jqtweet!
    JQTWEET.loadTweets();
});

</script>

<script type="text/javascript">
    $(function($) {
      var options1 = {
        utc: true,
        utc_offset: 10
      }
      $('#jclock1').jclock(options1);

      var options2 = {
        utc: true,
        utc_offset: 8
      }
      $('#jclock2').jclock(options2);

      var options3 = {
        utc: true,
        utc_offset: -5
      }
      $('#jclock3').jclock(options3);
	  
	  var options4 = {
        utc: true,
        utc_offset: 1
      }
      $('#jclock4').jclock(options4);

    });
  </script>
  
  <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>

</head>

<body>

<div id="strip"></div>

<div id="wrapper">



<div id="timezone">
<div class="clock" id="1clock"> Sydney <span id="jclock1"></span> </div>
<div class="clock" id="2clock"> Perth <span id="jclock2"></span> </div>
<div class="clock" id="3clock"> Colombia <span id="jclock3"></span> </div>
<div class="clock" id="4clock"> London <span id="jclock4"></span> </div>
</div>

<div id="stripnav">
    <cms:menu masterpage='index.php' />
</div>


<table width="820" height="430" border="0" cellspacing="20" cellpadding="0" style="position:absolute; margin:210px 0 0 103px">
  <tr>
  <td valign="top">
  
  			<cms:if "<cms:not_empty banner_1 />" ><div id="slider" style="margin-bottom:20px"><img src="<cms:show banner_1 />" width="580px" height="100px" alt=""/>
            
            <cms:if "<cms:not_empty banner_2 />" ><img src="<cms:show banner_2 />" width="580px" height="100px" alt=""/></cms:if>
            
            <cms:if "<cms:not_empty banner_3 />" ><img src="<cms:show banner_3 />" width="580px" height="100px" alt=""/></cms:if>
            
            </div></cms:if>
            
			<cms:if k_page_name != 'home' ><div id="breadcrumbs"><cms:nested_crumbs masterpage='index.php' /></div></cms:if>
            
            <div class="scroll-pane" 
            
            <cms:if (("<cms:not_empty banner_1 />") && ("<cms:not_empty prop_image_1 />")) && (k_page_name != 'home') > style="height:120px;" <cms:else /> 
            
            <cms:if (("<cms:not_empty banner_1 />") || ("<cms:not_empty prop_image_1 />")) && (k_page_name != 'home') > style="height:195px;" <cms:else />

            <cms:if k_page_name != 'home' > style="height:315px;" <cms:else />

            <cms:if (("<cms:not_empty banner_1 />") && ("<cms:not_empty prop_image_1 />")) && (k_page_name = 'home') > style="height:160px;" <cms:else /> 
            
            style="height:270px;" </cms:if> </cms:if> </cms:if> </cms:if>
   
   			>
                <div class="scrollpad"
                
                <cms:if k_page_name = 'home' > style="width:100%;" <cms:else /> 
            
            	style="width:90%;" </cms:if>
                
                >
                
                <cms:if k_page_name == 'form' >
                
                <cms:embed 'form.html' />
                
                <cms:else />
                
                <cms:if k_page_name == 'site-map' >
                
                <h3>Site Map</h3>
                
                <cms:menu masterpage='index.php' />
                
                <cms:else />
                
                <cms:do_shortcodes><cms:show paragraph /></cms:do_shortcodes>
                
                </cms:if>
                
                </cms:if>
                
                
                </div>
                
            </div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:30px">
              <tr>
              
                <td>
                <table width="100%" width="180" border="0" cellspacing="0" cellpadding="0">
                   <tr>
                     <td class="titleboxe" height="30" bgcolor="#ED174C"><a href="<cms:show tab_1 />"><cms:show text_1 /></a></td>
                   </tr>
                   <cms:if "<cms:not_empty prop_image_1 />" >
                   <tr>
                     <td bgcolor="#E5E1DC"><a href="<cms:show tab_1 />"><img src="<cms:show prop_image_1 />" width="100%" height="55px" alt="" /></a></td>
                   </tr>
                   </cms:if>  
                </table>
                </td>
                
                <td width="20">&nbsp;</td>
                
                <td>  
                <table width="100%" width="180" border="0" cellspacing="0" cellpadding="0">
                   <tr>
                     <td class="titleboxe" height="30" bgcolor="#ED174C"><a href="<cms:show tab_2 />"><cms:show text_2 /></a></td>
                   </tr>
                   <cms:if "<cms:not_empty prop_image_2 />" >
                   <tr>
                     <td bgcolor="#E5E1DC"><a href="<cms:show tab_2 />"><img src="<cms:show prop_image_2 />" width="100%" height="55px" alt=""/></a></td>
                   </tr>
                   </cms:if>  
                </table>
                </td>
                
                <td width="20">&nbsp;</td>
                
                <td> 
                <table width="100%" width="180" border="0" cellspacing="0" cellpadding="0">
                   <tr>
                     <td class="titleboxe" height="30" bgcolor="<cms:show color_tab_3 />"><a href="<cms:show tab_3 />"><cms:show text_3 /></a></td>
                   </tr>
                   <cms:if "<cms:not_empty prop_image_3 />" >
                   <tr>
                     <td bgcolor="#E5E1DC"><a href="<cms:show tab_3 />"><img src="<cms:show prop_image_3 />" width="100%" height="55px" alt="" /></a></td>
                   </tr>
                   </cms:if>    
                </table>
                </td>
                
              </tr>
            </table>
  </td>
  <cms:set newsparagr="<cms:pages page_name='news'><cms:excerptHTML count='25' ignore='img'><cms:show paragraph /></cms:excerptHTML></cms:pages>" />
  <cms:if "<cms:not_empty newsparagr />">
  <td valign="top">
	  <table width="180px" height="220" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="titleboxe" height="30" bgcolor="#565EAA">TWITTER FEED</td>
          </tr>
          <tr>
            <td id="twitter" bgcolor="#B2B8DA" height="190"></td>
          </tr>
  </table>
  <table width="100%" height="20" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td>&nbsp;</td>
  </tr>
  </table>
  <table width="100%" height="155" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="titleboxe" height="30" bgcolor="#ED174C"><cms:pages masterpage='blog.php' limit='1'><a style="color:#FFF" href="<cms:show k_template_link />">OUR BLOG</a></cms:pages ></td>
          </tr>
          <tr>
            <td bgcolor="#E5E1DC" height="115" style="font-size:9px; padding: 0 10px 10px">
            
            		<cms:pages masterpage='blog.php' limit='1'><cms:excerptHTML count='15' ignore='img'><cms:show paragraph /></cms:excerptHTML>
					<!-- Read More Button -->
					<a style="text-decoration:none; color:#E94050; font-size:9px; text-align:right" href="<cms:show k_page_link />"> Read More...</a></cms:pages >
            </td>
          </tr>
  </table>
  </td>
  </tr>
</table>
<cms:else />
  <td valign="top">
	  <table width="180px" height="395" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="titleboxe" height="30" bgcolor="#565EAA">TWITTER FEED</td>
          </tr>
          <tr>
            <td id="twitter" bgcolor="#B2B8DA" height="365"></td>
          </tr>
  </table>
  </td>
  </tr>
</table>
</cms:if> 

<img id="social" src="../../images/social.jpg" usemap="#social-map" border="0" width="259" height="30" alt="" />
<map id="social-map" name="social-map">
<area shape="rect" coords="0,0,33,25" href="http://twitter.com/#!/<cms:get_custom_field 'youtube_acc' masterpage='globals.php' />" alt="Twitter" title="Twitter" />
<area shape="rect" coords="42,0,75,25" href="#" alt="" title="" />
<area shape="rect" coords="89,0,122,25" href="http://www.youtube.com/user/<cms:get_custom_field 'youtube_acc' masterpage='globals.php' />" alt="Youtube" title="Youtube" />
<area shape="rect" coords="134,0,167,25" href="https://www.facebook.com/<cms:get_custom_field 'facebook_acc' masterpage='globals.php' />" alt="Facebook" title="Facebook" />
<area shape="rect" coords="179,0,212,25" href="skype:<cms:get_custom_field 'skype_acc' masterpage='globals.php' />?call" alt="Skype" title="Skype Me™!" />
<area shape="rect" coords="223,0,254,25" href="http://www.linkedin.com/company/<cms:get_custom_field 'linkedin_acc' masterpage='globals.php' />" alt="" title="" />
</map>

<img id="clocks" src="../../images/clocks.jpg" usemap="#clocks-map" border="0" width="230" height="43" alt="" />
<map id="clocks-map8" name="clocks-map">
<area shape="rect" coords="16,0,51,38" href="#" alt="" title="" id="clock1map" />
<area shape="rect" coords="70,0,106,38" href="#" alt="" title="" id="clock2map" />
<area shape="rect" coords="123,0,160,38" href="#" alt="" title="" id="clock3map" />
<area shape="rect" coords="177,0,213,38" href="#" alt="" title="" id="clock4map" />
</map>
<div class="footer">
                <cms:do_shortcodes><cms:get_custom_field 'footer' masterpage='globals.php' /></cms:do_shortcodes>
</div>
</div>
<!-- GOOGLE ANALYTICS - BEGIN -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39612872-1', 'mmmigration.com.au');
  ga('send', 'pageview');

</script>
<!-- GOOGLE ANALYTICS - END -->
<!-- CRAZYEGG SCRIPT BEGIN -->
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0014/0820.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>
<!-- CRAZYEGG SCRIPT END -->
</body>
</html>

<cms:else />
   <meta http-equiv="REFRESH" content="0;url=http://mmmigration.com.au/index.php?p=1">
</cms:if>



<?php COUCH::invoke(); ?>