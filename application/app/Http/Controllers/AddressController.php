<?php

namespace App\Http\Controllers;

use App\Models\address;
use Illuminate\Http\Request;

class AddressController extends Controller
{

    public function index()
    {
        return response()->json(Address::all());
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $address = Address::create($request->all());
        return response()->json($address);
    }


    public function show(address $address)
    {
        return response()->json($address);
    }


    public function edit(address $address)
    {
        //
    }


    public function update(Request $request, address $address)
    {
        $address->update($request->all());
        return response()->json($address);
    }

    public function destroy(address $address)
    {
        $address->delete();
        return response()->json($address);
    }
}
