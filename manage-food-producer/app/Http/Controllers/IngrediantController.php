<?php

namespace App\Http\Controllers;

use App\Models\Ingrediant;
use App\Http\Requests\StoreIngrediantRequest;
use App\Http\Requests\UpdateIngrediantRequest;

class IngrediantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingredients = Ingrediant::where('is_active', 1)->paginate(2);
        return view('admin.ingredient.index', compact('ingredients'));
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
    public function store(StoreIngrediantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingrediant $ingrediant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ingrediant $ingrediant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIngrediantRequest $request, Ingrediant $ingrediant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingrediant $ingrediant)
    {
        //
    }
}
