<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
    $total =ProductController::cartItem();
}
?>
<div class="container clear-fix">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="admin">Oops Info</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a></li>
          <li class="nav-item"><a class="nav-link" href="myorders">Orders</a></li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/admin">ADD Project</a>
              <a class="dropdown-item" href="/dashboard">User Dashboard</a>
              <a class="dropdown-item" href="/prdashboard">Project Dashboard</a>
            </div></li>
            <form action="search" method="HEAD" class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" name="query" class="form-control search-box" placeholder="Search">
              </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
          <div class ="nav navbar-nav navbar-right">
            <li><a href="cartlist"><span class="glyphicon glyphicon-shopping-cart"></span> ({{$total}}) </a></li>
              @if(Session::has('user'))
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{Session::get('user')['name']}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/logout">Logout</a>
            </div>
              @else
              <li><a href="/register"><span class="glyphicon glyphicon-user"></span></a></li>
              <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span></a></li>
              @endif
          </div>
        </ul>
      </div>
  </nav>
</div>