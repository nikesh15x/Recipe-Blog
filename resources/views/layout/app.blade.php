<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" ></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>MOM RECIPE'S</title>
</head>

<body>
    @include('sweetalert::alert')
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <h2 style="font-family: 'Caveat', cursive;"> EASY COOKING </h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href={{ url('/chef') }}>Our Chefs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/recipe') }}">Our Recipe</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row-fluid">
            @yield('content')
        </div>
    </div>
    <!-- /.container -->
</body>

</html>
