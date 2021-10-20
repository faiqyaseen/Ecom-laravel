@extends('master')

@section('content')
 
 <div class="container my-5 py-5" style="min-height: 100vh">
    <div class="row">
        <h3>
            My Orders
         </h3>
         <hr>
    </div>
     <div class="row">
            @foreach ($orders as $item)
                <div class="col-md-6 my-4">
                    <a href="detail/{{$item->id}}">
                        <img src="{{$item->gallery}}" class="" style="width: 150px; height: 150px;" alt="..." />
                    </a>
                </div>
                <div class="col-md-6 my-4">
                    <a href="detail/{{$item->id}}">
                        <div class="">
                        <h4 class="text-dark">Name: {{$item->name}}</h4>
                        <h5 class="text-dark">Delivery Status: {{$item->status}}</h5>
                        <h5 class="text-dark">Adress: {{$item->address}}</h5>
                        <h5 class="text-dark">Payment Method: {{$item->payment_method}}</h5>
                        <h5 class="text-dark">Payment Status: {{$item->payment_status}}</h5>
                        </div>
                    </a>
                </div>
                <hr>
            @endforeach
        </div>
        </div>
     </div>
 </div>
@endsection
