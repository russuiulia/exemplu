@extends('products.layout')
  
@section('content')
<br><br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adaugă un nou produs</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-outline-primary" href="{{ route('products.index') }}"> Înapoi</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
    <strong>Opa!</strong> Au intervenit probleme cu input-ul.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('products.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titlul:</strong>
                <input type="text" name="name" class="form-control" placeholder="Titlul">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descriere:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Descriere"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-outline-primary">Adaugă</button>
        </div>
    </div>
   
</form>
@endsection