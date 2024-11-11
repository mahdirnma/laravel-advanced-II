<?php

namespace App\Http\Controllers;

use App\Models\Subcription;
use App\Http\Requests\StoreSubcriptionRequest;
use App\Http\Requests\UpdateSubcriptionRequest;

class SubcriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscriptions = Subcription::where('is_active', 1)->paginate(2);
        return view('admin.subscriptions.index', compact('subscriptions'));
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
    public function store(StoreSubcriptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Subcription $subcription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subcription $subcription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubcriptionRequest $request, Subcription $subcription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcription $subcription)
    {
        //
    }
}
