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
                                <a href="#demander-un-devis" class="learn-btn"> @lang('file.demander-un-devis') </a>
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
                                <img src=" {{asset('assets/img/home1.png')}} " alt="OctetLab">
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
            <img src=" {{asset('assets/img/shape/right-side.png')}} " alt="Shape Images">
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
           
            <div class="row pt-45">
                @foreach ($categories as $item)
                    @php
                        $titre = "nom_".session('locale');
                        $contenu = "contenu_".session('locale');
                    @endphp
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="{{route('services.details', $item->slug)}}">
                                    <img src="  {{$item->image}} " style="height: 400px; object-fit: cover" alt="{{$item->$titre}}">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a href="{{route('services.details', $item->slug)}}">
                                    <h3> {{$item->$titre}} </h3>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            
        </div>
    </section>
    <!-- Service Area End -->

    <!-- Faq Area -->
    <div class="faq-bg">
        <div class="faq-bg-into pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <span> @lang('file.what-make-us-exceptional') </span>
                            <h2>@lang('file.what-make-us-exceptional-titre') </h2>
                            <p>
                                @lang('file.what-make-us-exceptional-contenu')
                            </p>
                        </div>

                        <div class="faq-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title active" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        @lang('file.valeur1')
                                    </a>
    
                                    <div class="accordion-content show">
                                        <p> 
                                            @lang('file.valeur1-contenu')
                                        </p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        @lang('file.valeur2')
                                    </a>
    
                                    <div class="accordion-content">
                                        <p> 
                                            @lang('file.valeur2-contenu')    
                                        </p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        @lang('file.valeur3')
                                    </a>
    
                                    <div class="accordion-content">
                                        <p>
                                            @lang('file.valeur3-contenu')
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>   
                    </div>

                    <div class="col-lg-6">
                        <div class="faq-img">
                            <img src=" {{asset('assets/img/faq/1.png')}} " alt="fAQ Images">
                        </div>
                        {{-- <div class="faq-content-text">
                            <p>
                               As opposed to using Content here, content here, 
                               making it look like readable English. Many desktop publishing. <a href="#">See More</a>
                            </p>
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 col-md-4">
                                    <div class="single-counter">
                                        <h3 class="color-black"><span class="counter">15</span></h3>
                                        <p class="color-black font-size">Clientéle internationale</p>
                                    </div>
                                </div>
            
                                <div class="col-lg-4 col-sm-6 col-md-4">
                                    <div class="single-counter">
                                        <h3 class="color-black"><span class="counter">900</span>+</h3>
                                        <p class="color-black font-size">Positionnement haut de gamme</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-12 col-md-4">
                                    <div class="single-counter">
                                        <h3 class="color-black"><span class="counter">25</span>+</h3>
                                        <p class="color-black font-size">Service sur mesure</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
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
                @foreach ($realisations as $item)
                    @php
                        $titre = "nom_".session('locale');
                        $contenu = "contenu_".session('locale');
                    @endphp
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="{{route('realisations.details', $item->slug)}}">
                                <img src="{{$item->images->first()->path}}" style="width: 510px; height: 400px; object-fit: cover" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                <a href="#"><span> {{$item->service->$titre}} </span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="{{route('realisations.details', $item->slug)}}"><h3> {{$item->$titre}} </h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Portfolio Area End -->

    <!-- Counter Area -->
    <div class="counter-area-2 pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="single-counter">
                        <i class='flaticon-success'></i>
                        <p style="font-size: 18px; font-weight: 600"> @lang("file.clientele-internationale") </p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="single-counter">
                        <i class='flaticon-launch'></i>
                        <p style="font-size: 18px; font-weight: 600">@lang("file.positionnement-haut-de-gamme")</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="single-counter">
                        <i class='flaticon-team-building'></i>
                        <p style="font-size: 18px; font-weight: 600"> @lang('file.service-sur-mesure') </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Area End -->

    <!-- Price Area -->
    {{-- <div class="price-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span> @lang('file.nos-packages') </span>
                <h2> @lang('file.nos-packages-title') </h2>
                <p>
                    @lang('file.nos-packages-description')
                </p>
            </div>
            <div class="row">
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
            </div>

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
    </div> --}}
    <!-- Price Area End -->

    <!-- Member Area -->
    <div class="member-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span> @lang('file.our-experts-members') </span>
                <h2>@lang('file.our-experts-members-title')</h2>
                <p>
                    @lang('file.our-experts-members-content')
                </p>
            </div>
            <div class="row pt-45 text-center">
                @foreach ($equipes as $item)
                   @php
                       $poste = "poste_".session('locale');
                   @endphp
                <div class="col-sm-3 mx-auto">
                    <div class="member-card">
                        <div class="member-img">
                            <a href="#">
                                @if ($item->image)
                                 <img src=" {{$item->image}} " alt=" {{$item->nom}} " style="height: 400px; object-fit: cover" >
                                @else
                                <img src="assets/img/member/1.jpg" alt="{{$item->nom}}">
                                @endif
                            </a>
                            <div class="member-content">
                                <a href="#">
                                    <h3> {{$item->nom}} </h3>
                                </a>
                                <span style="font-weight: 600; font-size: 17px"> {{$item->$poste}} </span> <br/>
                                <i style="font-size: 14px"> {{$item->email}} </i>
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
                @endforeach
            </div>
        </div>
        <div class="member-shape-2">
            <img src=" {{asset('assets/img/shape/member-shape-2.png')}} " alt="Members Images">
        </div>
        
    </div>
    <!-- Member Area End -->

    <!-- Testimonial Area -->
    <div class="testimonial-area pt-30 pb-70">
        <div class="container-fluid" id="demander-un-devis">
            <div class="section-title text-center">
                <span> @lang('file.temoignage') </span>
                <h2> @lang('file.temoignage-titre') </h2>
                <p>
                    @lang('file.temoignage-content')
                </p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-xxl-6">
                    <div class="testimonial-slider">
                        <div class="testimonial-icon">
                            <i class='bx bxs-quote-alt-right'></i>
                        </div>

                        <div class="testimonial-item-slider owl-carousel owl-theme">
                            @foreach ($temoignages as $item)
                                @php
                                    $contenu = "contenu_".session('locale');
                                @endphp
                                <div class="testimonial-item">
                                    @if ($item->image)
                                        <div class="testimonial-item-img">
                                            <img src=" {{$item->image}} " alt="Testimonial Images">
                                        </div>
                                    @endif
                                    <h3> {{$item->nom}} </h3>
                                    <p>
                                        {{$item->$contenu}} 
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xxl-6">
                    <!-- Start Sign In Area -->
                    <div class="contact-wrap-form log-in-width">
                        <form method="post" action=" {{route('demander-un-devis')}} " >
                            @csrf
                            <p style="font-size: 20px; font-weight: 600"> @lang('file.demander-un-devis') </p>
                            <p> @lang('file.demander-un-devis-titre') </p>
                            <div class="row">

                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" requidred type="text" name="nom" placeholder=" @lang('file.nom')* ">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" type="email" required name="email" placeholder=" @lang('file.email')* ">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <select name="service" required id="" class="form-control">
                                             <option value=""> @lang('file.service-souhaite')* </option>
                                                @foreach ($services as $item)
                                                @php
                                                    $nom = "nom_".session('locale');
                                                @endphp
                                                <option value=" {{$item->id}} "> {{$item->$nom}} </option>
                                                    
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="budget" placeholder=" @lang('file.budget') ">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="contenu" class="form-control" placeholder=" @lang('file.message')* " id="" cols="30" rows="4"></textarea>
                                    </div>
                                    @if(config('services.recaptcha.key'))
                                                                    <div class="g-recaptcha"
                                                                        data-sitekey="{{config('services.recaptcha.key')}}">
                                                                    </div>
                                                                @endif <br>
                                </div>

                                <div class="col-12 text-center">
                                    <button class="default-btn btn-two" type="submit">
                                       @lang('file.envoyer')
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape-left">
            <img src=" {{asset('assets/img/testimonial/shape-left.png')}} " alt="Images">
        </div>
        <div class="shape-right">
            <img src=" {{asset('assets/img/testimonial/shape-right.png')}} " alt="Images">
        </div>
    </div>
    <!-- Testimonial Area End -->
    
    

    <!-- Subscribe Area -->
    <div class="subscribe-area ptb-100">
        <div class="container">
            <div class="subscribe-content">
                <h2 class="text-center"> @lang('file.newsletter') </h2>
                <form class="subscribe-form">
                    @csrf
                    <input type="email" required class="form-control" placeholder=" @lang('file.email') ">
                    <button class="submit-btn" type="submit">
                        @lang('file.souscrire')
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- Subscribe Area End -->
@endsection