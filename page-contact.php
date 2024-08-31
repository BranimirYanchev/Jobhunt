<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php include 'assets/elements/head.php' ?>
    <!--leaflet map-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="assets/imgs/theme/loading.gif" alt="jobhub" />
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER -->

    <?php include 'assets/elements/header.php' ?>

    <!-- END-HEADER -->
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="user-account">
                    <img src="assets/imgs/avatar/ava_1.png" alt="jobhub" />
                    <div class="content">
                        <h6 class="user-name">Howdy, <span class="text-brand">AliThemes</span></h6>
                        <p class="font-xs text-muted">You have 2 new messages</p>
                    </div>
                </div>
                <div class="burger-icon burger-icon-white">
                    <span class="burger-icon-top"></span>
                    <span class="burger-icon-mid"></span>
                    <span class="burger-icon-bottom"></span>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="perfect-scroll">
                    <div class="mobile-search mobile-header-border mb-30">
                        <form action="#">
                            <input type="text" placeholder="Search for items…" />
                            <i class="fi-rr-search"></i>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-border">
                        <!-- mobile menu start -->
                        <nav>
                            <ul class="mobile-menu font-heading">
                                <li class="has-children">
                                    <a class="active" href="index.html">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="job-grid.html">Browse Jobs</a>
                                    <ul class="sub-menu">
                                        <li><a href="job-grid.html">Job Grid</a></li>
                                        <li><a href="job-grid-2.html">Job Grid 2</a></li>
                                        <li><a href="job-list.html">Job List</a></li>
                                        <li class="hr"><span></span></li>
                                        <li><a href="job-single.html">Job Single 01</a></li>
                                        <li><a href="job-single-2.html">Job Single 02</a></li>
                                        <li><a href="job-single-3.html">Job Single 03</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="employers-grid.html">Employers</a>
                                    <ul class="sub-menu">
                                        <li><a href="employers-grid.html">Employers Grid</a></li>
                                        <li><a href="employers-grid-2.html">Employers Grid 2</a></li>
                                        <li><a href="employers-list.html">Employers List</a></li>
                                        <li class="hr"><span></span></li>
                                        <li><a href="employers-single.html">Employers Single 01</a></li>
                                        <li><a href="employers-single-2.html">Employers Single 02</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="candidates-grid.html">Candidates</a>
                                    <ul class="sub-menu">
                                        <li><a href="candidates-grid.html">Candidates Grid</a></li>
                                        <li><a href="candidates-grid-2.html">Candidates Grid 2</a></li>
                                        <li><a href="candidates-list.html">Candidates List</a></li>
                                        <li class="hr"><span></span></li>
                                        <li><a href="candidates-single.html">Candidates Single 01</a></li>
                                        <li><a href="candidates-single-2.html">Candidates Single 02</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-grid-2.html">Blog Grid Sidebar</a></li>
                                        <li><a href="blog-list.html">Blog List</a></li>
                                        <li class="hr"><span></span></li>
                                        <li><a href="blog-single.html">Blog Single 01</a></li>
                                        <li><a href="blog-single-2.html">Blog Single 02</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="page-about.html">About Us</a></li>
                                        <li><a href="page-service.html">Our Services</a></li>
                                        <li><a href="page-pricing.html">Pricing Plan</a></li>
                                        <li><a href="pages-faqs.html">FAQs</a></li>
                                        <li><a href="page-contact.html">Contact Us</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- mobile menu end -->
                    </div>
                    <div class="mobile-account">
                        <h6 class="mb-10">Your Account</h6>
                        <ul class="mobile-menu font-heading">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Work Preferences</a></li>
                            <li><a href="#">My Boosted Shots</a></li>
                            <li><a href="#">My Collections</a></li>
                            <li><a href="#">Account Settings</a></li>
                            <li><a href="#">Go Pro</a></li>
                            <li><a href="#">Sign Out</a></li>
                        </ul>
                    </div>
                    <div class="mobile-social-icon mb-50">
                        <h6 class="mb-25">Follow Us</h6>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt="jobhub" /></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt="jobhub" /></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt="jobhub" /></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt="jobhub" /></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt="jobhub" /></a>
                    </div>
                    <div class="site-copyright">Copyright 2022 © JobHub. <br />Designed by AliThemes.</div>
                </div>
            </div>
        </div>
    </div>
    <!--End header-->
    <!-- Content -->
    <main class="main">
        <div class="container wide mb-50">
            <div class="border-radius-15 overflow-hidden">
                <div id="map-basic" class="leaflet-map"></div>
            </div>
        </div>
        <div class="container mt-90 mt-md-30">
            <div class="row">
                <div class="col-xl-10 col-lg-12 m-auto">
                    <section class="mb-50">
                        <h5 class="text-blue text-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Get in Touch</h5>
                        <h3 class="section-title w-75 w-md-100 mb-50 mt-15 text-center mx-auto wow animate__animated animate__fadeInUp" data-wow-delay=".1s">You are always welcome to visit our little studio</h3>
                        <div class="row mb-60">
                            <div class="col-md-4 mb-4 mb-md-0 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                                <h5 class="mb-15">Office</h5>
                                205 North Michigan Avenue, Suite 810<br />
                                Chicago, 60601, USA<br />
                                <abbr title="Phone">Phone:</abbr> (123) 456-7890<br />
                                <abbr title="Email">Email: </abbr>contact@jubhub.com<br />
                                <a class="btn btn-default btn-small font-weight-bold text-white mt-20 border-radius-5 btn-shadow-brand hover-up"><i class="fi-rs-marker mr-5"></i>View map</a>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-0 mt-sm-30 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                                <h5 class="mb-15">Studio</h5>
                                205 North Michigan Avenue, Suite 810<br />
                                Chicago, 60601, USA<br />
                                <abbr title="Phone">Phone:</abbr> (123) 456-7890<br />
                                <abbr title="Email">Email: </abbr>contact@jubhub.com<br />
                                <a class="btn btn-default btn-small font-weight-bold text-white mt-20 border-radius-5 btn-shadow-brand hover-up"><i class="fi-rs-marker mr-5"></i>View map</a>
                            </div>
                            <div class="col-md-4 mt-sm-30 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                                <h5 class="mb-15">Shop</h5>
                                205 North Michigan Avenue, Suite 810<br />
                                Chicago, 60601, USA<br />
                                <abbr title="Phone">Phone:</abbr> (123) 456-7890<br />
                                <abbr title="Email">Email: </abbr>contact@jubhub.com<br />
                                <a class="btn btn-default btn-small font-weight-bold text-white mt-20 border-radius-5 btn-shadow-brand hover-up"><i class="fi-rs-marker mr-5"></i>View map</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-9 col-md-12 mx-auto">
                                <div class="contact-from-area padding-20-row-col">
                                    <h5 class="text-blue text-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Send Message</h5>
                                    <h2 class="section-title mt-15 mb-10 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Drop Us a Line</h2>
                                    <p class="text-muted mb-30 font-md text-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Your email address will not be published. Required fields are marked *</p>
                                    <div class="row mt-50">
                                        <div class="col-md-4 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                                            <img src="assets/imgs/theme/icons/headset-color.svg" alt="">
                                            <p class="text-muted font-xs mb-10">Phone</p>
                                            <p class="mb-0 font-lg">
                                                + 48 654-430-309 <br>
                                                + 1 6532-430-309
                                            </p>
                                        </div>
                                        <div class="col-md-4 mt-sm-30 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                                            <img src="assets/imgs/theme/icons/marker-color.svg" alt="">
                                            <p class="text-muted font-xs mb-10">Email</p>
                                            <p class="mb-0 font-lg">
                                                contact@jobhub.com <br>
                                                sales@jobhub.com
                                            </p>
                                        </div>
                                        <div class="col-md-4 mt-sm-30 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                                            <img src="assets/imgs/theme/icons/plane-color.svg" alt="">
                                            <p class="text-muted font-xs mb-10">Address</p>
                                            <p class="mb-0 font-lg">
                                                11567 E Broadview Dr <br>
                                                Colorado(CO), 80117
                                            </p>
                                        </div>
                                    </div>
                                    <form class="contact-form-style mt-80" id="contact-form" action="#" method="post">
                                        <div class="row wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="input-style mb-20">
                                                    <input name="name" placeholder="First Name" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="input-style mb-20">
                                                    <input name="email" placeholder="Your Email" type="email" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="input-style mb-20">
                                                    <input name="telephone" placeholder="Your Phone" type="tel" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="input-style mb-20">
                                                    <input name="subject" placeholder="Subject" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 text-center">
                                                <div class="textarea-style mb-30">
                                                    <textarea name="message" placeholder="Message"></textarea>
                                                </div>
                                                <button class="submit submit-auto-width" type="submit">Send message</button>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <section class="section-box mt-50 mb-60">
            <div class="container">
                <div class="box-newsletter">
                    <h5 class="text-md-newsletter">Sign up to get</h5>
                    <h6 class="text-lg-newsletter">the latest jobs</h6>
                    <div class="box-form-newsletter mt-30">
                        <form class="form-newsletter">
                            <input type="text" class="input-newsletter" value="" placeholder="contact.alithemes@gmail.com" />
                            <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="box-newsletter-bottom">
                    <div class="newsletter-bottom"></div>
                </div>
            </div>
        </section>
    </main>
    <!-- End Content -->
    <!-- Footer -->

    <?php include 'assets/elements/footer.php' ?>

    <!-- End Footer -->
    <!-- Vendor JS-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/waypoints.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/select2.min.js"></script>
    <script src="assets/js/plugins/isotope.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/leaflet.js"></script>
    <!-- Template  JS -->
    <script src="assets/js/main.js?v=1.0"></script>
</body>

</html>