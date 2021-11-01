@extends('master')
@section("content")

<div class="container p-3 my-3 bg-light text-black">  
    <h2>PROJECT'S DASHBOARD</h2> 
    <br><br>  
        
<table class="table table-bordered">
    <thead class="bg-dark text-white">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Description</th>
        <th>Gallery</th>
      </tr>
    </thead>
    <tbody>
    @if (count($projects)!=0)
    @foreach($projects as $item) 
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->category}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->gallery}}</td>
      </tr>
      @endforeach
    @endif
    </tbody>
  </table>

</div>
@endsection