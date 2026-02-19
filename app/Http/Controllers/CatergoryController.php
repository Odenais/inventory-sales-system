<?php

namespace App\Http\Controllers;

use App\Models\Catergory;
use Illuminate\Http\Request;

class CatergoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Catergory $catergory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Catergory $catergory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Catergory $catergory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catergory $catergory)
    {
        //
    }
}
