<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Endereco::all();
        return response()->json($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Endereco::create($request->all());
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Endereco $endereco)
    {
        $endereco->find($endereco);
        return response()->json($endereco, 200);
        // $data = Endereco::find($id);
        // return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Endereco $endereco)
    {
        $endereco->update($request->all());
        return response()->json($endereco, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Endereco $endereco)
    {
        $endereco->delete();
        return response()->json(['message' => 'sucess delete'], 200);
    }
}
