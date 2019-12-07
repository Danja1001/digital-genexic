@extends('layouts.genexic')

@section('content')
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
                <input type="text" name="#" placeholder="name">
                <input type="email" name="#" placeholder="e-mail">
                <input type="tel" name="#" placeholder="phone number">
                <div class="button-container-1">
                    <span class="mas">Let`s talk</span>
                    <button id='go1' type="button" name="Hover">Let`s talk</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="overlay"></div>

<!--OUR-MISSION-->

<section>
    <div class="container our-mission">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 our-mission-block">
                <div class="squareGeneral wow slideInLeft">
                    <div class="mission-squareOne"></div>
                    <div class="mission-squareTwo"></div>
                    <div class="mission-portreit"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="our-mission-text">
                    <h2 class="our-mission-title wow flipInX">Our mission</h2>
                    <p>We Create Your Imagination Iis the conscientious observance of all conditions at the stage of cooperation since each client is very important for us.You set goals and we embody them in life into Reality</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--STUDIO_OFFER-->

<section>
    <div class="container-fluid studio-offer">
        <div class="container">
            <div class="row offer-padding">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="studio-offer-title">Our studio <br> offer</h2>
                </div>
            </div>
            <div class="row studio-offer-types-list">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="studio-offer-types">
                        <li class="wow slideInRight"><a href="#">
                                <img src="./img/3d.png" alt="#">
                                <p>3D- graphics</p>
                            </a>
                        </li>
                        <li class="wow slideInRight"><a href="#">
                                <img src="./img/portfolio.png" alt="#">
                                <p>Corporate style</p>
                            </a>
                        </li>
                        <li class="wow slideInRight"><a href="#">
                                <img src="./img/smartphone.png" alt="#">
                                <p>Polygraphic design</p>
                            </a>
                        </li>
                        <li class="wow slideInLeft"><a href="#">
                                <img src="./img/color-circle.png" alt="#">
                                <p>Development</p>
                            </a>
                        </li>
                        <li class="wow slideInLeft"><a href="#">
                                <img src="./img/laptop.png" alt="#">
                                <p>Design</p>
                            </a>
                        </li>
                        <li class="wow slideInLeft"><a href="#">
                                <img src="./img/layers.png" alt="#">
                                <p>Redesign</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--WORKING PROCESS-->

<section>
    <div class="container-fluid working-process">
        <div class="container working-process-padding">
            <div class="row">
                <div class="col-lg-12 working-process-title wow slideInLeft">
                    <h2>Working process</h2>
                    <p>We realize what has to be done, and offer information about the project at every single stage. We are ready to answer any questions you may have at any time.</p>
                </div>
            </div>
            <div class="row working-process-list">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 process-inline">
                    <div class="process-one wow flipInX">
                        <p>Interview, estimates<br> & project contract</p>
                        <ul>
                            <li><a href="#" class="interview">Interview</a></li>
                            <li><a href="#" class="cost-estimation">Cost estimation</a></li>
                            <li><a href="#" class="project-contract">Project contract</a></li>
                        </ul>
                    </div>
                    <div class="process_details" id="interview">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </span>
                    </div>
                    <div class="process_details" id="cost-estimation">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </span>
                    </div>
                    <div class="process_details" id="project-contract">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 process-inline">
                    <div class="process-two wow flipInX">
                        <p>Prototyping <br> & design</p>
                        <ul>
                            <li><a href="#" class="project-analytics-and-research">Project analytics and research</a></li>
                            <li><a href="#" class="user-flows-and-wireframes">User flows and wireframes</a></li>
                            <li><a href="#" class="design-concept">Design concept</a></li>
                        </ul>
                    </div>
                    <div class="process_details" id="project-analytics-and-research">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </span>
                    </div>
                    <div class="process_details" id="user-flows-and-wireframes">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </span>
                    </div>
                    <div class="process_details" id="design-concept">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 process-inline">
                    <div class="process-three wow flipInX">
                        <p>Technical<br> implementation</p>
                        <ul>
                            <li><a href="#" class="coding-and-programming">Coding and programming</a></li>
                            <li><a href="#" class="user-interface-animation">User interface animation</a></li>
                            <li><a href="#" class="testing">Testing</a></li>
                            <li><a href="#" class="launchpt">Launchpt</a></li>
                        </ul>
                    </div>
                    <div class="process_details" id="coding-and-programming">
                        <span>1Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </span>
                    </div>
                    <div class="process_details" id="user-interface-animation">
                        <span>2Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </span>
                    </div>
                    <div class="process_details" id="testing">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </span>
                    </div>
                    <div class="process_details" id="launchpt">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--AUDACIOUS_VISION-->

<section>
    <div class="container-fluid background-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 audacious-vision">
                    <h2 class="wow bounceInUp">Your most audacious vision</h2>
                    <p>Let us at it</p>
                </div>
            </div>
        </div>
        <div id="portfolio-grid">
            <div class="container">
                <ul class="portfolio-filter wow slideInLeft">
                    <li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Design</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".html">Development</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".wordpress">Others</a></li>
                </ul>
            </div>
            <ul class="portfolio-items row">
                <li class="portfolio-item apps col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="item-inner">
                        <figure class="effect-hera">
                            <img src="img/portfolio1.png" alt="#">
                            <div class="overlay">
                                <p>
                                    <a class="preview btn btn-danger" href="blog_detail.html"><i class="fas fa-eye"></i></a>
                                </p>
                            </div>
                        </figure>
                    </div>
                </li>
                <li class="portfolio-item joomla bootstrap col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="item-inner">
                        <figure class="effect-hera">
                            <img src="img/portfolio2.png" alt="#">
                            <div class="overlay">
                                <p>
                                    <a class="preview btn btn-danger" href="404.html"><i class="fas fa-eye"></i></a>
                                </p>
                            </div>
                        </figure>
                    </div>
                </li>
                <li class="portfolio-item bootstrap wordpress col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="item-inner">
                        <figure class="effect-hera">
                            <img src="img/portfolio3.png" alt="#">
                            <div class="overlay">
                                <p>
                                    <a class="preview btn btn-danger" href="404.html"><i class="fas fa-eye"></i></a>
                                </p>
                            </div>
                        </figure>
                    </div>
                </li>
                <li class="portfolio-item joomla wordpress apps col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="item-inner">
                        <figure class="effect-hera">
                            <img src="img/portfolio4.png" alt="#">
                            <div class="overlay">
                                <p>
                                    <a class="preview btn btn-danger" href="404.html"><i class="fas fa-eye"></i></a>
                                </p>
                            </div>
                        </figure>
                    </div>
                </li>
                <li class="portfolio-item joomla html col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="item-inner">
                        <figure class="effect-hera">
                            <img src="img/portfolio5.png" alt="#">
                            <div class="overlay">
                                <p>
                                    <a class="preview btn btn-danger" href="404.html"><i class="fas fa-eye"></i></a>
                                </p>
                            </div>
                        </figure>
                    </div>
                </li>
                <li class="portfolio-item wordpress html col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="item-inner">
                        <figure class="effect-hera">
                            <img src="img/portfolio6.png" alt="#">
                            <div class="overlay">
                                <p>
                                    <a class="preview btn btn-danger" href="404.html"><i class="fas fa-eye"></i></a>
                                </p>
                            </div>
                        </figure>
                    </div>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-12 more-works">
                <p>More works <span><i class="fa fa-angle-right" aria-hidden="true"></i></span></p>
            </div>
        </div>
    </div>
</section>

<!--FOOTER-->

<footer>
    <div class="container-fluid footer-background">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p>LET’S START</p>
                <p>Our web studio is a reliable partner in the Internet environment. We are working on projects not for the sake of portfolio renewal, but, on the contrary, all our efforts are aimed at the best result, which will bring profit to our clients. Your business is in good hands.</p>
                <div class="button-container-1 button-footer wow swing">
                    <span class="mas">Get in touch</span>
                    <button id='go3' type="button" name="Hover">Get in touch</button>
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
@endsectionF