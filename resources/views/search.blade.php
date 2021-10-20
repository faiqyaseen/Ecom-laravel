@extends('master')

@section('content')
 
 <div class="container my-5 py-5" style="min-height: 100vh">
    <div class="row">
        <h3>
            Result for Products
         </h3>
         <hr>
    </div>
     <div class="row">
         <div class="col-md-4">
             <a href="">Filter</a>
         </div>
         <div class="col-md-8">
             <div class="row">
            @foreach ($products as $item)
                <div class="col-md-6">
                    <a href="detail/{{$item['id']}}">
                        <img src="{{$item['gallery']}}" class="" style="width: 150px; height: 150px;" alt="..." />
                        <div class="">
                        <h4 class="text-dark">{{$item['name']}}</h4>
                        <h5 class="text-dark">{{$item['description']}}</h5>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        </div>
     </div>
 </div>
@endsection
