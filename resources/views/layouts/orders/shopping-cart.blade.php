@extends('layouts.index')
@section('title', 'Karta produktowa')
@section('content')
    <div class="mt-3 mh-100">
        <div class="row">
            @if (Session::has('cart'))
                <div class="col-12">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <h5>Nazwa</h5>
                                </div>
                                <div class="col-12 col-lg-2">
                                    <h5>Cena</h5>
                                </div>
                                <div class="col-12 col-lg-2">
                                    <h5>Ilość</h5>
                                </div>
                            </div>
                        </li>
                        @foreach($products as $product)
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <strong>{{ $product['item']['name'] }}</strong>
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <span class="label label-success">{{ number_format($product['price'], 2,',', ' ') }} zł</span>
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <span class="badge">{{ $product['qty']  }}</span>
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <a class="btn btn-primary mb-1" href="/reduce-one/{{ $product['item']['id'] }}">Odejmij sztukę</a>
                                        <a  class="btn btn-danger" href="/reduce-all/{{ $product['item']['id'] }}">Usuń wszystko</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 my-4">
                    <h5>Cena całkowita: {{  number_format($totalPrice, 2,',', ' ') }} zł</h5>
                </div>
            @else
                nie ma nic w koszyku
            @endif
        </div>
    </div>
@endsection