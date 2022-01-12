@extends('layout.app')
@section('content')
    <div>
        <style>

.hideme {
  display: none;
}
        </style>
        {{-- DIV 1 --}}
        <div class="row container m-auto p-5 m-5 ">



            <div class="col-12 col-sm-6 ">
                <div class="ml-5">
                    <h1><strong>LA LANGUE</strong></h1>
                    <h1>DES SIGNES </h1>
                    <p>
                        Educateurs et enseignants de l'Institut suivent, en
                        l'adaptant, le programme fxé par le Ministère de
                        'Education Nationale, en mettant un accent
                        spécial sur l'éducation vocale et langagière et pour
                        certains l'aide dans la langue des signes.
                        Lapprentissage scolaire se fait avec des approches
                        et des méthodes actives qui ont pour effet de
                        stimuler toutes les potentialités de l'enfant...
                        La méthode Montessori, pour ne citer qu'un
                        exemple parmi beaucoup d'autres est à l'honneur
                        en ce qui concerne l'enseignement des
                    </p>
                </div>
                <div>
                    <a class="btn text-white btn-lg" style=" background-color: #EE7548 ;border: 2px solid white">EXPLORER</a>
                </div>
            </div>
            <div class="col-12 col-sm-6 ">
                <div>
                    <img style="width: 100%" class="img-fluid" src="{{ asset('media/greenGirl.png') }}" alt="">
                </div>
            </div>
        </div>


       {{-- div 2 --}}

        <div class="row container m-auto" >

<div  id="toappend" class="row">

                          <!-- Date Div -->
                          <div class="col-md-4 mt-5 pt-5 mb-2 pb-2">
                            <div class="card card-blog">
                                <div class="card-img " style="text-align: center;">

                                </div>
                                <div class="card-body">
                                    <div class="card-category-box">

                                    </div>
                                    <h3 class="card-title" style="z-index: auto;"></h3>
                                    <p class="card-description">
                                    <h1>Date Title</h1>
                                    </p>
                                          <div class="card-img"><img src="{{asset('media/products/2/image.png')}}" class="w-100" alt=""></div>

                                    <div class="card-body d-flex ">
                                        <div class="post-author  w-100" style="text-align: -webkit-center;">
                                            <div  class="w-75" >
                                                <div style="position: absolute;
                                                width: 100%;
                                                height: auto;
                                                z-index: auto;
                                                margin: auto;
                                                left: 10%; background-color:#F28C5C" alt="" class=" img-fluid w-75">
                                                <h2 class="text-white"  style="
                                                line-height: 2.5">1960</h2>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
            <!-- End Date Div -->



                          <!-- Date Div -->
                          <div class="col-md-4 mt-5 pt-5 mb-2 pb-2">
                            <div class="card card-blog">
                                <div class="card-img " style="text-align: center;">

                                </div>
                                <div class="card-body">
                                    <div class="card-category-box">

                                    </div>
                                    <h3 class="card-title" style="z-index: auto;"></h3>
                                    <p class="card-description">
                                    <h1>Date Title</h1>
                                    </p>
                                          <div class="card-img"><img src="{{asset('media/products/2/image.png')}}" class="w-100" alt=""></div>

                                    <div class="card-body d-flex ">
                                        <div class="post-author  w-100" style="text-align: -webkit-center;">
                                            <div  class="w-75" >
                                                <div style="position: absolute;
                                                width: 100%;
                                                height: auto;
                                                z-index: auto;
                                                margin: auto;
                                                left: 10%; background-color:#F28C5C" alt="" class=" img-fluid w-75">
                                                <h2 class="text-white"  style="
                                                line-height: 2.5">1960</h2>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
            <!-- End Date Div -->




                          <!-- Date Div -->
                          <div class="col-md-4 mt-5 pt-5 mb-2 pb-2">
                            <div class="card card-blog">
                                <div class="card-img " style="text-align: center;">

                                </div>
                                <div class="card-body">
                                    <div class="card-category-box">

                                    </div>
                                    <h3 class="card-title" style="z-index: auto;"></h3>
                                    <p class="card-description">
                                    <h1>Date Title</h1>
                                    </p>
                                          <div class="card-img"><img src="{{asset('media/products/2/image.png')}}" class="w-100" alt=""></div>

                                    <div class="card-body d-flex ">
                                        <div class="post-author  w-100" style="text-align: -webkit-center;">
                                            <div  class="w-75" >
                                                <div style="position: absolute;
                                                width: 100%;
                                                height: auto;
                                                z-index: auto;
                                                margin: auto;
                                                left: 10%; background-color:#F28C5C" alt="" class=" img-fluid w-75">
                                                <h2 class="text-white"  style="
                                                line-height: 2.5">1960</h2>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
            <!-- End Date Div -->


</div>

            <div class="text-center mt-3 mb-3 pt-3 pb-1">
                <a style="background-color: #EE7548; color:white " id="showBtn"  onclick="extraTicketAttachment();" class="btn btn-lg p-3 mt-5">VOIR
                    PLUS DE SIGNE</a>
            </div>
        </div>



    </div>

    <script>
// $('.showBtn').click(function() {
  //$('.hideme').hide();
//   if ($(this).hasClass('active')) {
//     $(this).removeClass('active');
//     $('.hideme').slideUp();
//   } else {
//     $('.hideme').slideUp();
//     $('.showBtn').removeClass('active');
//     $(this).addClass('active');
//     $(this).next().filter('.hideme').slideDown();
//   }
// });
//IMPORTANT Just check the card if working then make it on only one line then paste it below the code 
function extraTicketAttachment(){
  jQuery("#toappend").append('<div class="col-md-4 mt-5 pt-5 mb-2 pb-2"><div class="card card-blog"><div class="card-img " style="text-align: center;"></div><div class="card-body"> <div class="card-category-box"></div> <h3 class="card-title" style="z-index: auto;"></h3><p class="card-description"> <h1>Date Title</h1></p><div class="card-img"><img src="{{asset("media/products/2/image.png")}}" class="w-100" alt=""></div> <div class="card-body d-flex "> <div class="post-author  w-100" style="text-align: -webkit-center;"> <div  class="w-75" ><div style="position: absolute;width: 100%;height: auto;z-index: auto;margin: auto;left: 10%; background-color:#F28C5C" alt="" class=" img-fluid w-75"><h2 class="text-white"  style="line-height: 2.5">1960</h2></div></div></div></div></div></div></div>  <div class="col-md-4 mt-5 pt-5 mb-2 pb-2"><div class="card card-blog"><div class="card-img " style="text-align: center;"></div><div class="card-body"> <div class="card-category-box"></div> <h3 class="card-title" style="z-index: auto;"></h3><p class="card-description"> <h1>Date Title</h1></p><div class="card-img"><img src="{{asset("media/products/2/image.png")}}" class="w-100" alt=""></div> <div class="card-body d-flex "> <div class="post-author  w-100" style="text-align: -webkit-center;"> <div  class="w-75" ><div style="position: absolute;width: 100%;height: auto;z-index: auto;margin: auto;left: 10%; background-color:#F28C5C" alt="" class=" img-fluid w-75"><h2 class="text-white"  style="line-height: 2.5">1960</h2></div></div></div></div></div></div></div>   <div class="col-md-4 mt-5 pt-5 mb-2 pb-2"><div class="card card-blog"><div class="card-img " style="text-align: center;"></div><div class="card-body"> <div class="card-category-box"></div> <h3 class="card-title" style="z-index: auto;"></h3><p class="card-description"> <h1>Date Title</h1></p><div class="card-img"><img src="{{asset("media/products/2/image.png")}}" class="w-100" alt=""></div> <div class="card-body d-flex "> <div class="post-author  w-100" style="text-align: -webkit-center;"> <div  class="w-75" ><div style="position: absolute;width: 100%;height: auto;z-index: auto;margin: auto;left: 10%; background-color:#F28C5C" alt="" class=" img-fluid w-75"><h2 class="text-white"  style="line-height: 2.5">1960</h2></div></div></div></div></div></div></div>  ');
}
    </script>

@endsection
