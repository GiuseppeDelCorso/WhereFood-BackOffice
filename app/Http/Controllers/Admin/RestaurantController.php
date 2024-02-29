<?php

namespace App\Http\Controllers\Admin; // era "App\Http\Controllers"
use App\Http\Controllers\Controller; // Controller di base da importare

use App\Models\Restaurant;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $loggeduser = Auth::user()->id;
        $restaurant = Restaurant::where('user_id', $loggeduser)->first(); //con "first" evitiamo di passare alla vista una collection
        return view('admin.restaurant.index', compact('restaurant', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRestaurantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        $dati_validati = $request->validated();

        $percorso = Storage::disk("public")->put('/img/restaurants', $request['image']);
        $dati_validati["image"] = $percorso;

        $restaurant->update($dati_validati);    //update con idati validati dalla request
        if ($request->categories) {                        //per l'update delle categories sincronizzo la tabella pivot con le categories provenienti dalla request
            $restaurant->categories()->sync($request->categories);
        }
        return redirect()->route('admin.restaurants.index', $restaurant->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
