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
                <h1 style="font-family:'Caveat', cursive;">Add New Recipe</h2>
                <hr style="border-top:1px solid cyan ">
            </center>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('recipe') }}"> Back</a>
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
    <form action="{{ route('recipe.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <h4><b>Name of the food:</b></h4>
            <input type="text" class="form-control" placeholder="Dish Name" name="food_name"><br>
        </div>
        <div class="form-group">
            <h4><b>Description:</b></h4>
            <textarea  class="form-control" rows="2" placeholder="Food Description" name="description"></textarea><br>
        </div>
        <div class="form-group">
            <h4><b>Procedure:</b></h4> 
            <textarea  class="form-control" rows="5" placeholder="Food Procedure" name="proce_dure"></textarea>
        </div>
        <div class="form-group">
            <h6><b>By Chef:</b></h6> 
            <select name="chef_id" class="form-control">
            @foreach ($chef as $chefs)
                <option value="{{ $chefs->id }}">{{ $chefs->name }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary"><br>
    </form>
@endsection
