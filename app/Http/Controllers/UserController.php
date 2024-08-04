<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * Endepoint GET: api/users
     */
    public function index()
    {
        $data = User::all();
        return response()->json($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     * Endepoint POST: api/users
     */
    public function store(Request $request)
    {
        $data = User::create($request->all());
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = User::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
