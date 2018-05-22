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
      <link href="http://fonts.googleapis.com/css?family=Ubuntu+condensed" rel="stylesheet" type="text/css">
      <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
      <link rel="stylesheet" href="assets/css/main.css" />
      <script src="assets/js/webfont.js" type="text/javascript"></script><script type="text/javascript">WebFont.load({  google: {    families: ["Vollkorn:400,400italic,700,700italic","Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Oswald:200,300,400,500,600,700"]  }});</script><!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]--><script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
      <link href="https://y7v4p6k4.ssl.hwcdn.net/placeholder/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
      <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon"/>
      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">


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
              font-size: 48px;
              font-weight: 10px;
              text-shadow: 4px 4px 4px #aaa;
          }

            .loader {
            position: absolute;
            top: 50%;
            left: 48%;
            }
            .projectstart{
                float: left;
                width: 1000px;
                padding-right: 50px;
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
            label{
                font-family: 'Ubuntu Condensed',serif;
                font-size: 20px;
            }
            .month{
                width:50%;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
               
            }
      </style>

    </head>
   <body>
            
   <?php require 'header.php'; ?>
      
<div class="form-container">
    <h3 class="first">Review</h3>

    <form method="post" action="https://pure-plains-98928.herokuapp.com/addreview" onsubmit="addDate()">
        <!-- progressbar -->
        <ul id="progressbar">
            <li class="active">Step 1</li>
            <li>Step 2</li>
            <li>Step 3</li>
            <li>Step 4</li>
        </ul>
        <div class="row uniform">
            <!-- <div class="6u 12u$(xsmall)">
                <input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
            </div>
            <div class="6u$ 12u$(xsmall)">
                <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
            </div>
            <!-- Break -->
            <div class="12u$">
                <div class="select-wrapper">
                    <label for="typeOfProject">Select the type of Category*</label>
                    <select name="typeOfProject" id="typeOfProject" required>
                        <option value="">- Select -</option>
                        <?php
                            $url =  "https://pure-plains-98928.herokuapp.com/category";
                            
                            $data = file_get_contents($url);

                            $json = json_decode($data, true);
                            
                            
                            foreach($json as $obj) {
                                // echo "<script>console.log('vipul')</script>"  ;     
                                   echo "<option value=" . $obj['_id'] . ">" . $obj['name'] . "</option>";
                            }    
                            
            
                        ?>
                    
                    </select>
                </div>
            </div>
            <!-- Break -->
            <div class="6u 12u$(xsmall)" style="width:100%;">
                <label for="projectTitle">Project Title*</label>
                    <input type="text" name="projectTitle" id="projectTitle" value="" placeholder="Project Title" required/>
            </div>

            <div class="12u$">
                <div class="select-wrapper">
                    <label for="industry">Select the Industry</label>
                    <select name="industry" id="industry" required>
                        <option value="">- Select -</option>
                        <option value="Manufacturing">Manufacturing</option>
                        <option value="Shipping">Shipping</option>
                        <option value="Administration">Administration</option>
                        <option value="Human Resources">Human Resources</option>
                    </select>
                </div>
            </div>
            <!--break-->
            <div class="12u$">
                <div class="select-wrapper">
                    <label for="cost">Cost Range</label>
                    <select name="cost" id="cost" required>
                        <option value="">- Select -</option>
                        <option value="10000">Less than 10000</option>
                        <option value="50000">10000-49999</option>
                        <option value="200000">50000-199999</option>
                        <option value="1000000">200000-999999</option>
                        <option value="10000000">1000000-10000000</option>
                    </select>
                </div>
            </div>
            <div style="width:100%;float: left;">      
                    <div class="12u$">
                        <label>Project start*</label>
                        <div class="select-wrapper projectstart" style="width:40%;">
                            <label for="smonth">Month</label>
                                <select name="smonth" id="smonth" required>
                                    <option value="">- Select -</option>
                                    <option value="January">January</option>
                                    <option value="Februray1">Februray</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                        </div>
                        <div class="select-wrapper projectstart" style="width:40%;">
                            <label for="syear">Year</label>
                                <select name="syear" id="syear" required>
                                    <option value="">- Select -</option>
                                    <option value="">2015</option>
                                    <option value="1">2016</option>
                                    <option value="1">2017</option>
                                    <option value="1">2018</option>                                    
                                </select>
                        </div>
                        <input type="hidden" name="startDate" id="startDate" value="">
                    </div>
                </div>
                <div style="width:100%;float: left;">      
                        <div class="12u$">
                                <label>Project end*</label>
                                <div class="select-wrapper projectstart" style="width:40%;">
                                    <label for="emonth">Month</label>
                                        <select name="emonth" id="emonth" required>
                                        <option value="">- Select -</option>
                                        <option value="January">January</option>
                                        <option value="Februray1">Februray</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                            
                                    </select>
                                </div>
                                <div class="select-wrapper projectstart" style="width:40%;">
                                    <label for="eyear">Year</label>
                                        <select name="eyear" id="eyear" required>
                                            <option value="">- Select -</option>
                                            <option value="">2015</option>
                                            <option value="1">2016</option>
                                            <option value="1">2017</option>
                                            <option value="1">2018</option>                                    
                                        </select>
                                </div>
                            </div>
                            <input type="hidden" name="endDate" id="endDate" value="">
                    </div>
                    <div class="12u$">
                        <ul class="actions">
                            <input type="hidden" name="step" value="1">
                            <input type="hidden" name="userId" value="<?php echo $_SESSION['userId']; ?>">
                            <li><input type="submit" value="Next Section >>" /></li>
                        </ul>
                    </div>
                </div>
        </div>
    </form>
                    
        
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

        function addDate() {
            console.log("Hello");
            startDate = document.getElementById('startDate');
            endDate = document.getElementById('endDate');
            smonth = document.getElementById('smonth');
            syear = document.getElementById('syear');
            emonth = document.getElementById('emonth');
            eyear = document.getElementById('eyear');
            startDate.value = smonth.value + syear.value;
            endDate.value = emonth.value + eyear.value;
            console.log("bye");
        }
        
      </script> 
    </body>
</html>