@extends('master')

@section('content')
 
 <div class="container my-5 py-5" style="min-height: 100vh">
    <div class="row">
        <h3>
            Result for Products
         </h3>
         <div class="col-md-3 my-4">
             <a href="/ordernow" class="btn btn-success">Order Now</a>
         </div>
         <hr>
    </div>
     <div class="row">
            @foreach ($products as $item)
                <div class="col-md-4 my-4">
                    <a href="detail/{{$item->id}}">
                        <img src="{{$item->gallery}}" class="" style="width: 150px; height: 150px;" alt="..." />
                    </a>
                </div>
                <div class="col-md-4 my-4">
                    <a href="detail/{{$item->id}}">
                        <div class="">
                        <h4 class="text-dark">{{$item->name}}</h4>
                        <h5 class="text-dark">{{$item->description}}</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 my-4">
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove To Cart</a>
                </div>
                <hr>
            @endforeach
            <div class="col-md-3 my-4">
                <a href="/ordernow" class="btn btn-success">Order Now</a>
            </div>
        </div>
        </div>
     </div>
 </div>
@endsection
