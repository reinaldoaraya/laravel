<?php

namespace App\Http\Controllers;

use App\Models\Prueba;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Prueba::all();
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
        $prueba = Prueba::create($request->all());
        return response()->json($prueba, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Prueba $prueba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prueba $prueba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prueba $prueba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prueba $prueba)
    {
        //
    }
}
