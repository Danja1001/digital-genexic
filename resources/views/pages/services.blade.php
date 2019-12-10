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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services-header">
                <ul class="fly-in hidden">
                    @foreach($data['title'] as $t)
                    <li>{{ $t }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="block-social">
                <ul>
                    <li><a href="{{ route('services-page.index', ['lang' => 2])}}" id="zoom-fade1">english</a></li>
                    <li><a href="{{ route('services-page.index', ['lang' => 1])}}" id="zoom-fade2">russian</a></li>
                    <li><a href="#" id="zoom-fade2">ukrainian</a></li>
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

<!--SERVICES-->

<section>
    <div class="container-fluid services-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services-block-one exception">
                    <div class="design">
                        <p> {{ $data['service_categories'][0]->title }}</p>
                        <ul>
                            @foreach($data['service_categories'][0]->services as $service)
                            <li><a href="{{ route('service.index', ['service_id' => $service->id, 'lang_id' => $data['lang']]) }}">{{ $service->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services-block-two">
                    <div class="development">
                        <p> {{ $data['service_categories'][1]->title }}</p>
                        <ul>
                            @foreach($data['service_categories'][1]->services as $service)
                            <li><a href="{{ route('service.index', ['service_id' => $service->id, 'lang_id' => $data['lang']]) }}">{{ $service->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services-block-one">
                    <div class="promotion">
                        <p> {{ $data['service_categories'][2]->title }}</p>
                        <ul>
                            @foreach($data['service_categories'][2]->services as $service)
                            <li><a href="{{ route('service.index', ['service_id' => $service->id, 'lang_id' => $data['lang']]) }}">{{ $service->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="button-look">
                    <p><button id="buttonOpen"><span>{{ $data['services_page']->read_more_btn_title }}</span></button></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="more-content">
                    @foreach($data['read_more'] as $p)
                    <h1>{{ $p->title }}</h1>
                    <p>{{ $p->text }}</p>
                    @endforeach
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
                <p class="wow flipInX">{{ $data['services_page']->footer_title }}</p>
                <div class="button-container-1 button-footer wow swing">
                    <span class="mas">{{ $data['services_page']->footer_btn_title }}</span>
                    <button id='go2' type="button" name="Hover">{{ $data['services_page']->footer_btn_title }}</button>
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