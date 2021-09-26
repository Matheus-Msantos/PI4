<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{



    function store(Request $request){
        $request->validate([
            'email' => 'required|email|unique:users',
            'name'=> 'required|max:255',
            'password' => 'required|min:8',
            'device_name' => 'required'
        ]);

        $user = User::create($request->all ());

        return response()->json( [
            'user'=> $user,
            'token'=> $user->createToken ($request->device_name)-> plainTextToken

        ]);
    }    

    /* --- function update (User $user, Request $request){
        $request->validate([
            'email' => 'required|email',
            'name'=> 'required|max:255',
            'password' => 'required|min:8',
        ]);

        $user->update($request)
     --*/


    function login(Request $request){
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'device_name' => 'required'
        ]);

       $user = User::where ('email', $request->email) -> first();


       //Dados inválidos
       if(!$user || !Hash::check ($request->password, $user->password)){
           return response()->json([
               'error'=> 'Credenciais invalidas'
           ]);
       }

       return response()->json( [
            'user'=> $user,
            'token'=> $user->createToken ($request->device_name)-> plainTextToken
        ]);
    
    }
}
