@extends('master')
@section("content")
<body>
<div class="container p-3 my-3 bg-light text-black">
  <div class="outer_box">
      <div class="content">
        <p>Welcome to <a href="">Academic Projects</a>. "Academic Projects" is one of the largest student's portal for projects. Academic Project is a web student portal for the IT and management to complete their Graduate, Post Graduate Level projects. Academic Project facilitates student to complete their final year project, mini projects or major projects in a minimum amount. We are the team of various technology experts who help student to develop their projects code, synopsis, ER-Diagram, DFD and documentation of the project.</p>
      </div>
    </div>
      <div class="Container-md">
        <div class="trending-wrapper">
          <center>
          <h2>TRENDING PROJECTS</h2>
           <br><br>
           @foreach($projects as $item)
            <div class="trending-item">
              <div class="container">
                <a href="detail/{{$item['id']}}">
                <img class="trending-image" src="{{$item['gallery']}}" alt="Chania">
                <br><br>
                <div class="container-divi">
                  <h3>Name - {{$item['name']}}</h3></a>
                  <br>
                  <h3>Price - Rs {{$item['price']}}</h3>
                  <h3>Category - {{$item['category']}}</h3>
                  <h3>Description - {{$item['description']}}</h3>
                </div>
              </div>
            </div>
            @endforeach
        </div>
      </div>

<center>
<span>
    {{$projects->links()}}
</span>
</body>
@endsection