<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from theme-coderstation.com/repcar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 12:16:24 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home One || Repcar || HTML Template For Car Repair & Auto Services.</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets') }}/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets') }}/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets') }}/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="{{ asset('assets') }}/images/favicons/site.webmanifest" />
    <meta name="description"
        content="Repcar is a clean professional Car Repair & Auto Services. HTML Template. Which fits for all kind of car rental, bike rental, yacht rent, online booking, car listings, car directory websites and businesses." />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;family=Montserrat:ital,wght@0,100..900;1,100..900&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/icofont/icofont.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/ripcar-icons/style.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/slick/slick.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/owl-carousel/css/owl.theme.default.min.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/ripcar.css" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- preloader-start -->
    {{-- <section class="preloader">
        <div class="spinner-eff spinner-eff-1">
            <div class="bar bar-top"></div>
            <div class="bar bar-right"></div>
            <div class="bar bar-bottom"></div>
            <div class="bar bar-left"></div>
        </div>
    </section> --}}
    <!-- preloader-end -->

    <div class="page-wrapper">
        @include('layout.header')
        <!-- /.main-header -->

        <!-- main-slider-start -->
        <section class="main-slider-one">
            <div class="main-slider-one__carousel ripcar-owl__carousel owl-carousel"
                data-owl-options='{
                "loop": true,
                "animateOut": "fadeOut",
                "animateIn": "fadeIn",
                "items": 1,
                "autoplay": true,
                "autoplayTimeout": 7000,
                "smartSpeed": 1000,
                "nav": false,
                "navText": ["<span class=\"ripc-icon-arrow-left-long\"></span>","<span class=\"ripc-icon-arrow-right-long\"></span>"],
                "dots": true,
                "margin": 0
                }'>
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__shape">
                            <img src="{{ asset('assets') }}/images/shapes/slider-1-shape-1.png" alt="ripcar">
                        </div>
                        <div class="main-slider-one__bg"
                            style="background-image: url({{ asset('assets') }}/images/backgrounds/slider-1-1.jpg);">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-slider-one__content">
                                        <h5 class="main-slider-one__sub-title">Discovering the Finest Automobile
                                            Detailing Workshop</h5>
                                        <h2 class="main-slider-one__title">Vital Car <span>Repairs</span> to<br> Ensure
                                            Safety.</h2>
                                        <div class="main-slider-one__btn">
                                            <a href="about.html" class="ripcar-btn">
                                                <span>Know More</span>
                                                <i class="ripc-icon-arrow-right-long"></i>
                                            </a>
                                            <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                                <i class="ripc-icon-play"></i>
                                                <span class="ripple">Play Intro <br>Video</span>
                                            </a>
                                        </div>
                                        <a href="#service" class="main-slider-one__scrollDown">
                                            <span>Scroll Down</span>
                                            <i class="ripc-icon-arrow-down-long"></i>
                                        </a>
                                        <div class="main-slider-one__thumb">
                                            <img src="{{ asset('assets') }}/images/shapes/slider-1-layer-1.png"
                                                alt="ripcar">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__shape">
                            <img src="{{ asset('assets') }}/images/shapes/slider-1-shape-1.png" alt="ripcar">
                        </div>
                        <div class="main-slider-one__bg"
                            style="background-image: url({{ asset('assets') }}/images/backgrounds/slider-1-1.jpg);">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-slider-one__content">
                                        <h5 class="main-slider-one__sub-title">Discovering the Finest Automobile
                                            Detailing Workshop</h5>
                                        <h2 class="main-slider-one__title">Vital Car <span>Repairs</span> to<br> Ensure
                                            Safety.</h2>
                                        <div class="main-slider-one__btn">
                                            <a href="about.html" class="ripcar-btn">
                                                <span>Know More</span>
                                                <i class="ripc-icon-arrow-right-long"></i>
                                            </a>
                                            <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                                <i class="icofont-ui-play"></i>
                                                <span class="ripple">Play Intro<br> Video</span>
                                            </a>
                                        </div>
                                        <a href="#service" class="main-slider-one__scrollDown">
                                            <span>Scroll Down</span>
                                            <i class="ripc-icon-arrow-down-long"></i>
                                        </a>
                                        <div class="main-slider-one__thumb">
                                            <img src="{{ asset('assets') }}/images/shapes/slider-1-layer-2.png"
                                                alt="ripcar">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__shape">
                            <img src="{{ asset('assets') }}/images/shapes/slider-1-shape-1.png" alt="ripcar">
                        </div>
                        <div class="main-slider-one__bg"
                            style="background-image: url({{ asset('assets') }}/images/backgrounds/slider-1-1.jpg);">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-slider-one__content">
                                        <h5 class="main-slider-one__sub-title">Discovering the Finest Automobile
                                            Detailing Workshop</h5>
                                        <h2 class="main-slider-one__title">Vital Car <span>Repairs</span> to<br> Ensure
                                            Safety.</h2>
                                        <div class="main-slider-one__btn">
                                            <a href="about.html" class="ripcar-btn">
                                                <span>Know More</span>
                                                <i class="ripc-icon-arrow-right-long"></i>
                                            </a>
                                            <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                                <i class="ripc-icon-play"></i>
                                                <span class="ripple">Play Intro <br>Video</span>
                                            </a>
                                        </div>
                                        <a href="#service" class="main-slider-one__scrollDown">
                                            <span>Scroll Down</span>
                                            <i class="ripc-icon-arrow-down-long"></i>
                                        </a>
                                        <div class="main-slider-one__thumb">
                                            <img src="{{ asset('assets') }}/images/shapes/slider-1-layer-3.png"
                                                alt="ripcar">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- main-slider-end -->

        <!-- Service Start -->
        <section class="service-one" id="service">
            <div class="container">
                <div class="sec-title_wrap wow fadeInUp" data-wow-delay="100ms">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="sec-title text-start">
                                <h6 class="sec-title__tagline bw-split-in-right">Our Services List</h6>
                                <h3 class="sec-title__title bw-split-in-left">Our Services</h3>
                            </div>
                        </div>
                        <div class="col-md-6 test-start text-md-end mt-4 mt-md-0">
                            <a href="service.html" class="ripcar-btn">All Servicess<i
                                    class="ripc-icon-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 position-relative">
                        <ul class="list-unstyled service-one__wrap">
                            <li class="wow fadeInUp" data-wow-delay="100ms" data-service="service_1">
                                <div class="service-one__item text-start tablink">
                                    <div class="service-one__item__image">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets') }}/images/service/service-1-img-1.jpg"
                                                alt="ripcar">
                                        </a>
                                        <h3 class="service-one__item__title"> <i class="ripc-icon-car-wash"></i><a
                                                href="service-details.html">Complimentary car Wash Facility</a></h3>
                                    </div>
                                    <div class="service-one__item__content">
                                        <div class="service-one__item__icon">
                                            <i class="ripc-icon-car-wash"></i>
                                        </div>
                                        <h3 class="service-one__item__title"><a
                                                href="service-details.html">Complimentary car<br> Wash Facility</a>
                                        </h3>
                                        <p class="service-one__item__text">Factory's Thorough Checks <br>Ensure Your
                                            Car's Protection <br>and Fitness </p>
                                        <a href="service-details.html" class="service-one__item__rm scallHover__btn">
                                            <i class="ripc-icon-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInUp active" data-wow-delay="100ms" data-service="service_2">
                                <div class="service-one__item text-start tablink">
                                    <div class="service-one__item__image">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets') }}/images/service/service-1-img-2.jpg"
                                                alt="ripcar">
                                        </a>
                                        <h3 class="service-one__item__title"> <i class="ripc-icon-car-fitness"></i><a
                                                href="service-details.html">Car Protection & Fitness Checking
                                                factify</a></h3>
                                    </div>
                                    <div class="service-one__item__content">
                                        <div class="service-one__item__icon">
                                            <i class="ripc-icon-car-fitness"></i>
                                        </div>
                                        <h3 class="service-one__item__title"><a href="service-details.html">Car
                                                Protection & Fitness Checking factify</a></h3>
                                        <p class="service-one__item__text">Factory's Thorough Checks <br>Ensure Your
                                            Car's Protection <br>and Fitness </p>
                                        <a href="service-details.html" class="service-one__item__rm scallHover__btn">
                                            <i class="ripc-icon-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="100ms" data-service="service_3">
                                <div class="service-one__item text-start tablink">
                                    <div class="service-one__item__image">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets') }}/images/service/service-1-img-3.jpg"
                                                alt="ripcar">
                                        </a>
                                        <h3 class="service-one__item__title"> <i
                                                class="ripc-icon-car-balancing"></i><a
                                                href="service-details.html">Expert Engine & Balancing Available</a>
                                        </h3>
                                    </div>
                                    <div class="service-one__item__content">
                                        <div class="service-one__item__icon">
                                            <i class="ripc-icon-car-balancing"></i>
                                        </div>
                                        <h3 class="service-one__item__title"><a href="service-details.html">Expert
                                                Engine &<br> Balancing Available</a></h3>
                                        <p class="service-one__item__text">Factory's Thorough Checks <br>Ensure Your
                                            Car's Protection <br>and Fitness </p>
                                        <a href="service-details.html" class="service-one__item__rm scallHover__btn">
                                            <i class="ripc-icon-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="100ms" data-service="service_4">
                                <div class="service-one__item text-start tablink">
                                    <div class="service-one__item__image">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets') }}/images/service/service-1-img-4.jpg"
                                                alt="ripcar">
                                        </a>
                                        <h3 class="service-one__item__title"> <i
                                                class="ripc-icon-repair-settings"></i><a
                                                href="service-details.html">Windshield & Glass Repair Replacements</a>
                                        </h3>
                                    </div>
                                    <div class="service-one__item__content">
                                        <div class="service-one__item__icon">
                                            <i class="ripc-icon-repair-settings"></i>
                                        </div>
                                        <h3 class="service-one__item__title"><a href="service-details.html">Windshield
                                                & Glass <br>Repair Replacements</a></h3>
                                        <p class="service-one__item__text">Factory's Thorough Checks <br>Ensure Your
                                            Car's Protection <br>and Fitness </p>
                                        <a href="service-details.html" class="service-one__item__rm scallHover__btn">
                                            <i class="ripc-icon-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="100ms">
                        <div id="service_1" class="service-one__tabContent service_1TabContent wow fadeInUp"
                            data-wow-delay="100ms">
                            <img src="{{ asset('assets') }}/images/service/service-1-video-img-1.jpg" alt="ripcar">
                            <div class="service-one__image__video">
                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                    <i class="ripc-icon-play"></i></a>
                            </div>
                        </div>
                        <div id="service_2" class="service-one__tabContent service_1TabContent wow fadeInUp"
                            data-wow-delay="100ms" style="display:block">
                            <img src="{{ asset('assets') }}/images/service/service-1-video-img-2.jpg" alt="ripcar">
                            <div class="service-one__image__video">
                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                    <i class="ripc-icon-play"></i></a>
                            </div>
                        </div>
                        <div id="service_3" class="service-one__tabContent service_1TabContent wow fadeInUp"
                            data-wow-delay="100ms">
                            <img src="{{ asset('assets') }}/images/service/service-1-video-img-3.jpg" alt="ripcar">
                            <div class="service-one__image__video">
                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                    <i class="ripc-icon-play"></i></a>
                            </div>
                        </div>
                        <div id="service_4" class="service-one__tabContent service_1TabContent wow fadeInUp"
                            data-wow-delay="100ms">
                            <img src="{{ asset('assets') }}/images/service/service-1-video-img-4.jpg" alt="ripcar">
                            <div class="service-one__image__video">
                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                    <i class="ripc-icon-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service End -->

        <!-- About One Start-->
        <section class="about-one">
            <div class="about-one__shape"><img src="{{ asset('assets') }}/images/shapes/about-1-shape-1.png"
                    alt="ripcar"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 wow fadeInLeft" data-wow-delay="00ms">
                        <div class="about-one__content">
                            <div class="sec-title text-left">
                                <h3 class="sec-title__title bw-split-in-left">Our Care for Your Car Just <br>Like You
                                    Do</h3>
                            </div>
                            <p class="about-one__content__text wow fadeInUp" data-wow-delay="50ms">
                                We understand the deep connection you have with your car. That's why we treat it with
                                the same level of care and attention as you do.
                            </p>
                            <p class="about-one__content__text2 wow fadeInUp" data-wow-delay="100ms">
                                From routine maintenance to intricate detailing, our team is dedicated to preserving
                                your vehicle's performance,
                            </p>
                            <a href="about.html" class="ripcar-btn"><span>Contact Us</span> <i
                                    class="ripc-icon-arrow-right-long"></i></a>
                        </div><!-- /.about__content -->
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="funfact-one">
                            <ul class="list-unstyled funfact-one__list">
                                <li class="funfact-one__item count-box wow fadeInUp" data-wow-delay="100ms">
                                    <div class="funfact-one__icon">
                                        <i class="ripc-icon-replacement-option"></i>
                                    </div>
                                    <div class="funfact-one__content">
                                        <p class="funfact-one__text">Wheel Replacement</p>
                                        <h3 class="funfact-one__count"><span class="count-text" data-stop="700"
                                                data-speed="1500"></span>+</h3>
                                    </div>
                                </li>
                                <li class="funfact-one__item count-box wow fadeInUp" data-wow-delay="200ms">
                                    <div class="funfact-one__icon">
                                        <i class="ripc-icon-car-color-correction"></i>
                                    </div>
                                    <div class="funfact-one__content">
                                        <p class="funfact-one__text">Color Correction</p>
                                        <h3 class="funfact-one__count"><span class="count-text" data-stop="500"
                                                data-speed="1500"></span>+</h3>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-unstyled funfact-one__list">
                                <li class="funfact-one__item count-box wow fadeInUp" data-wow-delay="100ms">
                                    <div class="funfact-one__icon">
                                        <i class="ripc-icon-wrench"></i>
                                    </div>
                                    <div class="funfact-one__content">
                                        <p class="funfact-one__text">Interior Remodeling</p>
                                        <h3 class="funfact-one__count"><span class="count-text" data-stop="200"
                                                data-speed="1500"></span>+</h3>
                                    </div>
                                </li>
                                <li class="funfact-one__item count-box wow fadeInUp" data-wow-delay="200ms">
                                    <div class="funfact-one__icon">
                                        <i class="ripc-icon-users"></i>
                                    </div>
                                    <div class="funfact-one__content">
                                        <p class="funfact-one__text">Years Of Experience</p>
                                        <h3 class="funfact-one__count"><span class="count-text" data-stop="25"
                                                data-speed="1500"></span>+</h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About One End-->

        <!-- Slide text Start  -->
        <section class="slide-text wow fadeInUp" data-wow-delay="100ms">
            <div class="slide-text__one">
                <ul class="slide-text__one__list list-unstyled">
                    <li>Detailing</li>
                    <li>Interior</li>
                    <li>Installation</li>
                    <li>Color correction</li>
                    <li>Support</li>
                    <li>Management</li>
                    <li>Design</li>
                    <li>Development</li>
                    <li>Custom vinyl</li>
                    <li>Technology</li>
                    <li>Business</li>
                    <li>Interior</li>
                    <li>Management</li>
                    <li>Installation</li>
                    <li>Business</li>
                    <li>Consultancy</li>
                    <li>Support</li>
                    <li>Management</li>
                </ul>
            </div><!-- text-one-->
            <div class="slide-text__two">
                <ul class="slide-text__two__list list-unstyled">
                    <li>Service</li>
                    <li>Technology</li>
                    <li>Business</li>
                    <li>Consultancy</li>
                    <li>Support</li>
                    <li>Management</li>
                    <li>Design</li>
                    <li>Development</li>
                    <li>Service</li>
                    <li>Technology</li>
                    <li>Business</li>
                    <li>Consultancy</li>
                    <li>Support</li>
                    <li>Management</li>
                    <li>Design</li>
                    <li>Development</li>
                </ul>
            </div><!-- text-two-->
        </section>
        <!-- Slide text Start  -->

        <!-- Portfolio Start -->
        <section class="portfolio-one">
            <div class="portfolio-one__shape-one"><img
                    src="{{ asset('assets') }}/images/shapes/portfolio-1-shape-1.png" alt=""></div>
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                        <div class="sec-title text-start">
                            <h6 class="sec-title__tagline bw-split-in-right">Our Portfolio</h6>
                            <h3 class="sec-title__title bw-split-in-left">Our Portfolio</h3>
                            <p class="sec-title__sesc wow fadeInUp" data-wow-delay="50ms">Indulge your vehicle with
                                our comprehensive <br>suite of services, meticulously crafted,</p>
                            <a href="portfolio.html" class="ripcar-btn"><span>Portfolio all</span> <i
                                    class="ripc-icon-arrow-right-long"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="portfolio-one__item">
                            <div class="portfolio-one__item__image">
                                <a href="portfolio.html">
                                    <img src="{{ asset('assets') }}/images/portfolio/folio1-01.jpg" alt="ripcar">
                                </a>
                            </div>
                            <div class="portfolio-one__item__content">
                                <div class="portfolio-one__item__content_wrap">
                                    <div class="portfolio-one__item__content_left">
                                        <div class="portfolio-one__item__meta">
                                            <a href="case.html">Repair Service</a>
                                        </div>
                                        <h3 class="portfolio-one__item__title"><a href="case-details.html">Wheel
                                                Replacement</a></h3>
                                    </div>
                                    <a href="case-details.html" class="portfolio-one__item__icon scallHover__btn">
                                        <i class="ripc-icon-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="portfolio-one__item">
                            <div class="portfolio-one__item__image">
                                <a href="portfolio.html">
                                    <img src="{{ asset('assets') }}/images/portfolio/folio1-02.jpg" alt="ripcar">
                                </a>
                            </div>
                            <div class="portfolio-one__item__content">
                                <div class="portfolio-one__item__content_wrap">
                                    <div class="portfolio-one__item__content_left">
                                        <div class="portfolio-one__item__meta">
                                            <a href="case.html">Detailing</a>
                                        </div>
                                        <h3 class="portfolio-one__item__title"><a href="case-details.html">Drive Wise
                                                Automotive</a></h3>
                                    </div>
                                    <a href="case-details.html" class="portfolio-one__item__icon scallHover__btn">
                                        <i class="ripc-icon-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="portfolio-one__item">
                            <div class="portfolio-one__item__image">
                                <a href="portfolio.html">
                                    <img src="{{ asset('assets') }}/images/portfolio/folio1-03.jpg" alt="ripcar">
                                </a>
                            </div>
                            <div class="portfolio-one__item__content">
                                <div class="portfolio-one__item__content_wrap">
                                    <div class="portfolio-one__item__content_left">
                                        <div class="portfolio-one__item__meta">
                                            <a href="case.html">Car seat wash</a>
                                        </div>
                                        <h3 class="portfolio-one__item__title"><a href="case-details.html">Mechanic
                                                Mate Services</a></h3>
                                    </div>
                                    <a href="case-details.html" class="portfolio-one__item__icon scallHover__btn">
                                        <i class="ripc-icon-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="portfolio-one__item">
                            <div class="portfolio-one__item__image">
                                <a href="portfolio.html">
                                    <img src="{{ asset('assets') }}/images/portfolio/folio1-04.jpg" alt="ripcar">
                                </a>
                            </div>
                            <div class="portfolio-one__item__content">
                                <div class="portfolio-one__item__content_wrap">
                                    <div class="portfolio-one__item__content_left">
                                        <div class="portfolio-one__item__meta">
                                            <a href="case.html">Car wash</a>
                                        </div>
                                        <h3 class="portfolio-one__item__title"><a href="case-details.html">Pro Drive
                                                Auto Solutions</a></h3>
                                    </div>
                                    <a href="case-details.html" class="portfolio-one__item__icon scallHover__btn">
                                        <i class="ripc-icon-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="portfolio-one__item">
                            <div class="portfolio-one__item__image">
                                <a href="portfolio.html">
                                    <img src="{{ asset('assets') }}/images/portfolio/folio1-05.jpg" alt="ripcar">
                                </a>
                            </div>
                            <div class="portfolio-one__item__content">
                                <div class="portfolio-one__item__content_wrap">
                                    <div class="portfolio-one__item__content_left">
                                        <div class="portfolio-one__item__meta">
                                            <a href="case.html">Engine Service</a>
                                        </div>
                                        <h3 class="portfolio-one__item__title"><a href="case-details.html">Auto Wizard
                                                Workshop</a></h3>
                                    </div>
                                    <a href="case-details.html" class="portfolio-one__item__icon scallHover__btn">
                                        <i class="ripc-icon-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio End -->

        <!-- Pricing Table Start  -->
        <section class="pricing-one">
            <div class="pricing-one__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%"
                style="background-image: url({{ asset('assets') }}/images/price/price-1-bg-1.jpg);"></div>
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="00ms">
                        <div class="sec-title text-start">
                            <h3 class="sec-title__title bw-split-in-left">Affordable <br>pricing plans</h3>
                            <p class="sec-title__sesc wow fadeInUp" data-wow-delay="50ms">Indulge your vehicle with
                                our comprehensive suite of services, meticulously crafted,</p>
                        </div>
                        <div class="pricing-one__setting">
                            <div class="pricing-one__setting__switch">
                                <h4>Monthly</h4>
                                <div class="pricing-one__switch__wrap">
                                    <input type="checkbox" id="switch" name="priceSwitch" />
                                    <label for="switch"></label>
                                </div>
                                <h4>Yearly</h4>
                            </div>
                            <div class="pricing-one__setting__advantges">
                                <span>Save <a href="contact.html">30%</a> On Yearly Packages</span>
                            </div>
                            <div class="pricing-one__setting__content">
                                <div class="pricing-one__setting__thumb">
                                    <img src="{{ asset('assets') }}/images/price/price-1-img-1jpg.jpg"
                                        alt="ripcar">
                                </div>
                                <div class="pricing-one__setting__cnt_text">
                                    <p class="pricing-one__setting__tagline">Pricing Choose You</p>
                                    <h3 class="pricing-one__setting__title">Choose what's right
                                        For You</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="pricing-one__monthly ripcar_monthly">
                            <div class="row gy-4">
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                    <div class="pricing-one__card active text-start">
                                        <h5 class="pricing-one__card__title">Detailing Basic</h5>
                                        <h3 class="pricing-one__card__price">$250/<span>per Car</span></h3>
                                        <h4 class="pricing-one__card__status">Most Popular</h4>
                                        <ul class="list-unstyled pricing-one__card__list">
                                            <li><i class="ripc-icon-angles-right"></i>Ceramic cutting</li>
                                            <li><i class="ripc-icon-angles-right"></i>Color changing indoor lights</li>
                                            <li><i class="ripc-icon-angles-right"></i>Heavy duty bumper</li>
                                            <li><i class="ripc-icon-angles-right"></i>Trim & polish</li>
                                            <li><i class="ripc-icon-angles-right"></i>Water proofing</li>
                                        </ul>
                                        <a href="contact.html" class="ripcar-btn">Get Membership <span
                                                class="ripc-icon-arrow-right-long"></span></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                    <div class="pricing-one__card text-start">
                                        <h5 class="pricing-one__card__title">Premium Fit</h5>
                                        <h3 class="pricing-one__card__price">$350/<span>per Car</span></h3>
                                        <h4 class="pricing-one__card__status">Most Popular</h4>
                                        <ul class="list-unstyled pricing-one__card__list">
                                            <li><i class="ripc-icon-angles-right"></i>Ceramic cutting</li>
                                            <li><i class="ripc-icon-angles-right"></i>Color changing indoor lights</li>
                                            <li><i class="ripc-icon-angles-right"></i>Heavy duty bumper</li>
                                            <li><i class="ripc-icon-angles-right"></i>Trim & polish</li>
                                            <li><i class="ripc-icon-angles-right"></i>Water proofing</li>
                                        </ul>
                                        <a href="contact.html" class="ripcar-btn">Get Membership <span
                                                class="ripc-icon-arrow-right-long"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-one__yearly ripcar_yearly" style="display: none">
                            <div class="row gy-4">
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                    <div class="pricing-one__card active text-start">
                                        <h5 class="pricing-one__card__title">Detailing Basic</h5>
                                        <h3 class="pricing-one__card__price">$2500/<span>per Car</span></h3>
                                        <h4 class="pricing-one__card__status">Most Popular</h4>
                                        <ul class="list-unstyled pricing-one__card__list">
                                            <li><i class="ripc-icon-angles-right"></i>Ceramic cutting</li>
                                            <li><i class="ripc-icon-angles-right"></i>Color changing indoor lights</li>
                                            <li><i class="ripc-icon-angles-right"></i>Heavy duty bumper</li>
                                            <li><i class="ripc-icon-angles-right"></i>Trim & polish</li>
                                            <li><i class="ripc-icon-angles-right"></i>Water proofing</li>
                                        </ul>
                                        <a href="contact.html" class="ripcar-btn">Get Membership <span
                                                class="ripc-icon-arrow-right-long"></span></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                    <div class="pricing-one__card text-start">
                                        <h5 class="pricing-one__card__title">Premium Fit</h5>
                                        <h3 class="pricing-one__card__price">$3500/<span>per Car</span></h3>
                                        <h4 class="pricing-one__card__status">Most Popular</h4>
                                        <ul class="list-unstyled pricing-one__card__list">
                                            <li><i class="ripc-icon-angles-right"></i>Ceramic cutting</li>
                                            <li><i class="ripc-icon-angles-right"></i>Color changing indoor lights</li>
                                            <li><i class="ripc-icon-angles-right"></i>Heavy duty bumper</li>
                                            <li><i class="ripc-icon-angles-right"></i>Trim & polish</li>
                                            <li><i class="ripc-icon-angles-right"></i>Water proofing</li>
                                        </ul>
                                        <a href="contact.html" class="ripcar-btn">Get Membership <span
                                                class="ripc-icon-arrow-right-long"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Table End  -->

        <!-- /.testimonials Start-->
        <section class="testimonials-one">
            <div class="container">
                <div class="row enable_animation aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="50">
                    <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="00ms">
                        <div class="sec-title text-start">
                            <h3 class="sec-title__title bw-split-in-left">What Our<br> Customers Say</h3>
                            <p class="sec-title__sesc wow fadeInUp" data-wow-delay="50ms">Indulge your vehicle with
                                our comprehensive<br> suite of services, meticulously crafted,</p>
                            <div class="testimonials-one__nav">
                                <button class="testimonials-one__prev leftToRight_hover"><i
                                        class="ripc-icon-arrow-left-long"></i></button>
                                <button class="testimonials-one__next leftToRight_hover"><i
                                        class="ripc-icon-arrow-right-long"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="testimonials-one__wrapper wow fadeInUp" data-wow-delay="200ms">
                            <div class="testimonials-one__carousel ripcar-owl__carousel--custom-nav ripcar-owl__carousel owl-carousel owl-theme"
                                data-owl-nav-prev=".testimonials-one__prev"
                                data-owl-nav-next=".testimonials-one__next"
                                data-owl-options='{
                                "items": 1,
                                "margin": 20,
                                "smartSpeed": 700,
                                "loop":true,
                                "autoplay": 6000,
                                "nav":false,
                                "dots":false,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive":{
                                    "0":{
                                        "items":1
                                    },
                                    "1441":{
                                        "items": 1
                                    }
                                }
                                }'>
                                <div class="testimonials-one__card">
                                    <div class="testimonials-one__card__author">
                                        <img src="{{ asset('assets') }}/images/resources/testi-1-1.jpg"
                                            alt="ripcar" class="testimonials-one__card__img">
                                        <h4 class="testimonials-one__card__name">Cameron Williamson</h4>
                                        <p class="testimonials-one__card__designation">Web Designer</p>
                                    </div>
                                    <div class="testimonials-one__card__content">
                                        <h3>
                                            Ripcar's attention to detail is unparalleled. I've never seen my car shine
                                            like this before!' - Sarah M. 'The team at Ripcar goes above and beyond to
                                            ensure my car is always running smoothly.
                                        </h3>
                                    </div>
                                    <div class="testimonials-one__card__rating">
                                        <i class="ripc-icon-star-bg"></i>
                                        <i class="ripc-icon-star-bg"></i>
                                        <i class="ripc-icon-star-bg"></i>
                                        <i class="ripc-icon-star-bg"></i>
                                        <i class="ripc-icon-star-bg"></i>
                                        <span class="testimonials-one__card__rating__bdr"></span>
                                    </div>
                                    <div class="testimonials-one__card__quote">
                                        <i class="ripc-icon-quote-right"></i>
                                    </div>
                                </div>
                                <div class="testimonials-one__card">
                                    <div class="testimonials-one__card__author">
                                        <img src="{{ asset('assets') }}/images/resources/testi-1-2.jpg"
                                            alt="ripcar" class="testimonials-one__card__img">
                                        <h4 class="testimonials-one__card__name">Cameron Williamson</h4>
                                        <p class="testimonials-one__card__designation">Web Developer</p>
                                    </div>
                                    <div class="testimonials-one__card__content">
                                        <h3>
                                            Ripcar's attention to detail is unparalleled. I've never seen my car shine
                                            like this before!' - Sarah M. 'The team at Ripcar goes above and beyond to
                                            ensure my car is always running smoothly.
                                        </h3>
                                    </div>
                                    <div class="testimonials-one__card__rating">
                                        <i class="ripc-icon-star-bg"></i>
                                        <i class="ripc-icon-star-bg"></i>
                                        <i class="ripc-icon-star-bg"></i>
                                        <i class="ripc-icon-star-bg"></i>
                                        <i class="ripc-icon-star-bg"></i>
                                        <span class="testimonials-one__card__rating__bdr"></span>
                                    </div>
                                    <div class="testimonials-one__card__quote">
                                        <i class="ripc-icon-quote-right"></i>
                                    </div>
                                </div>
                                <div class="testimonials-one__card">
                                    <div class="testimonials-one__card__author">
                                        <img src="{{ asset('assets') }}/images/resources/testi-1-3.jpg"
                                            alt="ripcar" class="testimonials-one__card__img">
                                        <h4 class="testimonials-one__card__name">Cameron Williamson</h4>
                                        <p class="testimonials-one__card__designation">APP Developer</p>
                                    </div>
                                    <div class="testimonials-one__card__content">
                                        <h3>
                                            Ripcar's attention to detail is unparalleled. I've never seen my car shine
                                            like this before!' - Sarah M. 'The team at Ripcar goes above and beyond to
                                            ensure my car is always running smoothly.
                                        </h3>
                                    </div>
                                    <div class="testimonials-one__card__rating">
                                        <i class="ripc-icon-star-bg"></i>
                                        <i class="ripc-icon-star-bg"></i>
                                        <i class="ripc-icon-star-bg"></i>
                                        <i class="ripc-icon-star-bg"></i>
                                        <i class="ripc-icon-star-bg"></i>
                                        <span class="testimonials-one__card__rating__bdr"></span>
                                    </div>
                                    <div class="testimonials-one__card__quote">
                                        <i class="ripc-icon-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.testimonials End-->

        <!-- Blog Start  -->
        <section class="blog-one">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="sec-title text-start">
                            <h6 class="sec-title__tagline bw-split-in-right">Latest News</h6>
                            <h3 class="sec-title__title bw-split-in-left">Read Latest Blogs</h3>
                        </div>
                    </div>
                    <div class="col-md-6 text-start text-md-end mt-4 mt-md-0">
                        <a href="blog.html" class="ripcar-btn">See All<i class="ripc-icon-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="row gy-4">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'
                            style='--accent-color: #ffa415;'>
                            <div class="blog-card__image">
                                <a href="blog-details-right.html" class="blog-card__image__link">
                                    <img src="{{ asset('assets') }}/images/blog/blog1-01.jpg"
                                        alt="We Can Aenean Poor to Help This People in Needleo Blog.">
                                </a>
                                <div class="blog-card__date">july 15,2024</div>
                            </div>
                            <div class="blog-card__content">
                                <ul class="list-unstyled blog-card__meta">
                                    <li><a href="blog-list-right.html"><i class="ripc-icon-user"></i>Brooklyn
                                            Simmons</a></li>
                                    <li><a href="blog-details-right.html"><i class="ripc-icon-comment"></i>02
                                            Massage</a></li>
                                </ul>
                                <h3 class="blog-card__title"><a href="blog-details-right.html">Useful Tips For
                                        Maintain Balance &amp; Alignment In Your Vehicles</a></h3>
                                <a href="blog-details-right.html" class="blog-card__link">
                                    <span class="blog-card__link__front">Read More</span>
                                    <i class="ripc-icon-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'
                            style='--accent-color: #ffa415;'>
                            <div class="blog-card__image">
                                <a href="blog-details-right.html" class="blog-card__image__link">
                                    <img src="{{ asset('assets') }}/images/blog/blog1-02.jpg"
                                        alt="We Can Aenean Poor to Help This People in Needleo Blog.">
                                </a>
                                <div class="blog-card__date">july 15,2024</div>
                            </div>
                            <div class="blog-card__content">
                                <ul class="list-unstyled blog-card__meta">
                                    <li><a href="blog-list-right.html"><i class="ripc-icon-user"></i>Brooklyn
                                            Simmons</a></li>
                                    <li><a href="blog-details-right.html"><i class="ripc-icon-comment"></i>02
                                            Massage</a></li>
                                </ul>
                                <h3 class="blog-card__title"><a href="blog-details-right.html">Ceiling headlights
                                        after a polish with a film.</a></h3>
                                <a href="blog-details-right.html" class="blog-card__link">
                                    <span class="blog-card__link__front">Read More</span>
                                    <i class="ripc-icon-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'
                            style='--accent-color: #ffa415;'>
                            <div class="blog-card__image">
                                <a href="blog-details-right.html" class="blog-card__image__link">
                                    <img src="{{ asset('assets') }}/images/blog/blog1-03.jpg"
                                        alt="We Can Aenean Poor to Help This People in Needleo Blog.">
                                </a>
                                <div class="blog-card__date">july 15,2024</div>
                            </div>
                            <div class="blog-card__content">
                                <ul class="list-unstyled blog-card__meta">
                                    <li><a href="blog-list-right.html"><i class="ripc-icon-user"></i>Brooklyn
                                            Simmons</a></li>
                                    <li><a href="blog-details-right.html"><i class="ripc-icon-comment"></i>02
                                            Massage</a></li>
                                </ul>
                                <h3 class="blog-card__title"><a href="blog-details-right.html">The best swap and box
                                        to cover your char with.</a></h3>
                                <a href="blog-details-right.html" class="blog-card__link">
                                    <span class="blog-card__link__front">Read More</span>
                                    <i class="ripc-icon-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog End  -->

        <!-- Contact Start  -->
        <section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="00ms">
                        <div class="sec-title text-start">
                            <h3 class="sec-title__title bw-split-in-left">Have Questions? <br>Get In Touch!</h3>
                            <p class="sec-title__sesc bw-split-in-left">2118 Thornridge Cir. Syracuse, Connecticut<br>
                                Concord-35624.</p>
                            <a href="mailto:example@gmail.com" class="contact-one__mail">example@gmail.com</a>
                            <img src="{{ asset('assets') }}/images/contact/contact-1-img-1.jpg"
                                alt="ripc-icon-contact">
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="100ms">
                        <div class="contact-one__content">
                            <form class="contact-one__form contact-form-validated form-one"
                                action="https://theme-coderstation.com/repcar/inc/sendemail.php"
                                novalidate="novalidate">
                                <div class="form-one__group">
                                    <div class="form-one__control">
                                        <input type="text" name="name" placeholder="Your full name">
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control">
                                        <input type="email" name="email" placeholder="E-mail address">
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control form-one__control--full">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                    <div class="form-one__control form-one__control--full">
                                        <textarea name="message" placeholder="Message"></textarea><!-- /# -->
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control form-one__control--full">
                                        <label class="contact-agree-checkbox">
                                            <input type="checkbox" name="checkbox" id="agreeCheck">
                                            <span>I Agree that my data is <a href="contact.html">collected and
                                                    Stored.</a></span>
                                        </label>
                                    </div>
                                    <div class="form-one__control form-one__control--full">
                                        <button type="submit" class="ripcar-btn">Get In Touch<i
                                                class="ripc-icon-arrow-right-long"></i></button>
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.form-one__group -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact End  -->

       @include('layout.Footer')

    </div>

    <!-- Mobile Nav -->
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="{{ asset('assets') }}/images/logo-light.png"
                        width="155" alt=""></a>
            </div>
            <div class="mobile-nav__container">
                <ul class="main-menu__list">
                    <li class="dropdown">
                        <a href="javascrip:void(0)">Home</a>
                        <ul class=" sub-menu">
                            <li><a href="index.html">Home One</a></li>
                            <li><a href="index-two.html">Home Two</a></li>
                            <li><a href="index-three.html">Home Three</a></li>
                            <li><a href="index-four.html">Home Four</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="team.html">Team Page</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="gallery.html">Gallery Page</a></li>
                            <li><a href="pricing.html">Pricing Page</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="service.html">Service</a>
                        <ul class="sub-menu">
                            <li><a href="service.html">Service Page</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="case.html">Case</a>
                        <ul class="sub-menu">
                            <li><a href="case.html">Case Page</a></li>
                            <li><a href="case-right.html">Case Right Sidebar</a></li>
                            <li><a href="case-left.html">Case Left Sidebar</a></li>
                            <li><a href="case-details.html">Case Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="products.html">Shop</a>
                        <ul class="sub-menu">
                            <li><a href="products.html">Shop Page</a></li>
                            <li><a href="products-right.html">Shop Right Sidebar</a></li>
                            <li><a href="products-left.html">Shop Left Sidebar</a></li>
                            <li><a href="product-details.html">Shop Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="blog-list.html">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog-list.html">Blog Page</a></li>
                            <li><a href="blog-list-right.html">Blog Right Sidebar</a></li>
                            <li><a href="blog-list-left.html">Blog Left Sidebar</a></li>
                            <li><a href="blog-details-right.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="ripc-icon-envelope"></i>
                    <a href="mailto:example@gmail.com">example@gmail.com</a>
                </li>
                <li>
                    <i class="ripc-icon-phone"></i>
                    <a href="tel:+1234567890">(+123) 456 78 90</a>
                </li>
            </ul>
            <div class="mobile-nav__social">
                <a href="https://facebook.com/">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="https://pinterest.com/">
                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                    <span class="sr-only">Pinterest</span>
                </a>
                <a href="https://twitter.com/">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="https://instagram.com/">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Search Popup START -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="ripcar-btn">
                    <span><i class="ripc-icon-search"></i></span>
                </button>
            </form>
        </div>
    </div>
    <!-- Search Popup END -->

    <!-- Sidebar One Start -->
    <aside class="sidebar-one">
        <div class="sidebar-one__overlay"></div>
        <div class="sidebar-one__content">
            <div class="sidebar-one__close"><i class="icofont-close-line"></i></div><!-- /.siderbar-close -->
            <div class="sidebar-one__logo">
                <a href="index.html" aria-label="logo image"><img
                        src="{{ asset('assets') }}/images/logo-light.png" alt="Ripcar HTML" width="223"></a>
            </div><!-- /.sidebar-one__logo-box -->

            <ul class="list-unstyled sidebar-one__info">
                <li>
                    <h4 class="sidebar-one__title">Address State</h4>
                    <span>United States 866 Wilshire, 2nd<br> Street Los Angeles 90024.</span>
                </li>
                <li>
                    <h4 class="sidebar-one__title">Contact Phone</h4>
                    <a href="tel:+1234567890">(+123) 456 78 90</a>
                </li>
                <li>
                    <h4 class="sidebar-one__title">Contact Mail</h4>
                    <a href="mailto:example@gmail.com">example@gmail.com</a>
                </li>
            </ul>
            <div class="sidebar-one__workingTime">
                <h3>Working Hours</h3>
                <ul class="list-unstyled">
                    <li>Our Office are open 07AM - 22PM</li>
                    <li>Our Office are open 07AM - 22PM</li>
                </ul>
            </div>
            <div class="sidebar-one__social">
                <a href="https://facebook.com/" class="scallHover__btn">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="https://twitter.com/" class="scallHover__btn">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="https://www.linkedin.com/" class="scallHover__btn">
                    <i class="fa-brands fa-linkedin"></i>
                    <span class="sr-only">Pinterest</span>
                </a>
                <a href="https://instagram.com/" class="scallHover__btn">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
            </div>
        </div>
    </aside>
    <!-- Sidebar One End -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">back top</span>
        <i class="ripc-icon-arrow-up-long"></i>
    </a>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('assets') }}/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/jarallax/jarallax.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="{{ asset('assets') }}/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/wnumb/wNumb.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/wow/wow.js"></script>
    <script src="{{ asset('assets') }}/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/isotope/isotope.js"></script>
    <script src="{{ asset('assets') }}/vendors/slick/slick.min.js"></script>
    <!-- gsap js -->
    <script src="{{ asset('assets') }}/vendors/gsap/gsap.js"></script>
    <script src="{{ asset('assets') }}/vendors/gsap/scrolltrigger.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/gsap/splittext.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/gsap/ripcar-split.js"></script>
    <!-- template js -->
    <script src="{{ asset('assets') }}/js/ripcar.js"></script>
</body>



</html>
