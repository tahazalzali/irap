<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Irap</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
     crossorigin="anonymous">
     <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <img src="{{asset("media/logo-home (2).png")}}" style="max-height: 50px; max-width: 60px;" class="navbar-brand w-100 img-thumbnai img-fluid " href="#"> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link  {{  request()->routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">
                    <span style="{{request()->routeIs('home')? ' color: #EE7548;
                        border-bottom: solid 3px;' : ''}}">Qui Sommes - Nous</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link  {{  request()->routeIs('lnstitut') ? 'active' : '' }}  " href={{ route('lnstitut'
                ) }}><span style="{{request()->routeIs('lnstitut') ? ' color: #82C1EB;
                        border-bottom: solid 3px;': ''}}" > L'lnstitut</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link  {{  request()->routeIs('rayonnement') ? 'active' : '' }} " href={{route('rayonnement')}}><span style="{{request()->routeIs('rayonnement') ? ' color: #EE7548;
                        border-bottom: solid 3px;': ''}}"> Rayonnement</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link  {{  request()->routeIs('products') ? 'active' : '' }}" href={{route('products')}}>
                     <span style="{{request()->routeIs('products') ? ' color: #EE7548;
                        border-bottom: solid 3px;': ''}}"> Produits</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link  {{  request()->routeIs('blog') ? 'active' : '' }}" href={{route('blog')}}>
                     <span style="{{request()->routeIs('blog') ? ' color: #82C1EB;
                        border-bottom: solid 3px;': ''}}"> Blog</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link  {{  request()->routeIs('contact.index') ? 'active' : '' }}" href={{ route('contact.index') }}>
                     <span style="{{request()->routeIs('contact.index') ? ' color: #EE7548;
                        border-bottom: solid 3px;': ''}}"> Contact</span></a>
              </li>

            </ul>
            {{-- <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
            <i class="fas fa-search p-3"></i>

                <a href="{{ route('donate.index') }}" style="color: white; background-color: #EE7548;" class="btn  {{  request()->routeIs('donate.index') ? 'd-none' : '' }} ">Donation </a>

          </div>
        </div>
      </nav>

</header>
<body>


