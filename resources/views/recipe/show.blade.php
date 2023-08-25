@extends('layout.app')

@section('content')
    <br>
    <div class="row">
        <div class="w-80 mx-auto">
            <center>
                <h1 style="font-family:'Caveat', cursive;"> {{ strtoupper($recipe->food_name) }}</h1>
            </center>
        </div>
        <div class="w-10">
            <a class="btn btn-primary" href="{{ url('/userrecipe') }}"> Back</a>
        </div>
    </div><br>
    <hr style="border-top:1px solid rgb(255,0,179)">
    <div class="row no-gutters bg-light position-relative">
        <div class="col-md-4 mb-md-0 p-md-4">
            <img src="{{ url('images/chef.jpg') }}" style="height: 200px">
        </div>
        <div class="col-md-6 position-static p-4 pl-md-0">
            <b>
                <h1 class="mt-0">{{ strtoupper($recipe->food_name) }}</h1>
            </b>
            <p> {{ $recipe->description }}</p>
            <p> {{ $recipe->proce_dure }} </p>
        </div>
        <h4> BY CHEF:<b> {{ strtoupper($chef->name) }}</b> </h4 > 
        <div>
            <a href="{{ route('chef.rec',$chef->id) }}" class="btn btn-info">Love the recipe veiw more from the chef</a>
        </div>
        
    </div>
    <hr style="border-top:1px solid rgb(255, 0, 191) ">

@endsection
