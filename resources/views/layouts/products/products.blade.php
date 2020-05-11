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
                        @if (isset($product->price->id))
                            <div><p>Cena: {{ $product->price->price  }} {{ $product->price->currency  }}</p></div>
                        @endif
                        <a href="/product/{{ $product->id }}" class="btn btn-primary">Pokaż produkt</a>
                        <hr>
                            @if (isset($product->price->id))
                            <a href="btn btn-suc cess" class="btn btn-success">Dodaj produkt do koszyka</a>
                                @else
                                <a href="#" class="btn btn-danger">Produkt chwilowo niedostępny</a>
                            @endif
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