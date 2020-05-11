@extends('layouts.index')
@section('title', 'Produkty')
@section('content')
    <div class="row">
        @foreach($products as $product)
            <div class="col-12 col-lg-6 text-center">
                <div class="card mt-3">
                    <div class="card-header">
                        <h5>{{  $product->name }}</h5>
                    </div>
                    <img src="/images/no-image-available.jpg" alt="Lorem ipsum" class="img-fluid">
                    <div class="card-body">
                        <a href="/product/{{ $product->id }}" class="btn btn-primary">Pokaż produkt</a>
                        <hr>
                        <a href="btn btn-success" class="btn btn-success">Dodaj produkt do koszyka</a>
                        <p>aktualne stan: </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="my-4">
        {{ $products->links() }}
    </div>
@endsection