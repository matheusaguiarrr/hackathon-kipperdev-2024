<?php

namespace App\Http\Controllers;

use App\Models\Voluntario;
use Illuminate\Http\Request;

class VoluntarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Voluntario::all();
        return response()->json($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Voluntario::create($request->all());
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voluntario $voluntario)
    {
        $voluntario->update($request->all());
        return response()->json($voluntario, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voluntario $voluntario)
    {
        $voluntario->delete();
        return response()->json(['message' => 'sucess delete'], 200);
    }
}
