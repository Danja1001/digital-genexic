@extends('layouts.genexic')

@section('content')
<div class="container-fluid background-wrap">
    <header>
        <div class="container-fluid contact-us-background">
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
                        <li>c</li>
                        <li>o</li>
                        <li>n</li>
                        <li>t</li>
                        <li>a</li>
                        <li>c</li>
                        <li>t</li>
                        <li>u</li>
                        <li>s</li>
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
                        <button type="button" name="Hover">Let`s talk</button>
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact-us-card">
                    <div class="wrapper">
                        <div class="our-contacts">
                            <p>Our contacts</p>
                            <span><i class="fas fa-phone"></i><a href="#">+380675888539</a></span>
                            <span><i class="far fa-envelope"></i> <a href="#">Info@genexic.com.ua</a></span>
                            <p>Khmelnitskii, Ukraine</p>
                        </div>
                        <div class="our-contact-form">
                            <p>Interested in talking to us about a new project or want to find out more about our agency?</p>
                            <form>
                                <input type="text" placeholder="name">
                                <input type="email" placeholder="email">
                                <input type="tel" placeholder="phone number">
                                <div class="button-container-2">
                                    <span class="mas">Get in touch</span>
                                    <button type="button" name="Hover">Get in touch</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid contact-us-maps">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="map"></div>
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
</div>
<script>
    function initMap() {
        var myLatLng = {
            lat: 49.4138068,
            lng: 26.9899873
        };
        var marker;
        var intervalInitMap = window.setInterval(function() {
            if (mapInitDropIcon) {

                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 15.1,
                    center: myLatLng
                });
                var image = {
                    url: "img/contacts-map.png",
                    scaledSize: new google.maps.Size(100, 100),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(30, 100)
                };


                marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    icon: image,
                    title: 'We are here',
                    animation: google.maps.Animation.DROP
                });


                clearInterval(intervalInitMap);

                //marker.setAnimation(google.maps.Animation.BOUNCE);
                marker.addListener('click', toggleBounce);
            }
        }, 50);

    }

    function toggleBounce() {
        console.log("toggleBounce");
        if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }

    function addMarkerWithTimeout() {
        window.setTimeout(function() {
            markers.push(new google.maps.Marker({
                position: position,
                map: map,
                animation: google.maps.Animation.DROP
            }));
        }, 20000);
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxl_C1mdALXzLatPaEB688fHq1ETUs240&callback=initMap">
</script>
<script src="{{ asset('assets/canvas/lib/jquery-1.11.0.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('assets/canvas/waterpipe.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>

<script>
    new WOW().init();
</script>
@endsection