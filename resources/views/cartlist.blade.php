@extends('master')
@section("content")
<div class = "container p-3 my-3 bg-white text-black">
<div class="custom-project">
<div class="col-sm-10">
    <div class="trending-wrapper">
        <center>
        <h2>PROJECTS ADDED TO CART SUCCESSFULLY</h2></center>
        <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
        
        @foreach($projects as $item)
        <div class="row searched-item cart-list-divider">
            <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                </a>
            </div>  
            <div class="col-sm-4">
                <div class="">
                    <h3>{{$item->name}}</h3>
                    <h3>{{$item->description}}</h3>
                </div>
                </a>
            </div> 
            <div class="col-sm-3">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove to Cart</a>
             </div>
        </div>
    @endforeach
    </div>
    <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
</div>
</div>
</div>
@endsection