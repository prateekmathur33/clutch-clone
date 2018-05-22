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
            <h2 class="heading1">My Company Profile</h2>
            <p class="normal">When creating a company profile, you should be as thorough as possible. You should fill all the necessary details required by the analyst prior to the publishing .You will be notified after publishing.</p>
          
            <ul class="nav nav-tabs">
              <li class="active heading2"><a data-toggle="tab" href="#profile">Profile</a></li>
              <li class="heading2"><a data-toggle="tab" href="#location">Location</a></li>
              <li class="heading2"><a data-toggle="tab" href="#details">details</a></li>
            </ul>
            <form action="https://pure-plains-98928.herokuapp.com/addcompany" id='comp_profile' method="post" enctype="multipart/form-data">
            <div class="tab-content">
              <div id="profile" class="tab-pane fade in active">
                <h3 class="heading1">Profile</h3>
                <div class="form-container">
                
                        <div class="row uniform">
                            <div class="6u 12u$(xsmall)" style="width: 100%;">
                                <label for="name" class="normal" >Company Name*</label>
                                <input type="text" name="name" id="name" value="" placeholder="Company Name" required/>
                            </div>
                            <div class="6u 12u$" style="width: 100%;">
                                <label for="logo" class="normal">Logo<br>
                                </label>
                                <input type="file" name="logo" id="logo" value="" />
                            </div>
                            <div class="6u 12u$(xsmall)">
                                    <label for="tagline" class="normal" >Tagline*</label>
                                    <input type="text" name="tagline" id="tagline" value="" placeholder="Tagline" required/>
                            </div>
                            <div class="6u 12u$(xsmall)">
                                    <label for="founded" class="normal">Founded</label>
                                    <input type="text" name="founded" id="founded" value="" placeholder="Founded"/>
                            </div>
                            <div class="12u$">
                                    <label for="noOfEmp" class="normal">Employees*</label>
                                    <div class="select-wrapper">
                                        <select name="noOfEmp" id="noOfEmp" required>
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
                            <div class="12u$">
                                    <label for="minProjectPrice" class="normal">Minimum Project Size</label>
                                    <div class="select-wrapper">
                                        <select name="minProjectPrice" id="minProjectPrice"/>
                                            <option value="">- None -</option>
                                            <option value="1">₹1000+</option>
                                            <option value="1">₹5000+</option>
                                            <option value="1">₹10000+</option>
                                            <option value="1">₹25000+</option>
                                            <option value="1">₹50000+</option>
                                            <option value="1">₹100000+</option>
                                            <option value="1">₹250000+</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="12u$">
                                        <label for="avgPricePerHour" class="normal">Avg Hourly rate</label>
                                        <label class="normal">enter your average hourly rate</label>
                                        <div class="select-wrapper">
                                            <select name="avgPricePerHour" id="avgPricePerHour">
                                                <option value="">- None -</option>
                                                <option value="1">l ess than ₹25</option>
                                                <option value="1">₹25-₹49</option>
                                                <option value="1">₹50-₹99</option>
                                                <option value="1">₹100-₹149</option>
                                                <option value="1">₹150-₹199</option>
                                                <option value="1">₹200-₹499</option>
                                                <option value="1">₹500+</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="6u 12u$(xsmall)">
                                        <label for="websiteLink" class="normal">Website*</label>
                                        <input type="text" name="websiteLink" id="websiteLink" value="" placeholder="Company Name" required/>
                                    </div>
                                    <div class="6u 12u$(xsmall)">
                                        <label for="emailTechSupport" class="normal">Email*</label>
                                        <input type="text" name="emailTechSupport" id="emailTechSupport" value="" placeholder="Email" required/>
                                    </div>
                                    <div class="6u 12u$(xsmall)">
                                        <label for="emailAdmin" class="normal">Admin Email</label>
                                        <input type="text" name="emailAdmin" id="emailAdmin" value="" placeholder="Admin Email"/>
                                    </div>
                                    <div class="6u 12u$(xsmall)">
                                        <label for="twitterProfile" class="normal">Twitter</label>
                                        <input type="text" name="twitterProfile" id="twitterProfile" value="" placeholder="Twitter"/>
                                    </div>
                                    <div class="6u 12u$(xsmall)">
                                        <label for="facebookProfile" class="normal">Facebook</label>
                                        <input type="text" name="facebookProfile" id="facebookProfile" value="" placeholder="Facebook"/>
                                    </div>
                                    <div class="12u$">
                                        <label class="normal">Company Summary*</label>
                                        <textarea name="summary" id="summary" placeholder="Enter your message" rows="6" required></textarea>
                                    </div>
                                    <!-- Break -->
                                    <div class="12u$">
                                            <label class="normal">Key clients</label>
                                            <textarea name="client" id="client" placeholder="Enter your message" rows="6"></textarea>
                                        </div>
                                        <!-- Break -->
                                        <div class="12u$" style="margin-left: 47%;">
                                            <ul class="actions">
                                            <li><a data-toggle="tab" href="#location"><button class="normal">Save & Next</button></a></li>
                                            </ul>
                                        </div>
                            </div>
                </div>


              </div>
              <div id="location" class="tab-pane fade">
                <h3 class="heading1">Location</h3>
                <div class="form-container">
                                <div class="row uniform">
                                        <div class="12u$">
                                                <label for="country" class="normal">Country</label>
                                                <div class="select-wrapper">
                                                    <select name="country" id="country">
                                                        <option value="">- None -</option>
                                                        <option value="">India</option>
                                                        <option value="">Pakistan</option>
                                                       
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="6u 12u$(xsmall)">
                                            <label for="street" class="normal">Street</label>
                                            <input type="text" name="street" id="street" value="" placeholder="Street"/>
                                         </div>
                                         <div class="6u 12u$(xsmall)">
                                            <label for="city" class="normal">City</label>
                                            <input type="text" name="city" id="city" value="" placeholder="city"/>
                                         </div>
                                         <div class="6u 12u$(xsmall)">
                                            <label for="state" class="normal">State</label>
                                            <input type="text" name="state" id="state" value="" placeholder="State"/>
                                         </div>
                                         <div class="6u 12u$(xsmall)">
                                            <label for="postalCode" class="normal">Postal Code</label>
                                            <input type="text" name="postalCode" id="postalCode" value="" placeholder="Postal Code"/>
                                         </div>
                                         <div class="6u 12u$(xsmall)">
                                            <label for="mobNo" class="normal">Phone number</label>
                                            <input type="text" name="mobNo" id="mobNo" value="" placeholder="Phone Number"/>
                                         </div>
                                         <div class="12u$" style="margin-left: 47%;">
                                            <ul class="actions">
                                            <li><a data-toggle="tab" href="#details"><button class="normal">Save & Next</button></a></li>
                                            </ul>
                                        </div>
                                         </div>
 
                </div>
              </div>
              <div id="details" class="tab-pane fade">
                <h3 class="heading1">Profile Details</h3>
                <div class="form-container">
                                <div class="row uniform">
                                    <div class="12u$">
                                        <label class="normal">Certifications(Maximun 1000 characters)</label>
                                        <textarea name="cert" id="cert" placeholder="" rows="6" maxlength="1000"></textarea>
                                    </div>
                                    <!-- Break -->
                                    <div class="12u$">
                                        <label class="normal">Accolades</label>
                                        <textarea name="accolades" id="accolades" placeholder="" rows="6" maxlength="1000"></textarea>
                                    </div>
                                    <!-- Break -->
                                    <div class="12u$">
                                        <label class="normal">Detailed Description</label>
                                        <textarea name="detailedDes" id="detailedDes" placeholder="description" rows="6" maxlength="1000"></textarea>
                                    </div>
                                    <!-- Break -->
                                    <div class="12u$" style="margin-left: 47%;">
                                        <ul class="actions">
                                        <input type="hidden" name="reg_id" value="<?php echo $_SESSION['userId']; ?>">
                                        <li><button onclick="saveForm()">Save</button></li>
                                        </ul>
                                    </div>


                                </div>
                </div>
                
              </div>
            </div>
            
            </form>
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
        
        function saveForm() {
            console.log("Hello");
            document.getElementById('comp_profile').submit();
        }

      </script> 
    </body>
</html>