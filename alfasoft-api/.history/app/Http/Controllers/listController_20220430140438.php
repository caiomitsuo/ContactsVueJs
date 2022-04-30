<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listController extends Controller
{
    public function listagem(Request $request)
    {
        $ListUser = ListUser::all();

        return response()->json($ListUser);
    }

    public function adicionar(Request $request){
        $newUser = new ListUser();
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->telefone = $request->telefone;
        $newUser->save();

        return response()->json($)
    }
}
