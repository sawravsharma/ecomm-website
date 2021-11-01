@extends('master')
@section("content")

<div class="container p-3 my-3 bg-light text-black">  
    <h2>ORDER'S DASHBOARD</h2> 
    <br><br>  
        
<table class="table table-bordered">
    <thead class="bg-dark text-white">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Project Id</th>
        <th>User Id</th>
        <th>Status</th>
        <th>Payment Method</th>
        <th>Payment Status</th>
      </tr>
    </thead>
    <tbody>
    @if (count($orders)!=0)
    @foreach($orders as $item) 
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->project_id}}</td>
        <td>{{$item->user_id }}</td>
        <td>{{$item->status}}</td>
        <td>{{$item->payment_method}}</td>
        <td>{{$item->payment_status }}</td>
      </tr>
      @endforeach
    @endif
    </tbody>
  </table>

</div>
@endsection