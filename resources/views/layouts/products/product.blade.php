@extends('layouts.index')
@section('title', 'Produkty')
@section('content')
    <div class="card mt-3">
        <div class="row">
            <div class="col-12">
                <div class="card-header">
                    <h5>{{  $product->name }}</h5>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <img src="/images/no-image-available.jpg" alt="Lorem ipsum" class="img-fluid">
            </div>
            <div class="col-12 col-lg-6">
                <div class="card-body">
                    <h6>Opis</h6>
                    <p>{{ $product->description }}</p>
                    <h6>Aktualny stan:</h6>
                    <hr>
                    <a href="btn btn-success" class="btn btn-success">Dodaj produkt do koszyka</a>
                </div>
            </div>
        </div>
    </div>
@endsection