<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD']=='GET') {
            if(isset($_GET['userId'], $_GET['name'])) {
            $_SESSION['userId'] = $_GET['userId'];
            $_SESSION['logged_in'] = true;
            $_SESSION['user_name'] = $_GET['name'];
        }
    }
?>

<!DOCTYPE html><!-- This site was created in Webflow. http://www.webflow.com --><!-- Last Published: Sat May 12 2018 17:22:13 GMT+0000 (UTC) -->
<html data-wf-domain="viss-first-project-7c06bd.webflow.io" data-wf-page="5af5e91622d5967921b52852" data-wf-site="5af5e91622d596fd7eb5284c" data-wf-status="1">
   <head>
      <meta charset="utf-8"/>
      <title>WeDigTech - HOME</title>
      <meta content="width=device-width, initial-scale=1" name="viewport"/>
      <meta content="Webflow" name="generator"/>
      <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
      <script src="assets/js/webfont.js" type="text/javascript"></script><script type="text/javascript">WebFont.load({  google: {    families: ["Vollkorn:400,400italic,700,700italic","Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Oswald:200,300,400,500,600,700"]  }});</script><!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]--><script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
      <link href="assets/css/animate.css" rel="stylesheet" media="screen">
      <link href="https://y7v4p6k4.ssl.hwcdn.net/placeholder/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
      <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon"/>
      <link href="http://fonts.googleapis.com/css?family=Ubuntu+condensed&effect=shadow-multiple" rel="stylesheet" type="text/css">
      <link href="http://fonts.googleapis.com/css?family=Acme" rel="stylesheet" type="text/css">
      <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/animated-header.css">
      <link rel="stylesheet" type="text/css" href="assets/css/nav-bar-swing.css">
      

      <style>
          .first{
              font-family: 'Tangerine',Arial, Helvetica, sans-serif;
              font-size: 48px;
              font-weight: 10px;
          }
          .firstone{
              font-family: 'Tangerine',Arial, Helvetica, sans-serif;
              font-size: 40px;
              padding-bottom: 20px;
              font-weight: 10px;
          }
          .second{
              font-family: 'Acme',Arial, Helvetica, sans-serif;
              font-size: 15px;
          }

          #hideAll
            {
                position: fixed;
                left: 0px; 
                right: 0px; 
                top: 0px; 
                bottom: 0px;
                width: 100%;
                height: 100%; 
                background-color: #34495e;
                z-index: 999; /* Higher than anything else in the document */
            }

            .loader {
            position: absolute;
            top: 50%;
            left: 48%;
            }

            .line {
            animation: expand 1s ease-in-out infinite;
            border-radius: 10px;
            display: inline-block;
            transform-origin: center center;
            margin: 0 3px;
            width: 5px;
            height: 50px;
            }

            .line:nth-child(1) {
            background: #ea5c0a;
            }

            .line:nth-child(2) {
            animation-delay: 180ms;
            background: #25338b;
            }

            .line:nth-child(3) {
            animation-delay: 360ms;
            background: #0e6fb6;
            }

            .line:nth-child(4) {
            animation-delay: 540ms;
            background: #38b9bf;
            }

            .line:nth-child(5) {
            animation-delay: 720ms;
            background: #60b867;
            }

            .line:nth-child(6) {
            animation-delay: 900ms;
            background: #e4a20d;
            }

            @keyframes expand {
            0% {
                transform: scale(1);
            }
            25% {
                transform: scale(2);
            }
            }
      </style>

    </head>
   <body>
      <?php require 'header.php'; ?>
      <div class="header" id="header">
            <div data-wow-delay=".1s" class="wow zoomInRight">
                <h1 class="main-heading">Making brands stand out<br/>is our obsession</h1>
            </div>

         <div class="w-form">
              <div data-wow-delay=".3s" class="wow pulse">
                <form id="email-form" name="email-form" data-name="Email Form" class="form-2 w-clearfix"><input type="text" class="text-field w-input" maxlength="256" name="Search" data-name="Search" placeholder="What are your looking?" id="Search" required=""/><button type="submit" data-wait="Please wait..." class="submit-button w-button"><i class="fa fa-search" style="font-size: 1.2em;" aria-hidden="true"></i></button></form>
              </div>
            <div class="w-form-done">
               <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
               <div>Oops! Something went wrong while submitting the form.</div>
            </div>
         </div>
         <div class="w-container">
            <div class="main-subtitle">Let us help your brand stand out.</div>
         </div>
      </div>
      <div class="about-section">
         <img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d596a173b5286f_x-black.png" width="52" class="x-icon"/>
         <div class="w-container">
            <p class="about-text">Minimalist is a full-service digital creative agency located in Ontorio Canada. We focus on design, consulting, technology, and photography. We’ve been building unique digital products, platforms, and experiences for the past 6  years. Let us help your company grow.</p>
            <li><a href="#" class="button">See More...</a></li>
         </div>
      </div>
      <div id="process" class="section">
         <div class="w-container">
            <div class="wow lightSpeedIn">
                <h2 class="firstone">Choose your BUSINESS decision wisely</h2>
            </div>
            <div class="divider grey"></div>
            <div class="wow fadeInLeftBig">
                <div class="w-row">
                    <div class="bounceInLeft">
                        <div class="w-col w-col-4">
                            <div class="grey-icon-wrapper"><img src="images/Ceritified.jpg" width="250" class="big-icon"/></div>
                            <h3>Certified reviews</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. </p>
                        </div>
                    </div>
                    <div class="bounceInLeft">
                        <div class="w-col w-col-4">
                            <div class="grey-icon-wrapper push-top"><img src="images/Verified.jpg" width="250" class="big-icon"/></div>
                            <h3>Verified Companies</h3>
                            <p>Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. </p>
                        </div>
                    </div>
                    <div class="bounceInLeft">
                        <div class="w-col w-col-4">
                            <div class="grey-icon-wrapper push-top"><img src="images/Ranked.jpg" width="250" class="big-icon"/></div>
                            <h3>get top ranked first</h3>
                            <p>Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                        </div>
                    </div>
                </div>
            </div>
         </div>
      </div>
      <div id="projects" class="section grey" style="padding-bottom: 0px;">
         <div class="w-container">
            <div class="wow flipInX">
                <h2 class="firstone">Services</h2>
            </div>
            <div class="divider grey"></div>
            <div class="text-block">Explore the 500+ Services for your business based on your requirement</div>
                <div class="w-row">
                <div class="w-col w-col-3 wow bounceInLeft" data-wow-delay="0s">
                    <a href="/project-page" class="project-wrapper w-inline-block">
                        <img src="images/Adevertising.jpg" class="image"/>
                        <div class="project-info">
                            <h3 class="project-title">Advertising &amp; Marketing</h3>
                            
                        </div>
                    </a>
                </div>
                <div class="w-col w-col-3 wow bounceInLeft" data-wow-delay=".25s">
                    <div class="project-wrapper">
                        <a href="/project-page" class="project-wrapper w-inline-block">
                            <img src="images/SEO.jpg" sizes="(max-width: 767px) 96vw, (max-width: 991px) 167px, 220px" class="image-2"/>
                            <div class="project-info">
                            <h3 class="project-title">Search engine optimization</h3>
                            
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-col w-col-3 wow bounceInLeft" data-wow-delay=".5s">
                    <div class="project-wrapper">
                        <a href="/project-page" class="project-wrapper w-inline-block">
                            <img src="images/Mobile-App-Development.jpg" class="image-3"/>
                            <div class="project-info">
                            <h3 class="project-title">Mobile app development</h3>
                            
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-col w-col-3 wow bounceInLeft" data-wow-delay=".75s">
                    <a href="/project-page" class="project-wrapper w-inline-block">
                        <img src="images/Web-&-Software-Development.jpg" sizes="(max-width: 767px) 96vw, (max-width: 991px) 167px, 220px" class="image-5"/>
                        <div class="project-info">
                            <h3 class="project-title">Web &amp; software development</h3>
                            
                        </div>
                    </a>
                </div>
            </div>
                <div class="w-row">
                <div class="w-col w-col-3 wow bounceInRight" data-wow-delay="0s">
                    <div class="project-wrapper">
                        <a href="/project-page" class="project-wrapper w-inline-block">
                            <img src="images/Business-Services.jpg" class="image-4"/>
                            <div class="project-info">
                            <h3 class="project-title">Bussiness<br>Services</h3>
                            
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-col w-col-3 wow bounceInRight" data-wow-delay=".25s">
                    <div class="project-wrapper">
                        <a href="/project-page" class="project-wrapper w-inline-block">
                            <img src="images/Designing.jpg" sizes="(max-width: 767px) 96vw, (max-width: 991px) 167px, 220px" class="image-6"/>
                            <div class="project-info">
                            <h3 class="project-title">Graphics<br>Designing</h3>
                            
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-col w-col-3 wow bounceInRight" data-wow-delay=".5s">
                    <div class="project-wrapper">
                        <a href="/project-page" class="project-wrapper w-inline-block">
                            <img src="images/IT-&-Services.jpg" class="image-7"/>
                            <div class="project-info">
                            <h3 class="project-title">It services<br>&amp; Solutions</h3>
                            
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-col w-col-3 wow bounceInRight" data-wow-delay=".75s">
                    <div class="project-wrapper">
                        <a href="/project-page" class="project-wrapper w-inline-block">
                            <img src="images/More.jpg" class="image-8"/>
                            <div class="project-info">
                            <h3 class="project-title">See<br>more...</h3>
                            
                            </div>
                        </a>
                    </div>
                </div>
         </div>
      </div>
      <div id="team" class="section">
         <div class="w-container">
            <h2 class="firstone">Top firms</h2>
            <div class="divider grey"></div>
            <div class="wow zoomIn">
                <div class="team-row w-row">
                <div class="member w-col w-col-3 w-col-small-6">
                    <img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d5966b05b52861_person1.png" class="team-image"/>
                    <h3 class="team-title">Ron Swanson</h3>
                    <div class="role">Founder</div>
                    <div class="social-buttons"><a href="#" class="social-link w-inline-block"><img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d5966113b52875_twitter-icon_black.svg" width="14"/></a><a href="#" class="social-link w-inline-block"><img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d5961ea7b5286a_linkdin-icon-black.svg" width="14"/></a><a href="#" class="social-link w-inline-block"><img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d59604f4b5285e_email-icon-black.svg" width="14"/></a></div>
                </div>
                <div class="member w-col w-col-3 w-col-small-6">
                    <img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d5961ab6b52874_person2.png" class="team-image"/>
                    <h3 class="team-title">Julia Depish</h3>
                    <div class="role">Marketing</div>
                    <div class="social-buttons"><a href="#" class="social-link w-inline-block"><img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d5966113b52875_twitter-icon_black.svg" width="14"/></a><a href="#" class="social-link w-inline-block"><img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d5961ea7b5286a_linkdin-icon-black.svg" width="14"/></a><a href="#" class="social-link w-inline-block"><img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d59604f4b5285e_email-icon-black.svg" width="14"/></a></div>
                </div>
                <div class="member w-col w-col-3 w-col-small-6">
                    <img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d5968593b5285b_person3.png" class="team-image"/>
                    <h3 class="team-title">Danny Devry</h3>
                    <div class="role">Designer</div>
                    <div class="social-buttons"><a href="#" class="social-link w-inline-block"><img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d5963d57b5285c_instagram-icon-black.svg" width="14"/></a><a href="#" class="social-link w-inline-block"><img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d5966113b52875_twitter-icon_black.svg" width="14"/></a><a href="#" class="social-link w-inline-block"><img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d596bfadb52866_behance-icon-black.svg" width="14"/></a><a href="#" class="social-link w-inline-block"><img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d5962789b5285d_dribbble-icon-black.svg" width="14"/></a><a href="#" class="social-link w-inline-block"><img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d59604f4b5285e_email-icon-black.svg" width="14"/></a></div>
                </div>
                <div class="member w-col w-col-3 w-col-small-6">
                    <img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d5962340b5286d_person4.png" class="team-image"/>
                    <h3 class="team-title">Lisa Smith</h3>
                    <div class="role">Developer</div>
                    <div class="social-buttons"><a href="#" class="social-link w-inline-block"><img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d5962bb3b52863_facebook-icon_black.svg" width="14"/></a><a href="#" class="social-link w-inline-block"><img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d5966113b52875_twitter-icon_black.svg" width="14"/></a><a href="#" class="social-link w-inline-block"><img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d59604f4b5285e_email-icon-black.svg" width="14"/></a></div>
                </div>
            </div>
            </div>
         </div>
      </div>
      <div id="testimonials" class="section grey">
         <div class="w-container">
            <img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d596dcfcb5285a_big-quote-icon.svg" class="quote-icon"/>
            <div data-animation="slide" data-duration="500" data-infinite="1" class="testimonial-slider w-slider">
               <div class="mask w-slider-mask">
                  <div class="testimonial-slide w-slide">
                     <p class="testimonial">“I love these guys! They did a great job. I would recommend them to anyone.” </p>
                     <img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d596b824b52862_128.jpg" width="64" class="face"/>
                     <div class="from">Julius Von Uberstien</div>
                  </div>
                  <div class="testimonial-slide left-border w-slide">
                     <p class="testimonial">“Elexis Corp. has grown immensely with the help of Minimal.” </p>
                     <img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d596b30ab52867_krystal.jpg" width="64" class="face"/>
                     <div class="from">Rachel Stamos</div>
                  </div>
                  <div class="testimonial-slide w-slide">
                     <p class="testimonial">“I’m working with these guys from now on!”</p>
                     <img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d5965657b5286e_face-am.jpg" width="64" class="face"/>
                     <div class="from">John Smith</div>
                  </div>
                  <div class="testimonial-slide left-border w-slide">
                     <p class="testimonial">“Top-notch job. Couldn’t have asked for better design and photography.</p>
                     <img src="http://uploads.webflow.com/5af5e91622d596fd7eb5284c/5af5e91622d5962e6db52869_face-chad.jpg" width="64" class="face"/>
                     <div class="from">Phil Johnson</div>
                  </div>
               </div>
               <div class="arrow w-slider-arrow-left">
                  <div class="w-icon-slider-left"></div>
               </div>
               <div class="arrow w-slider-arrow-right">
                  <div class="w-icon-slider-right"></div>
               </div>
            </div>
         </div>
      </div>
      <?php require 'footer.php'; ?>

      <div id="hideAll">
            <div class="loader">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
      </div>
        

      <script src="assets/js/wow.js"></script>
      <script src="assets/js/wow.min.js"></script>
      <script>
           new WOW().init();
      </script>

      <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script><script src="https://uploads-ssl.webflow.com/5af5e91622d596fd7eb5284c/js/webflow.3d0fbb902.js" type="text/javascript"></script><!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
      <script src="assets/js/animated-header.js" type="text/javascript"></script>
      <script type="text/javascript">
        //initialise pre-loader
        document.getElementById("hideAll").style.display = "block";
        
        //hide pre-loader 
        window.onload = function() {
            document.getElementById("hideAll").style.display = "none";
        }

        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            $("#navbar").css("animation-play-state", "running");
        } else {
            $("#navbar").css("animation-play-state", "paused");
        }
        prevScrollpos = currentScrollPos;
        }
        
      </script> 
    </body>
</html>