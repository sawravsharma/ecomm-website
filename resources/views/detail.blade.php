@extends('master')
@section("content")
<div class = "container p-3 my-3 bg-white text-black">
    <div class="row">
        <div class="container p-3 my-3 border col-sm-4">
            <img class="detail-img" src="{{$project['gallery']}}" alt="">
        </div>
        <div class ="container p-3 my-3 border col-sm-4">
            <a href="/">Go Back</a>
            <br><br>
        <h2>{{$project['name']}}</h2>
        <h3>Detail: {{$project['details']}}</h3>
        <h4>Description: {{$project['description']}}</h4>
        <br><br>
        
        <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="project_id" value="{{$project['id']}}">
        <button class="btn btn-primary">Add to Cart</button>
        </form>
        <br><br>
        <button class="btn btn-success">Buy now</button>
        <br><br>

    </div> 
  </div>
</div>
@endsection