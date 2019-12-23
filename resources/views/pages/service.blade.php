@extends('layouts.genexic')

@section('content')
<header>
    <div class="container-fluid services-background">
        <div class="mobile">
            <a class="mobile-menu-toggle js-toggle-menu hamburger-menu" href="#">
                <span class="menu-item"></span>
                <span class="menu-item"></span>
                <span class="menu-item"></span>
            </a>
            <nav class="mobile-nav-wrap">
                <ul class="mobile-header-nav">
                    @foreach($data['menu'] as $menu)
                    <li><a href="{{ route($menu->routeName, ['lang' => $data['lang']])}}">{{ $menu->page }}</a></li>
                    @endforeach
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
                        @foreach($data['menu'] as $menu)
                        <li><a href="{{ route($menu->routeName, ['lang' => $data['lang']])}}">{{ $menu->page }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row header-section-two">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-header">
                <ul class="fly-in hidden">
                    @foreach($data['title'] as $t)
                    <li>{{ $t }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- MODAL FORM -->
<div id="modal_form">
    <div class="row">
        <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 header-logo">
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

<!--SERVICES-->

<section>
    <div class="container-fluid services-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="services-content">
                        <h1 class="services-details-title">{{ $data['service']->title }}</h1>
                        <p class="services-details-description">
                            {{ $data['service']->text }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--FOOTER-->

<footer>
    <div class="container-fluid services-footer">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p class="wow flipInX"> {{ $data['service']->footer_title }}</p>
                <div class="button-container-1 button-footer wow swing">
                    <span class="mas"> {{ $data['service']->footer_btn_title }}</span>
                    <button id='go2' type="button" name="Hover"> {{ $data['service']->footer_btn_title }}</button>
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