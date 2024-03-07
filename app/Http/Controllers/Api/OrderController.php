<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string',
            'customer_surname' => 'required|string',
            'customer_address' => 'required|string',
            'customer_number' => 'required|string',
            'total_order' => 'required|numeric|between:0,99.99',
            'state_payment' => 'boolean',
            'products' => 'required|array',
            'products.*.id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
        ]);

        $order = Order::create([
            'customer_name' => $request->input('customer_name'),
            'customer_surname' => $request->input('customer_surname'),
            'customer_address' => $request->input('customer_address'),
            'customer_number' => $request->input('customer_number'),
            'total_order' => $request->input('total_order'),
            'state_payment' => $request->input('state_payment'),
        ]);

        foreach ($request->input('products') as $product) {
            $order->products()->attach($product['id'], ['quantity' => $product['quantity']]);
        }

        return response()->json(['message' => 'Order created successfully', 'order' => $order], 201);
    }
}
