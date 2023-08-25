{{-- @php
use App\Models\Chef;
@endphp --}}
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
                <h1 style="font-family:'Caveat', cursive;">OUR BEST CHEFS</h1>
            </center>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ route('chef.create') }}">Add</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success" id="message_id">
            <p>{{ $message }}</p>
        </div>
    @endif
    @php
    $count = 1;
    // $chefs = Chef::all();
    @endphp
    <div class="card-group row" style="width:auto">
        @foreach ($chefs as $chef)

            <div class="card m-3 col-md-4">
                <img class="card-img-top" src="images/chef.jpg" alt="Card image cap">
                <div class="card-body">
                    <center>
                        <h5 class="card-title">NAME: {{ strtoupper($chef->name) }}</h5>
                        <b>
                            <p class="card-text">SPECIALITY: {{ strtoupper($chef->speciality) }} </p>
                        </b>

                        <form action="{{ route('chef.destroy', $chef->id) }}" method="POST">
                            <a class="btn btn-info m-2" href="{{ route('chef.show', $chef->id) }}">Know</a>
                            <a class="btn btn-primary m-2" href="{{ route('chef.edit', $chef->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger m-2 delete-confirm">Holiday</button>
                        </form>
                    </center>
                </div>
            </div>
            @php
            if($count == 3){
            echo "</div>";
            echo '<div class="card-group row" style="width:auto"';
            echo "</div>";
            }
            @endphp
            @php $count++;
            @endphp
        @endforeach
    <div class="container d-flex justify-content-center"> 
        {{ $chefs->links() }}       
    </div>
@endsection
