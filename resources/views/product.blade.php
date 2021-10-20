@extends('master')

@section('content')
    
  <div class="container-fluid py-5 bg-info" style="">
    <div id="carouselExampleCaptions" class="carousel slide custom-slider bg-danger" data-mdb-ride="carousel">
        <div class="carousel-indicators">

            <?php $i = 0 ?>
            @foreach ($products as $item)
            <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="{{$i}}" class="{{$item['id']==1?'active':''}}" aria-current="true" aria-label="Slide 1"></button>
            <?php $i++ ?>
            @endforeach
          {{-- <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="1" aria-label="Slide 2" ></button>
          <button type="button"data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="2" aria-label="Slide 3" ></button> --}}
        </div>
        
            <div class="carousel-inner">
                
                @foreach ($products as $item)
                
                    <div class="carousel-item {{$item['id']==1?'active':''}}">
                        <a href="detail/{{$item['id']}}">
                            <img src="{{$item['gallery']}}" class="d-block w-100 carousel-img" alt="..." />
                            <div class="carousel-caption d-none d-md-block">
                            <h5>{{$item['name']}}</h5>
                            <p>{{$item['description']}}</p>
                            </div>
                        </a>
                    </div>
                
                @endforeach
        
            </div>
        
        <button
          class="carousel-control-prev"
          type="button"
          data-mdb-target="#carouselExampleCaptions"
          data-mdb-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-mdb-target="#carouselExampleCaptions"
          data-mdb-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>  
 </div>
 <hr>
 <div class="container my-5">
     <div class="row">
         <h3>
             Trending Products
         </h3>
         <hr>
         @foreach ($products as $item)
            <div class="col-md-3">
                <a href="detail/{{$item['id']}}">
                    <img src="{{$item['gallery']}}" class="" style="width: 150px; height: 150px;" alt="..." />
                    <div class="">
                    <h5 class="text-dark">{{$item['name']}}</h5>
                    </div>
                </a>
            </div>
         @endforeach
     </div>
 </div>
@endsection
