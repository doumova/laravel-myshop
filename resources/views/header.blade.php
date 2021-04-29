<?php
use App\Http\Controllers\ProductController;
$total =0;
if (Session::has('user')) {
  # code...
  $total =ProductController::cartItem();
}
?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">
          <span class="glyphicon glyphicon-bullhorn"> </span>
          My Shop</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="/">Home</a></li>
          <li><a href="/myorders">Orders</a></li>
        </ul>
        <form action="/search" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text"  name="query" class="form-control search-box" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/cartlist"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Chart({{$total}})</a></li>
            @if (Session::has('user'))
            <li class="dropdown">

              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
                {{Session::get('user')['name']}}
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/logout"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
          
              </ul>
            </li>
            @else 
            <li><a href="/login"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Login</a></li>
            <li><a href="/register"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Register</a></li>

            @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav> 