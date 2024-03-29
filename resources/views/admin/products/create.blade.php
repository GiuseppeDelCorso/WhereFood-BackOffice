@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <h2>Nuovo Prodotto</h2>
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
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nome (*)</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Immagine del prodotto</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                        name="image" placeholder="Inserisci l'immagine del prodotto" value="{{ old('image') }}">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                {{--            <div class="mb-3">
                    <label for="ingredients" class="form-label">Ingredienti</label>
                    <input type="text" class="form-control @error('ingredients') is-invalid @enderror" id="ingredients"
                        name="ingredients" value="{{ old('ingredients') }}">
                    @error('ingredients')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
 --}}
                {{-- Ingredienti FATTO CON TEXTAREA --}}
                <div class="mb-3">
                    <div class="form-floating">
                        <textarea class="form-control @error('ingredients') is-invalid @enderror" id="ingredients" name="ingredients"
                            value="" placeholder="Leave a comment here" id="ingredients" style="height: 100px">{{ old('ingredients') }}</textarea>
                        <label for="ingredients">Ingredienti</label>
                    </div>
                </div>

                {{--          <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                        name="description" value="{{ old('description') }}">
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div> --}}

                {{-- Descrizione FATTO CON TEXTAREA --}}
                <div class="mb-3">
                    <div class="form-floating">
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                            value="" placeholder="Leave a comment here" id="description" style="height: 100px">{{ old('description') }}</textarea>
                        <label for="description">Descrizione</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="type_id" class="form-label">Tipo di prodotto(*)</label>
                    <select name="type_id" id="" class="form-select">
                        <option value="">Nessun tipo</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo (*)</label>
                    <input type="number" min="0.00" max="10000.00" step="0.01"
                        class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                        value="{{ old('price') }}" required>
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="visibility" id="visibility" value="1"
                        {{ old('visibility') ? 'checked' : '' }}>
                    <label for="visibility">Visibile</label>
                </div>
                <button type="submit" class="btn btn-primary">Aggiungi</button>
            </form>
        </div>
    </div>
@endsection
