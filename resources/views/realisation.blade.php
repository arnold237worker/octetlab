@extends("layout2")

@section("title")
    @php
        $nom = "nom_".session('locale');
    @endphp
    {{$realisation->$nom}} - OCTETLAB
@endsection

@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg2">
        <div class="container">
            <div class="inner-title text-center">
                <h3>{{$realisation->$nom}}</h3>
                <ul>
                    <li>
                        <a href=" {{route('realisations')}} "> @lang('file.realisations') </a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li>{{$realisation->$nom}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->
    <!-- Service Dtls -->
    <div class="service-dtls pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-dtls-content">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @php
                                    $i=1;
                                @endphp
                                @foreach ($realisation->images as $item)
                                    <div class="carousel-item @if ($i==1) active @endif">
                                        <img src=" {{$item->path}} " style="width: 100%; height: 500px; object-fit: cover" class="d-block w-100 mb-3" alt="{{$realisation->$nom}}">
                                    </div>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            </div>
                        </div>
                        <h2> {{$realisation->$nom}} </h2>
                        <p class="text-justify">
                            @php
                                $contenu = "contenu_".session("locale");
                            @endphp
                            {{$realisation->$contenu}}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="widget-area">

                        <section class="widget widget-popular-post">
                            <h3 class="widget-title">@lang('file.details-projet')</h3>
                            <div class="post-wrap">
                                <article class="item">
                                    <div class="info">
                                        <time>@lang('file.nom-du-client')</time>
                                        <h4 class="title usmall">
                                            {{$realisation->client}}
                                        </h4>
                                    </div>
                                </article>
                                
                                @php
                                    $presentation = "presentation_client_".session('locale');
                                @endphp
                                @if ($realisation->$presentation)
                                    <article class="item">
                                        <div class="info">
                                            <time>@lang('file.presentation-du-client') </time>
                                            <h4 class="title usmall">
                                                {{$realisation->$presentation}}
                                            </h4>
                                        </div>
                                    </article>
                                @endif
                                @if ($realisation->date_realisation)
                                    <article class="item">
                                        <div class="info">
                                            <time> @lang('file.date-realisation')</time>
                                            <h4 class="title usmall">
                                                {{$realisation->date_realisation}}
                                            </h4>
                                        </div>
                                    </article>
                                @endif
                                @if ($realisation->lien)
                                    <article class="item">
                                        <div class="info">
                                            <time> @lang('file.resultat') </time>
                                            <h4 class="title usmall">
                                                 <a href="{{$realisation->lien}}" target="_blank">{{$realisation->lien}}</a> 
                                            </h4>
                                        </div>
                                    </article>
                                @endif
                                <article class="item">
                                    <div class="info">
                                        <time>@lang('file.type-projet')</time>
                                        <h4 class="title usmall">
                                            @php
                                                $titre = "nom_".session('locale');
                                            @endphp
                                            {{$realisation->service->$titre}}
                                        </h4>
                                    </div>
                                </article>
                            </div>
                        </section>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (count($connexes) > 0)
        <!-- Portfolio Area -->
        <section class="portfolio-area portfolio-mt pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span> @lang('file.nos-realisations') </span>
                    <h2 style="font-size: 20px"> @lang('file.realisations-similaires')</h2>
                </div>
                <div class="row pt-45">
                    @foreach ($connexes as $item)
                        @php
                            $titre = "nom_".session('locale');
                            $contenu = "contenu_".session('locale');
                        @endphp
                        <div class="col-lg-4 col-md-6">
                            <div class="portfolio-item">
                                <div class="portfolio-img">
                                    <a href="{{route('realisations.details', $item->slug)}}">
                                        <img src="{{$item->images->first()->path}}" style="width: 100%; height: 400px; object-fit: cover" alt="Portfolio Images">
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
    
    <!-- Portfolio Area End -->
    <!-- Service Dtls End -->
@endsection