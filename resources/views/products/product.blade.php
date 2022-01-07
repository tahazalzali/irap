@extends('layout.app')
@section('content')



    <div class="row container m-auto " style="position: relative">

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

        <div class="col-12 col-sm-6 ">
            <div>
                <img style="width: 100%" class="img-fluid" src="{{ asset('media/products/2/image.png') }}" alt="">
            </div>


        </div>
        <div class="col-12 col-sm-6 ">
            <div class="col-sm-6 col-12  ">
                <h1><strong>PATISSERIE
                    </strong></h1>
                <h1>DE LIRAP </h1>
                <p>Lors du pėlerinage d'un groupe de
                    handicapés du Liban à Lourdes en 1960
                    deux jeunes filles promettent de vivre
                    l'expérience d'une fraternité réelle
                </p>
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


                        </div>

                    </div>

                    <div class="d-block  " style="color: #212B59">
                        <a class="btn text-white w-100 ml-4 mt-4 mb-4 " style=" background-color: #EE7548 ;">AJOUTER AU CHARIOT</a>
                    </div>

                    <div>
                        <h1>
                            Compléter le look
                        </h1>
                    </div>
                    {{-- COROUSEL SLIDE --}}
                    <div>
                        <div id="productsCarousel" class="carousel slide container " data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item ml-4  active">
                                    <!-- Products Div -->
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-12 col-md-6 col-sm-6  ">
                                                <div class="card card-blog">
                                                    <div class="card-body">
                                                        <div class="card-img "
                                                            style="text-align: center; min-height: 350px">
                                                            <img src="{{ asset('media/home/2.png') }}"
                                                                class="w-100 " />
                                                            <div class="w-75">

                                                                <div style="position: absolute;
                                                                                width: 100%;
                                                                                height: 110px;
                                                                                z-index: auto;
                                                                                margin: auto;
                                                                                left: 10%; background-color:#212B59"
                                                                    alt="tahaColors" class=" img-fluid w-75">
                                                                    <p class="text-white p-3" >
                                                                        SSOUS PLAT BLEU
                                                                        30,000.00 LBP
                                                                        40 x 35 cm</p>

                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- End Products Div -->
                                            </div>

                                            <!-- Products Div -->
                                            <div class="col-12 col-md-6 col-sm-6 ">
                                                <div class="card card-blog">
                                                    <div class="card-body">
                                                        <div class="card-img "
                                                            style="text-align: center; min-height: 350px">
                                                            <img src="{{ asset('media/home/2.png') }}"
                                                                class="w-100 " />
                                                            <div class="w-75">

                                                                <div style="position: absolute;
                                                    width: 100%;
                                                    height: 110px;
                                                    z-index: auto;
                                                    margin: auto;
                                                    left: 10%; background-color:#212B59" alt="tahaColors"
                                                                    class=" img-fluid w-75">
                                                                    <p class="text-white p-3" >
                                                                        SSOUS PLAT BLEU
                                                                        30,000.00 LBP
                                                                        40 x 35 cm</p>

                                                                </div>


                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- End Products Div -->
                                            </div>

                                        </div>
                                    </div>




                                </div>
                                <div class="carousel-item   ">
                                    <!-- Products Div -->
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-12 col-md-6 col-sm-6  ">
                                                <div class="card card-blog">
                                                    <div class="card-body">
                                                        <div class="card-img "
                                                            style="text-align: center; min-height: 350px">
                                                            <img src="{{ asset('media/home/2.png') }}"
                                                                class="w-100 " />
                                                            <div class="w-75">

                                                                <div style="position: absolute;
                                                                                width: 100%;
                                                                                height: 110px;
                                                                                z-index: auto;
                                                                                margin: auto;
                                                                                left: 10%; background-color:#212B59"
                                                                    alt="tahaColors" class=" img-fluid w-75">
                                                                    <p class="text-white p-3" >
                                                                        SSOUS PLAT BLEU
                                                                        30,000.00 LBP
                                                                        40 x 35 cm</p>

                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- End Products Div -->
                                            </div>

                                            <!-- Products Div -->
                                            <div class="col-12 col-md-6 col-sm-6 ">
                                                <div class="card card-blog">
                                                    <div class="card-body">
                                                        <div class="card-img "
                                                            style="text-align: center; min-height: 350px">
                                                            <img src="{{ asset('media/home/2.png') }}"
                                                                class="w-100 " />
                                                            <div class="w-75">

                                                                <div style="position: absolute;
                                                    width: 100%;
                                                    height: 110px;
                                                    z-index: auto;
                                                    margin: auto;
                                                    left: 10%; background-color:#212B59" alt="tahaColors"
                                                                    class=" img-fluid w-75">
                                                                    <p class="text-white p-3" >
                                                                        SSOUS PLAT BLEU
                                                                        30,000.00 LBP
                                                                        40 x 35 cm</p>

                                                                </div>


                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- End Products Div -->
                                            </div>

                                        </div>
                                    </div>




                                </div>
                                <div class="carousel-item   container">
                                    <!-- Products Div -->
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-12 col-md-6 col-sm-6  ">
                                                <div class="card card-blog">
                                                    <div class="card-body">
                                                        <div class="card-img "
                                                            style="text-align: center; min-height: 350px">
                                                            <img src="{{ asset('media/home/2.png') }}"
                                                                class="w-100 " />
                                                            <div class="w-75">

                                                                <div style="position: absolute;
                                                                                width: 100%;
                                                                                height: 110px;
                                                                                z-index: auto;
                                                                                margin: auto;
                                                                                left: 10%; background-color:#212B59"
                                                                    alt="tahaColors" class=" img-fluid w-75">
                                                                    <p class="text-white p-3" >
                                                                        SSOUS PLAT BLEU
                                                                        30,000.00 LBP
                                                                        40 x 35 cm</p>

                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- End Products Div -->
                                            </div>

                                            <!-- Products Div -->
                                            <div class="col-12 col-md-6 col-sm-6 ">
                                                <div class="card card-blog">
                                                    <div class="card-body">
                                                        <div class="card-img "
                                                            style="text-align: center; min-height: 350px">
                                                            <img src="{{ asset('media/home/2.png') }}"
                                                                class="w-100 " />
                                                            <div class="w-75">

                                                                <div style="position: absolute;
                                                    width: 100%;
                                                    height: 110px;
                                                    z-index: auto;
                                                    margin: auto;
                                                    left: 10%; background-color:#212B59" alt="tahaColors"
                                                                    class=" img-fluid w-75">
                                                                    <p class="text-white p-3" >
                                                                        SSOUS PLAT BLEU
                                                                        30,000.00 LBP
                                                                        40 x 35 cm</p>

                                                                </div>


                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- End Products Div -->
                                            </div>

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
            </div>
        </div>
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

    </div>
@endsection
