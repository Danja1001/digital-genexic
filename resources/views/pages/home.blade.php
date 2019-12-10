@extends('layouts.genexic')

@section('content')
<header>
    <div class="container-fluid header-background" id="wavybg-wrapper" style="width: 100%; height: 100%;">
        <canvas>Your browser does not support HTML5 canvas.</canvas>
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
                    <a href="#"><img src="{{ asset('assets/img/Logo.svg') }}" alt="#"></a>
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 digital-agency">
                <h1>{{ $data['home_page']->title }}</h1>
                <p>{{ $data['home_page']->subtitle }}</p>
                <div class=" button-container-1">
                    <span class="mas">Get in touch</span>
                    <button id='go2' type="button" name="Hover">{{ $data['home_page']->header_btn_title }}</button>
                </div>
                <div class="block-social">
                    <ul>
                        <li><a href="{{ route('home.index', ['lang' => 2])}}" id="zoom-fade1">English</a></li>
                        <li><a href="{{ route('home.index', ['lang' => 1])}}" id="zoom-fade2">Russian</a></li>
                        <li><a href="#" id="zoom-fade2">ukrainian</a></li>
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
            <a href="#"><img src="{{ asset('assets/img/Logo.svg') }}" alt="#"></a>
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
                    <h2 class="our-mission-title wow flipInX">{{ $data['our_mission']->title }}</h2>
                    <p>{{ $data['our_mission']->text }}</p>
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
                    <h2 class="studio-offer-title">{{ $data['offer']->title }}</h2>
                </div>
            </div>
            <div class="row studio-offer-types-list">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="studio-offer-types">
                        @foreach($data['icons'] as $icon)
                        <li class="wow slideInRight"><a href="#">
                                <img src="{{ asset('storage/' . $icon->image) }}" alt="#">
                                <p>{{ $icon->text($data['lang'])->title }}</p>
                            </a>
                        </li>
                        @endforeach
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
                    <h2>{{ $data['working_process']->title }}</h2>
                    <p>{{ $data['working_process']->text }}</p>
                </div>
            </div>
            <div class="row working-process-list">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 process-inline">
                    <div class="process-one wow flipInX">
                        <p>{{ $data['working_processes'][0]->title }}</p>
                        <ul>
                            @foreach($data['working_processes'][0]->services as $service)
                            <li><a href="#" class="interview">{{ $service->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    @foreach($data['working_processes'][0]->services as $service)
                    <div class="process_details" id="interview">
                        <span>{{ $service->text }}</span>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 process-inline">
                    <div class="process-two wow flipInX">
                        <p>{{ $data['working_processes'][1]->title }}</p>
                        <ul>
                            @foreach($data['working_processes'][1]->services as $service)
                            <li><a href="#" class="project-analytics-and-research">{{ $service->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    @foreach($data['working_processes'][1]->services as $service)
                    <div class="process_details" id="project-analytics-and-research">
                        <span>{{ $service->text }}</span>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 process-inline">
                    <div class="process-three wow flipInX">
                        <p>{{ $data['working_processes'][2]->title }}</p>
                        <ul>
                            @foreach($data['working_processes'][2]->services as $service)
                            <li><a href="#" class="coding-and-programming">{{ $service->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    @foreach($data['working_processes'][2]->services as $service)
                    <div class="process_details" id="coding-and-programming">
                        <span>{{ $service->text }}</span>
                    </div>
                    @endforeach
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
                    <h2 class="wow bounceInUp">{{ $data['vision']->title }}</h2>
                    <p>{{ $data['vision']->text }}</p>
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
                @foreach($data['portfolio_projects'] as $project)
                <li class="portfolio-item apps col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="item-inner">
                        <figure class="effect-hera">
                            <img src="{{ asset('storage/' . $project->images->first()->image) }}" alt="{{ $project->name }}">
                            <div class="overlay">
                                <p>
                                    <a class="preview btn btn-danger" href="{{ route('portfolio-detail.index', ['lang' => $data['lang'], 'project_id' => $project->id ]) }}"><i class="fas fa-eye"></i></a>
                                </p>
                            </div>
                        </figure>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

<!--FOOTER-->

<footer>
    <div class="container-fluid footer-background">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p>{{ $data['home_page']->footer_title }}</p>
                <p>{{ $data['home_page']->footer_text }}</p>
                <div class="button-container-1 button-footer wow swing">
                    <span class="mas">{{ $data['home_page']->footer_btn_title }}</span>
                    <button id='go3' type="button" name="Hover">{{ $data['home_page']->footer_btn_title }}</button>
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