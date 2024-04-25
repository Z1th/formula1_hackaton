@php
    use App\Http\Controllers\Web\FunctionsController;
    $fn = new FunctionsController();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-control" content="public">
    <meta name="author" content="Z1th">

    <title>Formula 1 - App Demo</title>

    @yield('metaSEO')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">


</head>

<body>

    <div id="navbar">
        <div class="menu-wrap">
            <input type="checkbox" class="toggler">
            <div class="hamburger">
                <div></div>
            </div>
            <div class="menu">
                <div>
                    <div>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Merch</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="logo">
            <img src="{{asset('assets/images/formula1_logo.png')}}">
        </div>
    </div>

    @yield('contenido-principal')

    <div class="container footer">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="#" class="nav-link">
                        <img src="{{ asset('assets/images/formula1_logo.png') }}"> Our Partners <i
                            class="fa fa-chevron-right"></i></a>
                </li>
            </ul>
            <div class="row contenedor-partners">
                <div class="col-2 img-partner">
                    <img src="{{ asset('assets/images/partners/rolex.png') }}" alt="">
                </div>
                <div class="col-2 img-partner">
                    <img src="{{ asset('assets/images/partners/pirelli.png') }}" alt="">
                </div>
                <div class="col-2 img-partner">
                    <img src="{{ asset('assets/images/partners/aramco.png') }}" alt="">
                </div>
                <div class="col-2 img-partner">
                    <img src="{{ asset('assets/images/partners/dhl.png') }}" alt="">
                </div>
                <div class="col-2 img-partner">
                    <img src="{{ asset('assets/images/partners/msc.png') }}" alt="">
                </div>
                <div class="col-2 img-partner">
                    <img src="{{ asset('assets/images/partners/aws-global.png') }}" alt="">
                </div>

                <div class="col-lg-12 copyright_footer">
                    <p class="text-center">© 2024 Desarrollado por <a href="https://www.linkedin.com/in/hermar-lopez/"
                            target="_BLANK">Hermar López</a></p>
                </div>
            </div>

        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @yield('scripts')


</body>

</html>
