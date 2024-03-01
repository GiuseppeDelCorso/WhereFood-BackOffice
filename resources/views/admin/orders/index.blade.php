@extends('layouts.admin')

@section('content')
    {{--     <pre>
        @php
            var_dump($orders[0]->products[0]->name);
        @endphp
    </pre> --}}

    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            {{-- Crea card per prodotti --}}
            @foreach ($orders as $order)
                <div class="col-md-4 my-3">
                    <div class="card bgCard">
                        <div class="bgCard card-header d-flex justify-content-between FontStyleName">
                            Ordine di {{ $order->customer_name }}
                        </div>
                        <div class="card-body">Nome: {{ $order->customer_name }}</div>
                        <div class="card-body">Cognome: {{ $order->customer_surname }}</div>
                        <div class="card-body">Indirizzo: {{ $order->customer_address }}</div>
                        <div class="card-body">Numero: {{ $order->customer_number }} </div>
                        @foreach ($order->products as $product)
                            <div class="card-body">Prodotto: {{ $product->name }} {{ $product->price }}</div>
                        @endforeach
                        <div class="card-body">Prezzo Totale: {{ $order->total_order }} </div>
                        <div class="card-body">Stato del Pagamento: {{ $order->state_payment }} </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

<style>
    .bgCard {
        background-color: rgb(188, 226, 228) !important;
    }

    .FontStyleName {
        font-weight: bold;
    }
</style>
