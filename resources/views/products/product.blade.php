@extends('layout.app')
@section('content')



<div class="row container m-auto ">



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
        <div class="offset-1">
            <input type="number">
            <a class="btn text-white btn-lg" style=" background-color: #EE7548 ;border: 2px solid white">EXPLORER</a>
        </div>
    </div>
</div>

<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script src="bootstrap-input-spinner.js"></script>
<script>
    $("input[type='number']").inputSpinner()
</script>

@endsection
