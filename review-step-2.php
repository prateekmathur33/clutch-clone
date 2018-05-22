<?php
    session_start();
?>
<!DOCTYPE html><!-- This site was created in Webflow. http://www.webflow.com --><!-- Last Published: Sat May 12 2018 17:22:13 GMT+0000 (UTC) -->
<html data-wf-domain="viss-first-project-7c06bd.webflow.io" data-wf-page="5af5e91622d5967921b52852" data-wf-site="5af5e91622d596fd7eb5284c" data-wf-status="1">
   <head>
      <meta charset="utf-8"/>
      <title>WeDigTech - HOME</title>
      <meta content="width=device-width, initial-scale=1" name="viewport"/>
      <meta content="Webflow" name="generator"/>
      <link rel="stylesheet" type="text/css" href="assets/css/login.css">
      <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
      <link href="http://fonts.googleapis.com/css?family=Ubuntu+condensed" rel="stylesheet" type="text/css">
      <script src="assets/js/webfont.js" type="text/javascript"></script><script type="text/javascript">WebFont.load({  google: {    families: ["Vollkorn:400,400italic,700,700italic","Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Oswald:200,300,400,500,600,700"]  }});</script><!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]--><script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
      <link href="https://y7v4p6k4.ssl.hwcdn.net/placeholder/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
      <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon"/>
      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/main.css" />
      <link rel="stylesheet" href="assets/css/rating.css">
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
            .first{
              font-family: 'Ubuntu Condensed',Arial, Helvetica, sans-serif;
              font-size: 20px;
              font-weight: 10px;
              text-shadow: 4px 4px 4px #aaa;
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
      <h3 class="first">Form</h3>
        <!-- progressbar -->
        <ul id="progressbar">
                <li class="active">Step 1</li>
                <li class="active">Step 2</li>
                <li>Step 3</li>
                <li>Step 4</li>
            </ul>

        <form method="post" action="https://pure-plains-98928.herokuapp.com/addreview2/<?php echo $_SESSION['userId']; ?>">
            <div class="row uniform">
               
                <!-- Break -->
                <div class="12u$">
                    <label for="background" class="first">Background*</label>
                    <div style="background-color:#e0eee0;height:auto;width: 100% ;z-index:1;padding: 20px;">
                        <label>Please describe your company and project here*</label>
                    <textarea name="background" id="background" placeholder="Enter your message" rows="6" required></textarea>
                </div>
                </div>
                <!-- Break -->
                <div class="12u$">
                    <label class="first">Challange*</label>
                    <div style="background-color:#e0eee0;;height:auto;width: 100% ;z-index:1;padding: 20px;">
                    <label for="cService">Please describe challanges here*</label>
                    <textarea name="cService" id="cService" placeholder="Enter your message" rows="6" required></textarea>
                </div>
                </div>
                <!-- Break -->
                <div class="12u$">
                        <label for="goal" class="first">Goals*</label>
                        <div style="background-color:#e0eee0;;height:auto;width: 100% ;z-index:1;padding: 20px;">
                        <label>What were your goals this project*</label>
                        <textarea name="cGoal" id="cGoal" placeholder="Enter your message" rows="6" required></textarea>
                    </div>
                    </div>
                    <!-- Break -->
                <div class="12u$">
                        <label class="first">Solutions*</label>
                        <div style="background-color:#e0eee0;;height:auto;width: 100% ;z-index:1;padding: 20px;">
                        <label for="vendor">How did you select this vendor*</label>
                        <textarea name="vendor" id="vendor" placeholder="Enter your message" rows="6" required></textarea>
                    </div>
                    </div>
                        <!-- Break -->
                <div class="12u$">
                        <div style="background-color:#e0eee0;;height:auto;width: 100% ;z-index:1;padding: 20px;">
                        <label for="projectDetail">Describe the project in detail*</label>
                        <textarea name="projectDetail" id="projectDetail" placeholder="Enter your message" rows="6" required></textarea>
                    </div>
                    </div>
                <!-- Break -->
                
                <div class="12u$">
                        <div style="background-color:#e0eee0;;height:auto;width: 100% ;z-index:1;padding: 20px;">
                        <label for="teamComposition">What was the team composition*</label>
                        <textarea name="teamComposition" id="teamComposition" placeholder="Enter your message" rows="6" required></textarea>
                    </div>
                    </div>
                <!-- Break -->
                <div class="12u$">
                        <label class="first">Results and Feedback*</label>
                        <div style="background-color:#e0eee0;height:auto;width: 100% ;z-index:1;padding: 20px;">
                            <label for="outcome">Can you share any outcomes from the project that demonstrate progress or success?* </label>
                        <textarea name="outcome" id="outcome" placeholder="Enter your message" rows="6" required></textarea>
                    </div>
            </div>
            <div class="12u$">
                    <div style="background-color:#e0eee0;height:auto;width: 100% ;z-index:1;padding: 20px;">
                    <label for="effective">How effective was the workflow between your team and theirs*</label>
                    <textarea name="effective" id="effective" placeholder="Enter your message" rows="6" required></textarea>
                </div>
                </div>
            <!-- Break -->
            <div class="12u$">
                    <div style="background-color:#e0eee0;;height:auto;width: 100% ;z-index:1;padding: 20px;">
                    <label for="keyFeature">What did you find the most impressive about this company*</label>
                    <textarea name="keyFeature" id="keyFeature" placeholder="Enter your message" rows="6" required></textarea>
                </div>
                </div>
            <!-- Break -->
            <div class="12u$">
                    <div style="background-color:#e0eee0;;height:auto;width: 100% ;z-index:1;padding: 20px;">
                    <label for="improvements">Are their any areas for improvement*</label>
                    <textarea name="improvements" id="improvements" placeholder="Enter your message" rows="6" required></textarea>
                </div>
                </div>
            <!-- Break -->
            <div class="12u$">
                    <div>
                    <label>Ratings*</label>
                    <div style="background: #e0eee0; padding: 20px; margin-bottom: 20px;">
                        <label for="qRating">How was the <b>qualilty</b> of Company's work?*</label>
                        <div class="rating">
                            <span><input type="radio" name="qRating" id="qRating5" value="5"><label for="qRating5"></label></span>
                            <span><input type="radio" name="qRating" id="qRating4" value="4"><label for="qRating4"></label></span>
                            <span><input type="radio" name="qRating" id="qRating3" value="3"><label for="qRating3"></label></span>
                            <span><input type="radio" name="qRating" id="qRating2" value="2"><label for="qRating2"></label></span>
                            <span><input type="radio" name="qRating" id="qRating1" value="1"><label for="qRating1"></label></span>
                        </div>
                        <!-- Break -->
                        <div class="6u 12u$(xsmall)" style="width:100%;">
                            <input type="text" name="qDetail" id="qDetail" value="" placeholder="Say something about rating" required/>
                        </div>
                    </div>
                    <div style="background: #e0eee0; padding: 20px; margin-bottom: 20px;">
                        <label for="sRating">How was the <b>scheduling</b> with Company?*</label>
                        <div class="rating">
                            <span><input type="radio" name="sRating" id="sRating5" value="5"><label for="sRating5"></label></span>
                            <span><input type="radio" name="sRating" id="sRating4" value="4"><label for="sRating4"></label></span>
                            <span><input type="radio" name="sRating" id="sRating3" value="3"><label for="sRating3"></label></span>
                            <span><input type="radio" name="sRating" id="sRating2" value="2"><label for="sRating2"></label></span>
                            <span><input type="radio" name="sRating" id="sRating1" value="1"><label for="sRating1"></label></span>
                        </div>
                        <!-- Break -->
                        <div class="6u 12u$(xsmall)" style="width:100%;">
                            <input type="text" name="sDetail" id="sDetail" value="" placeholder="Say something about rating" required/>
                        </div>
                    </div>
                    <div style="background: #e0eee0; padding: 20px; margin-bottom: 20px;">
                        <label for="cRating">How was the <b>cost</b> of Company's work?*</label>
                        <div class="rating">
                            <span><input type="radio" name="cRating" id="cRating5" value="5"><label for="cRating5"></label></span>
                            <span><input type="radio" name="cRating" id="cRating4" value="4"><label for="cRating4"></label></span>
                            <span><input type="radio" name="cRating" id="cRating3" value="3"><label for="cRating3"></label></span>
                            <span><input type="radio" name="cRating" id="cRating2" value="2"><label for="cRating2"></label></span>
                            <span><input type="radio" name="cRating" id="cRating1" value="1"><label for="cRating1"></label></span>
                        </div>
                        <!-- Break -->
                        <div class="6u 12u$(xsmall)" style="width:100%;">
                            <input type="text" name="cDetail" id="cDetail" value="" placeholder="Say something about rating" required/>
                        </div>
                    </div>
                    <div style="background: #e0eee0; padding: 20px; margin-bottom: 20px;">
                        <label for="rRating">How likely are you to <b>refer</b> Company to a friend?*</label>
                        <div class="rating">
                            <span><input type="radio" name="rRating" id="rRating5" value="5"><label for="rRating5"></label></span>
                            <span><input type="radio" name="rRating" id="rRating4" value="4"><label for="rRating4"></label></span>
                            <span><input type="radio" name="rRating" id="rRating3" value="3"><label for="rRating3"></label></span>
                            <span><input type="radio" name="rRating" id="rRating2" value="2"><label for="rRating2"></label></span>
                            <span><input type="radio" name="rRating" id="rRating1" value="1"><label for="rRating1"></label></span>
                        </div>
                        <!-- Break -->
                        <div class="6u 12u$(xsmall)" style="width:100%;">
                            <input type="text" name="rDetail" id="rDetail" value="" placeholder="Say something about rating" required/>
                        </div>
                    </div>
                    <div style="background: #e0eee0; padding: 20px; margin-bottom: 20px;">
                        <label for="oRating">Give Company an <b>overall rating</b>*</label>
                        <div class="rating">
                            <span><input type="radio" name="oRating" id="oRating5" value="5"><label for="oRating5"></label></span>
                            <span><input type="radio" name="oRating" id="oRating4" value="4"><label for="oRating4"></label></span>
                            <span><input type="radio" name="oRating" id="oRating3" value="3"><label for="oRating3"></label></span>
                            <span><input type="radio" name="oRating" id="oRating2" value="2"><label for="oRating2"></label></span>
                            <span><input type="radio" name="oRating" id="oRating1" value="1"><label for="oRating1"></label></span>
                        </div>
                        <!-- Break -->
                        <div class="6u 12u$(xsmall)" style="width:100%;">
                            <input type="text" name="oDetail" id="oDetail" value="" placeholder="Say something about rating" required/>
                        </div>
                    </div>
                </div>
                </div>
            <!-- Break -->


                        
                    
               
                <div class="12u$">
                    <ul class="actions">
                        <input type="hidden" name="step" value="2">
                        <!-- <input type="hidden" name="userId" value="123456"> -->
                        <li><input type="submit" value="Next Section >>" /></li>
                    </ul>
                </div>
            </div>
        </form>

        

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
      
      <script>
            $(document).ready(function(){
            //  Check Radio-box
                $(".rating input:radio").attr("checked", false);
                $('.rating input').click(function () {
                    $(".rating span").removeClass('checked');
                    $(this).parent().addClass('checked');
                });
    
                $('input:radio').change(
                function(){
                    var userRating = this.value;
                }); 
            });
        </script>
      
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