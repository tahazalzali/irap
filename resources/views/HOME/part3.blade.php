    <!-- ======= Portfolio Section ======= -->

    <section id="portfolio" class="portfolio section-bg" style="background-color: #ffff">
        <div class="container">


            <div class="row " data-aos="fade-up">

                <div class="section-title col-sm-6 col-12" data-aos="fade-up">
                    <a href="{{ route('product') }}" style="text-decoration: none">
                        <h1 style="color: #212B59"> NOS<strong> PRODUITS</strong></h1>
                    </a>
                </div>
                <div class="  col-sm-6 col-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active"><span>Tout</span> </li>
                        <li data-filter=".filter-Artisant"><span>Surgelés</span></li>
                        <li data-filter=".filter-card"><span>Délices</span></li>
                        <li data-filter=".filter-decoration"><span>Décoration</span></li>
                        <li data-filter=".filter-loisir"><span>Loisirs</span></li>
                    </ul>
                </div>
            </div>
            <a href="{{ route('products.artisanat') }}">
                <div class="row portfolio-container" data-aos="fade-up">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-Artisant">

                        <div class="portfolio-wrap">
                            <a href="{{ route('products.artisanat') }}">
                                <img src="{{ asset('media/home/Mask Group 2.png') }}" class="img-fluid w-100 " alt="">
                                <div class="portfolio-info">

                                    <h4>Artisant 1</h4>
                                    <p>Artisant</p>

                                    <div class="portfolio-links">

                                        <a href="{{ route('products.artisanat') }}" title="More Details"><i
                                                class="bx bx-link">
                                                <h1>VOIR </h1>
                                            </i></a>
                                    </div>
                                </div>
                        </div>
            </a>
        </div> </a>

        <div class="col-lg-4 col-md-6 portfolio-item filter-decoration">
            <div class="portfolio-wrap">
                <img src="{{ asset('media/home/2.png') }} " class="img-fluid w-100" alt="">
                <div class="portfolio-info">
                    <h4>decoration 3</h4>
                    <p>decoration</p>
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="decoration 3"><i class="bx bx-plus"></i></a>
                        <a href="{{ route('products.artisanat') }}" title="More Details"><i class="bx bx-link">
                                <h1>VOIR </h1>
                            </i></a>
                    </div>
                </div>
            </div>
        </div>
        {{-- img --}}
        <div class="col-lg-4 col-md-6 portfolio-item filter-Artisant">
            <div class="portfolio-wrap">
                <img src="{{ asset('media/home/3.png') }} " class="img-fluid w-100" alt="">
                <div class="portfolio-info">
                    <h4>Artisant 2</h4>
                    <p>Artisant</p>
                    <div class="portfolio-links">
                        <a href="{{ asset('media/home/3.png') }} " data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="Artisant 2"><i class="bx bx-plus"></i></a>
                        <a href="{{ route('products.artisanat') }}" title="More Details"><i class="bx bx-link">
                                <h1>VOIR </h1>
                            </i></a>
                    </div>
                </div>
            </div>
        </div>

        {{-- END IMG --}}

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
                <img src="{{ asset('media/home/4.png') }} " class="img-fluid w-100" alt="">
                <div class="portfolio-info">
                    <h4>Card 2</h4>
                    <p>Card</p>
                    <div class="portfolio-links">
                        <a href="{{ asset('media/home/4.png') }} " data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="{{ route('products.artisanat') }}" title="More Details"><i class="bx bx-link">
                                <h1>VOIR </h1>
                            </i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-decoration">
            <div class="portfolio-wrap">
                <img src="{{ asset('media/home/5.png') }} " class="img-fluid w-100" alt="">
                <div class="portfolio-info">
                    <h4>decoration 2</h4>
                    <p>decoration</p>
                    <div class="portfolio-links">
                        <a href="{{ asset('media/home/5.png') }} " data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="decoration 2"><i class="bx bx-plus"></i></a>
                        <a href="{{ route('products.artisanat') }}" title="More Details"><i class="bx bx-link">
                                <h1>VOIR </h1>
                            </i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-Artisant">
            <div class="portfolio-wrap">
                <img src="{{ asset('media/home/6.png') }} " class="img-fluid w-100" alt="">
                <div class="portfolio-info">
                    <h4>Artisant 3</h4>
                    <p>Artisant</p>
                    <div class="portfolio-links">
                        <a href="{{ asset('media/home/6.png') }} " data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="Artisant 3"><i class="bx bx-plus"></i></a>
                        <a href="{{ route('products.artisanat') }}" title="More Details"><i class="bx bx-link">
                                <h1>VOIR </h1>
                            </i></a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Portfolio Section -->


    <div class="text-center mb-5">
        <a class="btn text-white btn-lg" href="{{ route('products') }}" style=" background-color: #EE7548 ;">VIOR
            PLUS</a>
    </div>

    <script src="{{ asset('vendor/glightbox/js/main.js') }}  "></script>


    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js  ') }} "></script>
