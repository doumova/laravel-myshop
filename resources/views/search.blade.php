@extends('master')
@section("content")
<div class="container custom-product">
        <!-- Indicators -->
        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-4">
            
            <div class="trainding-wrapper">
                <h3>Result for Search</h3>
                @foreach($products as $item)
                <div class="search-item">
                  <a href="detail/{{$item['id']}}">
                    <img  class="trainding-image" src="{{$item['gallery']}} ">
                    <div class="">
                      <h4>{{$item['name']}} </h4>
                      <h5>{{$item['description']}} </h5>
      
                  </div>
                  </a>
                </div>
                 
                @endforeach
          </div>
        </div>
</div>
@endsection