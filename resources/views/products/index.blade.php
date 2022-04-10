@extends('products.layout')

@section('content')
<br><br>
<div class="row">
  <br><br>
  <div class="col-lg-12 margin-tb">
    <div class="text-center">
      <h2>CRUD</h2>
    </div>

  </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
<br>
<div class="text-center">
  <a class="btn btn-success" href="{{ route('products.create') }}">Adaugă</a>
</div>
<br>
<div class="container">
  <div class="row">


    @foreach ($products as $product)
    <div class="col-md-4 text-center">

      <div class="card" style="width: 18rem;">
       <img class="card-img-top"src="{{ $product->image }}" alt="">
        <div class="card-body">
          
          <h5 class="card-title">{{ $product->name }}</h5>
          <p class="card-text">{{ $product->detail }}</p>
         
          <form action="{{ route('products.destroy',$product->id) }}" method="POST">
            <a class="btn btn-outline-info" href="{{ route('products.show',$product->id) }}">Arată</a>
            <a class="btn btn-outline-primary" href="{{ route('products.edit',$product->id) }}">Editează</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Șterge</button>
          </form>
        </div>
      </div>
    </div>


    @endforeach
  </div>
</div>
{!! $products->links() !!}

@endsection