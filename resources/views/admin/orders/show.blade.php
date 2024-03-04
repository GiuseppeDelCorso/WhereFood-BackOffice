@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="mt-3 d-flex justify-content-center">Il Tuo Profilo</h1>
        <div class="row">
            <div class="col-12 mt-2 d-flex justify-content-center ">
                <div class="card" style="width:400px">
                    <img src={{ asset('storage/img/orders/img_avatar1.png') }} alt="custumers_alt">
                    <div class="card-body">
                        <h4 class="card-title">{{ $order->customer_name }}</h4>
                        <p class="card-text">{{ $order->customer_surname }}</p>
                        <p class="card-text"> {{ $order->customer_address }}</p>
                        <p class="card-text"> {{ $order->customer_number }}</p>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Prodotto</th>
                                    <th scope="col">Prezzo Unitario</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->products as $product)
                                    <tr>
                                        <th scope="row">{{ $product->id }}</th>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                    </tr>
                                @endforeach
                                <th class="bg-warning">Totale</th>
                                <td class="bg-warning"></td>
                                <td class="bg-warning">{{ $order->total_order }}</td>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
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
