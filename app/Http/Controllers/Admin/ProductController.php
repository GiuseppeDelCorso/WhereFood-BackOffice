<?php

namespace App\Http\Controllers\Admin; // era "App\Http\Controllers"
use App\Http\Controllers\Controller; // Controller di base da importare

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loggeduser = Auth::user()->id;
        $restaurant_id = DB::table('restaurants')->where('user_id', $loggeduser)->value('id');
        $products = Product::where('restaurant_id', $restaurant_id)->get();
        $categories = Category::all();
        return view("admin.products.index", compact("categories", "products"));
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
        $percorso = Storage::disk("public")->put('/img/products', $request['image']);
        $validated["image"] = $percorso;

        $loggeduser = Auth::user()->id;
        $newproduct = new Product();
        $newproduct->restaurant_id = DB::table('restaurants')->where('user_id', $loggeduser)->value('id');
        $newproduct->visibility = $request->has('visibility');
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
        $loggeduser = Auth::user()->id;
        $restaurant = DB::table('restaurants')->where('user_id', $loggeduser)->value('id');
        $user_products = Product::where("restaurant_id", $restaurant)->get();
        $products = Product::select("id")->where("restaurant_id", $restaurant)->first();
        if (!$user_products->contains($product)) {
            return view("errors.product_error");
        }
        $types = Type::all();
        return view("admin.products.edit", compact("types", "product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {

        $dati_validati = $request->validated();


        if ($request->hasFile("image")) {

            if ($product->image) {

                Storage::disk("public")->delete($product->image);
            }
            $percorso = Storage::disk("public")->put('/img/products', $request['image']);
            $dati_validati["image"] = $percorso;
        }

        if ($request->type) {
            $product->type()->sync($request->type);
        }

        $product->visibility = $request->has('visibility');

        $product->update($dati_validati);


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
