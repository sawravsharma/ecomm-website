@extends('master')
@section("content")
<div class="container">
<div class="custom-product">
     <div class="col-sm-10">
        <table class="table">
         
            <tbody>
              <tr>
                <td>Amount</td>
              <td>Rs {{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>Rs 0</td>
              </tr>
              <tr>
                <td>Total Amount</td>
              <td>Rs {{$total}}</td>
              </tr>
            </tbody>
          </table>
          <div>
          @csrf
            <form action="/orderplace" method="HEAD">
              
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>online payment</span> <br> <br>

                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
              </form>
          </div>
     </div>
</div>
</div>
@endsection 