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

            {{-- Crea tabella per prodotti --}}
            <table class="table table-stripied">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cognome</th>
                        <th scope="col">Indirizzo</th>
                        <th scope="col">Numero</th>
                        <th scope="col">Prezzo Totale</th>
                        <th scope="col">Stato del Pagamento: </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <th scope="row">{{ $order->id }}</th>
                            <td>{{ $order->customer_name }}</td>
                            <td>{{ $order->customer_surname }}</td>
                            <td>{{ $order->customer_address }}</td>
                            <td>{{ $order->customer_number }}</td>
                            <td>{{ $order->total_order }}</td>
                            <td>{{ $order->state_payment }}</td>
                            <td><button class="btn btn-warning">Dettagli</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

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
