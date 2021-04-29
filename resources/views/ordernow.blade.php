@extends('master')
@section("content")
<div class="container custom-product-order">
        <!-- Indicators -->
        {{-- <div class="col-sm-4">
            <a href="#">Filter</a>
        </div> --}}
        <div class="col-sm-10">
            <table class="table"> 
                <tbody>
                  <tr>
                    <td>Amount</td>
                    <td> {{$total}}</td>
                  </tr>
                  <tr>
                    <td>Taxe</td>
                    <td> 0</td>
                  </tr>
                  <tr>
                    <td>Delivery</td>
                    <td>10</td>
                  </tr>
                  <tr>
                    <td>Total Amount</td>
                    <td>{{$total + 10 }}</td>
                  </tr>
                </tbody>
              </table>
              <div>
                <form action="/orderplace" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea name="address" type="text" placeholder="Enter your adress " class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="pwd">Payment method</label><br><br>
                       <input type="radio" value="cash" name="payment"> <span class="glyphicon glyphicon-globe"> Oneline Payment</span>
                       <input type="radio" value="cash" name="payment"> <span class="glyphicon glyphicon-credit-card"> Credit Cart</span>
                       <input type="radio" value="cash" name="payment"> <span class="glyphicon glyphicon-import"> Payment on Delivery</span><br><br>
                    </div>
                    <button type="submit" class="btn btn-success">Order Now</button>
                  </form>
              </div>
        </div>

</div>
@endsection