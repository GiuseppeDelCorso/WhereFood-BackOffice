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
                    <div>
                        @if ($restaurant->image)
                            <img class="postcard__img img_restaurant mb-1"
                                src="{{ asset('storage/' . $restaurant->image) }}" alt="{{ $restaurant->image }}">
                        @endif
                    </div>
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
                        name="address" value="{{ old('address') ?? $restaurant->address }}" required>
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="PIVA" class="form-label">P.IVA</label>
                    <input type="text" maxlength="11" class="form-control @error('PIVA') is-invalid @enderror"
                        id="PIVA" name="PIVA" value="{{ old('PIVA') ?? $restaurant->PIVA }}" required>
                    @error('PIVA')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- CATEGORIE CON MULTISELECT --}}
                {{-- <div class="mb-3">
                    <label for="tag" class="form-label">Categorie(*)</label>
                    <select class="form-select" name="categories[]" id="tags" multiple>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $restaurant->categories->contains($category->id) ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div> --}}

                {{-- CATEGORIE CON CHECKBOX --}}
                {{-- @foreach ($categories as $category)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $category->id }}"
                            {{ $restaurant->categories->contains($category->id) ? 'checked' : '' }} name="categories[]"
                            id="tag_{{ $category->id }}">
                        <label class="form-check-label" for="tag_{{ $category->id }}">
                            {{ $category->name }}
                        </label>
                    </div>
                @endforeach --}}

                {{-- CATEGORIE CON CHECKBOX STILIZZATA --}}
                <div class="mb-3">
                    <label for="categories" class="form-label">Categorie(*)</label>
                    <div>
                        @foreach ($categories as $category)
                            <div class="btn-group mb-1" role="group" aria-label="Basic checkbox toggle button group">
                                <input type="checkbox" class="btn-check" id="category_{{ $category->id }}"
                                    autocomplete="on" value="{{ $category->id }}"
                                    {{ $restaurant->categories->contains($category->id) ? 'checked' : '' }}
                                    name="categories[]">
                                <label class="btnCategory"
                                    for="category_{{ $category->id }}">{{ $category->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Button Aggiungi/Modifica ristorante con modal  -->
                <button type="button" class="btnConfirm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    {{ $restaurant->name ? 'Modifica Ristorante' : 'Aggiungi Ristorante' }}
                </button>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Vuoi
                                    {{ $restaurant->name ? 'modificare' : 'salvare' }} i dati?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Esci</button>
                                <button type="submit" class="btn btn-primary">Salva</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

<style>

    main{
        background-color: #000000;
    }
    input{
        background: transparent !important;
        color: white !important;
    }
    .btnConfirm {
    background-color: rgb(71, 71, 71);
    color: white;
    border-radius: 7px;
    padding: 5px;
    }
    .btnConfirm:hover{

        background-color: rgb(161, 159, 159);
    }
    .btnCategory {
    background-color: rgb(71, 71, 71);
    color: white;
    border: 2px solid #a2ff64;
    border-radius: 7px;
    padding: 5px;
    }
    .btn-Click {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none;
}
.btn-check:checked + .btnCategory, :not(.btn-check) + .btn:active, .btn:first-child:active, .btn.active, .btn.show {
    color: rgb(56, 56, 56) !important;
    background-color: #a2ff64;
    border-color: var(--bs-btn-active-border-color);
    border-style: none;
    padding: 7px;
}
    .img_restaurant {
        width: 50px;
    }
    .form-label{
        color: rgb(194, 191, 191) !important;
    }
</style>
