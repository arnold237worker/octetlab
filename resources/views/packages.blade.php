@extends('layout2')

@section('title')
OCTETLAB - @lang('file.packages')
@endsection

@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg1">
        <div class="container">
            <div class="inner-title text-center">
                <h3> @lang('file.packages') </h3>
                <ul>
                    <li>
                        <a href="{{ route('accueil') }}"> @lang('file.accueil') </a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li>@lang('file.packages') </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Price Area -->
    <div class="price-area pt-70 pb-70" id="packages">
        <div class="container">
            <div class="section-title text-center">
                <span>OCTETLAB </span>
                <h2> @lang('file.nos-packages-title') </h2>
                <p>
                    @lang('file.nos-packages-description')
                </p>
            </div>
            @if (count($packages) > 0)
                
            
            <div id="prices-content">
                <div id="monthly" class="active prices-content-area">
                    <div class="row">
                        @foreach ($packages as $item)
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-price current">
                                @php
                                    $nom = "nom_".session('locale');
                                    $services_packages = "services_".session('locale');
                                @endphp
                                <span> {{$item->$nom}} </span>
                                
                                <div class="single-price-title">
                                    @if ($item->price)
                                        <h2> {{$item->price}} </h2>
                                        
                                    @endif
                                </div>
                                @php
                                    $services_items = explode(',', $item->$services_packages);
                                @endphp <br>
                                <ul>
                                    @foreach ($services_items as $s)
                                        <li> <i class="bx bx-check-circle text-primary"></i>  {{$s}} </li>
                                    @endforeach
                                </ul>
                                <a href="#demander-un-package" class="get-btn" style="background-color: #67CFEE !important; color: #fff"> @lang('file.contact-us') </a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    <!-- Price Area End -->

    <!-- Contact Section -->
    <section class="contact-section pb-100" id="demander-un-package">
        <div class="container">
            <div class="section-title text-center">
                <span> @lang('file.contact-us') </span>
                <h2 style="font-size: 25px"> @lang('file.laissez-nous-un-message') </h2>
                <p> @lang('file.demander-un-devis-titre') </p>
            </div>
            <div class="contact-wrap pt-45">
               <div class="contact-wrap-form">
                    <form  method="post" action=" {{route('demander-package')}} ">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="nom" id="name" class="form-control" required  placeholder="@lang('file.nom')*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required placeholder="@lang('file.email')*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>


                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <select name="package" required id="" class="form-control">
                                        <option value=""> @lang('file.package-souhaite')* </option>
                                           @foreach ($packages as $item)
                                           @php
                                               $nom = "nom_".session('locale');
                                           @endphp
                                           <option value=" {{$item->nom_fr}} "> {{$item->$nom}} </option>
                                               
                                           @endforeach
                                   </select>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="contenu" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="@lang('file.message')*"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                @if(config('services.recaptcha.key'))
                                    <div class="g-recaptcha"
                                        data-sitekey="{{config('services.recaptcha.key')}}">
                                    </div>
                                @endif <br>
                            </div>

                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="default-btn page-btn text-center">
                                    @lang('file.envoyer')
                                </button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
               </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    

@endsection