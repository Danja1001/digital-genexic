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
                <a href="#"><img src="{{ asset('assets/img/Logo.svg') }}" alt="#"></a>
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
                            @foreach($data['main'] as $p)
                            <p>
                                {{ $p->text }}
                            </p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-3 col-sm-12 col-xs-12 company-description-picture">
                    <p><img src="{{ asset('storage/' . $data['image']->image) }}" alt="Main" class="wow bounceInRight"></p>
                </div>
            </div>
            <div class="row">
                @foreach($data['our_mission'] as $p)
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 about-us-our-vision wow flipInX">
                    <h2>{{ $p->title }}</h2>
                    <p>{{ $p->text }}</p>
                </div>
                @endforeach
            </div>
            <div class="row triangles-counter">
                @foreach($data['icons'] as $icon)
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 about-us-triangles">
                    <div class="about-us-triangles-wrap1">
                        <img src="{{asset('storage/' . $icon->image) }}" alt="{{ $icon->text($data['lang'])->title }}">
                        <span class="counter">{{ $icon->text($data['lang'])->title }}</span><span>+</span>
                    </div>
                    <p class="wow flipInX">{{ $icon->text($data['lang'])->text }}</p>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 gelexic-benefits-title wow pulse">
                    <h1>{{ $data['genexic_title']->title }}</h1>
                </div>
            </div>
            <div class="row gelexic-benefits">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="gelexic-benefits-one wow flipInX">
                        <h2>{{ $data['genexic_desc'][0]->title }}</h2>
                        <p>{{ $data['genexic_desc'][0]->text }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="gelexic-benefits-two wow flipInX">
                        <h2>{{ $data['genexic_desc'][1]->title }}</h2>
                        <p>{{ $data['genexic_desc'][1]->text }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="gelexic-benefits-three wow flipInX">
                        <h2>{{ $data['genexic_desc'][2]->title }}</h2>
                        <p>{{ $data['genexic_desc'][2]->text }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row company-description-about-us">
            <div class="col-lg-12 view-more-button view-more-background">
                <div class="button-look">
                    <p><button id="buttonOpen"><span>{{ $data['about_us']->read_more_btn_title }}</span></button></p>
                </div>
                <div class="more-content">
                    @foreach($data['read_more'] as $p)
                    <h1>{{ $p->title }}</h1>
                    <p>{{ $p->text }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!--FOOTER-->

    <footer>
        <div class="container-fluid portfolio-footer">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="wow flipInX footer-title">{{ $data['about_us']->footer_title }}</p>
                    <div class="button-container-1 button-footer wow swing">
                        <span class="mas">{{ $data['about_us']->footer_btn_title }}</span>
                        <button id='go2' type="button" name="Hover">{{ $data['about_us']->footer_btn_title }}</button>
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