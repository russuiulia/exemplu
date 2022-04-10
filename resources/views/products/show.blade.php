@extends('products.layout')
  
@section('content')
<br><br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
              <div class="text-center">
                <a class="btn btn-outline-primary" href="{{ route('products.index') }}"> Înapoi</a>
            </div><br><br>
            <div class="text-center">
                <h2>Detaliile produsului</h2>
                <br>
            </div>
          
        </div>
    </div>
   
    <div class="row text-center">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titlu:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Imagine:</strong>
               <p>{{ $product->image }}</p> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descriere:</strong>
                {{ $product->detail }}
            </div>
        </div>
    </div>
@endsection