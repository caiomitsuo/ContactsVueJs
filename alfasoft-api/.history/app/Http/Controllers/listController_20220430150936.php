<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listController extends Controller
{
    public function listagem(Request $request)
    {
        $ListUsers = ListUsers::all();

        return response()->json($ListUser);
    }

    public function adicionar(Request $request)
    {
        $newUser = new ListUsers();
        $newUser->nome = $request->name;
        $newUser->email = $request->email;
        $newUser->telefone = $request->telefone;
        $newUser->save();

        return response()->json('success');
    }

    public function editar(ListUsers $user, Request $request)
    {
        return response()->json($user);
    }

    public function update(ListUsers $user, Request $request)
    {
        $user->nome=$request->name;
        $user->email=$request->email;
        $user->telefone=$request->telefone;

        return response()->json('success');
    }
    public function delete(ListUsers $user, Request $request)
    {
            $user->delete();
        return response()->json('success');
    }
}
