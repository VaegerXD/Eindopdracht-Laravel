@extends('layout')
   
@section('content')

<div class="container">
    
<div class=" row g-3">
    @foreach($products as $product)
        <div class="col-12 col-md-6 col-lg-4 p-3">
            <div class="card">
            <div class="thumbnail">
                <img class="img-fluid  mx-auto" style="width: 400px;"  src="{{ $product->image }}" alt="">
                <div class="caption ml-2 pt-3">
                    <h4>{{ $product->name }}</h4>
                    <p>{{ $product->description }}</p>
                    <div class="dropdown pb-3">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Kies je camera uit
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">  
                    <li><a href="#">{{ $product->serienummer }}</a></li>
                    </ul>
</div>
                    
         
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-primary text-center ml-2"  role="button">+</a> </p>
                </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js">

      gsap.from('caption', { opacity:0, duration: 1, y: -50} )
  </script>
@endsection