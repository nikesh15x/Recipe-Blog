@extends('layout.app')

@section('content')
    <script>
        $("document").ready(function() {
            setTimeout(function() {
                $("#message_id").remove();
            }, 2000);
        });

    </script>
    <br>
    <div class="row">
        <div class="col-lg-11">
            <center>
                <h1 style="font-family:'Caveat', cursive;">Recipes by Chef {{ strtoupper($chef->name) }}</h1>
                <hr style="border-top:1px solid rgb(255,0,179)">
            </center>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ route('chef.show',$chef->id) }}">Back</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success" id="message_id">
            <p>{{ $message }}</p>
        </div>
    @endif
    @foreach ($recipes as $recipe)
        <div class="row no-gutters bg-light position-relative">
            <div class="col-md-4 mb-md-0 p-md-4">
                <img src="{{ url('images/chef.jpg') }}" style="height: 300px">
            </div>
            <div class="col-md-6 position-static p-4 pl-md-0">
                <b>
                    <h1 class="mt-0">{{ strtoupper($recipe->food_name) }}</h1>
                </b>
                <p> {{ $recipe->description }}</p>
                <a href="{{ route('recipe.show', $recipe->id) }}" class="btn btn-primary">View Recipe</a>
            </div>
        </div>
        <hr style="border-top:1px solid rgb(255, 0, 191) ">
    @endforeach

@endsection

{{--
<hr style="border-top:1px solid rgb(255, 0, 191) "> --}}
