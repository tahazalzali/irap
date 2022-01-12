<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Irap</title>
    {{-- Bootstrap --}}
    @section('css')
    @endsection


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />




</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="{{ route('home') }}"> <img src="{{ asset('media/products/Group 94.png') }}"
                    style="max-height: 75px; max-width: 50px;" class="navbar-brand w-100 img-thumbnai img-fluid "> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link  {{ request()->routeIs('quisommes') ? 'active' : '' }}" aria-current="page"
                            href="{{ route('quisommes') }}">
                            <span
                                style="{{ request()->routeIs('quisommes')
                                    ? ' color: #EE7548;
                                                                                                                                                                                        border-bottom: solid 3px;'
                                    : '' }}">Qui
                                Sommes - Nous</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ request()->routeIs('lnstitut') ? 'active' : '' }}  "
                            href={{ route('lnstitut') }}><span
                                style="{{ request()->routeIs('lnstitut')
                                    ? ' color: #82C1EB;
                                                                                                                                                                                        border-bottom: solid 3px;'
                                    : '' }}">
                                L'lnstitut</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ request()->routeIs('rayonnement') ? 'active' : '' }} "
                            href={{ route('rayonnement') }}><span
                                style="{{ request()->routeIs('rayonnement')
                                    ? ' color: #EE7548;
                                                                                                                                                                                        border-bottom: solid 3px;'
                                    : '' }}">
                                Rayonnement</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ request()->routeIs('products') ? 'active' : '' }}"
                            href={{ route('products') }}>
                            <span
                                style="{{ request()->routeIs('products')
                                    ? ' color: #EE7548;
                                                                                                                                                                                        border-bottom: solid 3px;'
                                    : '' }}">
                                Produits</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ request()->routeIs('blog') ? 'active' : '' }}"
                            href={{ route('blog') }}>
                            <span
                                style="{{ request()->routeIs('blog')
                                    ? ' color: #82C1EB;
                                                                                                                                                                                        border-bottom: solid 3px;'
                                    : '' }}">
                                Blog</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ request()->routeIs('contact.index') ? 'active' : '' }}"
                            href={{ route('contact.index') }}>
                            <span
                                style="{{ request()->routeIs('contact.index')
                                    ? ' color: #EE7548;
                                                                                                                                                                                        border-bottom: solid 3px;'
                                    : '' }}">
                                Contact</span></a>
                    </li>

                </ul>
                {{-- <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
                <form class="input-group rounded d-flex" method="GET"  style="max-width: 180px">

                    <span class="input-group-text border-0" id="search-addon">
                        <button style="border:none"><i class="fas fa-search"></i></button>
                    </span>
                    <input type="submit" id="sbbtn" />
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" />

                </form>
                <style>
                    .form-control:focus {
                        border-color: #EE7548;
                        ;
                        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6);
                    }
                    #sbbtn{display:none;}

                </style>
                {{-- right elements --}}
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <ul class="navbar-nav d-flex flex-row">
                            <!-- Icons -->
                            <li class="nav-item me-3 me-lg-0">
                                <a class="nav-link" href="#">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Logout</a>

                                </div>

                            </li>


                        </ul>
                    </div>
                </nav>
                {{-- DONATE route --}}
                <a href="{{ route('donate.index') }}" style="color: white; background-color: #EE7548;"
                    class="btn  {{ request()->routeIs('donate.index') ? 'd-none' : '' }} ">Donation </a>

            </div>
        </div>
    </nav>

</header>

<body style="background-color:white; margin-left: 0 !important;margin-right: 0 !important;">
