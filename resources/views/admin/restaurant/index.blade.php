@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
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
            <form action="{{ route('admin.restaurants.update', $restaurant->id) }}" method="POST"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome Ristorante(*)</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ old('name') ?? $restaurant->name }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Immagine del ristorante</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                        name="image" placeholder="Inserisci l'immagine del prodotto"
                        value="{{ old('image') ?? $restaurant->image }}">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Indirizzo</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                        name="address" value="{{ old('address') ?? $restaurant->address }}">
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="PIVA" class="form-label">Piva</label>
                    <input type="text" class="form-control @error('PIVA') is-invalid @enderror" id="PIVA"
                        name="PIVA" value="{{ old('PIVA') ?? $restaurant->PIVA }}">
                    @error('PIVA')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="visibility" id="visibility" value="1"
                        @if ($restaurant->visibility) checked @endif>
                    <label for="visibility">Visibile</label>
                </div>
                <button type="submit" class="btn btn-primary">Aggiungi / Modifica</button>
            </form>
        </div>
    </div>
@endsection
