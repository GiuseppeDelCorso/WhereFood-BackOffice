<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer_name' => 'required|string',
            'customer_surname' => 'required|string',
            'customer_address' => 'required|string',
            'customer_number' => 'required|string',
            'total_order' => 'required|numeric|between:0,99.99',
            'state_payment' => 'boolean',
        ]);

        $order = Order::create($validatedData);

        return response()->json($order, 201);
    }
}
