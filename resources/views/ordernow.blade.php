@extends('master')

@section('content')
 
 <div class="container my-5 py-5" style="min-height: 100vh">
    <table class="table caption-top">
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
            <td>Delivery</td>
            <td>Rs 200</td>
          </tr>
          <tr>
            <td>Total Amount</td>
            <td>Rs {{$total+200}}</td>
          </tr>
        </tbody>
      </table>

      <form action="/orderplace" method="POST">
        @csrf
        <div class="form-outline my-4">
          <textarea class="form-control" name="address" id="form4Example3" rows="4"></textarea>
          <label class="form-label" for="form4Example3">Enter Your Address</label>
        </div>
 
        <h4>Payment Method</h4>
        <div class="form-check m-auto">
            <input
            class="form-check-input"
            type="radio"
            value="online"
            name="payment"
            id=""
            />
            <label class="form-check-label" for=""> Online payment </label>
        </div>

        <div class="form-check m-auto">
            <input
            class="form-check-input"
            type="radio"
            value="debit"
            name="payment"
            id=""
            />
            <label class="form-check-label" for=""> Debit Card </label>
        </div>
        
        <div class="form-check">
            <input
            class="form-check-input"
            type="radio"
            name="payment"
            value="jazz"
            id=""
            checked
            />
            <label class="form-check-label" for=""> Jazz Cash </label>
        </div>
      
        <button type="submit" class="btn btn-primary mb-4">Order Now</button>
      </form>
 </div>
@endsection
