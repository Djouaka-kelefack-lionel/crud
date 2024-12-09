@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier le Produit</h1>

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                   id="name" name="name" value="{{ old('name', $product->name) }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" 
                      id="description" name="description">{{ old('description', $product->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" 
                   id="price" name="price" value="{{ old('price', $product->price) }}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" class="form-control @error('stock') is-invalid @enderror" 
                   id="stock" name="stock" value="{{ old('stock', $product->stock) }}">
            @error('stock')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mt-3">Mettre à jour</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Retour</a>
    </form>
</div>
@endsection 