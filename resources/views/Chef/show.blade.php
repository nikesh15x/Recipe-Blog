@extends('layout.master')

@section('content')
    <br>
    <div class="row">
        <div class="w-80 mx-auto">
                <h1 style="font-family:'Caveat', cursive;">DETAILS OF CHEF {{ strtoupper($chef->age) }}</h1>
        </div>
        <div class="w-10">
            <a class="btn btn-primary" href="{{ url('userchef') }}"> Back</a>
        </div>
    </div><br>
    {{-- <div class="">
        <center>

        </center>
    </div> --}}
    <div class="row">
        <div class="w-60 mx-auto">
            <center>
                <div class="card-group row" style="width:20rem">
                    <div class="card">
                        <img class="card-img-top" src="{{ URL('images/chef.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <b>
                                <h2 class="card-title">NAME: {{ strtoupper($chef->name) }}</h2>
                            </b>
                            <b>
                                <p class="card-text">SPECIALITY: {{ strtoupper($chef->speciality) }}</p>
                            </b>
                            <b>
                                <p class="card-text">AGE: {{ strtoupper($chef->age) }} </p>
                            </b>
                            <b>
                                <p class="card-text">COUNTRY: {{ strtoupper($chef->country) }} </p>
                            </b>
                            <a class="btn btn-info m-2" href="{{ route('userrecipe.rec',$chef->id) }}">Show RECIPE'S</a>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>
@endsection
