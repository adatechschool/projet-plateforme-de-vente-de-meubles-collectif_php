<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        return User::all();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        return User::create($request->all());

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {

        return $user;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {

        $user->update($request->all());
        return $user;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {

        $user->delete();
        return response()->noContent();

    }
}
