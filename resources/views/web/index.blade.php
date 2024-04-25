@php
    use App\Http\Controllers\Web\FunctionsController;
    $fn = new FunctionsController();
@endphp

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
                    <div class="carousel-caption d-md-block">
                        <h1>2024<br>FORMULA 1</h1>
                        <h2>SELL CANADA GRAND PRIX</h2>
                        <h4>TAKE ADVANTAGE OF EARLY BIRD PRICING</h4>
                        <a href="#" class="btnSlider">Buy Now</a>
                    </div>
                </div>

                <div class="carousel-item h-100">
                    <img alt="Imagen banner" src={{ asset('assets/images/GettyImages-2136974600.avif') }}
                        class="d-block h-100 w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h1>2024<br>FORMULA 1</h1>
                        <h2>SELL CANADA GRAND PRIX</h2>
                        <h4>TAKE ADVANTAGE OF EARLY BIRD PRICING</h4>
                        <a href="#" class="btnSlider">Buy Now</a>
                    </div>
                </div>

                <div class="carousel-item h-100">
                    <img alt="Imagen banner" src={{ asset('assets/images/leclerc-bianchi-helmet-4.avif') }}
                        class="d-block h-100 w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h1>2024<br>FORMULA 1</h1>
                        <h2>SELL CANADA GRAND PRIX</h2>
                        <h4>TAKE ADVANTAGE OF EARLY BIRD PRICING</h4>
                        <a href="#" class="btnSlider">Buy Now</a>
                    </div>
                </div>

                <div class="carousel-item h-100">
                    <img alt="Imagen banner" src={{ asset('assets/images/leclerc-bianchi-helmet-5.avif') }}
                        class="d-block h-100 w-100" alt="...">
                    <div class="carousel-caption d-md-block">
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
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="cards_one bg-red">
                        <h4>SEASON</h4>
                        <a href="#">View More Information</a>
                        <a href="#" class="icon-float"><i class="fa fa-arrow-alt-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="cards_one bg-gray">
                        <h4>TEAM</h4>
                        <a href="#">View More Information</a>
                        <a href="#" class="icon-float"><i class="fa fa-arrow-alt-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
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


                     @php $contador = 0; @endphp

                    @foreach ($articulos as $articulo)
                        @if ($contador < 8)
                            <div class="cards_blog">
                                <div class="top-container">
                                    <img src="{{ $articulo['urlToImage'] }}">
                                </div>
                                <div class="bottom-container">
                                    <h4 class="title">{{ $articulo['title'] }}</h4>
                                    <span class="category">{{ $articulo['source']['name'] }}</span>
                                    <span class="desc">{{ $fn->recortar_cadena($articulo['description'], 77) }}</span>
                                    <a href="#" class="bottom-btn">Show More <i class="fa fa-arrow-right"></i></a>
                                </div>

                            </div>
                        @endif

                     @php $contador++; @endphp
                    @endforeach

                    {{-- <div class="cards_blog">
                        <div class="top-container">
                            <img src="{{ asset('assets/images/blog/lw-ferrari.jpg') }}">
                        </div>
                        <div class="bottom-container">
                            <h4 class="title">Mercedes To Ferrari</h4>
                            <span class="category">HEADLINES</span>
                            <span class="desc">For the first time in seven year, Lewis Hamilton will no longer lineup in
                                the...</span>
                            <a href="#" class="bottom-btn">Show More <i class="fa fa-arrow-right"></i></a>
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
                            <a href="#" class="bottom-btn">Show More <i class="fa fa-arrow-right"></i></a>
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
                            <a href="#" class="bottom-btn">Show More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="cards_blog">
                        <div class="top-container">
                            <img src="{{ asset('assets/images/blog/verstappen-pole-chinesse-gp.avif') }}">
                        </div>
                        <div class="bottom-container">
                            <h4 class="title">Verstappen seals pole position</h4>
                            <span class="category">HEADLINES</span>
                            <span class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, nisi
                                cum...</span>
                            <a href="#" class="bottom-btn">Show More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div> --}}

                </div>

            </div>
        </div>
    </section>

    <section class="standings">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="section-title">2024 DRIVER STANDINGS</h2>
                    <div class="tabla">
                        <table cellpadding="20">
                            <tbody>
                                <tr class="head">
                                    <th>POS</th>
                                    <th>DRIVER</th>
                                    <th>TEAM</th>
                                    <th>POINTS</th>
                                </tr>
                                <tr class="tablerow-body table-gray">
                                    <td class="position"><span>1</span></td>
                                    <td>Max Verstappen</td>
                                    <td class="team">RedBull Racing</td>
                                    <td>110</td>
                                </tr>
                                <tr class="tablerow-body table-dark">
                                    <td class="position"><span>2</span></td>
                                    <td>Sergio Perez</td>
                                    <td class="team">RedBull Racing</td>
                                    <td>85</td>
                                </tr>
                                <tr class="tablerow-body table-gray">
                                    <td class="position"><span>3</span></td>
                                    <td>Charles Leclerc</td>
                                    <td class="team">Ferrari</td>
                                    <td>76</td>
                                </tr>
                                <tr class="tablerow-body table-dark">
                                    <td class="position"><span>4</span></td>
                                    <td>Carlos Sainz</td>
                                    <td class="team">Ferrari</td>
                                    <td>69</td>
                                </tr>
                                <tr class="tablerow-body table-gray">
                                    <td class="position"><span>5</span></td>
                                    <td>Lando Norris</td>
                                    <td class="team">McLaren</td>
                                    <td>58</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- DivTable.com -->
                    </div>
                    <a href="#" class="bottom-btn">View All Standings <i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="section-title">2024 TEAMS STANDINGS</h2>
                    <div class="tabla">
                        <table cellpadding="20">
                            <tbody>
                                <tr class="head">
                                    <th>POS</th>
                                    <th>TEAM</th>
                                    <th>POINTS</th>
                                </tr>
                                <tr class="tablerow-body table-gray">
                                    <td class="position"><span>1</span></td>
                                    <td class="team">RedBull Racing</td>
                                    <td>195</td>
                                </tr>
                                <tr class="tablerow-body table-dark">
                                    <td class="position"><span>2</span></td>
                                    <td class="team">Ferrari</td>
                                    <td>151</td>
                                </tr>
                                <tr class="tablerow-body table-gray">
                                    <td class="position"><span>3</span></td>
                                    <td class="team">McLaren</td>
                                    <td>96</td>
                                </tr>
                                <tr class="tablerow-body table-dark">
                                    <td class="position"><span>4</span></td>
                                    <td class="team">Mercedes</td>
                                    <td>52</td>
                                </tr>
                                <tr class="tablerow-body table-gray">
                                    <td class="position"><span>5</span></td>
                                    <td class="team">Aston Martin</td>
                                    <td>40</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- DivTable.com -->
                    </div>
                    <a href="#" class="bottom-btn">View All Standings <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="promotional">
        <div class="container">
            <div class="col-lg-12 f1-border--three-right f1-border-color--darkPurple banner-container">
                <div class="image-container">
                    <picture>
                        <img src="{{asset('assets/images/Ferrari_cards_background.jpg')}}" alt="">
                    </picture>
                </div>
                <div class="text-container">
                    <div class="text-container">
                        <h2 class="text-heading">Race Highlights: 2024 Chinese Grand Prix</h2>
                        <p class="text-wrap">Watch highlights from the 2024 Formula 1 Chinese Grand Prix.</p>
                        
                            <a class="btn btn--inverted btnUpdate">
                                WATCH NOW <i class="icon icon-play"></i>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}




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
            margin: 20,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1,
                    dots: false,
                },
                480: {
                    items: 2,
                    dots: false,
                },
                768: {
                    items: 3,
                }
            }
        });
    </script>

@stop
