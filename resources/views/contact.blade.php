@extends('layout2')

@section('title')
OCTETLAB - @lang('file.contact-us')
@endsection

@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg5">
        <div class="container">
            <div class="inner-title text-center">
                <h3> @lang('file.contactez-nous') </h3>
                <ul>
                    <li>
                        <a href="{{route('accueil')}}">@lang('file.accueil')</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li>@lang('file.contactez-nous')</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->
    
    <!-- Contact Area -->
    <div class="contact-area pt-100 pb-70">
        <div class="container contact-width">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="contact-card">
                        <i class='flaticon-call'></i>
                        <ul>
                            <li>
                                <a href="https://wa.me/+237655725353" class="gray">
                                    +237 655725353
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/+491624613569" class="gray">
                                    +49 1624613569
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="contact-card">
                        <i class="flaticon-paper-plane"></i>
                        <ul>
                            <li class="gray">
                                Email
                            </li>
                            <li>
                                <a href="mailto:octetlab0@gmail.com" class="gray">octetlab0@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="contact-card">
                        <i class='flaticon-pin'></i>
                        <ul>
                            <li class="gray">
                                @lang('file.location')
                            </li>
                            <li class="gray">
                                24H/24 - 7j/7
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area End -->
    
    <!-- Contact Section -->
    <section class="contact-section pb-100">
        <div class="container">
            <div class="section-title text-center">
                <span> @lang('file.contact-us') </span>
                <h2 style="font-size: 25px"> @lang('file.laissez-nous-un-message') </h2>
                <p> @lang('file.demander-un-devis-titre') </p>
            </div>
            <div class="contact-wrap pt-45">
               <div class="contact-wrap-form">
                    <form  method="post" action=" {{route('envoyer-message')}} ">
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
                                    <input type="text" name="objet" id="msg_subject" class="form-control" required  placeholder="@lang('file.objet')*">
                                    <div class="help-block with-errors"></div>
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

    <!-- Map Area Section Start -->
    <div class="map-area">
        <div class="container-fluid p-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.8012729417583!2d11.495808014262705!3d3.8527876494995716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bcf3584f91819%3A0x1382c0a8fe120302!2zRGFtYXMsWWFvdW5kw6k!5e0!3m2!1sfr!2scm!4v1647443891736!5m2!1sfr!2scm"></iframe>
        </div>
    </div>
    <!-- Subscribe Area -->
    <div class="subscribe-area ptb-100">
        <div class="container">
            <div class="subscribe-content">
                <h2 class="text-center"> @lang('file.newsletter') </h2>
                <form class="subscribe-form" action=" {{route('newsletter.subscribe')}} " method="post">
                    @csrf
                    <input type="email" required class="form-control" name="email" placeholder=" @lang('file.email') ">
                    <button class="submit-btn" type="submit">
                        @lang('file.souscrire')
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- Subscribe Area End -->
    <!-- Map Area Section End-->
@endsection