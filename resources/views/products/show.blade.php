@extends('layouts.app')

@section('content')
    <a href="{{ route('products.index') }}" class="btn btn-secondary mb-4">&larr; Retour aux produits</a>
    <div class="card shadow-sm" style="max-width: 550px;">
        <img src="{{ asset('images/' . $product['image']) }}" class="card-img-top p-4" style="height: 250px; object-fit: contain">
        <div class="card-body">
            <h3 class="card-title">{{ $product['title'] }}</h3>
            <p class="text-success fw-semibold fs-5">Processeur : {{ $product['price'] }}</p>
            <p class="card-text">{{ $product['description'] }}</p>
        </div>
    </div>
@endsection
