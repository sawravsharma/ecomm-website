@extends('master')
@section("content")

    <center>
<div class="container p-3 my-3 bg-light text-black">  
    <h2>USER'S DASHBOARD</h2> 
    <br><br>  
        
    <table class="table table-bordered">
    <thead class="bg-dark text-white">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    @if (count($users)!=0)
    @foreach($users as $item) 
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
      </tr>
      @endforeach
    @endif
    </tbody>
  </table>

</div>
<br><br>

@endsection
