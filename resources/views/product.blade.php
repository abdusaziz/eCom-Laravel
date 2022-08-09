@extends('master')

@section('content')


    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">

          @for ($i = 0; $i < $products->count(); $i++)
          <li data-target="#demo" data-slide-to="{{ $i }}" {{ $i==0?"class=active":"" }}></li>              
          @endfor          
      </ul>
      
      <div class="carousel-inner bg-info">
          @foreach ($products as $key => $item)
          <div class="container p-3 carousel-item {{ $key == 0?'active':'' }}">
              <a href="detail/{{ $item->id }}">
                <img src="{{ $item['gallery'] }}" class="d-block" style="height:400px;">
                <div class="carousel-caption">
                  <h3>{{ $key }}</h3>
                  <p>Thank you, Chicago!</p>
                </div>   
              </a>
          </div>
          @endforeach          
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>



<section>
  <div class="container pt-3">
    <div class="row">
      <div class="col-md-12">
        <h1>Tranding images</h1>
      </div>
    @foreach ($products as $key => $item)
    <div class="col-md-2 float-left">
      <a href="detail/{{ $item->id }}">
        <img src="{{ $item['gallery'] }}" class="img-thumbnail h-50 p-3" >
        <div class="">
          <h3>{{ $key }}</h3>
          <p>Thank you, Chicago!</p>
        </div> 
      </a>  
      </div>
    @endforeach    
  </div>      
  </div>
</section>

@endsection