@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-img">{{ $product->image }}</div>
                        <div class="card-header">{{ $product->name }}</div>
                        <div class="card-subtitle text-muted">{{$product->type ? $product->type->name : "Nessun tipo di prodotto";}}</div>
                        <div class="card-body">Ingredienti: {{ $product->ingredients }}</div>
                        <div class="card-body">Descrizione: {{ $product->description }}</div>
                        <div class="card-body">Prezzo: {{ $product->price }} €</div>
                        <div class="card-body">Visibile: {{ $product->visibility }}</div>
                        <div class="buttons d-flex">
                            <a type="button" class="btn btn-primary" href="{{ route('admin.products.show', $product->id) }}">Dettagli</a>
                            <a type="button" class="btn btn-success" href="{{ route('admin.products.edit', $product->id) }}">Modifica</a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Elimina" class="btn btn-danger">
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection