<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>MOM RECIPE'S</title>
    <style>
    </style>
</head>

<body>

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
                        <a class="nav-link" href="{{ url('/user') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ url('/userchef') }}>Our Chefs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/userrecipe') }}">Our Recipe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/recipeadd') }}">Add your recipe</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="container">
            <center>
                <h1 style="font-family:'Caveat', cursive;color:blueviolet;"> MAKE COOKING EASY WITH OUR CHEFS RECIPES
                </h1>
                <hr style="border-top:1px solid rgb(255,0,179)">
            </center>
        </div>
        <br>
        <div class="container">
            <div class="card-group">
                <div class="card m-2">
                    <img src="{{ url('images/food/1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card m-2">
                    <img src="{{ url('images/food/2.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.
                        </p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card m-2">
                    <img src="{{ url('images/food/3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal
                            height
                            action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <center>
                <h1 style="font-family:'Caveat', cursive;color:blueviolet;"> Our Chefs </h1>
                <hr style="border-top:1px solid rgb(255,0,179)">
            </center>
        </div>
        <div class="container">
            <div class="card-group">
                <div class="card m-2">
                    <img src="{{ url('images/food/1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card m-2">
                    <img src="{{ url('images/food/2.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.
                        </p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card m-2">
                    <img src="{{ url('images/food/3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal
                            height
                            action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container">
        <div class="row-fluid">
            @yield('content')
        </div>
    </div>
    <!-- /.container -->
</body>

</html>
