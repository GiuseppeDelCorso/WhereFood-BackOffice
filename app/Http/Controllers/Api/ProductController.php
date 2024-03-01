<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index($restaurant_id)
    {
        $products = Product::where('restaurant_id', $restaurant_id)->get();
        $data = [
            "success" => true,
            "results" => $products
        ];
        return response()->json($data);
    }

    public function show($restaurant_id, $id)
    {
        $product = Product::where('restaurant_id', $restaurant_id)->findOrFail($id);
        $data = [
            "success" => true,
            "results" => $product
        ];
        return response()->json($data);
    }
}
