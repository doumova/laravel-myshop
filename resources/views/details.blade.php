@extends('master')
@section("content")

<div class="container details">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$product['gallery']}}" alt="" class="detail-img">
        </div>
        <div class="col-sm-6">
            <button class="btn btn-info"><a href="/">Go Back</a></button>
            <h2> {{$product['name']}} </h2>
            <h3>Price : {{$product['price']}} FCFA </h3>
            <h4>Details : {{$product['description']}} </h4>
            <h4>Categorory : {{$product['category']}} </h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy it now</button>
            <br><br>
        </div>
    </div>
</div>
    
@endsection