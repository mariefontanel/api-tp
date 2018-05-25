<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function show(User $user)
    {
        return $user;
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());

        return response()->json($user, 201);
        //201: Object created. Useful for the store actions.
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return response()->json($user, 200);
        //200: OK. The standard success code and default option.
    }

    public function delete(User $user)
    {
        $user->delete();

        return response()->json(null, 204);
        //204: No content. When an action was executed successfully, but there is no content to return
    }
}
