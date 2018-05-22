<div data-collapse="medium" data-animation="default" data-duration="400" id="navbar" class="navbar w-nav">
         <div class="w-container">
            <a href="index.php" class="brand-block w-clearfix w-nav-brand">
               <img src="images/WeDigTech_logo.svg" width="200" class="logo-img wow rubberBand""/>
            </a>
            <nav role="navigation" class="nav-menu w-nav-menu">
               <a href="index.php" class="nav-link w-nav-link  wow bounce" >Home</a>
               <div data-hover="1" data-delay="0" class="dropdown w-dropdown">
                  <div class="dropdown-toggle w-dropdown-toggle">
                     <div class="w-icon-dropdown-toggle  wow bounce"></div>
                     <div class="text-block-2  wow bounce">Services</div>
                  </div>
                  <nav class="w-dropdown-list" style="background-image: linear-gradient(180deg, rgba(255, 228, 38, 0.7), rgba(209, 140, 100, 0.7)), url('images/Mega-Menu.jpg'); background-repeat: no-repeat; background-size: cover;">
                        <ul class="col6">
                            <li class="nav-header">Advertising &amp; Marketing</li>
                            <li class="nav-sub-list">Adertising</li> 
                            <li class="nav-sub-list">Digital Marketing</li>
                            <li class="nav-sub-list">Social Media Marketing</li>
                            <li class="nav-sub-list">Mobile App Development</li>
                            <li class="nav-sub-list">Content Marteting</li>
                            <li class="nav-sub-list">Full Service Digital</li>
                            <li class="nav-sub-list">Creative Agencies</li>
                            <li class="nav-sub-list">Branding</li>
                            <li class="nav-sub-list">Naming</li>
                            <li class="nav-sub-list">Video Production</li>
                            <li class="nav-sub-list">Public Relation</li>
                            <li class="nav-sub-list">Media Planning & Buying</li>
                            <li class="nav-sub-list">Digital Strategy</li>
                            <li class="nav-sub-list">Email Marketing</li>
                            <li class="nav-sub-list">Inbound Marketing</li>
                            <li class="nav-sub-list">Market Research</li>
                            <li class="nav-sub-list">Market Software</li>

                        </ul>

                        <ul class="col6">
                            <li class="nav-header">Search Engine Optimization</li>
                            <li class="nav-sub-list">SEO</li>
                            <li class="nav-sub-list">Pay Per Click</li>

                            <li class="nav-header">Business Services</li>
                            <li class="nav-sub-list">BPO</li>
                            <li class="nav-sub-list">Voice/Call Center Services</li>
                            <li class="nav-sub-list">Accounting</li>
                            <li class="nav-sub-list">Human Resource</li>

                        </ul>
                        <ul class="col6">
                            <li class="nav-header">Mobile App Development</li>
                            <li class="nav-sub-list">Mobile App Developers</li>
                            <li class="nav-sub-list">Android App Developers</li>
                            <li class="nav-sub-list">iPhone App Developers</li>
                            <li class="nav-sub-list">App Development Software</li>

                        </ul>
                        <ul class="col6">
                            <li class="nav-header">Web &amp; Software Development</li>
                            <li class="nav-sub-list">Web Development</li>
                            <li class="nav-sub-list">Custom Software Developers</li>
                            <li class="nav-sub-list">E-commerce Development</li>
                            <li class="nav-sub-list">Website Builder Software</li>
                            <li class="nav-sub-list">.Net Developers</li>
                            <li class="nav-sub-list">AR &amp; VR Developers</li>
                            <li class="nav-sub-list">Blockchain Developers</li>
                            <li class="nav-sub-list">Drupal Developers</li>
                            <li class="nav-sub-list">IoT Developers</li>
                            <li class="nav-sub-list">Magento Developers</li>
                            <li class="nav-sub-list">PHP Developers</li>
                            <li class="nav-sub-list">Ruby on Rails Developers</li>
                            <li class="nav-sub-list">Shopify Developers</li>
                            <li class="nav-sub-list">WordPress Developers</li>
                            
                        </ul>
                        <ul class="col6">
                            <li class="nav-header">Designing</li>
                            <li class="nav-sub-list">Web Designer</li>
                            <li class="nav-sub-list">User Experience</li>
                            <li class="nav-sub-list">Digital Design</li>
                            <li class="nav-sub-list">Graphic Design</li>
                            <li class="nav-sub-list">Logo Design</li>
                            <li class="nav-sub-list">Product Design</li>
                            <li class="nav-sub-list">Packaging Design</li>
                            <li class="nav-sub-list">Print Design</li>
                            
                        </ul>
                        <ul class="col6">
                            <li class="nav-header">IT Services &amp; Solutions</li>
                            <li class="nav-sub-list">Managed Services Providers</li>
                            <li class="nav-sub-list">IT Services</li>
                            <li class="nav-sub-list">Cloud Consultants</li>
                            <li class="nav-sub-list">BI &amp; Big Data</li>
                            <li class="nav-sub-list">Cyber Security</li>
                            <li class="nav-sub-list">Staff Augmentation</li>
                            
                        </ul>
                     </nav>
               </div>
               <a href="review.php" class="nav-link w-nav-link wow bounce">Leave a Review</a>
               <a href="login.php" class="nav-link w-nav-link wow bounce">
                    <?php 
                        if(isset($_SESSION['user_name'])) { 
                            echo $_SESSION['user_name']; 
                            echo $_SESSION['userId'];
                        }
                        else {
                            echo "Login/Sign-up";
                        } 
                    ?>
                </a>
            </nav>
            <div class="menu-button w-nav-button">
               <div class="w-icon-nav-menu"></div>
            </div>
         </div>
      </div>