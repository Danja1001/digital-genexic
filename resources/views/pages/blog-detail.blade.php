@extends('layouts.genexic')

@section('content')
<header>
    <div class="container-fluid blog-detail">
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
                    <li>o</li>
                    <li>u</li>
                    <li>r</li>
                    <li>b</li>
                    <li>l</li>
                    <li>o</li>
                    <li>g</li>
                </ul>
            </div>
            <div class="block-social">
                <ul>
                    <li><a href="#" id="zoom-fade1">facebook</a></li>
                    <li><a href="#" id="zoom-fade2">twitter</a></li>
                    <li><a href="#" id="zoom-fade3">linkedin</a></li>
                </ul>
            </div>
            <div class="blog_detail_padding"></div>
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

<!--CONTACT US-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="blog-detail-contant">
                    <div class="blog-content">
                        <h1 class="blog-title">We’re cultured Introducing six brand new Culture Values™
                        </h1>
                        <p>Here’s the thing. As Ueno has gone from one bearded guy in his living room to more than 50 people of 20 nationalities in four offices with real tables and chairs, we’ve started thinking about how we can keep being ourselves, even as we grow and change.</p>
                        <p>That’s where our six brand new Culture Values™ come in. Carefully constructed by a crack team of Prussian scientists over a period of several months.</p>
                        <p>Halli, our founder and CEO wrote a blog post about the whole thing.</p>
                    </div>
                    <p class="blog-img"><span class="content-date">October 4, 2017</span><img src="img/blog_detail.png" alt="#"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid keep-reading-blog-background">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="keep-reading-blog">
                        <div>
                            <p class="keep-reading-title">keep reading</p>
                        </div>
                        <div class="more-works">
                            <a href="blog.html">See all<span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                    <div class="blog-last-articles">
                        <ul class="blog-items row">
                            <li class="blog-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="item-inner video">
                                    <figure class="snip1401">
                                        <img src="img/blog_detail-3.png" alt="#">
                                        <figcaption>
                                            <h3>Just launched: ESPN’s mobile-first Body Issue</h3>
                                        </figcaption>
                                        <i class="fas fa-caret-right"></i>
                                        <a href="#"></a>
                                    </figure>
                                </div>
                            </li>
                            <li class="blog-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="item-inner content">
                                    <figure class="snip1401">
                                        <img src="img/blog_detail-2.png" alt="#">
                                        <figcaption>
                                            <h3>David Navarro is our new Executive Creative Director</h3>
                                        </figcaption>
                                        <a href="#"></a>
                                    </figure>
                                </div>
                            </li>
                            <li class="blog-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="item-inner video">
                                    <figure class="snip1401">
                                        <img src="img/blog_detail-1.png" alt="#">
                                        <figcaption>
                                            <h3>Ueno & Uber Team Up for “Uber.design”</h3>
                                        </figcaption>
                                        <i class="fas fa-caret-right"></i>
                                        <a href="#"></a>
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
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

<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
@endsection