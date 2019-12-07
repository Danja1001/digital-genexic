@extends('layouts.genexic')

@section('content')
<header>
    <div class="container-fluid portfolio-background">
        <div class="mobile">
            <a class="mobile-menu-toggle js-toggle-menu hamburger-menu" href="#">
                <span class="menu-item"></span>
                <span class="menu-item"></span>
                <span class="menu-item"></span>
            </a>
            <nav class="mobile-nav-wrap" role="navigation">
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
            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4">
                <div class="header-logo">
                    <a href="index.html"><img src="img/Logo.svg" alt="#"></a>
                </div>
            </div>
            <div class="col-lg-5 col-lg-push-1 col-md-6 col-md-push-1 col-sm-8 col-sm-push-1 col-xs-8 nav-media">
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
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 audacious-fly-in">
                <ul class="fly-in hidden">
                    <li>y</li>
                    <li>o</li>
                    <li>u</li>
                    <li>r</li>
                    <li>m</li>
                    <li>o</li>
                    <li>s</li>
                    <li>t</li>
                    <li>a</li>
                    <li>u</li>
                    <li>d</li>
                    <li>a</li>
                    <li>t</li>
                    <li>i</li>
                    <li>0</li>
                    <li>u</li>
                    <li>s</li>
                    <li>v</li>
                    <li>i</li>
                    <li>s</li>
                    <li>i</li>
                    <li>o</li>
                    <li>n</li>
                </ul>
                <p>Let us at it</p>
                <p class="wow flipInX">First impression is very important key to keep visitors on your website because this will create the attitude of guest to the site and decide whether stay or leave. Memorable,pleasant and convenient web design will attract attention of user.</p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 background-social">
                <div class="block-social">
                    <ul>
                        <li><a href="#" id="zoom-fade1">facebook</a></li>
                        <li><a href="#" id="zoom-fade2">twitter</a></li>
                        <li><a href="#" id="zoom-fade3">linkedin</a></li>
                    </ul>
                </div>
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

<!--PORTFOLIO-->

<section>
    <div class="container-fluid portfolio-background-two">
        <div id="portfolio">
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
                                    <a class="preview btn btn-danger" href="portfolio_detail.html"><i class="fas fa-eye"></i></a>
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
                                    <a class="preview btn btn-danger" href="portfolio_detail.html"><i class="fas fa-eye"></i></a>
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
                                    <a class="preview btn btn-danger" href="portfolio_detail.html"><i class="fas fa-eye"></i></a>
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
                                    <a class="preview btn btn-danger" href="portfolio_detail.html"><i class="fas fa-eye"></i></a>
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
                                    <a class="preview btn btn-danger" href="portfolio_detail.html"><i class="fas fa-eye"></i></a>
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
                                    <a class="preview btn btn-danger" href="portfolio_detail.html"><i class="fas fa-eye"></i></a>
                                </p>
                            </div>
                        </figure>
                    </div>
                </li>
                <li class="portfolio-item apps col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="item-inner">
                        <figure class="effect-hera">
                            <img src="img/portfolio1.png" alt="#">
                            <div class="overlay">
                                <p>
                                    <a class="preview btn btn-danger" href="portfolio_detail.html"><i class="fas fa-eye"></i></a>
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
                                    <a class="preview btn btn-danger" href="portfolio_detail.html"><i class="fas fa-eye"></i></a>
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
                                    <a class="preview btn btn-danger" href="portfolio_detail.html"><i class="fas fa-eye"></i></a>
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
                                    <a class="preview btn btn-danger" href="portfolio_detail.html"><i class="fas fa-eye"></i></a>
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
                                    <a class="preview btn btn-danger" href="portfolio_detail.html"><i class="fas fa-eye"></i></a>
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
                                    <a class="preview btn btn-danger" href="portfolio_detail.html"><i class="fas fa-eye"></i></a>
                                </p>
                            </div>
                        </figure>
                    </div>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-12 more-works">
                <p>View<span><i class="fa fa-angle-right" aria-hidden="true"></i></span></p>
            </div>
        </div>
        <div class="row">
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
@endsection