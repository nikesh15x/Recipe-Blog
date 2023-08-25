@php
use App\Models\Chef;
@endphp
@extends('layout.app')

@section('content')
<script>
    $("document").ready(function(){
    setTimeout(function(){
        $("#message_id").remove();
    }, 2000 );
});
</script>
    <br>
    <div class="row">
        <div class="col-lg-11">
            <center>
                <h1 style="font-family:'Caveat', cursive;">Add New Chef</h2>
            </center>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('chef') }}"> Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger" id="message_id">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('chef.store') }}" method="POST">
        @csrf
        <div class="form-group">
            Name:
            <input type="text" class="form-control" placeholder="Chef's Name" name="name"><br>
        </div>
        <div class="form-group">
            Speciality:
            <input type="text" class="form-control" placeholder="Chef's Speciality" name="speciality"><br>
        </div>
        <div class="form-group">
            Age:
            <input type="text" class="form-control" placeholder="Chef's Age" name="age"><br>
        </div>
        <div class="form-group">
            Country:
            <input type="text" class="form-control" placeholder="Enter Country Name" name="country"><br>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary"><br>
    </form>
@endsection
