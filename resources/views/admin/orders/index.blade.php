@extends('layouts.admin')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-12 mt-2">
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
                                    <td>
                                         <a href="{{ route('admin.orders.show', ['order' => $order->id]) }}" class="btn btn-primary">Dettagli</a>


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
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
