@extends("layout2")

@section("title")
    @php
        $nom = "nom_".session('locale');
    @endphp
    {{$service->$nom}} - OCTETLAB
@endsection

@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg6">
        <div class="container">
            <div class="inner-title text-center">
                <h3>{{$service->$nom}}</h3>
                <ul>
                    <li>
                        <a href="#"> @lang('file.services') </a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li>{{$service->$nom}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->
    <!-- Service Dtls -->
    <div class="service-dtls pt-100 pb-70 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-dtls-content">
                        <div class="service-dtls-img">
                            <img src=" {{$service->image}} " style="height: 500px; width: 100%; object-fit: cover" alt=" {{$service->$nom}} ">
                        </div>
                        <h2> {{$service->$nom}} </h2>
                        <p class="text-justify">
                            @php
                                $contenu = "contenu_".session("locale");
                            @endphp
                            {{$service->$contenu}}
                        </p>

                        
                <div class="row align-items-center pt-45">
                    <div class="col-lg-12">
                        <div class="faq-accordion faq-accordion-width">
                            <ul class="accordion">
                                @foreach ($service->services as $item)
                                    
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            {{$item->$nom}}
                                        </a>
        
                                        <div class="accordion-content">
                                            <p class="text-justify"> 
                                                {{$item->$contenu}}
                                            </p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="common-catagory">
                        
                        <h4 style="font-size: 20px"> @lang('file.services') </h4>
                        <ul class="catagory">
                            @foreach ($categories as $item)
                                <li>
                                    <a href=" {{route('services.details', $item->slug)}} "> {{$item->$nom}} <i class='bx bx-plus'></i></a>
                                </li>
                            @endforeach
                        </ul>
                        <br>
                        <div class="contact-wrap-form" style="padding: 20px !important; color: #111 !important">
                            <h4 style="font-size: 20px"> @lang('file.demander-un-devis') </h4>
                            <form method="post" action=" {{route('demander-un-devis')}} " >
                                @csrf
                                <div class="row">
    
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" requidred type="text" name="nom" placeholder=" @lang('file.nom')* ">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" type="email" required name="email" placeholder=" @lang('file.email')* ">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <select name="service" required id="" class="form-control">
                                                 <option value=""> @lang('file.service-souhaite')* </option>
                                                    @foreach ($service->services as $item)
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
        </div>
    </div>
    <!-- Service Dtls End -->
    @if (count($realisations) > 0)
        <!-- Portfolio Area -->
        <section class="portfolio-area portfolio-mt pt-10 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span> @lang('file.nos-realisations') </span>
                    <h2 style="font-size: 20px"> @lang('file.exemples-realisation')</h2>
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
@endsection