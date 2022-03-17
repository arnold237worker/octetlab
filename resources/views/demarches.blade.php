@extends('layout2')

@section('title')
OCTETLAB - @lang('file.comment-ca-marche')
@endsection

@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg1">
        <div class="container">
            <div class="inner-title text-center">
                <h3> @lang('file.comment-ca-marche') </h3>
                <ul>
                    <li>
                        <a href="{{ route('accueil') }}"> @lang('file.accueil') </a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li>@lang('file.comment-ca-marche') </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->
    <!-- Faq Area  -->
    <div class="faq-area-bg pt-100 pb-70">
        <div class="container-fluid">
            <div class="row align-items-center pt-45">
                <div class="col-lg-5 col-xxl-6 pl-0">
                    <div class="about-img-2">
                        <div class="">
                            <img src="{{asset('assets/img/admin.png')}}" alt="Comment ça marche ?">
                        </div>
                        <div class="about-shape1">
                            <img src="{{asset('assets/img/about/s-1.png')}}" alt="Shape">
                        </div>
                        <div class="about-shape2">
                            <img src="{{asset('assets/img/about/s-2.png')}}" alt="Shape">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-xxl-6">
                    <div class="about-content about-width">
                        <span> @lang('file.comment-ca-marche') </span>
                        <h2>@lang('file.web-design-process') </h2>
                        <br>
                        <div class="faq-accordion faq-accordion-width">
                            <ul class="accordion">
                                @php
                                    $i = 1;
                                    $titre = 'titre_'.session('locale');
                                    $contenu = 'contenu_'.session('locale');
                                @endphp
                                @foreach ($process as $item)
                                    <li class="accordion-item">
                                        <a class="accordion-title @if ($i==1) active @endif " href="javascript:void(0)">
                                            <i> {{$i}} </i>
                                            {{$item->$titre}}
                                        </a>

                                        <div class="accordion-content @if ($i==1) show @endif ">
                                            <p> 
                                                {{$item->$contenu}}
                                            </p>
                                        </div>
                                    </li>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            </ul>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Faq Area End -->

    <!-- Contact Section -->
    <section class="contact-section ptb-100">
        <div class="container">
            <div class="section-title text-center">
                <span> OCTETLAB </span>
                <h2 style="font-size: 25px"> @lang('file.laissez-nous-un-avis') </h2>
                <p> @lang('file.laissez-nous-un-avis-contenu') </p>
            </div>
            <div class="contact-wrap pt-45">
               <div class="contact-wrap-form">
                    <form  method="post" action=" {{route('noter-octetlab')}} ">
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
                                    <input type="hidden" name="note" id="note" class="form-control" placeholder="@lang('file.objet')*">
                                    <div class='rating-stars text-center'>
                                        <strong>@lang('file.entrer-note') *</strong>
                                        <ul id='stars'>
                                          <li class='star' data-value='1'>
                                            <i class='bx bxs-star '></i>
                                          </li>
                                          <li class='star' data-value='2'>
                                            <i class='bx bxs-star '></i>
                                          </li>
                                          <li class='star'  data-value='3'>
                                            <i class='bx bxs-star '></i>
                                          </li>
                                          <li class='star'  data-value='4'>
                                            <i class='bx bxs-star '></i>
                                          </li>
                                          <li class='star'  data-value='5'>
                                            <i class='bx bxs-star '></i>
                                          </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="commentaire" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="@lang('file.commentaire')*"></textarea>
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
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
  
        /* 1. Visualizing things on Hover - See next part for action on click */
        $('#stars li').on('mouseover', function(){
            var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
        
            // Now highlight all the stars that's not after the current hovered star
            $(this).parent().children('li.star').each(function(e){
            if (e < onStar) {
                $(this).addClass('hover');
            }
            else {
                $(this).removeClass('hover');
            }
            });
            
        }).on('mouseout', function(){
            $(this).parent().children('li.star').each(function(e){
            $(this).removeClass('hover');
            });
        });
        
        
        /* 2. Action to perform on click */
        $('#stars li').on('click', function(){
            var onStar = parseInt($(this).data('value'), 10); // The star currently selected
            var stars = $(this).parent().children('li.star');
            
            for (i = 0; i < stars.length; i++) {
            $(stars[i]).removeClass('selected');
            }
            
            for (i = 0; i < onStar; i++) {
            $(stars[i]).addClass('selected');
            }
            
            // JUST RESPONSE (Not needed)
            var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
            var msg = "";
            if (ratingValue > 1) {
                msg = "Thanks! You rated this " + ratingValue + " stars.";
                $("#note").val(ratingValue);
            }
            else {
                msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
            }
            
        });
  
  
});

    </script>
@endsection