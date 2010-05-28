<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang='en-US' xml:lang='en-US' xmlns='http://www.w3.org/1999/xhtml'>
<head>
<title>Zionus BSM</title>
<meta content='text/html; charset=utf-8' http-equiv='Content-Type' />
<link rel="shortcut icon" type="image/x-icon" href="/img/fav1.ico">
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="css/print.css" type="text/css" media="print">	
<link rel="stylesheet" href="css/src/zionusbsm.css" type="text/css" media="screen, projection">	
<!--[if lt IE 8]>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection">
<![endif]-->
<!--[if IE]>
<link rel="stylesheet" href="css/src/zionusbsm-ie.css" type="text/css" media="screen, projection">	
<![endif]-->
<script src="jquery.tools.min.js" type="text/javascript"></script>
<script src="tools.scrollable.autoscroll-1.0.1.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() { 
    autoplayEnd = false;

    // initialize scrollable 
    api = $("#scrollable").scrollable({size:1, clickable: false, globalNav: true, speed:500, loop:true}).navigator().autoscroll({interval: 2900, api: true, autopause: false}); 

    // initialize inner scrollable 
    $(".in_scrollable").scrollable({size:1, vertical: true, clickable: false, disabledClass: "in_disabled", next: ".in_next", prev: ".in_prev", speed:500});

    //initialize overlay
    $("a[rel]").overlay({ 
        expose: '#BDB9B9', 
        top: '3%',
        onBeforeLoad: function() { 
            // grab wrapper element inside content 
            var wrap = this.getContent().find("#contentWrap"); 
            // load the page specified in the trigger 
            wrap.load(this.getTrigger().attr("href")); 
        }, 
        onClose: function() { 
            if (autoplayEnd == false) {
                api.play();
            }
        }
    }); 

    $(".navi li a").hover(
        function(){ 
            if (! $(this).parent().hasClass("active")) {
                $(this).animate( { marginLeft: "-30px" }, 1);
            }
        }
        ,
        function(){ 
            $(this).animate({ marginLeft: "0px" }, 1);       
        }
    ).mousedown(
        function(){ 
            $(this).css({"z-index": "900", 
                         "-moz-box-shadow" : "0 5px 4px #595853",        
                         "-webkit-box-shadow" : "0 5px 4px #595853" })       
        }
    ).mouseup(
        function(){ 
            $(this).css({"z-index": "0", 
                         "-moz-box-shadow" : "0 0px 0px #FFFFFF",       
                         "-webkit-box-shadow" : "0 0px 0px #FFFFFF" })       
        }
    );


    //start testimonials slide show
    setInterval( "slideSwitch()", 7000 );

    //for testimonial navigation element.
    toggleTestimonialNavi();
    $(window).scroll(function () { 
        toggleTestimonialNavi();
    });
    $(window).resize(function () { 
        toggleTestimonialNavi();
    });
}); 


function stopAutoScroll() {
    api.stop();
    autoplayEnd = true;
}

function showExp () {
    //scroll back to first page.
    jQuery.each($(".in_scrollable"), function () {
        $(this).scrollable().reload().begin();
    });

    $(".exp").hide();
    setTimeout(function() { 
        $(".exp").css("filter", "progid:DXImageTransform.Microsoft.gradient(startColorStr=#B3D2D6D2,endColorStr=#B3D2D6D2)"); 
        $(".exp").fadeIn(2000);
    }, 800);
}

appended = false;

function addItem() { 
    if (appended == false) {
        // get handle to scrollable API 
        var api = $("#scrollable").scrollable(); 
        //get url to be loaded. 
        var url = $(".navi").find("#n6").attr("href");
        //append new item.
        $.get(url, function(data) {
            api.getItemWrap().append(data); 
            appended = true;
            // rebuild scrollable and move to the end to see what happened 
            api.reload().end(); 
        });
    }
} 
function slideSwitch() {
    var $active = $('#testimonials div.active-sd');

    if ( $active.length == 0 ) $active = $('#testimonials div:last');

    var $next =  $active.next().length ? $active.next()
        : $('#testimonials div:first');

    $active.addClass('last-active-sd');

    $next.css({opacity: 0.0})
        .addClass('active-sd')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active-sd last-active-sd');
        });
}
function toggleTestimonialNavi() {
      client_h = document.documentElement.clientHeight;
      scrolled_h = $(window).scrollTop(); 
      $('#n8').toggle(scrolled_h + client_h < 660);
}
</script>
</head>
<body>
<!-- Google Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16648161-1']);
  _gaq.push(['_trackPageview']);

    (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                  })();

</script>
<!-- Google Analytics End-->
<div id="aboveGround">
<div class="container">
    <div id="header">
    </div>
	<div class="span-9" style="">
        <div id="logo">
            <a href="/">Zionus BSM</a>
        </div>
        <div id="our-service">
        </div>
        <ul class="navi">
            <li><a class="curved" id="n1" onClick="stopAutoScroll(); showExp();">%%T_001%%</a></li>
            <li><a class="curved" id="n2" onClick="stopAutoScroll(); showExp();">%%T_002%%</a></li>
            <li><a class="curved" id="n3" onClick="stopAutoScroll(); showExp();">%%T_003%%</a></li>
            <li><a class="curved" id="n4" onClick="stopAutoScroll(); showExp();">%%T_004%%</a></li>
            <li><a class="curved" id="n5" onClick="stopAutoScroll(); showExp();">%%T_005%%</a></li>
            <li><a class="curved" id="n6" href="<?php echo site_url('about');?>" onClick="stopAutoScroll(); addItem();">%%T_006%%</a></li>
            <li><a class="curved" id="n7" href="<?php echo site_url('contact');?>" rel="#overlay" onClick="api.stop()">%%T_007%%</a></li>
            <li><a class="curved" id="n8" href="#" onClick="$(window).scrollTop(660);$('#n8').hide();">Testimonials</a></li>
        </ul>
	</div>
	<div class="span-39 last">
        <div id="scrollable"> 
            <div class="items">
                <div class="item">
                    <div class="frame curved">
                        <div id="pic1" class="pic curved">
                            <div class="catch"><p>%%T_008%%</p></div>
                            <div class="exp">
                                <div class="in_prev"></div>
                                <div class="in_scrollable">
                                    <div class="in_items">
                                        <div>%%T_013%%</div>
                                        <div>%%T_014%%</div>
                                    </div>
                                </div>
                                <div class="in_next"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="frame curved">
                        <div id="pic2" class="pic curved">
                            <div class="catch"><p>%%T_009%%</p></div>
                            <div class="exp">
                                <div class="in_prev"></div>
                                <div class="in_scrollable">
                                    <div class="in_items">
                                        <div>%%T_015%%</div>
                                        <div>%%T_016%%</div>
                                        <div>%%T_017%%</div>
                                    </div>
                                </div>
                                <div class="in_next"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="frame curved"> 
                        <div id="pic3" class="pic curved">
                            <div class="catch"><p>%%T_010%%</p></div>
                            <div class="exp">
                                <div class="in_prev"></div>
                                <div class="in_scrollable">
                                    <div class="in_items">
                                        <div>%%T_018%%</div>
                                        <div>%%T_019%%</div>
                                    </div>
                                </div>
                                <div class="in_next"></div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="item">
                    <div class="frame curved">
                        <div id="pic4" class="pic curved">
                            <div class="catch"><p>%%T_011%%</p></div>
                            <div class="exp">
                                <div class="in_prev"></div>
                                <div class="in_scrollable">
                                    <div class="in_items">
                                        <div>%%T_020%%</div>
                                    </div>
                                </div>
                                <div class="in_next in_disabled"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="frame curved">
                        <div id="pic5" class="pic curved">
                            <div class="catch"><p>%%T_012%%</p></div>
                            <div class="exp">
                                <div class="in_prev"></div>
                                <div class="in_scrollable">
                                    <div class="in_items">
                                        <div>%%T_021%%</div>
                                        <div>%%T_022%%</div>
                                    </div>
                                </div>
                                <div class="in_next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	
</div>
</div>
<div id="underGround" >
    <div id="footer" class="clearfix">
        <div id="testimonials" class="span-24">
            <h3>Testimonials</h3>
            <div class="slide active-sd">
                <div class="speech curved-s">%%T_023%%</div>
                <p class="speaker">
                    <a title="Visit" href="http://kdkdkdkdk.com">
                        <span class="speakerName">%%T_024%%</span>
                        <span class="speakerOrg">%%T_025%%</span>
                    </a>
                </p>
            </div>
            <div class="slide">
                <div class="speech curved-s">%%T_026%%</div>
                <p class="speaker">
                    <a title="Visit" href="http://kdkdkdkdk.com">
                        <span class="speakerName">%%T_027%%</span>
                        <span class="speakerOrg">%%T_028%%</span>
                    </a>
                </p>
            </div>
            <div class="slide">
                <div class="speech curved-s">%%T_029%%</div>
                <p class="speaker">
                    <a title="Visit" href="http://www.koholasys.com">
                        <span class="speakerName">%%T_030%%</span>
                        <span class="speakerOrg">%%T_031%%</span>
                    </a>
                </p>
            </div>
        </div>
        <div class="span-18 last">
            <div class="clearfix prepend-2 small"> 
                <div class="span-9">
                    <strong>Zionus BSM</strong><br/>
                    <span>533 Airport Blvd., Suite 400</span><br/>
                    <span>Burlingame, CA 94010</span><br/>
                </div>
                <div class="span-7 last prepend-top">
                    <strong>Phone:</strong>&nbsp;<span>(650) 278-2840<span><br/>
                </div>
            </div> 
            <div id="copyright">
                <p>Copyright © 2010 Zionus BSM All Rights Reserved.  </p>
                <p>XHTML, CSS, Site Design and Programming by <a href="http://www.koholasys.com">Kohola Systems, Inc.</a></p>
                <p>Special thanks to photographers for providing their works under <a href="http://www.flickr.com/creativecommons/">CC licence</a>.</p>
            </div>
        </div>
    </div>
</div>
<!-- overlayed element -->
<div id="overlay"> 
    <!-- the external content is loaded inside this tag --> 
    <div id="contentWrap"></div> 
</div>
</body>
</html>
