@extends('layouts.app')

@section('content')
    <div class="py-5 text-center">
        <h2>Bienvenue sur notre catalogue</h2>
        <p class="text-muted">Découvrez notre sélection de laptops disponibles.</p>
        <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">Voir les produits</a>
    </div>
@endsection
