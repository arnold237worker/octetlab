@extends("layout2")

@section("title")
OCTETLAB - @lang('file.realisations')
@endsection

@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg4">
        <div class="container">
            <div class="inner-title text-center">
                <h3> @lang('file.realisations') </h3>
                <ul>
                    <li>
                        <a href="{{route('realisations')}}"> @lang('file.services') </a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li> @lang('file.realisations') </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->
    <!-- Portfolio Area -->
    <section class="portfolio-area pt-100 pb-70">
        <div class="container">
            
            <div class="section-title text-center">
                <span> @lang('file.nos-realisations') </span>
                <h2> @lang('file.realisation-liste') </h2>
                <p>
                    @lang('file.nos-realisations-description')
                </p>
            </div>
            <div class="row pt-45">
                @php
                    $titre = "nom_".session('locale');
                    $contenu = "contenu_".session('locale');
                @endphp
                @foreach ($realisations as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="{{route('realisations.details', $item->slug)}}">
                                <img src="{{$item->images->first()->path}}" style="width: 510px; height: 400px; object-fit: cover" alt=" {{$item->$titre}} ">
                            </a>
                            <div class="portfolio-tag">
                                <a href="#"><span>{{$item->service->$titre}}</span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="{{route('realisations.details', $item->slug)}}">
                                    <h3>{{$item->$titre}}</h3>
                                </a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-lg-12">
                    <div class="pagination-area">
                        <nav aria-label="Page navigation example text-center">
                            {{$realisations->links()}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Area End -->
@endsection