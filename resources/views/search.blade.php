@extends('master')
@section("content")
<div class="container p-3 my-3 bg-white text-black">
<div class="custom-product">
     <div class="col-sm-4">
         <a href="#"></a>
     </div>
     <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Result for Projects</h4>
            @foreach($projects as $item)
            <div class="searched-item">
              <a href="detail/{{$item['id']}}">
              <img class="trending-image" src="{{$item['gallery']}}">
              <div class="">
                <h2>{{$item['name']}}</h2></a>
                <h5>{{$item['description']}}</h5>
              </div>
            
            </div>
            @endforeach
          </div>
     </div>
</div>
</div>
@endsection