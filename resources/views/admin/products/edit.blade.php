@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <h2>Modifica Prodotto</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row">
            <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nome(*)</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ old('name') ?? $product->name }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Immagine del prodotto</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                        name="image" placeholder="Inserisci l'immagine del prodotto"
                        value="{{ old('image') ?? $product->image }}">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3"> 
                    <label for="ingredients" class="form-label">Ingredienti</label>
                    <div class="form-floating">
                        <textarea type="text" class="form-control @error('ingredients') is-invalid @enderror" id="ingredients"
                            name="ingredients" value="">{{ old('ingredients') ?? $product->ingredients }}</textarea>
                        @error('ingredients')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <div class="form-floating">
                    <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                        name="description" value="">{{ old('description') ?? $product->description }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="type_id" class="form-label">Tipo di prodotto</label>
                    <select name="type_id" value="{{ old('type') ?? $product->description }}" class="form-select">
                        <option value="">Nessun tipo</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}" @if ($type->id == $product->type_id) selected @endif>
                                {{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo (*)</label>
                    <input type="number" type="number" min="0.00" max="10000.00"
                        step="0.01"class="form-control @error('price') is-invalid @enderror" id="price"
                        name="price" value="{{ old('price') ?? $product->price }}" required>
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="visibility" id="visibility" value="1"
                        @if ($product->visibility) checked @endif>

                    <label for="visibility">Visibile</label>
                </div>
                
                <button type="submit" class="btn btn-primary">Aggiungi</button>
                <button type="submit" class="btn btn-outline-primary">
                    <a href="{{ route('admin.products.index') }}">Torna alla lista</a>
                </button>
            </form>
        </div>
    </div>
@endsection
