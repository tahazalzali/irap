@extends('layout.app')
@section('content')

    {{-- DIV 1 --}}
    <div class="container">
        <div class="col-sm-6 col-12 m-5 p-5 ">
            <h1>Une tradition:
                Le travail à l’honneur.
                Travailler pour vivre, avec et pour
            </h1>
            <div>
                <h1 style="color: #FFAD3A">
                    la communauté
                </h1>
            </div>

        </div>



        {{-- DIV 2 --}}
        <style>
            .box {
                padding: 5px;
                position: absolute;
                height: 100px;
                width: 100px;
            }

        </style>


        <div class="row container m-auto ">



            <div class="col-12 col-sm-6 text-center" style="display: inline-block; position: relative;">
                <div>
                    <section class="container col-12" style="position: relative; min-height: 300px">

                        <div class="box " style="z-index:0; top:10px; left: 0px; height: 200px;width:300px;">
                            <img src="{{ asset('media/home/Mask Group 1.png') }}" class="w-100" alt="">
                        </div>
                        <div class="box row col-12"
                            style="z-index:1; top:100px; height: 200px;width:250px; left:120px;background-color:#FFAD3A">
                            <div class="col-12">
                                <h1 style="color: #212B59">
                                    “</h1>

                                <p class="text-white">Option de foi, Vie de famille, Service du handicapé, du
                                    marginalisé, du plus démuni, sans aucune discrimination. </p>
                            </div>
                        </div>
                    </section>
                </div>


            </div>
            <div class="col-12 col-sm-6 ">
                <div class="col-sm-6 col-12  " >
                    <h1><strong>L’équipe

                        </strong></h1>
                    <h1> de l’IRAP </h1>
                    <p>Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the
                        1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                        survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised
                        in the 1960s with the release of
                        Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                        Ipsum.
                    </p>
                </div>
                <div class="offset-1">
                    <a class="btn text-white btn-lg"
                        style=" background-color: #EE7548 ;border: 2px solid white">EXPLORER</a>
                </div>
            </div>
        </div>

        {{-- END DIV 2 --}}]
    </div>


@endsection
