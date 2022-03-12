@extends('layout')

@section('title')
    OctetLab - @lang('file.about')
@endsection

@section('content')
    <!-- Banner Area -->
    <div class="banner-area">
        <div class="container">
            <div class="banner-into">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="banner-content">
                            <h1> @lang('file.slogan') </h1>
                            <p>
                                @lang('file.about')
                            </p>

                            <div class="banner-content-btn">
                                <a href=" {{route('a-propos')}} " class="learn-btn"> @lang('file.a-propos') </a>
                                <div class="banner-play-btn">
                                    <a href="https://www.youtube.com/watch?v=uYKDS1yDODY" class="play-btn">
                                        <i class='bx bx-play'></i> @lang('file.watch-video')
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="banner-img-2">
                            <div class="banner-img">
                                <img src="assets/img/home1.png" alt="Banner Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-shape">
            <div class="shape1">
                <img src=" {{asset('assets/img/shape/1.png')}} " alt="shape">
            </div>
            <div class="shape2">
                <img src=" {{asset('assets/img/shape/2.png')}} " alt="shape">
            </div>
            <div class="shape3">
                <img src=" {{asset('assets/img/shape/3.png')}} " alt="shape">
            </div>
            <div class="shape4">
                <img src=" {{asset('assets/img/shape/4.png')}} " alt="shape">
            </div>
            <div class="shape5">
                <img src=" {{asset('assets/img/shape/5.png')}} " alt="shape">
            </div>
            <div class="shape6">
                <img src=" {{asset('assets/img/shape/6.png')}} " alt="shape">
            </div>
            <div class="shape7">
                <img src=" {{asset('assets/img/shape/3.png')}} " alt="shape">
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- About Area -->
    <div class="about-area pt-100 pb-70">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xxl-6 ps-0">
                    <div class="about-img">
                        <img src=" {{asset('assets/img/about/1.png')}} " alt="About Images">
                    </div>
                </div>

                <div class="col-lg-7 col-xxl-6">
                    <div class="about-content about-width">
                        <span> OCTETLAB</span>
                        <h2> @lang('file.quisommesnous')</h2>
                        <p class="justify">
                            @lang('file.histoire1') </p>
                        <p class="justify">  
                             @lang('file.histoire2')
                        </p>
                        <p class="justify">
                            @lang('file.histoire3')
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape">
            <img src="assets/img/shape/right-side.png" alt="Shape Images">
        </div>
    </div>
    <!-- About Area End -->
    
    <!-- Service Area -->
    <section class="service-area pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span> @lang('file.nos-services') </span>
                <h2> @lang('file.nos-services-title') </h2>
                <p>
                    @lang('file.nos-services-description')
                </p>
            </div>
           
            <div class="service-slider owl-carousel owl-theme pt-45">
                <div class="service-card">
                    <a href="service-details.html">
                        <h3>SEO Optimization</h3>
                    </a>
                    <p>
                        It is a long established fact that area
                        der will be distracted by the reada
                        ble content of a page when looking.
                    </p>
                </div>

                <div class="service-card">
                    <a href="service-details.html">
                        <h3>Social Marketing</h3>
                    </a>
                    <p>
                        It is a long established fact that area
                        der will be distracted by the reada
                        ble content of a page when looking.
                    </p>
                </div>

                <div class="service-card">
                    <a href="service-details.html">
                        <h3>Content Marketing</h3>
                    </a>
                    <p>
                        It is a long established fact that area
                        der will be distracted by the reada
                        ble content of a page when looking.
                    </p>
                </div>

                <div class="service-card">
                    <a href="service-details.html">
                        <h3>Analytical Analysis</h3>
                    </a>
                    <p>
                        It is a long established fact that area
                        der will be distracted by the reada
                        ble content of a page when looking.
                    </p>
                </div>
            </div>

            <div class="about-btn text-center">
                <a href="#" class="default-btn">Voir tout</a>
            </div>
        </div>
    </section>
    <!-- Service Area End -->

    <!-- Faq Area -->
    <div class="faq-area pt-5 pb-70">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xxl-7">
                    <div class="faq-img">
                        <img src=" {{asset('assets/img/faq/1.png')}} " alt="fAQ Images">
                    </div>
                </div>

                <div class="col-lg-6 col-xxl-5">
                    <div class="faq-content">
                        <span> @lang('file.what-make-us-exceptional') </span>
                        <h2>We Are Top Ranked & Dedicated SEO Company</h2>
                        <p>
                            As opposed to using Content here, content here,
                            making it look like readable English. Many desktop
                            publishing packages and web page editors now use Lorem
                            Ipsum as their default model text.
                        </p>
                    </div>

                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    Great Research Exparts
                                </a>

                                <div class="accordion-content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipis
                                        cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    Great Understanding
                                </a>

                                <div class="accordion-content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipis
                                        cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    Top Ranking
                                </a>

                                <div class="accordion-content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipis
                                        cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    100% Trusted
                                </a>

                                <div class="accordion-content show">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipis
                                        cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Faq Area End -->

    <!-- Portfolio Area -->
    <section class="portfolio-area portfolio-mt pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span> @lang('file.nos-realisations') </span>
                <h2> @lang('file.realisation-liste') </h2>
                <p>
                    @lang('file.nos-realisations-description')
                </p>
            </div>
            <div class="portfolio-slider pt-45 owl-carousel owl-theme">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <a href="portfolio.html">
                            <img src="assets/img/portfolio/1.jpg" alt="Portfolio Images">
                        </a>
                        <div class="portfolio-tag">
                            <a href="#"><span>Marketing</span></a>
                        </div>
                        <div class="portfolio-content">
                            <a href="portfolio.html"><h3>Social Marketing</h3></a>
                            <i class='bx bxs-chevron-right'></i>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <a href="portfolio.html">
                            <img src="assets/img/portfolio/2.jpg" alt="Portfolio Images">
                        </a>
                        <div class="portfolio-tag">
                            <a href="#"><span>Research</span></a>
                        </div>
                        <div class="portfolio-content">
                            <a href="portfolio.html"><h3>Data Analysis</h3></a>
                            <i class='bx bxs-chevron-right'></i>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <a href="portfolio.html">
                            <img src="assets/img/portfolio/3.jpg" alt="Portfolio Images">
                        </a>
                        <div class="portfolio-tag">
                            <a href="#"><span>Optimizing</span></a>
                        </div>
                        <div class="portfolio-content">
                            <a href="portfolio.html"><h3>SEO Optimization</h3></a>
                            <i class='bx bxs-chevron-right'></i>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <a href="portfolio.html">
                            <img src="assets/img/portfolio/5.jpg" alt="Portfolio Images">
                        </a>
                        <div class="portfolio-tag">
                            <a href="#"><span>Development</span></a>
                        </div>
                        <div class="portfolio-content">
                            <a href="portfolio.html"><h3>App Development</h3></a>
                            <i class='bx bxs-chevron-right'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Area End -->

    <!-- Counter Area -->
    <div class="counter-area-2 pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-md-3">
                    <div class="single-counter">
                        <i class='flaticon-success'></i>
                        <h3><span class="counter">15</span></h3>
                        <p>@lang('file.years-experience')</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-3">
                    <div class="single-counter">
                        <i class='flaticon-launch'></i>
                        <h3><span class="counter">900</span>+</h3>
                        <p>@lang('file.project-done')</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-3">
                    <div class="single-counter">
                        <i class='flaticon-customer'></i>
                        <h3><span class="counter">800</span>+</h3>
                        <p>@lang('file.happy-customers')</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-3">
                    <div class="single-counter">
                        <i class='flaticon-team-building'></i>
                        <h3><span class="counter">25</span>+</h3>
                        <p>@lang('file.experts-members')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Area End -->

    <!-- Price Area -->
    <div class="price-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span> @lang('file.nos-packages') </span>
                <h2> @lang('file.nos-packages-title') </h2>
                <p>
                    @lang('file.nos-packages-description')
                </p>
            </div>
            {{-- <div class="row">
                <div class="col-lg-12 pt-45">
                    <div class="tabs-item-list">
                        <ul id="tabs-item" class="text-center">
                            <li class="active">
                                <a href="#monthly" class="prices-tab">Monthly</a>
                            </li>
                            <li>
                                <a href="#yearly" class="prices-tab">Yearly</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}

            <div id="prices-content">
                <div id="monthly" class="active prices-content-area animated">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-price">
                                <span>Basic Plan</span>
                                <div class="single-price-title">
                                    <h2><sup>$</sup>30<sub>/month</sub></h2>
                                </div>
                                <ul>
                                    <li>Data Analysis</li>
                                    <li>Website Building</li>
                                    <li>Web Application</li>
                                    <li class="color-gray">SEO Optimizing</li>
                                    <li class="color-gray">Content Marketing</li>
                                    <li class="color-gray">Social Marketing</li>
                                </ul>
                                <a href="#" class="get-btn">Get Stated</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="single-price current">
                                <span>Standard Plan</span>
                                <div class="single-price-title">
                                    <h2><sup>$</sup>60<sub>/month</sub></h2>
                                </div>
                                <ul>
                                    <li>Data Analysis</li>
                                    <li>Website Building</li>
                                    <li>Web Application</li>
                                    <li>SEO Optimizing</li>
                                    <li class="color-gray">Content Marketing</li>
                                    <li class="color-gray">Social Marketing</li>
                                </ul>
                                <a href="#" class="get-btn">Get Stated</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                            <div class="single-price">
                                <span>Premium Plan</span>
                                <div class="single-price-title">
                                    <h2><sup>$</sup>90<sub>/month</sub></h2>
                                </div>
                                <ul>
                                    <li>Data Analysis</li>
                                    <li>Website Building</li>
                                    <li>Web Application</li>
                                    <li>SEO Optimizing</li>
                                    <li>Content Marketing</li>
                                    <li>Social Marketing</li>
                                </ul>
                                <a href="#" class="get-btn">Get Stated</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Price Area End -->

    <!-- Member Area -->
    <div class="member-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span> @lang('file.our-experts-members') </span>
                <h2>@lang('file.our-experts-members-title')</h2>
                <p>
                    It is a long established fact that a reader will be distracted 
                    by the readable content of a page when looking at its layout.
                </p>
            </div>
            <div class="row pt-45">
                <div class="col-lg-3 col-sm-6">
                    <div class="member-card">
                        <div class="member-img">
                            <a href="members.html">
                                <img src="assets/img/member/1.jpg" alt="Member Images">
                            </a>
                            <div class="member-content">
                                <a href="members.html">
                                    <h3>John Doe</h3>
                                </a>
                                <span>Head of Bonsa</span>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-twitter' ></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-instagram' ></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="member-card">
                        <div class="member-img">
                            <a href="members.html">
                                <img src="assets/img/member/2.jpg" alt="Member Images">
                            </a>
                            <div class="member-content">
                                <a href="members.html">
                                    <h3>John Smith</h3>
                                </a>
                                <span>SEO Expert</span>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-twitter' ></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-instagram' ></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="member-card">
                        <div class="member-img">
                            <a href="members.html">
                                <img src="assets/img/member/3.jpg" alt="Member Images">
                            </a>
                            <div class="member-content">
                                <a href="members.html">
                                    <h3>Evanaa</h3>
                                </a>
                                <span>Content Writer</span>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-twitter' ></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-instagram' ></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="member-card">
                        <div class="member-img">
                            <a href="members.html">
                                <img src="assets/img/member/4.jpg" alt="Member Images">
                            </a>
                            <div class="member-content">
                                <a href="members.html">
                                    <h3>Knot Doe</h3>
                                </a>
                                <span>Marketing Expert</span>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-twitter' ></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-instagram' ></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="member-shape-2">
            <img src="assets/img/shape/member-shape-2.png" alt="Members Images">
        </div>
        
    </div>
    <!-- Member Area End -->

    <!-- Client Area -->
    <div class="client-area pb-70">
        <div class="container-fluid p-0">
            <div class="section-title text-center">
                <span>Testimonial</span>
                <h2>Our Clients Feedback</h2>
                <p>
                    It is a long established fact that a reader will be distracted by 
                    the readable content of a page when looking at its layout.
                </p>
            </div>

            <div class="client-slider owl-carousel owl-theme">
                <div class="client-item">
                    <div class="client-item-img">
                        <img src="assets/img/testimonial/t1.png" alt="Testimonial Images">
                    </div>
                    <h3>John Doe</h3>
                    <p>
                        Restaurants range from inexpensive and informal lunching or dining places 
                        catering to people working nearby, with modest food served in simple settings at low prices.
                    </p>
                </div>

                <div class="client-item">
                    <div class="client-item-img">
                        <img src="assets/img/testimonial/t4.png" alt="Testimonial Images">
                    </div>
                    <h3>Knot Doe</h3>
                    <p>
                        Restaurants range from inexpensive and informal lunching or dining places 
                        catering to people working nearby, with modest food served in simple settings at low prices.
                    </p>
                </div>

                <div class="client-item">
                    <div class="client-item-img">
                        <img src="assets/img/testimonial/t5.png" alt="Testimonial Images">
                    </div>
                    <h3>John Smith</h3>
                    <p>
                        Restaurants range from inexpensive and informal lunching or dining places 
                        catering to people working nearby, with modest food served in simple settings at low prices.
                    </p>
                </div>
                <div class="client-item">
                    <div class="client-item-img">
                        <img src="assets/img/testimonial/t3.png" alt="Testimonial Images">
                    </div>
                    <h3>Evanaa</h3>
                    <p>
                        Restaurants range from inexpensive and informal lunching or dining places 
                        catering to people working nearby, with modest food served in simple settings at low prices.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Client Area End -->


    <!-- Subscribe Area -->
    <div class="subscribe-area ptb-100">
        <div class="container">
            <div class="subscribe-content">
                <h2>Subscribe Bonsa for Daily Update</h2>
                <form class="subscribe-form">
                    <input type="email" class="form-control" placeholder="Enter your email">
                    <button class="submit-btn" type="submit">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- Subscribe Area End -->
@endsection