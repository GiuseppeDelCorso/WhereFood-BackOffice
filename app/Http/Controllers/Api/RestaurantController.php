<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        $data = [
            "success" => true,
            "results" => $restaurants
        ];
        return response()->json($data);
    }

    public function show($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $data = [
            "success" => true,
            "results" => $restaurant
        ];
        return response()->json($data);
    }

    public function filterByCategory($category_id)
    {
        $restaurants = Restaurant::whereHas('categories', function ($query) use ($category_id) {
            $query->where('category_id', $category_id);
        })->get();

        $data = [
            "success" => true,
            "results" => $restaurants
        ];
        return response()->json($data);
    }
}
