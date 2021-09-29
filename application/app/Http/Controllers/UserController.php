<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function index()
    {
        return view('user.index')->with('users', User::all());
    }


    public function create()
    {
        return view('user.create');
    }


    function store(Request $request){
        $request->validate([
            'email' => 'required|email|unique:users',
            'name'=> 'required|max:255',
            'password' => 'required|min:8',
        ]);

        if($request->image) {
            $image = $request->file('image')->store('/public/user');
            $image = str_replace('public/', 'storage/', $image);
        }else {
            $image  = "storage/imageDefault.jpg";
        }

        if($request->isAdmin) {
            $isAdmin = $request->isAdmin;
        }else {
            $isAdmin = 0;
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'image' => $image,
            'isAdmin' => $isAdmin
        ]);

        return redirect(Route('user.index'));
    }


    function storeApi(Request $request){
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

    public function edit(User $user)
    {
        return view('user.edit')->with('user', $user);
    }


    public function update(Request $request, User $user)
    {
        $user->update([$request->all()]);
        return redirect(Route('user.index'));
    }

    /*
    function update (User $user, Request $request){
        $request->validate([
            'email' => 'required|email',
            'name'=> 'required|max:255',
            'password' => 'required|min:8',
        ]);

        $user->update($request->all());
    }
    */


    public function destroy(User $user)
    {
        $user->delete();
        return redirect(Route('user.index'));
    }


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
