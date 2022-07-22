<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Bootstrap Css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--Meanmenu.css-->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!--Owl carousel-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!--Owl Theme-->
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!--Magnific-popup-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--Flaticon-->
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <!--Remixicon-->
        <link rel="stylesheet" href="assets/css/remixicon.css">
        <!--Odometer-->
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <!--Aos css-->
        <link rel="stylesheet" href="assets/css/aos.css">
        <!--Style css-->
        <link rel="stylesheet" href="assets/css/style.css">
        <!--Dark css-->
        <link rel="stylesheet" href="assets/css/dark.css">
        <!--Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css">

        <link rel="icon" type="image/png" href="assets/images/favicon.png">
        <title>Sanu - College University HTML Template</title>
    </head>
    <body>
        <!-- Start Preloader Area -->
        <div class="preloader-area">
            <div class="spinner">
                <div class="inner">
                    <div class="disc"></div>
                    <div class="disc"></div>
                    <div class="disc"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!--Strat Top Header Area-->
  <?php require('header.php'); ?>
        <!--End Top Header Area-->

        <!-- Start Navbar Area --> 
   
        <!-- End Navbar Area -->

        <!-- Sidebar Modal -->
        <div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>

                    <div class="modal-body">
                        <a href="index.html">
                            <img src="assets/images/logo.png" class="main-logo" alt="logo">
                            <img src="assets/images/white-logo.png" class="white-logo" alt="logo">
                        </a>
                        <div class="sidebar-content">
                            <h3>About Us</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <div class="sidebar-btn">
                                <a href="contact.html" class="default-btn">Let’s Talk</a>
                            </div>
                        </div>
                        <div class="sidebar-contact-info">
                            <h3>Contact Information</h3>

                            <ul class="info-list">
                                <li><i class="ri-phone-fill"></i> <a href="tel:9901234567">+990-123-4567</a></li>
                                
                                <li><i class="ri-mail-line"></i><a href="mailto:hello@sanu.com">hello@sanu.com</a></li>

                                <li><i class="ri-map-pin-line"></i> 413 North Las Vegas, NV 89032</li>
                            </ul>
                        </div>
                        <ul class="sidebar-social-list">
                            <li>
                                <a href="https://www.facebook.com" target="_blank"><i class="flaticon-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com" target="_blank"><i class="flaticon-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://linkedin.com/?lang=en" target="_blank"><i class="flaticon-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://instagram.com/?lang=en" target="_blank"><i class="flaticon-instagram"></i></a>
                            </li>
                        </ul>
                        <div class="contact-form">
                            <h3>Ready to Get Started?</h3>

                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" required data-error="Please enter your name" placeholder="Your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" required data-error="Please enter your email" placeholder="Your email address">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" class="form-control" required data-error="Please enter your phone number" placeholder="Your phone number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Write your message..."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn">Send Message<span></span></button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sidebar Modal -->

        <!--Start Page Banner-->
        <div class="page-banner-area bg-1">
            <div class="container">
                <div class="page-banner-content">
                    <h1>Departments Details</h1>
                 
                </div>
            </div>
        </div>
        <!--End Page Banner-->

        <!--Start Academic Details Area-->
        <div class="academics-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="academics-details">
                            <div class="prepare-exam">
                                <h3>Department of building and civil engineering</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut labore et dolore magna aliqua. Ut enim ad minim ven iam quis nostrud xerci tation ulla mco laboris nisi ut</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="exam-card">
                                            <h4>Artisan in masonry</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="exam-card">
                                            <h4>Artisan plumbing</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="exam-card">
                                            <h4>Craft Certificate in building and technology</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="exam-card">
                                            <h4>Craft Certificate in plumbing</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="exam-card">
                                            <h4>Craft certificate in land survey</h4>
                                        </div>
                                    </div>
                                   <div class="col-lg-6 col-md-6">
                                        <div class="exam-card">
                                            <h4>Diploma in building technology</h4>
                                        </div>
                                    </div>
                                     <div class="col-lg-6 col-md-6">
                                        <div class="exam-card">
                                            <h4>Diploma in civil engineering</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="exam-card">
                                            <h4>Diploma in land survey</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="detgails-right-content">
                            <div class="serch-content">
                                <h3>Search</h3>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Find Your Department">
                                    <button type="submit" class="src-btn">
                                        <i class="flaticon-search"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="academics-list">
                                <h3>Departments List</h3>
                                <ul>
                                    <li>
                                        <a href="academics.html">agriculture<i class="ri-arrow-drop-right-fill"></i></a>
                                    </li>
                                    <li>
                                        <a href="academics.html">electrical and electronics<i class="ri-arrow-drop-right-fill"></i></a>
                                    </li>
                                    <li>
                                        <a href="academics.html">building and civil engineering<i class="ri-arrow-drop-right-fill"></i></a>
                                    </li>
                                    <li>
                                        <a href="academics.html">business studies and information communication technology<i class="ri-arrow-drop-right-fill"></i></a>
                                    </li>
                                    <li>
                                        <a href="academics.html">institutional management and cosmetology<i class="ri-arrow-drop-right-fill"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="related-download">
                                <h3>Related Courses</h3>
                                <ul>
                                    <li><a href="#"><i class="flaticon-pdf-file"></i>Brochure Department</a></li>
                                    <li><a href="#"><i class="flaticon-pdf-file"></i>Department Details</a></li>
                                    <li><a href="#"><i class="flaticon-pdf-file"></i>Journals Departments</a></li>
                                    <li><a href="#"><i class="flaticon-pdf-file"></i>Alumni Departments</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Academic Details Area-->
        <!--Start Footer Area-->
        <div class="footer-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer-logo-area">
                            <a href="index.html"><img src="assets/images/ktti_logo.png" width="117px" height="110px" alt="Image"></a>
                            <p>Karumo TTI is a Technical Institute in Tigania West in Meru County. The Institute is at the periphery of Isiolo County, a region with high potential in tourism, industrial, renewable energy potential among others.</p>
                            <!-- <div class="contact-list">
                                <ul>
                                    <li><a href="tel:+01987655567685">+01-9876-5556-7685
                                    </a></li>
                                    <li><a href="mailto:admin@sanu.edu">admin@sanu.edu</a></li>
                                </ul>
                            </div> -->
                            <!-- Karumo Map -->

                <div class="row">
                    <h3 class="text-white">Location</h3>
                            <div class="mapouter"><div class="gmap_canvas"><iframe width="300" height="180" id="gmap_canvas" src="https://maps.google.com/maps?q=Katwala,%20Katwala,%20Kisasi,%20Mbitini%20Road,%20Meru&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><style>.gmap_canvas {overflow:hidden;background:none!important;height:180px;width:300px;}</style></div>
                        </div>
                </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widjet">
                            <h3>Quick Links</h3>
                            <div class="list">
                                <ul>
                                    <li><a href="www.helb.com">Helb</a></li>
                                    <li><a href="campus-life.html">Kuccps</a></li>
                                    <li><a href="campus-life.html">Our Programmes</a></li>
                                    <li><a href="campus-life.html">Our History</a></li>
                                    <li><a href="campus-life.html">Online Application</a></li>
                                    <li><a href="campus-life.html">Latest News</a></li>
                                    <li><a href="campus-life.html">School Constitution</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widjet">
                            <h3>Student Resources</h3>
                            <div class="list">
                                <ul>
                                    <li><a href="campus-life.html">Student Portal</a></li>
                                    <li><a href="campus-life.html">Learning Timetables</a></li>
                                    <li><a href="campus-life.html">E-library</a></li>
                                    <li><a href="campus-life.html">Dean of Student</a></li>
                                    <li><a href="campus-life.html">E-Learning Portal</a></li>
                                    <li><a href="campus-life.html">Exam Timetables</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="footer-widjet">
                            <h3>Contact Us</h3>
                            <div class="list">
                                <ul>
                                    <li><a href="mailto:karumotti@gmail.com" class="text-white"> Email: karumotti@gmail.com</a></li>
                                    <li> <a href="academics.html">Tel: +254 705 636443</a></li>
                                    <li><p class="text-white">P.O BOX 276-60602 KIANJAI</p></li>
                                    <li><li><p class="text-white">Website: www.karumotti.ac.ke</p></li>
                                    <li>
                                        <!-- Social Media Links -->
                                        <a href="https://www.facebook.com" target="_blank"><i class="ri-facebook-fill"></i></a>&nbsp;
                                        <a href="https://www.twitter.com" target="_blank"><i class="ri-twitter-fill"></i></a>&nbsp;
                                        <a href="https://instagram.com/?lang=en" target="_blank"><i class="ri-instagram-line"></i></a>&nbsp;
                                        <a href="https://linkedin.com/?lang=en" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape">
                    <img src="assets/images/shape-1.png" alt="Image">
                </div>
            </div>
        </div>
        <!--End Footer Area-->

        <!--Start Copyright Area-->
        <div class="copyright-area">
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-lg-6 col-md-4">
                        </div>
                        <div class="col-lg-6 col-md-8 text-center">
                            <div class="text-center text-white">
                                <p class="text-white">© Copyright 2022 KARUMO TTI | ALL RIGHTS RESERVED</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Copyright Area-->

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class="ri-arrow-up-s-line"></i>
            <i class="ri-arrow-up-s-line"></i>
        </div>
        <!-- End Go Top Area -->
        
        <!-- Jquery js -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap bundle js -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Meanmenu js -->
        <script src="assets/js/jquery.meanmenu.js"></script>
        <!-- Owl Carosel js -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Owl Carosel Thumbs js -->
        <script src="assets/js/carousel-thumbs.min.js"></script>
        <!-- Magnific popup js -->
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <!-- Aos js -->
        <script src="assets/js/aos.js"></script>
        <!-- Odometer js -->    
        <script src="assets/js/odometer.min.js"></script>
        <!-- Appear js -->  
        <script src="assets/js/appear.min.js"></script> 
        <!-- Form Validator js -->    
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact Form Script js -->    
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Ajaxchimp js -->    
        <script src="assets/js/ajaxchimp.min.js"></script>
        <!--Custom js-->
        <script src="assets/js/custom.js"></script>
    </body>
</html>