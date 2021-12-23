@extends('layout.app')
@section('content')
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
        <div class="mt-4 mb-4">
            <a class="btn text-white btn-lg p-2" style=" background-color: #6DB7E8 ;border: 2px solid white; width: 40%;  font-size:0.9em;
            display:block;
            left:-60px;
            margin-top:35px;"><strong>EXPLORER</strong> </a>
        </div>
        <form action="{{route('contact.store')}}" method="post" role="form" class="php-email-form m-auto row">
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
        </form>
    </div>
</div>

@endsection
