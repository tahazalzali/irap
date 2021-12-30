    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg" style="background-color: #ffff">
        <div class="container">


          <div class="row " data-aos="fade-up">

          <div class="section-title col-sm-6 col-12" data-aos="fade-up">
           <a href="{{route('product')}}" style="text-decoration: none"> <h1 style="color: #212B59" > NOS<strong> PRODUITS</strong></h1></a>
          </div>
            <div class="  col-sm-6 col-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active"><span>Tout</span> </li>
                <li data-filter=".filter-app"><span>Surgelés</span></li>
                <li data-filter=".filter-card"><span>Délices</span></li>
                <li data-filter=".filter-web"><span>Décoration</span></li>
                <li data-filter=".filter-loisir"><span>Loisirs</span></li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container" data-aos="fade-up">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{asset('media/home/Mask Group 2.png')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>App</p>
                  <div class="portfolio-links">
                    <a href="{{asset('media/home/Mask Group 2.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{asset('media/home/2.png')}} "class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{asset('media/home/3.png')}} " class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>App</p>
                  <div class="portfolio-links">
                    <a href="{{asset('media/home/3.png')}} " data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{asset('media/home/4.png')}} " class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 2</h4>
                  <p>Card</p>
                  <div class="portfolio-links">
                    <a href="{{asset('media/home/4.png')}} " data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{asset('media/home/5.png')}} " class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 2</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="{{asset('media/home/5.png')}} " data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{asset('media/home/6.png')}} " class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>App</p>
                  <div class="portfolio-links">
                    <a href="{{asset('media/home/6.png')}} " data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>


      </section><!-- End Portfolio Section -->

      <script  type="text/javascript"  src="{{URL::asset('vendor/aos/aos.js')}}"></script>
      <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>


      <script  type="text/javascript"  src="{{URL::asset('vendor/swiper/swiper-bundle.min.js')}}"></script>

    <script src="{{asset('js/main. js')}}"></script>
