@extends('master')

@section('content')
    <div class="container my-5 py-5" style="min-height: 100vh">
        <div class="row">
            <div class="col-md-6">
                <img class="detail-img" src="{{$product['gallery']}}">
            </div>
            <div class="col-md-6">
                <a href="/">Go Back</a>
                <h2 class="my-3">{{$product['name']}}</h2>
                <h4 class="my-3">Price: {{$product['price']}}</h4>
                <h3 class="my-3">Description: {{$product['description']}}</h3>
                <h3 class="my-3">Category: {{$product['category']}}</h3>

                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                    <button class="btn btn-primary">Add To Cart</button>
                </form>
                <a href="" class="btn btn-success my-3">Buy Now</a>
            </div>
        </div>
    </div>
@endsection
