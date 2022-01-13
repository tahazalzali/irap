@extends('layout.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/pdf.css') }}">
    <div class="row container m-auto mt-4 mb-4 ">



        <div class="col-12 col-sm-6 ">
            <div>
                <img style="width: 100%" class="img-fluid" src="{{ asset('media/edu/Mask Group 16.png') }}" alt="">
            </div>


        </div>
        <div class="col-12 col-sm-6 ">
            <div class="col-sm-6 col-12  ">
                <h1>L’éducation </h1>
                <p>Un service d’éducation précoce de l’enfant sourd qui prend en charge
                    l’enfant et ses parents afin de mettre en route la communication avec
                    l’enfant et de le préparer à la scolarisation.
                </p>
            </div>

            {{-- Button --}}
            {{-- <div class="mt-4 mb-4">
            <a class="btn text-white btn-lg p-2" style=" background-color: #6DB7E8 ;border: 2px solid white; width: 40%;  font-size:0.9em;
            display:block;
            left:-60px;
            margin-top:35px;"><strong>EXPLORER</strong> </a>
        </div> --}}
            {{-- LOGIN FORM --}}
            {{-- <form  method="post" role="form" class="php-email-form m-auto row">
            @csrf
            @method('POST')
            <div class="row col-md-6">
                <div class="row form-group  mb-3">
                    <label style="text-align: initial;" for="name">USERNAME</label>
                    <input type="text" name="username" class="form-control" id="username"
                        required>
                </div>
                <br>
                <div class="row form-group mt-3 mt-md-0">
                    <label style="text-align: initial;" for="password">PASSWORD</label>

                    <input type="password" class="form-control" name="password" id="password"
                      required>
                </div>
            </div>
        </form> --}}






        </div>
    </div>



    <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="container">
            <div class="row">

            </div>
            <div class="row">
               <!-- react div -->
               <div class="col-md-4">
                <div class="work-box">

                    <div class="work-img">
                        <iframe src="{{ asset('media/pdf/1.pdf') }}" frameborder="0"></iframe>
                    </div>
<div>
<a href="{{ asset('media/pdf/1.pdf') }}"  target="_blank" data-gallery="portfolioGallery"
class="portfolio-lightbox btn ">View full pdf
 </a>
</div>
                    {{-- <div class="work-content">
                        <div class="row">
                            <a href="{{ asset('media/pdf/1.pdf') }}"  target="_blank" data-gallery="portfolioGallery"
                                class="portfolio-lightbox btn ">View full pdf
                                <button class="btn "> See all </button> </a>
                            <div class="col-sm-4">
                                <div class="w-like">
                                    <a href="https://www.coursera.org/account/accomplishments/certificate/XRXWFWNDVFS2"
                                        data-toggle="tooltip" data-placement="top" title="See credential"
                                        target="_blank"> <span class="bi bi-plus-circle"></span></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!-- END react div -->

                 <!-- react div -->
                 <div class="col-md-4">
                    <div class="work-box">

                        <div class="work-img">
                            <iframe src="{{ asset('media/pdf/1.pdf') }}" frameborder="0"></iframe>
                        </div>
<div>
    <a href="{{ asset('media/pdf/2.pdf') }}"  target="_blank" data-gallery="portfolioGallery"
    class="portfolio-lightbox btn ">View full pdf
  </a>
</div>
                        {{-- <div class="work-content">
                            <div class="row">
                                <a href="{{ asset('media/pdf/1.pdf') }}"  target="_blank" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox btn ">View full pdf
                                    <button class="btn "> See all </button> </a>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href="https://www.coursera.org/account/accomplishments/certificate/XRXWFWNDVFS2"
                                            data-toggle="tooltip" data-placement="top" title="See credential"
                                            target="_blank"> <span class="bi bi-plus-circle"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <!-- END react div -->

                <!-- react div -->
                <div class="col-md-4">
                    <div class="work-box">

                        <div class="work-img">
                            <iframe src="{{ asset('media/pdf/1.pdf') }}" frameborder="0"></iframe>
                        </div>
<div>
    <a href="{{ asset('media/pdf/1.pdf') }}"  target="_blank" data-gallery="portfolioGallery"
    class="portfolio-lightbox btn ">View full pdf
     </a>
</div>
                        {{-- <div class="work-content">
                            <div class="row">
                                <a href="{{ asset('media/pdf/1.pdf') }}"  target="_blank" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox btn ">View full pdf
                                    <button class="btn "> See all </button> </a>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href="https://www.coursera.org/account/accomplishments/certificate/XRXWFWNDVFS2"
                                            data-toggle="tooltip" data-placement="top" title="See credential"
                                            target="_blank"> <span class="bi bi-plus-circle"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <!-- END react div -->





            </div>
        </div>
    </section><!-- End Portfolio Section -->


@endsection
