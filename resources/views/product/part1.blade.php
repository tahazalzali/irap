@extends('layout.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">



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
                                    <li><img src="{{asset("media/dish1.jpg")}}" alt=""></li>
                                    <li><img src={{asset('media/kebbe.png')}} alt=""></li>
                                    <li><img src="{{asset('media/IRAP.png')}}" alt=""></li>
                                    <li><img src="{{asset('media/homeback1.jpg')}}"
                                            alt=""></li>
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

                    <div class="d-block  " style="color: #212B59">
                        <a class="btn text-white w-100 ml-4 mt-4 mb-4 " style=" background-color: #EE7548 ;">AJOUTER AU
                            CHARIOT</a>
                    </div>



                </div>
            </div>
        </div>
