<!DOCTYPE html><!-- This site was created in Webflow. http://www.webflow.com --><!-- Last Published: Sat May 12 2018 17:22:13 GMT+0000 (UTC) -->
<html data-wf-domain="viss-first-project-7c06bd.webflow.io" data-wf-page="5af5e91622d5967921b52852" data-wf-site="5af5e91622d596fd7eb5284c" data-wf-status="1">
   <head>
      <meta charset="utf-8"/>
      <title>WeDigTech - HOME</title>
      <meta content="width=device-width, initial-scale=1" name="viewport"/>
      <meta content="Webflow" name="generator"/>
      <link rel="stylesheet" type="text/css" href="assets/css/login.css">
      <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
      <script src="assets/js/webfont.js" type="text/javascript"></script><script type="text/javascript">WebFont.load({  google: {    families: ["Vollkorn:400,400italic,700,700italic","Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Oswald:200,300,400,500,600,700"]  }});</script><!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]--><script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
      <link href="https://y7v4p6k4.ssl.hwcdn.net/placeholder/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
      <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon"/>
      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/main.css" />

      <style>
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
      
      <div class="form-container">
      <h3>Submitted</h3>
      <p>Your review has been successfully submitted.</p>
      <p>Thank you for your review, it will be important for the buyers to find the right providers.</p>
      <div class="12u$">
            <ul class="actions">
                <li><input type="button" value="Back to clutch.co" /></li>
            </ul>
        </div>

        <!--<form method="post" action="#">
            <div class="row uniform">
                <div class="6u 12u$(xsmall)" style="width: 100%;">
                    <label for="email" >Email*</label>
                    <input type="text" name="email" id="email" value="" placeholder="Email" required/>
                </div>
                <div class="6u$ 12u$(xsmall)" style="width: 100%;">
                    <label for="mobNo" >Mobile Number*</label>
                    <input type="text" name="mobNo" id="mobNo" value="" placeholder="Mobile Number" required/>
                </div>
                <!-- Break 
                <div class="6u$ 12u$(xsmall)" style="width: 100%;">
                        <label for="companyName" >Company Name</label>
                        <input type="text" name="companyName" id="companyName" value="" placeholder="Company Name"/>
                    </div>
                    <!-- Break 
                    <div class="12u$">
                            <label for="companySize" >Company Size</label>
                            <div class="select-wrapper">
                                <select name="companySize" id="companySize" required>
                                    <option value="">- Category -</option>
                                    <option value="1">1-10 employees</option>
                                    <option value="1">11-50 employees</option>
                                    <option value="1">51-200 employees</option>
                                    <option value="1">201-500 employees</option>
                                    <option value="1">501-1000 employees</option>
                                    <option value="1">1001-5000 employees</option>
                                    <option value="1">5001-10000 employees</option>
                                    <option value="1">10000+ employees</option>
                                </select>
                            </div>
                        </div> 
                    <!-- Break 
               
                <div class="6u 12u$(xsmall)" style="width: 100%;">
                        <label for="country" >Country</label>
                        <input type="text" name="country" id="country" value="" placeholder="Country" required/>
                </div>
                <!--<div class="6u 12u$(xsmall)">
                        <label for="location" >Location</label>
                        <input type="text" name="location" id="location" value="" placeholder="Location" />
                </div>

                <div class="6u 12u$(xsmall)">
                        <label for="phone" >Phone Number*</label>
                        <input type="text" name="phone" id="phone" value="" placeholder="Phone Number" required />
                </div>
                <div class="6u 12u$(xsmall)">
                        <label for="industry" >Industry</label>
                        <input type="text" name="industry" id="inustry" value="" placeholder="Industry" />
                </div>


                <div class="6u 12u$" style="width: 100%;">
                        <label for="url" >Public Profile URL</label>
                        <input type="text" name="url" id="url" value="" placeholder="Public Profile URL" />
                </div>
                <div class="6u 12u$" style="width: 100%;">
                        <label for="link" >Twitter Link</label>
                        <input type="text" name="link" id="link" value="" placeholder="Twitter Link" />
                </div>
                <div class="6u 12u$" style="width: 100%;">
                        <label for="picture" >Picture</label>
                        <input type="file" name="picture" id="picture" value="" />
                </div>

                <div class="12u$">
                        <div class="select-wrapper">
                            <select name="demo-category" id="demo-category">
                                <option value="">- Category -</option>
                                <option value="1">Manufacturing</option>
                                <option value="1">Shipping</option>
                                <option value="1">Administration</option>
                                <option value="1">Human Resources</option>
                            </select>
                        </div>
                    </div> 
                <!-- Break 
                <div class="4u 12u$(small)">
                    <input type="radio" id="demo-priority-low" name="demo-priority" checked>
                    <label for="demo-priority-low">Low Priority</label>
                </div>
                <div class="4u 12u$(small)">
                    <input type="radio" id="demo-priority-normal" name="demo-priority">
                    <label for="demo-priority-normal">Normal Priority</label>
                </div>
                <div class="4u$ 12u$(small)">
                    <input type="radio" id="demo-priority-high" name="demo-priority">
                    <label for="demo-priority-high">High Priority</label>
                </div>
                <!-- Break 
                <div class="6u 12u$(small)">
                    <input type="checkbox" id="demo-copy" name="demo-copy">
                    <label for="demo-copy">Email me a copy of this message</label>
                </div>
                <div class="6u$ 12u$(small)">
                    <input type="checkbox" id="demo-human" name="demo-human" checked>
                    <label for="demo-human">I am a human and not a robot</label>
                </div>
                <!-- Break 
                <div class="12u$">
                    <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                </div>
                <!-- Break 
                <div class="12u$">
                    <ul class="actions">
                        <li><input type="submit" value="Submit the review" /></li>
                    </ul>
                </div>
            </div>
        </form>-->

        

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
        

      <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script><script src="https://uploads-ssl.webflow.com/5af5e91622d596fd7eb5284c/js/webflow.3d0fbb902.js" type="text/javascript"></script><!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
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
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-110px";
        }
        prevScrollpos = currentScrollPos;
        }
        
      </script> 
    </body>
</html>