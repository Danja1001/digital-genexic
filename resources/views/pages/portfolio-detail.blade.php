@extends('layouts.genexic')

@section('content')
<div class="container-fluid background-wrap">
    <header>
        <div class="container-fluid portfolio-detail">
            <div class="mobile">
                <a class="mobile-menu-toggle js-toggle-menu hamburger-menu" href="#">
                    <span class="menu-item"></span>
                    <span class="menu-item"></span>
                    <span class="menu-item"></span>
                </a>
                <nav class="mobile-nav-wrap">
                    <ul class="mobile-header-nav">
                        <li><a href="{{ route('home.index', ['lang' => $data['lang']])}}">home</a></li>
                        <li><a href="{{ route('about-us.index', ['lang' => $data['lang']])}}">about us</a></li>
                        <li><a href="{{ route('services-page.index', ['lang' => $data['lang']])}}">services</a></li>
                        <li><a href="{{ route('portfolio.index', ['lang' => $data['lang']]) }}">portfolio</a></li>
                        <li><a href="{{ route('blog.index', ['lang' => $data['lang']]) }}">blog</a></li>
                        <li><a href="{{ route('contact-us.index', ['lang' => $data['lang']]) }}">contact us</a></li>
                    </ul>
                </nav>
            </div>
            <div class="row padding-top-header">
                <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                    <div class="header-logo">
                        <a href="index.html"><img src="{{ asset('assets/img/Logo.svg') }}" alt="#"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-push-1 col-md-7 col-md-push-1 col-sm-8 col-sm-push-1 col-xs-8 nav-media">
                    <div class="header-nav wow flipInX">
                        <ul>
                            <li><a href="{{ route('home.index', ['lang' => $data['lang']])}}">home</a></li>
                            <li><a href="{{ route('about-us.index', ['lang' => $data['lang']])}}">about us</a></li>
                            <li><a href="{{ route('services-page.index', ['lang' => $data['lang']])}}">services</a></li>
                            <li><a href="{{ route('portfolio.index', ['lang' => $data['lang']]) }}">portfolio</a></li>
                            <li><a href="{{ route('blog.index', ['lang' => $data['lang']]) }}">blog</a></li>
                            <li><a href="{{ route('contact-us.index', ['lang' => $data['lang']]) }}">contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row header-section-two">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 audacious-fly-in">
                    <ul class="fly-in hidden">
                        @foreach($data['title'] as $t)
                        <li>{{ $t }}</li>
                        @endforeach
                    </ul>
                    <p class="text-transition">LET US AT IT</p>
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
</div>
<!-- MODAL FORM -->
<div id="modal_form">
    <div class="row">
        <div class=" col-lg-12 header-logo">
            <span id="modal_close"><i class="fa fa-times" aria-hidden="true"></i></span>
            <a href="#"><img src="{{ asset('assets/img/Logo.svg') }}" alt="#"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 in-touch-form">
            <p class="wow pulse">Interested in talking to us about a new project or want to find out more about our
                agency?</p>
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

<!--CONTACT US-->
<section class="background-wrap">
    <div class="container-fluid r-connect">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="r-connect-title">
                    <span class="connect-title">R-CONNECT</span>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="devices-picture">
                    <img src="img/portfolio_detail-two.png" alt="#">
                </div>
                <div class="devices-picture-description">
                    <div class="portfolio-client wow bounceInUp">
                        <p>CATEGORY</p>
                        <p>Front-End, Wordpress</p>
                    </div>
                    <div class="wow bounceInUp">
                        <p>DATE</p>
                        <p>June 2017</p>
                    </div>
                    <div class="portfolio-client wow bounceInUp">
                        <p>CLIENT</p>
                        <p>Master Podelkin</p>
                    </div>
                    <div class="wow bounceInUp">
                        <p>HOURS</p>
                        <p>128</p>
                    </div>
                </div>
                <div class="devices-picture-view">
                    <img src="img/portfolio_detail.png" alt="#">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 more-works">
                    <p>Wisit site<span><i class="fa fa-angle-right" aria-hidden="true"></i></span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="recently-viewed-projects">
                    <ul class="portfolio-items row">
                        <li class="portfolio-item apps col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="item-inner wow bounceInUp">
                                <figure class="effect-hera">
                                    <img src="img/portfolio1.png" alt="#">
                                    <div class="overlay">
                                        <p>
                                            <a class="preview btn btn-danger" href="404.html"><i
                                                    class="fas fa-eye"></i></a>
                                        </p>
                                    </div>
                                </figure>
                            </div>
                        </li>
                        <li class="portfolio-item joomla bootstrap col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="item-inner wow bounceInDown">
                                <figure class="effect-hera">
                                    <img src="img/portfolio2.png" alt="#">
                                    <div class="overlay">
                                        <p>
                                            <a class="preview btn btn-danger" href="404.html"><i
                                                    class="fas fa-eye"></i></a>
                                        </p>
                                    </div>
                                </figure>
                            </div>
                        </li>
                        <li class="portfolio-item bootstrap wordpress col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="item-inner wow bounceInUp">
                                <figure class="effect-hera">
                                    <img src="img/portfolio3.png" alt="#">
                                    <div class="overlay">
                                        <p>
                                            <a class="preview btn btn-danger" href="404.html"><i
                                                    class="fas fa-eye"></i></a>
                                        </p>
                                    </div>
                                </figure>
                            </div>
                        </li>
                    </ul>
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
                <p class="wow flipInX footer-title">{{ $data['portfolio_detail_page']->footer_title }}</p>
                <div class="button-container-1 button-footer wow swing">
                    <span class="mas">{{ $data['portfolio_detail_page']->footer_btn_title }}</span>
                    <button id='go2' type="button"
                        name="Hover">{{ $data['portfolio_detail_page']->footer_btn_title }}</button>
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

<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>

<script>
    new WOW().init();
</script>
@endsection