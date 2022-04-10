@extends('products.layout')

@section('content')


<style>
  .slider {
    width: 100%;
    text-align: center;
    overflow: hidden;
  }

  .slides {
    display: flex;
    width: 300px;
    font-size: 1pt !important;
    overflow-x: auto;
    scroll-snap-type: x mandatory;



    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;

    /*
  scroll-snap-points-x: repeat(300px);
  scroll-snap-type: mandatory;
  */
  }

  .slides::-webkit-scrollbar {
    width: 10px;
    height: 10px;
  }

  .slides::-webkit-scrollbar-thumb {
    background: black;
    border-radius: 10px;
  }

  .slides::-webkit-scrollbar-track {
    background: transparent;
  }

  .slides>div {
    scroll-snap-align: start;
    flex-shrink: 0;
    width: 300px;
    height: 300px;
    margin-right: 50px;
    border-radius: 10px;
    background: #eee;
    transform-origin: center center;
    transform: scale(1);
    transition: transform 0.5s;
    position: relative;

    display: flex;
    justify-content: center;
    /* align-items: center; */
    /* font-size: 100px; */
  }

  .slides>div:target {
    /*   transform: scale(0.8); */
  }

  img {
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .slider>a {
    display: inline-flex;
    width: 5rem;
    height: 5rem;
    background: white;
    text-decoration: none;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    margin: 0 0 0.5rem 0;
    position: relative;
  }

  .slider>a:active {
    top: 1px;
  }

  .slider>a:focus {
    background: #000;
  }

  @supports (scroll-snap-type) {
    .slider>a {
      display: none;
    }
  }
</style>
<div class="container">

  <div class="jumbotron jumbotron-fluid"
    style="background-image:url('https://www.thoughtco.com/thmb/Y0u9dMhdSXvKQh10yOBoUu-C7vk=/3435x2576/smart/filters:no_upscale()/abstract-paper-flower-pattern-656688606-5acfba2eae9ab80038461ca0.jpg');background-size: cover;">
    <div class="container text-center text-light">
      <h1 class="display-4">WOoooooO</h1>
      <p class="lead">php</p>
    </div>
  </div>


  <div class="slider">
    @foreach ($products as $product)
    <a href="#slide-{{ $product->id }}"><img src="{{ $product->image}}" alt=""></a>
    @endforeach

    <div class="slides" style="margin-left:auto;margin-right:auto">
      @foreach ($products as $product)

      <div id="slide-{{ $product->id }}" class="card" style="width: 18rem;">
        <img class="card-img-top" style="max-height:50%" src="{{ $product->image}}" alt="Card image cap">
        <div class="card-body">
          <p class="card-text" style="padding-top: 140px;font-size:12pt">
            <b>Titlu:</b>{{ $product->name}}
            <br>
            <b>Descriere:</b>{{ $product->detail}}
        </div>
      </div>
      @endforeach

    </div>

  </div>
</div>
<script></script>

{!! $products->links() !!}

@endsection