<?php

namespace App\Http\Controllers\Admin; // era "App\Http\Controllers"
use App\Http\Controllers\Controller; // Controller di base da importare

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Restaurant;
use App\Models\Type;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = Restaurant::all();
        $products = Product::all();
        $categories = Category::all();
        return view("admin.products.index", compact("restaurants", "categories", "products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        return view("admin.products.create", compact("types"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $validated = $request->validated();

        $newproduct = new Product();
        $newproduct->fill($validated);
        $newproduct->save();

        if ($request->type) {
            $newproduct->types()->attach($request->types);
        }

        return redirect()->route("admin.products.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $types = Type::all();
        return view("admin.products.edit", compact("types", "product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $validated = $request->validated();

        $product->fill($validated);
        $product->update();
        if ($request->filled("types")) {
            $validated["types"] = array_filter($validated["types"]) ? $validated["types"] : [];
            $product->types()->sync($validated["types"]);
        }

        // if ($request->tags) {
        //     $event->tags()->attach($request->tags);
        // }

        return redirect()->route("admin.products.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route("admin.products.index");
    }
}
