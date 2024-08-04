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
     * Endepoint GET: api/users/{id}
     */
    public function show(string $id)
    {
        $data = User::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     * Endepoint PUT/PATCH: api/users/{user}
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return response()->json($user, 200);
    }

    /**
     * Remove the specified resource from storage.
     * Endepoint DELETE: api/users/{user}
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['message' => 'sucess delete'], 200);
    }
}
