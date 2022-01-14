@extends('layout.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product2.css') }}">



    <div class="row container m-auto " style="position: relative">


        <div class="col-12 col-md-6  col-sm-6 ">


            <section id="services" class="services section-bg">
                <div class="container-fluid">

                    <div class="row row-sm">
                        <div class="col-md-6 _boxzoom ">

                            <div class="_product-images">
                                <div class="picZoomer">
                                    <img class="my_img" src="https://s.fotorama.io/1.jpg" alt="">
                                </div>
                            </div>

                            <div class="zoom-thumb">
                                <ul class="piclist" style="display: inline-flex">
                                    <li><img src="{{ asset('media/dish1.jpg') }}" alt=""></li>
                                    <li><img src={{ asset('media/kebbe.png') }} alt=""></li>
                                    <li><img src="{{ asset('media/IRAP.png') }}" alt=""></li>
                                    <li><img src="{{ asset('media/homeback1.jpg') }}" alt=""></li>
                                </ul>
                            </div>
                        </div>

                    </div>

            </section>



        </div>

        <div class="col-12 col-sm-6 ">
            <div class="col-12 col-sm-8 ">

                <h1><strong>PATISSERIE
                    </strong>DE LIRAP </h1>

            </div>
            <div class="col-sm-6 col-12  ">


                <h4>
                    Lors du pėlerinage
                </h4>
                <p>
                    d'un groupe de
                    handicapés du Liban
                </p>
                <p>  l'expérience d'une fraternité réelle</p>
            </div>
            <div>

                <div class=" d-block mb-4 mt-4 ml-4 pl-4" style="position: relative">
                    <div class="num-block skin-1">
                        <div class="num-in w-100" style="  border-top: 2px solid black; border-bottom: 2px solid black;">

                            <span class="ml-5 " style="    position: relative; float: left;
                                                ">
                                <p> 40*35 </p>
                            </span>
                            <div style="    position: relative; float: right;;">
                                <span class="minus dis"></span>
                                <input type="text" class="in-num" value="1" readonly=""
                                    style="background-color:#29335F;color:white; border-radius: 40%">
                                <span class="plus"></span>
                            </div>
                            {{-- select options --}}
                            <div class="row">
                                <div class="col-12 text-center align-items-center justify-content-center">


                                    <select class="my-select selectpicker">
                                        <option>Its more professional</option>
                                        <option>to put selection </option>
                                        <option>below this div</option>
                                        <option>not inside it </option>
                                    </select>

                                    <select class="selectpicker" data-live-search="true">
                                        <option data-tokens="ketchup mustard">Red</option>
                                        <option data-tokens="mustard">Green</option>
                                        <option data-tokens="frosting">Blue</option>
                                    </select>


                                </div>
                            </div>
                            {{-- END select --}}

                        </div>
                    </div>
                </div>
                <div class="right-col">

                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <meta itemprop="priceCurrency" content="USD">
                        <link itemprop="availability" href="http://schema.org/InStock">

                        <div class="swatches mt-3 mb-3" style="margin: 0">
                            <div class="swatch clearfix" data-option-index="0">
                                <div class="header">Size</div>
                                <div data-value="M" class="swatch-element plain m available">
                                    <input id="swatch-0-m" type="radio" name="option-0" value="M" checked />
                                    <label for="swatch-0-m">
                                        M
                                        <img class="crossed-out"
                                            src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                                    </label>
                                </div>
                                <div data-value="L" class="swatch-element plain l available">
                                    <input id="swatch-0-l" type="radio" name="option-0" value="L" />
                                    <label for="swatch-0-l">
                                        L
                                        <img class="crossed-out"
                                            src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                                    </label>
                                </div>
                                <div data-value="XL" class="swatch-element plain xl available">
                                    <input id="swatch-0-xl" type="radio" name="option-0" value="XL" />
                                    <label for="swatch-0-xl">
                                        XL
                                        <img class="crossed-out"
                                            src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                                    </label>
                                </div>
                                <div data-value="XXL" class="swatch-element plain xxl available">
                                    <input id="swatch-0-xxl" type="radio" name="option-0" value="XXL" />
                                    <label for="swatch-0-xxl">
                                        XXL
                                        <img class="crossed-out"
                                            src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                                    </label>
                                </div>
                            </div>
                            <div class="swatch clearfix" data-option-index="1">
                                <div class="header">Color</div>
                                <div data-value="Blue" class="swatch-element color blue available">
                                    <div class="tooltip">Blue</div>
                                    <input quickbeam="color" id="swatch-1-blue" type="radio" name="option-1"
                                        value="Blue" checked />
                                    <label for="swatch-1-blue" style="border-color: blue;">
                                        <img class="crossed-out"
                                            src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                                        <span style="background-color: blue;"></span>
                                    </label>
                                </div>
                                <div data-value="Red" class="swatch-element color red available">
                                    <div class="tooltip">Red</div>
                                    <input quickbeam="color" id="swatch-1-red" type="radio" name="option-1"
                                        value="Red" />
                                    <label for="swatch-1-red" style="border-color: red;">
                                        <img class="crossed-out"
                                            src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                                        <span style="background-color: red;"></span>
                                    </label>
                                </div>
                                <div data-value="Yellow" class="swatch-element color yellow available">
                                    <div class="tooltip">Yellow</div>
                                    <input quickbeam="color" id="swatch-1-yellow" type="radio" name="option-1"
                                        value="Yellow" />
                                    <label for="swatch-1-yellow" style="border-color: yellow;">
                                        <img class="crossed-out"
                                            src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                                        <span style="background-color: yellow;"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="guide">
                                <a>Size guide</a>
                            </div>
                        </div>

                    <div class="container">
                    

                    </div>
                        <!-- <form method="post" enctype="multipart/form-data" id="AddToCartForm"> -->
                        {{-- <form id="AddToCartForm">
                            <select name="id" id="productSelect" quickbeam="product"
                                class="product-single__variants">
                                <option selected="selected" data-sku="" value="7924994501">
                                    M / Blue - $800.00 USD
                                </option>
                                <option data-sku="" value="7924995077">
                                    M / Red - $850.00 USD
                                </option>
                                <option data-sku="" value="7924994437">
                                    L / Blue - $850.00 USD
                                </option>
                                <option data-sku="" value="7924994693">
                                    L / Yellow - $850.00 USD
                                </option>
                                <option data-sku="" value="7924995013">
                                    L / Red - $850.00 USD
                                </option>
                                <option data-sku="" value="7924994373">
                                    XL / Blue - $900.00 USD
                                </option>
                                <option data-sku="" value="7924994629">
                                    XL / Yellow - $850.00 USD
                                </option>
                                <option data-sku="" value="7924830021">
                                    XXL / Blue - $950.00 USD
                                </option>
                                <option data-sku="" value="7924994885">
                                    XXL / Red - $850.00 USD
                                </option>
                            </select>
                            <div class="btn-and-quantity-wrap">
                                <div class="btn-and-quantity">

                                    <div id="AddToCart" quickbeam="add-to-cart">
                                        <span id="AddToCartText">Add to Cart</span>
                                    </div>
                                </div>
                            </div>
                        </form> --}}

                        <div class="social-sharing-btn-wrapper">
                            <span id="social_sharing_btn">Share</span>
                        </div>
                    </div>
                    <div class="d-block  " style="color: #212B59">
                        <a class="btn text-white w-100 ml-4 mt-4 mb-4 " style=" background-color: #EE7548 ;">AJOUTER AU
                            CHARIOT</a>
                    </div>
                </div>

            </div>


        </div>




    </div>
    </div>
    </div>


    {{-- COROUSEL SLIDE --}}
    <div>
        <div id="productsCarousel" class="carousel slide container " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div>
                    <h1>
                        Compléter le look
                    </h1>
                </div>


                <div class="carousel-item   active">
                    <!-- Products Div -->
                    <div class="container">
                        <div class="row">

                            <div class="col-md-4 mt-4 pt-4   ">
                                <div class="card card-blog">
                                    <div class="card-body">
                                        <div class="card-img " style="text-align: center; min-height: 450px">
                                            <img src="{{ asset('media/home/2.png') }}" style="max-height: 400px"
                                                class="w-100 " />
                                            <div class="w-75">

                                                <div style="position: absolute;
                                                                                    width: 100%;
                                                                                    height: 150px;
                                                                                    z-index: auto;
                                                                                    margin: auto;
                                                                                    left: 10%; background-color:#212B59"
                                                    alt="tahaColors" class=" img-fluid w-75">
                                                    <div class="text-white " class="pt-1">
                                                        <h4>
                                                            SSOUS PLAT BLEU

                                                        </h4>
                                                        <p>
                                                            30,000.00 LBP
                                                        </p>
                                                        <p> 40 x 35 cm</p>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                                <!-- End Products Div -->


                            </div>

                            <!-- Products Div -->
                            <div class="col-md-4 mt-4 pt-4  ">
                                <div class="card card-blog">
                                    <div class="card-body">
                                        <div class="card-img " style="text-align: center; min-height: 450px">
                                            <img src="{{ asset('media/home/2.png') }}" style="max-height: 400px"
                                                class="w-100 " />
                                            <div class="w-75">

                                                <div style="position: absolute;
                                                        width: 100%;
                                                        height: 150px;
                                                        z-index: auto;
                                                        margin: auto;
                                                        left: 10%; background-color:#212B59" alt="tahaColors"
                                                    class=" img-fluid w-75">
                                                    <div class="text-white " class="pt-1">
                                                        <h4>
                                                            SSOUS PLAT BLEU

                                                        </h4>
                                                        <p>
                                                            30,000.00 LBP
                                                        </p>
                                                        <p> 40 x 35 cm</p>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>

                                    </div>


                                </div>


                            </div>

                            <!-- End Products Div -->


                            <!-- Products Div -->
                            <div class="col-md-4 mt-4 pt-4  ">
                                <div class="card card-blog">
                                    <div class="card-body">
                                        <div class="card-img " style="text-align: center; min-height: 450px">
                                            <img src="{{ asset('media/home/2.png') }}" style="max-height: 400px"
                                                class="w-100 " />
                                            <div class="w-75">

                                                <div style="position: absolute;
                                width: 100%;
                                height: 150px;
                                z-index: auto;
                                margin: auto;
                                left: 10%; background-color:#212B59" alt="tahaColors" class=" img-fluid w-75">
                                                    <div class="text-white " class="pt-1">
                                                        <h4>
                                                            SSOUS PLAT BLEU

                                                        </h4>
                                                        <p>
                                                            30,000.00 LBP
                                                        </p>
                                                        <p> 40 x 35 cm</p>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>



                            </div>
                            <!-- End Products Div -->
                        </div>
                    </div>




                </div>



                <div class="carousel-item    ">
                    <!-- Products Div -->
                    <div class="container">
                        <div class="row">

                            <div class="col-md-4 mt-4 pt-4   ">
                                <div class="card card-blog">
                                    <div class="card-body">
                                        <div class="card-img " style="text-align: center; min-height: 450px">
                                            <img src="{{ asset('media/home/2.png') }}" style="max-height: 400px"
                                                class="w-100 " />
                                            <div class="w-75">

                                                <div style="position: absolute;
                                                                                    width: 100%;
                                                                                    height: 150px;
                                                                                    z-index: auto;
                                                                                    margin: auto;
                                                                                    left: 10%; background-color:#212B59"
                                                    alt="tahaColors" class=" img-fluid w-75">
                                                    <div class="text-white " class="pt-1">
                                                        <h4>
                                                            SSOUS PLAT BLEU

                                                        </h4>
                                                        <p>
                                                            30,000.00 LBP
                                                        </p>
                                                        <p> 40 x 35 cm</p>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                                <!-- End Products Div -->


                            </div>

                            <!-- Products Div -->
                            <div class="col-md-4 mt-4 pt-4  ">
                                <div class="card card-blog">
                                    <div class="card-body">
                                        <div class="card-img " style="text-align: center; min-height: 450px">
                                            <img src="{{ asset('media/home/2.png') }}" style="max-height: 400px"
                                                class="w-100 " />
                                            <div class="w-75">

                                                <div style="position: absolute;
                                                        width: 100%;
                                                        height: 150px;
                                                        z-index: auto;
                                                        margin: auto;
                                                        left: 10%; background-color:#212B59" alt="tahaColors"
                                                    class=" img-fluid w-75">
                                                    <div class="text-white " class="pt-1">
                                                        <h4>
                                                            SSOUS PLAT BLEU

                                                        </h4>
                                                        <p>
                                                            30,000.00 LBP
                                                        </p>
                                                        <p> 40 x 35 cm</p>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>



                            </div>
                            <!-- End Products Div -->

                            <!-- Products Div -->
                            <div class="col-md-4 mt-4 pt-4  ">
                                <div class="card card-blog">
                                    <div class="card-body">
                                        <div class="card-img " style="text-align: center; min-height: 450px">
                                            <img src="{{ asset('media/home/2.png') }}" style="max-height: 400px"
                                                class="w-100 " />
                                            <div class="w-75">

                                                <div style="position: absolute;
                                                        width: 100%;
                                                        height: 150px;
                                                        z-index: auto;
                                                        margin: auto;
                                                        left: 10%; background-color:#212B59" alt="tahaColors"
                                                    class=" img-fluid w-75">
                                                    <div class="text-white " class="pt-1">
                                                        <h4>
                                                            SSOUS PLAT BLEU

                                                        </h4>
                                                        <p>
                                                            30,000.00 LBP
                                                        </p>
                                                        <p> 40 x 35 cm</p>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>



                            </div>

                        </div>
                        <!-- End Products Div -->

                    </div>




                </div>



                <div class="carousel-item   ">
                    <!-- Products Div -->
                    <div class="container">
                        <div class="row">

                            <div class="col-md-4 mt-4 pt-4   ">
                                <div class="card card-blog">
                                    <div class="card-body">
                                        <div class="card-img " style="text-align: center; min-height: 450px">
                                            <img src="{{ asset('media/home/2.png') }}" style="max-height: 400px"
                                                class="w-100 " />
                                            <div class="w-75">

                                                <div style="position: absolute;
                                                                                    width: 100%;
                                                                                    height: 150px;
                                                                                    z-index: auto;
                                                                                    margin: auto;
                                                                                    left: 10%; background-color:#212B59"
                                                    alt="tahaColors" class=" img-fluid w-75">
                                                    <div class="text-white " class="pt-1">
                                                        <h4>
                                                            SSOUS PLAT BLEU

                                                        </h4>
                                                        <p>
                                                            30,000.00 LBP
                                                        </p>
                                                        <p> 40 x 35 cm</p>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                                <!-- End Products Div -->


                            </div>

                            <!-- Products Div -->
                            <div class="col-md-4 mt-4 pt-4  ">
                                <div class="card card-blog">
                                    <div class="card-body">
                                        <div class="card-img " style="text-align: center; min-height: 450px">
                                            <img src="{{ asset('media/home/2.png') }}" style="max-height: 400px"
                                                class="w-100 " />
                                            <div class="w-75">

                                                <div style="position: absolute;
                                                        width: 100%;
                                                        height: 150px;
                                                        z-index: auto;
                                                        margin: auto;
                                                        left: 10%; background-color:#212B59" alt="tahaColors"
                                                    class=" img-fluid w-75">
                                                    <div class="text-white " class="pt-1">
                                                        <h4>
                                                            SSOUS PLAT BLEU

                                                        </h4>
                                                        <p>
                                                            30,000.00 LBP
                                                        </p>
                                                        <p> 40 x 35 cm</p>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>



                            </div>
                            <!-- End Products Div -->
                            <!-- Products Div -->
                            <div class="col-md-4 mt-4 pt-4   ">
                                <div class="card card-blog">
                                    <div class="card-body">
                                        <div class="card-img " style="text-align: center; min-height: 450px">
                                            <img src="{{ asset('media/home/2.png') }}" style="max-height: 400px"
                                                class="w-100 " />
                                            <div class="w-75">

                                                <div style="position: absolute;
                                                        width: 100%;
                                                        height: 150px;
                                                        z-index: auto;
                                                        margin: auto;
                                                        left: 10%; background-color:#212B59" alt="tahaColors"
                                                    class=" img-fluid w-75">
                                                    <div class="text-white " class="pt-1">
                                                        <h4>
                                                            SSOUS PLAT BLEU

                                                        </h4>
                                                        <p>
                                                            30,000.00 LBP
                                                        </p>
                                                        <p> 40 x 35 cm</p>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>



                            </div>
                            <!-- End Products Div -->

                        </div>
                    </div>




                </div>
                {{-- <button class="carousel-control-prev" type="button" data-bs-target="#productsCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button> --}}
                <button class="carousel-control-next" type="button" data-bs-target="#productsCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon text-dark" style="color: grey" aria-hidden="true"></span>
                    <span class="visually-hidden ">Next</span>
                </button>
            </div>
        </div>

        {{-- END COROUSEL --}}


    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script>
        /////////////////// product +/-
        $(document).ready(function() {
            $('.num-in span').click(function() {
                var $input = $(this).parents('.num-block').find('input.in-num');
                if ($(this).hasClass('minus')) {
                    var count = parseFloat($input.val()) - 1;
                    count = count < 1 ? 1 : count;
                    if (count < 2) {
                        $(this).addClass('dis');
                    } else {
                        $(this).removeClass('dis');
                    }
                    $input.val(count);
                } else {
                    var count = parseFloat($input.val()) + 1
                    $input.val(count);
                    if (count > 1) {
                        $(this).parents('.num-block').find(('.minus')).removeClass('dis');
                    }
                }

                $input.change();
                return false;
            });

        });
        // product +/-
    </script>

    <style>
        .num-block {
            float: left;
            width: 100%;

        }


        .skin-1 .num-in {
            float: left;
            width: 94px;
        }

        .skin-1 .num-in span {
            display: block;
            float: left;
            width: 30px;
            height: 32px;
            line-height: 32px;
            text-align: center;
            position: relative;
            cursor: pointer;
        }

        .skin-1 .num-in span.dis:before {
            background-color: #ccc !important;
        }

        .skin-1 .num-in input {
            float: left;
            width: 32px;
            height: 32px;
            border: 1px solid #6E6F7A;
            border-radius: 5px;
            color: #000;
            text-align: center;
            padding: 0;
        }

        .skin-1 .num-in span.minus:before {
            content: '';
            position: absolute;
            width: 15px;
            height: 2px;
            background-color: #00A94F;
            top: 50%;
            left: 0;
        }

        .skin-1 .num-in span.plus:before,
        .skin-1 .num-in span.plus:after {
            content: '';
            position: absolute;
            right: 0px;
            width: 15px;
            height: 2px;
            background-color: #00A94F;
            top: 50%;
        }

        .skin-1 .num-in span.plus:after {
            -webkit-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg);
        }

    </style>

@endsection
