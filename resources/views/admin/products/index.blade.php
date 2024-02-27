@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card hc">
                        <div class="card-header d-flex justify-content-between">
                            <h4>{{ $product->name }}</h4>
                            <a type="button" class="btn btn-primary" href="{{ route('admin.products.show', $product->id) }}">Dettagli</a>
                        </div>
                        <div class="card-img">
                            <img src="{{asset("storage/".$product->image)}}" alt="{{ $product->name }}">
                            </div>
                        <div class="card-body text-muted">{{$product->type ? $product->type->name : "Nessun tipo di prodotto";}}</div>
                        <div class="card-body">Ingredienti: {{ $product->ingredients }}</div>
                        <div class="card-body">Descrizione: {{ $product->description }}</div>
                        <div class="card-body">Prezzo: {{ $product->price }} €</div>
                        <div class="card-body">Visibile: {{ $product->visibility }}</div>
                        <div class="buttons d-flex justify-content-between">
                            <div>
                                <a type="button" class="btn btn-success" href="{{ route('admin.products.edit', $product->id) }}">Modifica</a>
                            </div>
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

<style>
    .card{
        padding: 10px;
        margin: 10px;
    }
    .card-img{
        height: 250px;
        width: 200px;
    }
    .card-img img{
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: center
    }
    .hc{
        height: 700px !important;
    }
</style>