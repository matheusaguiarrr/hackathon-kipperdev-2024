<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Item::all();
        return response()->json($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Item::create($request->all());
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        $item->find($item->chamado_id);
        return response()->json($item, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $item->update($request->all());
        return response()->json($item, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return response()->json(['message' => 'sucess delete'], 200);
    }
}
