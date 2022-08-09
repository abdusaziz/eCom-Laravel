@extends('master')

@section('content')
<div class="container">
    <div class="row p-5">
        <div class="span5 p-3">
            <img src="{{ $data->gallery }}" class="img-polaroid img-thumbnail" style="width:400px; height:400px;" alt="Lenovo Desktop">
        </div>
        <div class="span7 p-3">
            <h2>{{ $data->name }}</h2>
            <h4 class="muted">{{ $data->category }}</h4>
            <p>{{ $data->description }}</p>
            <hr>
            <h3>Price - <del class="text-error">$699</del> {{ $data->price }}</h3>
            <p class="muted">Inclusive of all taxes. Free home delivery.</p>
            <br>
            <p>
                <form action="{{ route('add_to_cart') }}" method="post">
                    @csrf
                    <input type="text" name="product_id" value="{{ $data->id }}">
                    <button class="btn btn-success btn-large">Add to Cart</button>
                </form>                
            </p>
            <p><a href="#" class="btn btn-primary btn-large">Buy Now</a></p>
        </div>
    </div>
</div>
@endsection