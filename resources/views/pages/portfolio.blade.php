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
                    @foreach($data['menu'] as $menu)
                    <li><a href="{{ route($menu->routeName, ['lang' => $data['lang']])}}">{{ $menu->page }}</a></li>
                    @endforeach
                </ul>
            </nav>
        </div>
        <div class="row padding-top-header">
            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4">
                <div class="header-logo">
                    <a href="index.html"><img src="{{ asset('assets/img/Logo.svg') }}" alt="#"></a>
                </div>
            </div>
            <div class="col-lg-5 col-lg-push-1 col-md-6 col-md-push-1 col-sm-8 col-sm-push-1 col-xs-8 nav-media">
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
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 audacious-fly-in">
                <ul class="fly-in hidden">
                    @foreach($data['title'] as $t)
                    <li>{{ $t }}</li>
                    @endforeach
                </ul>
                <p>{{ $data['portfolio_page']->subtitle }}</p>
                <p class="wow flipInX">{{ $data['portfolio_page']->subtitle_text }}</p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 background-social">
                <div class="block-social">
                    <ul>
                        <li><a href="{{ route('portfolio.index', ['lang' => 2])}}" id="zoom-fade1">English</a></li>
                        <li><a href="{{ route('portfolio.index', ['lang' => 1])}}" id="zoom-fade2">Russian</a></li>
                        <li><a href="{{ route('about-us.index', ['lang' => 3])}}" id="zoom-fade2">ukrainian</a></li>
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
        <div class="row">
            <div class="col-lg-12 view-more-button view-more-background">
                <div class="button-look">
                    <p><button id="buttonOpen"><span>{{ $data['portfolio_page']->read_more_btn }}</span></button></p>
                </div>
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
    <div class="container-fluid portfolio-footer">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p class="wow flipInX footer-title">{{ $data['portfolio_page']->footer_title }}</p>
                <div class="button-container-1 button-footer wow swing">
                    <span class="mas">{{ $data['portfolio_page']->footer_btn_text }}</span>
                    <button id='go2' type="button" name="Hover">{{ $data['portfolio_page']->footer_btn_text }}</button>
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