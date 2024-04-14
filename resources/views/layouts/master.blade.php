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
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    
</head>

<body>

    <div class="menu-wrap">
        <input type="checkbox" class="toggler">
        <div class="hamburger"><div></div></div>
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


    @yield('contenido-principal')

    <footer>

    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    @yield('scripts')

    
</body>

</html>
