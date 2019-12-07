@extends('layouts.genexic')

@section('content')
<div class="container-fluid background-wrap">
    <header>
        <div class="container-fluid about-us-background">
            <div class="mobile">
                <a class="mobile-menu-toggle js-toggle-menu hamburger-menu" href="#">
                    <span class="menu-item"></span>
                    <span class="menu-item"></span>
                    <span class="menu-item"></span>
                </a>
                <nav class="mobile-nav-wrap">
                    <ul class="mobile-header-nav">
                        <li><a href="index.html">home</a></li>
                        <li><a href="o_nas.html">about us</a></li>
                        <li><a href="services.html">services</a></li>
                        <li><a href="portfolio.html">portfolio</a></li>
                        <li><a href="blog.html">blog</a></li>
                        <li><a href="contacts.html">contact us</a></li>
                    </ul>
                </nav>
            </div>
            <div class="row padding-top-header">
                <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                    <div class="header-logo">
                        <a href="index.html"><img src="img/Logo.svg" alt="#"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-push-1 col-md-7 col-md-push-1 col-sm-8 col-sm-push-1 col-xs-8 nav-media">
                    <div class="header-nav wow flipInX">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li><a href="o_nas.html">about us</a></li>
                            <li><a href="services.html">services</a></li>
                            <li><a href="portfolio.html">portfolio</a></li>
                            <li><a href="blog.html">blog</a></li>
                            <li><a href="contacts.html">contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row header-section-two">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 audacious-fly-in">
                    <ul class="fly-in hidden">
                        <li>a</li>
                        <li>b</li>
                        <li>o</li>
                        <li>u</li>
                        <li>t</li>
                        <li>u</li>
                        <li>s</li>
                    </ul>
                </div>
                <div class="block-social">
                    <ul>
                        <li><a href="#" id="zoom-fade1">facebook</a></li>
                        <li><a href="#" id="zoom-fade2">twitter</a></li>
                        <li><a href="#" id="zoom-fade3">linkedin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- MODAL FORM -->
    <div id="modal_form">
        <div class="row">
            <div class=" col-lg-12 header-logo">
                <span id="modal_close"><i class="fa fa-times" aria-hidden="true"></i></span>
                <a href="#"><img src="img/Logo.svg" alt="#"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 in-touch-form">
                <p class="wow pulse">Interested in talking to us about a new project or want to find out more about our agency?</p>
                <form method="post">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="e-mail">
                    <input type="tel" placeholder="phone number">
                    <div class="button-container-1">
                        <span class="mas">Let`s talk</span>
                        <button id='go1' type="button" name="Hover">Let`s talk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="overlay"></div>

    <!--<ABOUT US-->
    <section>
        <div class="container">
            <div class="row company-description">
                <div class="col-lg-7 col-md-9 col-sm-12 col-xs-12 company-description-text">
                    <div class="description-text-wrap">
                        <div class="text-border">
                            <p>
                                Genexic is a US Company with an R&D in Ukraine that has been helping inventors turn their thoughts into code since 2013. We use the latest tools to realize your ideas via computers and other devices.
                            </p>
                            <p>
                                Developing new products for Gaming & Leisure, FinTech, Ecommerce & Retail, Media & Entertainment, Software & Hi-Tech; together we drive our society to be more innovative. Creating fascinating designs for websites and applications, we make the world more beautiful and enjoyable. Establishing good communication and management in each project, we make our relationships stronger and more trustworthy.
                            </p>
                            <p>
                                We truly care about bringing your business quick growth and great success. Focusing on results, openness, responsibility, our team always counts on these values while cooperating with you. Computools is not just a business partner, we are the true friends for those who depend on us in their creative process.
                            </p>
                            <p>
                                You can contact our company from any part of the world, 24/7. Get personally acquainted with us in LosAngeles, Boston, Tel Aviv, Kiev, Khmelnitskii.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-3 col-sm-12 col-xs-12 company-description-picture">
                    <p><img src="img/o-nas-decoration.png" alt="#" class="wow bounceInRight"></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 about-us-our-mission wow flipInX">
                    <h2>Our Mission</h2>
                    <p>Promote prosperity for customers’ businesses through full cycle servicing of innovative software development, enabling customers to concentrate on their core tasks.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 about-us-our-vision wow flipInX">
                    <h2>Our Vision</h2>
                    <p>To be a global service provider that helps develop innovative software products within our customers’ industries.</p>
                </div>
            </div>
            <div class="row triangles-counter">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 about-us-triangles">
                    <div class="about-us-triangles-wrap1">
                        <img src="img/o-nas-triangle1.png" alt="#">
                        <span class="counter">100</span><span>+</span>
                    </div>
                    <p class="wow flipInX">PROFESSIONALS</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 about-us-triangles">
                    <div class="about-us-triangles-wrap2">
                        <img src="img/o-nas-triangle2.png" alt="#">
                        <span class="counter">250</span><span>+</span>
                    </div>
                    <p class="wow flipInX">HAPPY CLIENTS</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 about-us-triangles">
                    <div class="about-us-triangles-wrap3">
                        <img src="img/o-nas-triangle3.png" alt="#">
                        <span class="counter">300</span><span>+</span>
                    </div>
                    <p class="wow flipInX">DELIVERED PROJECTS</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 gelexic-benefits-title wow pulse">
                    <h1>Why Gelexic?</h1>
                </div>
            </div>
            <div class="row gelexic-benefits">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="gelexic-benefits-one wow flipInX">
                        <h2>SOLVING HARD TASKS</h2>
                        <p>We are always on the client’s side providing best services in all aspects of our cooperation. We use all our experience and market’s best practices to solve your issues, and we do it very well.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="gelexic-benefits-two wow flipInX">
                        <h2>BEST STAFF FOR YOU</h2>
                        <p>We always hire the most skilled staff, provide them ongoing learning in order to give you the best service.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="gelexic-benefits-three wow flipInX">
                        <h2>NO CONCERNS WITH THE STAFF</h2>
                        <p>We take care of all the legal concerns with the staff hiring and management, provide them office premises and give you all the required information (CV). </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row company-description-about-us">
            <div class="col-lg-12 view-more-button view-more-background">
                <div class="button-look">
                    <p><button id="buttonOpen"><span>Read more</span></button></p>
                </div>
                <div class="more-content">
                    <h1>Lorem ipsum</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </section>

    <!--FOOTER-->

    <footer>
        <div class="container-fluid portfolio-footer">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="wow flipInX footer-title">LET’S START A NEW PROJECT TOGETHER!</p>
                    <div class="button-container-1 button-footer wow swing">
                        <span class="mas">Get in touch</span>
                        <button id='go2' type="button" name="Hover">Get in touch</button>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fab fa-telegram"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-viber"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script>
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 20,
            time: 2000
        });
    });
</script>
@endsection