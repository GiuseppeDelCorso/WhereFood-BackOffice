@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card bgCard">
                        <div class="card-header d-flex justify-content-between">
                            <h4>{{ $product->name }}</h4>
                        </div>
                        <div class="card-img">
                            <img src="{{asset("storage/".$product->image)}}" alt="{{ $product->name }}">
                        </div>
                        <div class="card-body FontStyleName">{{$product->type ? $product->type->name : "Nessun tipo di prodotto";}}</div>
                        <div class="card-body">Ingredienti: {{ $product->ingredients }}</div>
                        <div class="card-body">Descrizione: {{ $product->description }}</div>
                        <div class="card-body">Prezzo: {{ $product->price }} €</div>
                        <div class="card-body">Visibile:
                            @if($product->visibility == 1)
                                Si
                            @else
                                Nascosto
                            @endif
                        </div>
                        <div class="buttons d-flex justify-content-between">
                            <div>
                                <a type="button" class="btn btn-success" href="{{ route('admin.products.edit', $product->id) }}">Modifica</a>
                            </div>
                            <form id="deleteProductForm{{$product->id}}" action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger deleteProductButton" data-toggle="modal" data-target="#confirmDeleteModal{{$product->id}}">Elimina</button>
                            </form>
                        </div>
                    </div>
                </div>

                
                <div class="modal fade" id="confirmDeleteModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel{{$product->id}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteModalLabel{{$product->id}}">Conferma eliminazione</h5>
                            </div>
                            <div class="modal-body">
                                Vuoi eliminare questo prodotto?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary cancelDeleteButton">Annulla</button>

                                <button type="button" class="btn btn-danger confirmDeleteButton" data-product-id="{{$product->id}}">Elimina</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
    $(document).ready(function() {
        
        $('.deleteProductButton').click(function(event) {
            event.preventDefault(); 
            var productId = $(this).closest('form').attr('id').replace('deleteProductForm', ''); 
            $('#confirmDeleteModal' + productId).modal('show'); 
        });

        
        $('.confirmDeleteButton').click(function(event) {
            var productId = $(this).data('product-id');
            $('#deleteProductForm' + productId).submit(); 
        });

        
        $('.cancelDeleteButton').click(function(event) {
            $(this).closest('.modal').modal('hide'); 
        });
    });
</script>


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
    .bgCard{
        background-color: rgb(188, 226, 228) !important;
    }
    .FontStyleName{
        font-weight: bold;
    }
</style>