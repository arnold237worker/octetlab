@extends('layout2')

@section('title')
OCTETLAB - {{$mot_cle}}
@endsection

@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg1">
        <div class="container">
            <div class="inner-title text-center">
                <h3> {{$mot_cle}} </h3>
                <ul>
                    <li>
                        <a href="{{ route('accueil') }}"> @lang('file.accueil') </a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li>{{$mot_cle}} </li>
                </ul>
            </div>
        </div>
    </div>

    @if (count($categories) > 0)
        <!-- Service Area -->
            <section class="service-area pt-100 pb-20">
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

    @endif

    @if (count($services) > 0)
        <!-- Service Area -->
            <section class="service-area pt-70 pb-20">
                <div class="container">
                    <div class="row">
                        @foreach ($services as $item)
                            @php
                                $titre = "nom_".session('locale');
                                $contenu = "contenu_".session('locale');
                            @endphp
                            
                            <div class="col-lg-4 col-sm-6">
                                <div class="service-card">
                                    <a href="{{route('services.details', $item->categorie->slug)}}">
                                        <h3> {{$item->$titre}} </h3>
                                    </a>
                                    <p>
                                        {{ substr($item->$contenu, 0, 150)."..." }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    
                </div>
            </section>
            <!-- Service Area End -->

    @endif

    @if (count($realisations) > 0)
      
            <!-- Portfolio Area -->
    <section class="portfolio-area portfolio-mt pt-70 pb-20">
        <div class="container">
            <div class="section-title text-center">
                <span> @lang('file.nos-realisations') </span>
                <h2> @lang('file.realisation-liste') </h2>
                <p>
                    @lang('file.nos-realisations-description')
                </p>
            </div>
            <div class="row pt-45">
                @foreach ($realisations as $item)
                    @php
                        $titre = "nom_".session('locale');
                        $contenu = "contenu_".session('locale');
                    @endphp
                    <div class="col-lg-4 col-md-6">
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
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Portfolio Area End -->
        
    @endif

    <!-- Member Area -->
    @if (count($equipe) > 0)
        <div class="member-area portfolio-mt pt-70 pb-20" id="equipe">
            <div class="container">
                <div class="section-title text-center">
                    <span> @lang('file.our-experts-members') </span>
                    <h2>@lang('file.our-experts-members-title')</h2>
                    <p>
                        @lang('file.our-experts-members-content')
                    </p>
                </div>
                <div class="row pt-45 text-center">
                    @foreach ($equipe as $item)
                    @php
                        $poste = "poste_".session('locale');
                    @endphp
                    <div class="col-sm-3">
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
                                    {{-- <div class="social-icon">
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
                                    </div> --}}
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
    @endif
    <!-- Member Area End -->

    @if (count($equipe) == 0 && count($realisations) == 0 && count($services) == 0 && count($categories) == 0)
    <section class="portfolio-area portfolio-mt pt-70 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="bx bx-search-alt" style="font-size: 100px"></span>
                <p style="font-size: 25px">  @lang('file.no-result')  </p style="font-size: 25px">
            </div>
        </div>
    </section>
    @endif

    <!-- Testimonial Area -->
    {{-- <div class="testimonial-area pt-30 pb-70">
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
    </div> --}}
    <!-- Testimonial Area End -->
    

@endsection