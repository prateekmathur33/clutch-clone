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

      <div class="container">
            <h2 class="heading1">Solution Profile</h2>
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home" class="normal">Software summary</a></li>
              <li><a data-toggle="tab" href="#menu1" class="normal">pricing</a></li>
            </ul>
          
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <h3 class="heading2">Software summary</h3>
                <div class="form-container">
                <form method="post" action="#">
                        <div class="row uniform">
                            <div class="6u 12u$(xsmall)" style="width: 100%;">
                                <label for="softwarename" class="normal">software Name*</label>
                                <input type="text" name="softwarename" id="softwarename" value="" placeholder="Software Name" required/>
                            </div>
                            <!---->
                            <div class="12u$">
                                    <label for="scategory" class="normal">Software category</label>
                                    <div class="select-wrapper">
                                        <select name="scategory" id="scategory" required>
                                            <option value="">- None -</option>
                                            <option value="1">Answering services</option>
                                            <option value="1">App Development software</option>
                                            <option value="1">BI and Dsta Development software</option>
                                            <option value="1">Cloud services</option>
                                            <option value="1">Cloud storage</option>
                                            <option value="1">Cloud hosting</option>
                                            <option value="1">Online Backup </option>
                                            <option value="1">Marketing software</option>
                                            <option value="1">Email Marketing software</option>
                                            <option value="1">Content Marketing software</option>
                                            <option value="1">Marketing automation software</option>
                                            <option value="1">Payroll services</option>
                                            <option value="1">Social media management services</option>
                                            <option value="1">Website builders</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="6u 12u$" style="width: 100%;">
                                <label for="picture" class="normal">Logo<br>
                                </label>
                                <input type="file" name="picture" id="picture" value="" />
                            </div>
                            <div class="6u 12u$(xsmall)" style="width: 100%;"> 
                                    <label for="tagline" class="normal">Tagline*</label>
                                    <input type="text" name="tagline" id="tagline" value="" placeholder="Tagline" required/>
                            </div>
                            <div class="6u 12u$(xsmall)" style="width: 100%;">
                                    <label for="dsd" class="normal">Directory short description</label>
                                    <input type="text" name="dsd" id="dsd" value="" placeholder="Directory short description" required/>
                                </div>
                            <div class="12u$">
                                    <label class="normal">Software Summary*</label>
                                    <textarea name="ssummary" id="ssummary" placeholder="Enter your message" rows="6" required></textarea>
                                </div>
                           
                            <div class="12u$">
                                    <label for="employeeSize" class="normal">Employees*</label>
                                    <div class="select-wrapper">
                                        <select name="employee" id="employee" required>
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
                                    <div class="6u 12u$(xsmall)">
                                        <label for="website" class="normal">Website*</label>
                                        <input type="text" name="website" id="website" value="" placeholder="Company Name" required/>
                                    </div>
                                    <!-- Break -->
                                    <div class="12u$">
                                            <label class="normal">Key clients</label>
                                            <textarea name="keyclients" id="keyclients" placeholder="Enter your message" rows="6"></textarea>
                                        </div>
                                        <!-- Break -->
                                   
                            </div>
                    </form>
                </div>


              </div>
              <div id="menu1" class="tab-pane fade">
                <h3 class="heading2">Pricing</h3>
                <div class="form-container">
                        <form method="post" action="#">
                                <div class="row uniform">
                                        <div class="12u$">
                                                <label class="normal">Pricing into text</label>
                                                <textarea name="pricingtext" id="pricingtext" placeholder="" rows="6"></textarea>
                                            </div>
                                        <!-- Break -->
                                        <div class="12u$">
                                            <label class="normal">Options to start</label>
                                            <textarea name="start" id="start" placeholder="" rows="6"></textarea>
                                        </div>
                                        <!-- Break -->
                                    <div class="6u 12u$(xsmall)" style="width: 100%;">
                                            <label for="softwarename" class="normal">Price range</label>
                                            <input type="text" name="pricerange" id="pricerange" value="" placeholder="" maxlength="50"/>
                                        </div>
                                    <div class="6u 12u$(small)"  class="normal">
                                        <label class="normal">Pricing options</label>
                                            <input type="checkbox" id="montly" name="monthly">
                                            <label for="monthly" class="normal">Monthly subscription</label>
                                    </div>
                                    <div class="6u$ 12u$(small)">
                                        <input type="checkbox" id="annual" name="annual">
                                        <label for="annual" class="normal">Annual Subscription</label>
                                </div>
                                <div class="6u$ 12u$(small)">
                                        <input type="checkbox" id="onetime" name="onetime">
                                        <label for="onetime" class="normal">one time license</label>
                                    </div>
                                <div class="6u$ 12u$(small)" style="width: 100%;">
                                    <label class="normal">Pricing table</label>
                                    <table>
                                        <tr>
                                            <td>
                                            <div class="6u 12u$(xsmall)" style="width: 100%;">
                                                    <input type="text" name="dsd" id="dsd" value="" placeholder="Directory short description" required/>
                                                </div>
                                            </td>
                                            <td>
                                            <div class="6u 12u$(xsmall)" style="width: 100%;">
                                                    <input type="text" name="dsd" id="dsd" value="" placeholder="Directory short description" required/>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><div class="6u 12u$(xsmall)" style="width: 100%;">
                                                    <input type="text" name="dsd" id="dsd" value="" placeholder="Directory short description" required/>
                                                </div></td>
                                            <td>
                                                    <div class="6u 12u$(xsmall)" style="width: 100%;">
                                                            <input type="text" name="dsd" id="dsd" value="" placeholder="Directory short description" required/>
                                                        </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="12u$">
                                        <label class="normal">Pricing plan summary(Provide 1-2 sentences overview of the rangeto your plans and a pricing range</label>
                                        <textarea name="prange" id="prange" placeholder="" rows="6"></textarea>
                                    </div>
                                        <div class="6u 12u$(xsmall)">
                                            <label for="street" class="normal">Pricing page</label>
                                            <input type="text" name="ppage" id="ppage" value="" placeholder="Pricing page"/>
                                        </div>
                        </form>
                </div>
              </div>
             
          <div class="12u$" style="margin-left: 47%;">
                <ul class="actions">
                <li><input type="submit" value="Next" /></li>
                </ul>
            </div>

     <!-- <div class="edit-profile">

        <h3>Form</h3>

        <form method="post" action="#">
            <div class="row uniform">
                <div class="6u 12u$(xsmall)">
                    <label for="demo-name" >FirstName*</label>
                    <input type="text" name="demo-name" id="demo-name" value="" placeholder="FirstName" required/>
                </div>
                <div class="6u$ 12u$(xsmall)">
                    <label for="demo-name" >LastName*</label>
                    <input type="text" name="demo-lname" id="demo-lname" value="" placeholder="LastName" required />
                </div>
                <!-- Break 
                <div class="6u 12u$(xsmall)">
                        <label for="headline" >Headline</label>
                        <input type="text" name="headline" id="headline" value="" placeholder="Headline"/>
                </div>
                <div class="6u 12u$(xsmall)">
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
                        <label for="picture" >Picture<br>
                                <img src="placeholder.jpg"/>
                        </label>
                        <input type="file" name="picture" id="picture" value="" />
                </div>
                <div class="6u 12u$" style="width: 100%;">
                        <label for="pass" >Password</label>
                        <input type="password" name="pass" id="pass" value="" placeholder="Password" />
                </div>
                <div class="6u 12u$" style="width: 100%;">
                        <label for="cpass" >Confirm Password</label>
                        <input type="password" name="cpass" id="cpass" value="" placeholder="Confirm Password" />
                </div>

                <!--<div class="12u$">
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
                <!-- Break-->
                <!--<div class="4u 12u$(small)">
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
                        <li><input type="submit" value="Send Message" /></li>
                        <li><input type="reset" value="Reset" class="alt" /></li>
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