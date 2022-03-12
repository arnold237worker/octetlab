
@extends('layout')

@section('content')
<!-- Inner Banner -->
<div class="inner-banner inner-bg7">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Portfolio</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <i class='bx bxs-chevrons-right'></i>
                </li>
                <li>Portfolio</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Portfolio Area -->
<section class="portfolio-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span>Our Portfolio</span>
            <h2>We Have Done Business with Thousand of Comapnies</h2>
            <p>
                It is a long established fact that a reader will be distracted
                by the readable content of a page when looking at its layout.
            </p>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4 col-md-6">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <a href="portfolio.html">
                            <img src="assets/img/portfolio/1.jpg" alt="Portfolio Images">
                        </a>
                        <div class="portfolio-tag">
                            <a href="#"><span>Marketing</span></a>
                        </div>
                        <div class="portfolio-content">
                            <a href="portfolio.html">
                                <h3>Social Marketing</h3>
                            </a>
                            <i class='bx bxs-chevron-right'></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <a href="portfolio.html">
                            <img src="assets/img/portfolio/2.jpg" alt="Portfolio Images">
                        </a>
                        <div class="portfolio-tag">
                            <a href="#"><span>Research</span></a>
                        </div>
                        <div class="portfolio-content">
                            <a href="portfolio.html">
                                <h3>Data Analysis</h3>
                            </a>
                            <i class='bx bxs-chevron-right'></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <a href="portfolio.html">
                            <img src="assets/img/portfolio/3.jpg" alt="Portfolio Images">
                        </a>
                        <div class="portfolio-tag">
                            <a href="#"><span>Optimizing</span></a>
                        </div>
                        <div class="portfolio-content">
                            <a href="portfolio.html">
                                <h3>SEO Optimization</h3>
                            </a>
                            <i class='bx bxs-chevron-right'></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <a href="portfolio.html">
                            <img src="assets/img/portfolio/4.jpg" alt="Portfolio Images">
                        </a>
                        <div class="portfolio-tag">
                            <a href="#"><span>Marketing</span></a>
                        </div>
                        <div class="portfolio-content">
                            <a href="portfolio.html">
                                <h3>Content Marketing</h3>
                            </a>
                            <i class='bx bxs-chevron-right'></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <a href="portfolio.html">
                            <img src="assets/img/portfolio/5.jpg" alt="Portfolio Images">
                        </a>
                        <div class="portfolio-tag">
                            <a href="#"><span>Development</span></a>
                        </div>
                        <div class="portfolio-content">
                            <a href="portfolio.html">
                                <h3>App Development</h3>
                            </a>
                            <i class='bx bxs-chevron-right'></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <a href="portfolio.html">
                            <img src="assets/img/portfolio/6.jpg" alt="Portfolio Images">
                        </a>
                        <div class="portfolio-tag">
                            <a href="#"><span>Development</span></a>
                        </div>
                        <div class="portfolio-content">
                            <a href="portfolio.html">
                                <h3>Web Development</h3>
                            </a>
                            <i class='bx bxs-chevron-right'></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="pagination-area">
                    <nav aria-label="Page navigation example text-center">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link page-links" href="#">
                                    <i class='bx bx-chevrons-left'></i>
                                </a>
                            </li>
                            <li class="page-item current">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class='bx bx-chevrons-right'></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Area End -->
@endsection