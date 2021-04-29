@extends('master')
@section("content")
<div class="container custom-product-order">
        <!-- Indicators -->
        {{-- <div class="col-sm-4">
            <a href="#">Filter</a>
        </div> --}}
        <div class="col-sm-10">
            <div class="trainding-wrapper">
                <h3>Result for Search</h3>
                <a href="/ordernow" class="btn btn-success">Order Now</a> <br><br>
                @foreach($products as $item)
                <div class="row search-item cart-list-devider">
                  <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img  class="trainding-image" src="{{$item->gallery}} ">
                        
                      </a>
                  </div>
                  <div class="col-sm-4">
                        <div class="">
                          <h4>{{$item->name}}</h4>
                          <h5>{{$item->description}} </h5>
                      </div>
                    
                  </div>
                  <div class="col-sm-3">
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to cart</a>
                  </div>
                  
                </div>
                @endforeach
          </div>
        </div>
</div>
@endsection