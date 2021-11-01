@extends('master')
@section("content")
<div class="container p-3 my-3 bg-white text-black">
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <center>
            <h4><p style="color:white">M Y - O R D E R S </h4></center><br><br>
            @foreach($orders as $item)
            <div class=" row searched-item cart-list-divider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-8">
                      <h2><p style="color:white">Name : {{$item->name}}</h2>
                      <h5><p style="color:white">Delivery Status : {{$item->status}}</h5>
                      <h5><p style="color:white">Payment Status : {{$item->payment_status}}</h5>
                      <h5><p style="color:white">Payment Method : {{$item->payment_method}}</h5>
             </div>
            
            </div>
            @endforeach
          </div>

     </div>
</div>
</div>
@endsection 