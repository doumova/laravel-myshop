@extends('master')
@section("content")
<div class="container custom-product">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
         @foreach ($products as $item)
         <div class="item {{$item['id']==1?'active':''}}">
            <a href="detail/{{$item['id']}}">
                <img src="{{$item['gallery']}}" class="slider-img">
                <div class="carousel-caption descrip">
                <h3>{{$item['name']}} </h3>
                <p>{{$item['description']}}</p>
            </div>
            </a>
          </div>
         @endforeach
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      
      
      <div class="container">
          <h3>Trainding Products</h3>
          @foreach($products as $item)
          <div class="col-sm-auto">
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img  class="trainding-image" src="{{$item['gallery']}}">
                <div class="caption">
                  <h3>{{$item['name']}}</h3>
                  <p>{{$item['description']}}</p>
                  <p><a href="detail/{{$item['id']}}" class="btn btn-primary" role="button">
                    <span class="glyphicon glyphicon-eye-open"></span>
                    Details</a>
                    <a href="detail/{{$item['id']}}" class="btn btn-default" role="button">Buy it</a></p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
      </div>
</div>
@endsection