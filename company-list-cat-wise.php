<!DOCTYPE html><!-- This site was created in Webflow. http://www.webflow.com --><!-- Last Published: Sat May 12 2018 17:22:13 GMT+0000 (UTC) -->
<html data-wf-domain="viss-first-project-7c06bd.webflow.io" data-wf-page="5af5e91622d5967921b52852" data-wf-site="5af5e91622d596fd7eb5284c" data-wf-status="1">
   <head>
      <meta charset="utf-8"/>
      <title>WeDigTech - HOME</title>
      <meta content="width=device-width, initial-scale=1" name="viewport"/>
      <meta content="Webflow" name="generator"/>
      <link rel="stylesheet" type="text/css" href="assets/css/login.css">
      <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
      <link href="http://fonts.googleapis.com/css?family=Ubuntu+condensed&effect=shadow-multiple" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="assets/js/webfont.js" type="text/javascript"></script><script type="text/javascript">WebFont.load({  google: {    families: ["Vollkorn:400,400italic,700,700italic","Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Oswald:200,300,400,500,600,700"]  }});</script><!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]--><script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
      <link href="https://y7v4p6k4.ssl.hwcdn.net/placeholder/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
      <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon"/>
      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/main.css" />

      <style>
          .card-item{
            background-color: #fff;
            margin: 20px;
            padding: 20px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            border: 1px solid #dfdfdf;
}
          }
          hr{
              color: black;
          }
          #filterby{
              display: none;
          }
          .filt{
            width: 13%;
            margin-left: 20px;
            display: inline-block;
            border-bottom: 1px black;
          }
           .first{
              font-family: 'Ubuntu Condensed',Arial, Helvetica, sans-serif;
              font-size: 48px;
              font-weight: 10px;
              text-shadow: 4px 4px 4px #aaa;
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
            .header1 img {
                float: left;
                width: 70px;
                height: 70px;
                }

                .header1 h4 {
                position: relative;
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
    <div>
      <div style="border-bottom: black;">
          <h1 class="first" style="text-align: center;">Top AD company and Marketing Agencies</h1>
      </div>
      <hr>
      <ul>
          <li style="display: inline-block;"><label>Sort By</label></li>
          <li style="display: inline-block;">
                <select style="width: 250px;">
                    <option value="1">Sponsored</option>
                    <option value="2">Clutch rank</option>
                    <option value="3">Number of reviews</option>
                    <option value="4">Review rating</option>
                    <option value="5">Company Name</option>
                </select>
          </li>
          <li style="margin-left: 50px;display: inline-block;">
              <input type="button" id="bt1" name="bt1" value="Filter by" onclick="display()" style="width: 250px;;">
          </li>
      </ul>
      <hr>
      <div id="filterby" style="width: 100%;">
        <div class="filt">
                <select>
                    <option value="">Min Project size</option>
                    <option value="1">₹1000+</option>
                    <option value="2">₹5000+</option>
                    <option value="3">₹10000+</option>
                    <option value="4">₹25000+</option>
                    <option value="4">₹50000+</option>
                    <option value="4">₹75000+</option>
                    <option value="4">₹100000+</option>
            </select>
        </div>
        <div class="filt">
            <select>
                <option value="">Avg hourly rate</option>
                <option value="1">less than ₹25</option>
                <option value="2">₹25-₹49</option>
                <option value="3">₹50-₹99</option>
                <option value="4">₹100-₹149</option>
                <option value="4">₹150-₹199</option>
                <option value="4">₹200-₹299</option>
                <option value="4">₹300+</option>
            </select>
        </div>
        <div class="filt">
            <select>
                <option value="">Employees</option>
                <option value="1">2-9</option>
                <option value="2">10-49</option>
                <option value="3">50-249</option>
                <option value="4">250-999</option>
                <option value="4">1000-1999</option>
                <option value="4">2000+</option>
            </select>
        </div>
        <div class="filt">
            <select>
                <option value="">Country</option>
                <option value="1">India</option>
                <option value="2">Pakistan</option>
            </select>
        </div>
        <div class="filt">
            <input type="button" id="add" value="Apply">
        </div>
        <div class="filt">
            <input type="button" id="clear" value="clear">
        </div>
        <hr>
      </div>
    <div class="card-item">
      <div class="header1" >
            <div class="logocompany">
                <img src="images/pic01.jpg" style="margin-right: 30px;margin-left: 30px;">
            </div>
            <div>
                <h4 style="margin-bottom: 0;text-shadow: tomato;color: red;font-family: Arial, Helvetica, sans-serif; font-style: italic; font-size: 20px;"><b><u>Brandtuitive</u></b></h4>
            </div>
            <p>Unexpected thinking</p>
        </div>
        <hr style="margin-bottom: 0px;margin-top: 0px;">
      <div style="width: 100%;margin: 10px;">
          <div style="width: 75%;border-right:1px solid black; padding: 0px 10px 10px 10px;display: inline-block">
                
                <div style="width: 70%;display: inline-block">
                    <div style="border-right:2px solid black;display: inline-block">
                        <p style="margin: 0;">"Brandtuitive has an exceptional first class team. They're a joy to be around and they work their trails off."</p>
                        <p style="margin: 0;">Trade Marketer, Large CPG, Corporation</p>
                        <p style="margin: 0;"><a>contact@brandtuitive.com</a></p>
                        <p style="margin: 0;">1234567890</p>
                    </div>
                   
                </div>
                <div style="display: inline-block;padding-top: 0;">
                    <table><tr>
                        <p style="margin: 5px;"><i class="fa fa-tag"></i>&nbsp;&nbsp;&nbsp; ₹50000+</p>
                        <p style="margin: 5px;">&nbsp;&nbsp;&nbsp; ₹150-₹199+</p>
                        <p style="margin: 5px;"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;10-49</p>
                        <p style="margin: 5px;"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp;New York,NY</p>
                        </tr></table>
                    </div>

            </div>
            <ul style="display: inline-block;">
                <li style="height: 50%;padding: 20px 20px 10px 50px;border-bottom: 1px solid silver"><a style="font-size: 20px;">Visit Website</a></li>
                <li  style="height: 50%;padding: 20px 20px 10px 50px;"><a  style="font-size: 20px;">View Profile</a></li>
            </ul>
      </div>
    </div>
    <hr style="margin-bottom: 10px;margin-top: 0px;">







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
        var disp=0;
        function display(){
            if(disp==0){
                document.getElementById('filterby').style.display="block";
                disp=1;
            }
            else{
                document.getElementById('filterby').style.display="none";
                disp=0;
            }
           
        }
        
      </script> 
    </body>
</html>