@extends('layouts.app')

@section('content')
    <h2 class="mb-4">Nos Produits</h2>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($products as $product)
            <div class="col">
                <x-product-card :product="$product" />
            </div>
        @endforeach
    </div>
@endsection
