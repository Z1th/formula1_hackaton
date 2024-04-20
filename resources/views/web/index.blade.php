@extends('layouts.master')

@section('metaSEO')
    <title>Index - F1 App</title>
@endsection

@section('contenido-principal')
    {{-- <h1>Seleccionar piloto:</h1>
<form id="selectForm">
    <select id="driversSelect" name="driver">
        <option value="">Selecciona un piloto...</option>
    </select>
    <button type="submit">Seleccionar</button>
</form>

<div id="driverInfo"></div> 

<h3>Esto es un test de Api</h3>

@foreach ($Drivers as $driver)
    <p>{{ $driver['GivenName'] }} {{$driver['FamilyName']}}</p> --}}

    <section class="banner-one">
        <div id="sliderFormula1" class="carousel slide" data-bs-ride="true"
            style="position: absolute; left: 0; top: 0; width: 100%;">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#sliderFormula1" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#sliderFormula1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#sliderFormula1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#sliderFormula1" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>

            <div class="carousel-inner h-100">
                <div class="carousel-item h-100 active">
                    <img alt="Imagen banner" src={{ asset('assets/images/AT8I0859_2020090634115506.avif') }}
                        class="d-block h-100 w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>2024<br>FORMULA 1</h1>
                        <h2>SELL CANADA GRAND PRIX</h2>
                        <h4>TAKE ADVANTAGE OF EARLY BIRD PRICING</h4>
                        <a href="#" class="btnSlider">Buy Now</a>
                    </div>
                </div>

                <div class="carousel-item h-100">
                    <img alt="Imagen banner" src={{ asset('assets/images/GettyImages-2136974600.avif') }}
                        class="d-block h-100 w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>2024<br>FORMULA 1</h1>
                        <h2>SELL CANADA GRAND PRIX</h2>
                        <h4>TAKE ADVANTAGE OF EARLY BIRD PRICING</h4>
                        <a href="#" class="btnSlider">Buy Now</a>
                    </div>
                </div>

                <div class="carousel-item h-100">
                    <img alt="Imagen banner" src={{ asset('assets/images/leclerc-bianchi-helmet-4.avif') }}
                        class="d-block h-100 w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>2024<br>FORMULA 1</h1>
                        <h2>SELL CANADA GRAND PRIX</h2>
                        <h4>TAKE ADVANTAGE OF EARLY BIRD PRICING</h4>
                        <a href="#" class="btnSlider">Buy Now</a>
                    </div>
                </div>

                <div class="carousel-item h-100">
                    <img alt="Imagen banner" src={{ asset('assets/images/leclerc-bianchi-helmet-5.avif') }}
                        class="d-block h-100 w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>2024<br>FORMULA 1</h1>
                        <h2>SELL CANADA GRAND PRIX</h2>
                        <h4>TAKE ADVANTAGE OF EARLY BIRD PRICING</h4>
                        <a href="#" class="btnSlider">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>



    </section>

    <section class="pretty_cards">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="cards_one bg-red">
                        <h4>SEASON</h4>
                        <a href="#">View More Information</a>
                        <a href="#" class="icon-float"><i class="fa fa-arrow-alt-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cards_one bg-gray">
                        <h4>TEAM</h4>
                        <a href="#">View More Information</a>
                        <a href="#" class="icon-float"><i class="fa fa-arrow-alt-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cards_one bg-black">
                        <h4>DRIVER</h4>
                        <a href="#">View More Information</a>
                        <a href="#" class="icon-float"><i class="fa fa-arrow-alt-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="circuitos">
        <div class="container">
            <div class="circuitos-carousel owl-carousel owl-theme">
                <div class="row">
                    <div class="col-lg-6 text">
                        <span class="nameCircuito">Lenovo Chinese Grand Prix</span>
                        <h4 class="timer">Practice 1: <span class="count">11D:15H:26M</span></h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="contenedorCircuitoImage">
                            <img src="{{ asset('assets/images/circuitos/China_Circuit.avif') }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 text">
                        <span class="nameCircuito">Miami Grand Prix</span>
                        <h4 class="timer">Practice 1: <span class="count">INCOMING</span></h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="contenedorCircuitoImage">
                            <img src="{{ asset('assets/images/circuitos/Miami_Circuit.avif') }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 text">
                        <span class="nameCircuito">E DELL'EMILIA-ROMAGNA Grand Prix</span>
                        <h4 class="timer">Practice 1: <span class="count">INCOMING</span></h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="contenedorCircuitoImage">
                            <img src="{{ asset('assets/images/circuitos/Imola_Circuit.avif') }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 text">
                        <span class="nameCircuito">Monaco Grand Prix</span>
                        <h4 class="timer">Practice 1: <span class="count">INCOMING</span></h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="contenedorCircuitoImage">
                            <img src="{{ asset('assets/images/circuitos/Monaco_Circuit.png') }}">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">News</h2>
                </div>

                <div class="news-carousel owl-carousel owl-theme">

                    <div class="cards_blog">
                        <div class="top-container">
                            <img src="{{ asset('assets/images/blog/lw-ferrari.jpg') }}">
                        </div>
                        <div class="bottom-container">
                            <h4 class="title">Mercedes To Ferrari</h4>
                            <span class="category">HEADLINES</span>
                            <span class="desc">For the first time in seven year, Lewis Hamilton will no longer lineup in
                                the...</span>
                            <a href="#" class="btn-blog">Show More <i class="fa fa-arrow-right"></i></a>
                        </div>

                    </div>

                    <div class="cards_blog">
                        <div class="top-container">
                            <img src="{{ asset('assets/images/blog/chinese-blog-notforgett.avif') }}">
                        </div>
                        <div class="bottom-container">
                            <h4 class="title">Vuelve GP de China</h4>
                            <span class="category">HEADLINES</span>
                            <span class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, nisi
                                cum...</span>
                            <a href="#" class="btn-blog">Show More <i class="fa fa-arrow-right"></i></a>
                        </div>

                    </div>

                    <div class="cards_blog">
                        <div class="top-container">
                            <img src="{{ asset('assets/images/blog/sainz-ferrari-blog.avif') }}">
                        </div>
                        <div class="bottom-container">
                            <h4 class="title">Sainz has plenty of choice</h4>
                            <span class="category">HEADLINES</span>
                            <span class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, nisi
                                cum...</span>
                            <a href="#" class="btn-blog">Show More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


@endsection

@section('css')
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/peticion_api.js') }}"></script>
    <script>
        $('.circuitos-carousel').owlCarousel({
            loop: true,
            items: 1,
            nav: true,
            dots: false,
        });

        $('.news-carousel').owlCarousel({
            loop: true,
            items: 3,
            margin:20,
            nav: false,
            dots: true,
        });
    </script>
@stop
