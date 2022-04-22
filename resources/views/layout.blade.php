<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href=" {{asset('assets/css/bootstrap.min.css')}} "> 
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href=" {{asset('assets/css/owl.theme.default.min.css')}} ">
        <link rel="stylesheet" href=" {{asset('assets/css/owl.carousel.min.css')}} ">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href=" {{asset('assets/css/magnific-popup.min.css')}} ">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href=" {{asset('assets/css/animate.min.css')}} ">
        <!-- Boxicons CSS --> 
        <link rel="stylesheet" href=" {{asset('assets/css/boxicons.min.css')}} ">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href=" {{asset('assets/fonts/flaticon.css')}} ">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href=" {{asset('assets/css/meanmenu.min.css')}} ">
        <!-- Style CSS -->
        <link rel="stylesheet" href=" {{asset('assets/css/style.css')}} ">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href=" {{asset('assets/css/responsive.css')}} ">
        
        <link href=" {{asset('assets/css/noty.css')}} " rel="stylesheet" type="text/css" />

        <!-- Title -->
        <title> @yield('title') </title>

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/favicon/apple-touch-icon.png')}} ">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicon/favicon-32x32.png')}} ">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicon/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('assets/favicon/site.webmanifest')}}">

        {{-- <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/622d4335a34c2456412ac784/1fu0ct2e2';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            </script> --}}
            <!--End of Tawk.to Script-->
            
    </head>

    <body>
        <!-- Start Preloader -->
        <div class="preloader">
            <div class="preloader-wave">
                <img src=" {{asset('assets/img/loader.png')}} " class="animated progres"  alt="">
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Header Area -->
        <header class="header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-9">
                        <div class="header-content-right">
                            <ul class="header-contact">
                                <li><a href="#"><i class='flaticon-pin'></i>@lang('file.location')</a></li>
                                <li><a href="mailto:octetlab0@gmail.com"><i class="flaticon-paper-plane"></i> octetlab0@gmail.com</a></li>
                                <li><a href="https:/wa.me/+491624613569"><i class="flaticon-call"></i> +237 655725353 | +49 1624613569</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-3">
                        <div class="header-content-right">
                            <ul class="header-social">
                                <li>
                                    <a href="https://www.facebook.com/octetlab" target="_blank"><i class="bx bxl-facebook"></i></a>
                                </li>
                                {{-- <li>
                                    <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-youtube'></i></a>
                                </li> --}}
                                <li>
                                    <a href="https://www.instagram.com/p/CXCYlUGMNB3/?utm_medium=copy_link" target="_blank"><i class='bx bxl-instagram' ></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/octetlab" target="_blank"><i class='bx bxl-linkedin' ></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href=" {{route('accueil')}} " class="logo">
                    <img src=" {{asset('assets/img/4.png')}} "  alt="Logo OctetLab">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav top-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href=" {{route('accueil')}} ">
                            <img src=" {{asset('assets/img/4.png')}} "  alt="Logo OctetLab">
                        </a>
                        <a class="navbar-brand-sticky" href=" {{route('accueil')}} ">
                            <img src=" {{asset('assets/img/5.png')}} "  alt="Logo OctetLab">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                
                                <li class="nav-item">
                                    <a href=" {{route('accueil')}} " class="nav-link">
                                        @lang("file.accueil")
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        @lang("file.services")
                                        <i class='bx bxs-chevron-right'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        @php
                                            $nom = "nom_".session('locale');
                                        @endphp
                                        @foreach (App\Models\CategorieService::where('etat', 'published')->get() as $item)
                                            <li class="nav-item">
                                                <a href=" {{route('services.details', $item->slug)}} " class="nav-link">
                                                    {{$item->$nom}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('realisations')}}" class="nav-link">
                                        @lang("file.realisations")
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href=" {{route('a-propos')}} " class="nav-link">
                                        @lang("file.quisommesnous")
                                        <i class='bx bxs-chevron-right'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{route('a-propos')}}#presentation" class="nav-link">
                                                @lang('file.presentation')
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('a-propos')}}#equipe" class="nav-link">
                                                @lang('file.notre-equipe')
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('demarche')}}" class="nav-link">
                                                @lang('file.comment-ca-marche')
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('packages')}}" class="nav-link">
                                                @lang('file.packages')
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('contact')}}" class="nav-link">
                                        @lang("file.contactez-nous")
                                    </a>
                                </li>
                            </ul>
                            <div class="other-side">
                                <div class="search-area">
                                    <div class="other-option">
                                        <div class="search-item">
                                            <a href="#" class="search-btn">
                                                <i class="flaticon-loupe"></i>
                                            </a>
                                            <i class="close-btn bx bx-x"></i>
                                            <div class="search-overlay search-popup">
                                                <div class="search-box">
                                                    <form class="search-form" action=" {{route('rechercher')}} ">
                                                        @csrf
                                                        <input class="search-input" name="mot_cle" required placeholder=" @lang('file.search') " type="text">
                                                        <button class="search-button" type="submit">
                                                            <i class="flaticon-loupe"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-menu">
                                    <select class="form-select form-select-md lang"  aria-label=".form-select-sm example">
                                        
                                        <option value="fr" @if(session('locale') == "fr") selected="selected" @endif>Français</option>
                                        <option value="en" @if(session('locale') == "en") selected="selected" @endif>English</option>
                                        <option value="de" @if(session('locale') == "de") selected="selected" @endif>Deutsch</option>
                                      </select>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        @yield('content')
        
        
        
        <!-- Footer Area -->
        <footer id="footer" class="footer-area-bg">
            <div class="footer-area-top pt-100 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-single">
                                <div class="footer-single-content">
                                    <a href=" {{route('accueil')}} ">
                                        <img src=" {{asset('assets/img/5.png')}} " alt="Logo OctetLab">
                                    </a>
                                    <p class="text-justify">@lang('file.about')</p>
                                </div> 

                                <div class="newsletter-area">
                                    <form class="newsletter-form" action=" {{route('newsletter.subscribe')}} " method="post">
                                        @csrf
                                        <input type="email" class="form-control"  placeholder=" @lang('file.email') " name="email" required autocomplete="off">
                                        <button class="subscribe-btn" type="submit">
                                            @lang('file.souscrire')
                                        </button>
                                        <div id="validator-newsletter" class="form-result"></div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-lg-3 col-md-6">
                            <div class="footer-list ml-50">
                                <h3>Services</h3>
                                <ul>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href=" {{route('contact')}} ">Mentions légales</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href=" {{route('contact')}} ">Conditions générales</a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}

                        <div class="col-lg-5 col-md-6">
                            <div class="footer-list">
                                <h3>@lang('file.menu')</h3>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li>
                                                <i class='bx bxs-chevron-right'></i>
                                                <a href=" {{route('accueil')}} "> @lang('file.accueil') </a>
                                            </li>
                                            <li>
                                                <i class='bx bxs-chevron-right'></i>
                                                <a href=" {{route('a-propos')}} "> @lang('file.quisommesnous') </a>
                                            </li>
                                            <li>
                                                <i class='bx bxs-chevron-right'></i>
                                                <a href="{{route('services')}}">@lang('file.services') </a>
                                            </li>
                                            <li>
                                                <i class='bx bxs-chevron-right'></i>
                                                <a href=" {{route('packages')}} ">@lang('file.packages')</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            
                                            <li>
                                                <i class='bx bxs-chevron-right'></i>
                                                <a href=" {{route('realisations')}} "> @lang('file.realisations') </a>
                                            </li>
                                            <li>
                                                <i class='bx bxs-chevron-right'></i>
                                                <a href=" {{route('contact')}} ">  @lang('file.contactez-nous')</a>
                                            </li>
                                            <li>
                                                <i class='bx bxs-chevron-right'></i>
                                                <a href=" {{route('mentions-legales')}} "> @lang('file.mentions') </a>
                                            </li>
                                            <li>
                                                <i class='bx bxs-chevron-right'></i>
                                                <a href=" {{route('conditions-generales')}} "> @lang('file.conditions') </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-list ml-20">
                                <h3>@lang('file.contact-us')</h3>
                                <ul>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="https:/wa.me/+237655725353">+237 655725353</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="https:/wa.me/+491624613569">+49 1624613569</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="mailto:octetlab0@gmail.com">octetlab0@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="#"> @lang('file.open') : 24h/24 - 7j/7</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        @lang('file.location')
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="bottom-text text-center footer-link">
                                <ul class="footer-social">
                                    <li>
                                        <a href="https://www.facebook.com/octetlab" target="_blank"><i class="bx bxl-facebook"></i></a>
                                    </li>
                                    {{-- <li>
                                        <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class='bx bxl-youtube'></i></a>
                                    </li> --}}
                                    <li>
                                        <a href="https://www.instagram.com/p/CXCYlUGMNB3/?utm_medium=copy_link" target="_blank"><i class='bx bxl-instagram' ></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/octetlab" target="_blank"><i class='bx bxl-linkedin' ></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="bottom-text text-center">
                                <p>
                                    @lang('file.copyright')
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

        <div id="whatsapp" class="whatsapp-btn"> <a href="https:/wa.me/+491624613569"><i class="bx bx-phone" style="color: #fff"></i></a>  </div>


         <!-- Jquery Min JS -->
        <script src=" {{asset('assets/js/jquery-3.5.0.min.js')}} "></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src=" {{asset('assets/js/bootstrap.bundle.min.js')}} "></script>
        <!-- Meanmenu JS -->
        <script src=" {{asset('assets/js/meanmenu.min.js')}} "></script>
        <!-- Owl Carousel JS -->
        <script src=" {{asset('assets/js/owl.carousel.min.js')}} "></script>
        <!-- Magnific Popup JS -->
        <script src=" {{asset('assets/js/jquery.magnific-popup.min.js')}} "></script>
        <!-- Wow JS -->
        <script src=" {{asset('assets/js/wow.min.js')}} "></script>
        <!-- Ajaxchimp Min JS -->
        <script src=" {{asset('assets/js/jquery.ajaxchimp.min.js')}} "></script>
        <!-- Form Validator Min JS -->
        <script src=" {{asset('assets/js/form-validator.min.js')}} "></script>
        <!-- Contact Form JS -->
        <script src=" {{asset('assets/js/contact-form-script.js')}} "></script>
        
        <script src=" {{asset('assets/js/noty.js')}} "></script>
        <!-- Custom JS -->
        <script src=" {{asset('assets/js/custom.js')}} "></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>

        <script>
            $(".lang").change(function(){
                let value = this.value;
                if(value == "fr" )
                    window.location.href = "{{ asset('lang/fr') }}";
                else if(value == "en")
                    window.location.href = "{{ asset('lang/en') }}";
                else 
                    window.location.href = "{{ asset('lang/de') }}";
                  
            });
        </script>

        
        <script>
            @if ($errors->any())
                var message = "{{ $errors->all()[0] }}"
                new Noty({
                    type: 'error',
                    text: message,
                    timeout: 7000,
                    killer: true
                }).show();
            @endif

            @if(session()->has('success'))
            var message = "{{ session('success') }}"
                new Noty({
                    type: 'success',
                    text: message,
                    timeout: 5000,
                    killer: true
                }).show();
            @endif
        </script>
        
                <!--Start of Tawk.to Script-->
                <script type="text/javascript">
                    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                    (function(){
                    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                    s1.async=true;
                    s1.src='https://embed.tawk.to/6232d78aa34c2456412b7779/1fub9jtjg';
                    s1.charset='UTF-8';
                    s1.setAttribute('crossorigin','*');
                    s0.parentNode.insertBefore(s1,s0);
                    })();
                </script>
                <!--End of Tawk.to Script-->
    </body>
</html>