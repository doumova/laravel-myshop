@extends('master')
@section("content")
<div class="container custom-product-order">
        <div class="col-sm-10">
            <div class="trainding-wrapper">
                <h3>My Orders </h3>
                @foreach($orders as $item)
                <div class="row search-item cart-list-devider">
                  <div class="col-sm-4">
                    <a href="detail/{{$item->id}}">
                        <img  class="trainding-image-myorders" src="{{$item->gallery}}">
                      </a>
                  </div>
                  <div class="col-sm-4">
                        <div class="">
                          <h4> Name : {{$item->name}}</h4>
                          <h5> Delivery Status : {{$item->status}}</h5>
                          <h5> Address : {{$item->address}}</h5>
                          <h5> Payment Status : {{$item->payment_status}}</h5>
                          <h5> Payment Method : {{$item->payment_method}}</h5>
                      </div>
                  </div>
                  {{-- <div class="col-sm-3">
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to cart</a>
                  </div> --}}
                </div>
                @endforeach
          </div>
        </div>
</div>
@endsection