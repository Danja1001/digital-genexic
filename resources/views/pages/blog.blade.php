@extends('layouts.genexic')

@section('content')
<header>
    <div class="container-fluid blog">
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
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 audacious-fly-in">
                <ul class="fly-in hidden">
                    @foreach($data['title'] as $t)
                    <li>{{ $t }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <form class="header-search-form">
                    <input type="search" placeholder="What find?">
                    <button><i class="fas fa-search"></i></button>
                </form>
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
            <a href="#"><img src="{{ asset('img/Logo.svg') }}" alt="#"></a>
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
<section>
    <div class="container-fluid blog-general">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-columns">
                        @foreach($data['blog_projects'] as $blog_project)
                        <div class="card">
                            {{-- {{ route('portfolio-detail.index', ['lang' => $data['lang'], 'project_id' => $project->id ]) }}
                            --}}
                            <img class="card-img-top"
                                src="{{ asset('storage/' . $blog_project->images->first()->image) }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $blog_project->images->first()->text($data['lang'])->title }}
                                </h5>
                                <p class="card-text">
                                    {{ $blog_project->images->first()->text($data['lang'])->text }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    </div>
</section>
<!--FOOTER-->

<footer>
    <div class="container-fluid portfolio-footer">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p class="wow flipInX footer-title">{{ $data['blog_page']->footer_title }}</p>
                <div class="button-container-1 button-footer wow swing">
                    <span class="mas">{{ $data['blog_page']->footer_btn_title }}</span>
                    <button id='go2' type="button" name="Hover">{{ $data['blog_page']->footer_btn_title }}</button>
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
<script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
<script>
    new WOW().init();
    $(document).ready(function() {
        var $collage_news = $('.collage-news').masonry({
            itemSelector: '.news-item',
            columnWidth: 125,

        });

        $(".collage-news .special-item").addClass("active");
        $(".button-play-video").on('click', function(e) {
            if ($(this).parent().find('video').hasClass("hidden")) {
                $(this).parent().find(".before-play").addClass("hidden");
                var $video = $(this).parent().find('video');
                $video.removeClass("hidden");
                $video[0].loop = true;
                $video[0].play();
            }
        })
        $(".collage-news .news-item video").on("click", function() {
            $(this).parent().find(".before-play").removeClass("hidden");
            var $video = $(this).parent().find('video');
            $video.addClass("hidden");
            $video[0].pause();
        })
    });
</script>
@endsection