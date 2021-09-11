<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Address;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return view('product.index')->with('products', Product::all());

        //return response()->json(Product::all());
    }

    public function create()
    {
        return view('product.create')->with(['categories' => Category::all(), 'addresses' => Address::all()]);
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        session()->flash('success', 'Evento cadastrado com sucesso!');
        return redirect(Route('product.index'));

        //$product = Product::create($request->all());
        //return response()->json($product);
    }


    public function show(Product $product)
    {
        return response()->json($product);
    }


    public function edit(Product $product)
    {
        return view('product.edit')->with(['product' => $product, 'categories' => Category::all(), 'addresses' => Address::all()]);
    }


    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        session()->flash('success', 'Evento atualizado com sucesso!');
        return redirect(Route('product.index'));

        //$product->update($request->all());
        //return response()->json($product);
    }


    public function destroy(Product $product)
    {
        $product->delete();
        session()->flash('success', 'Evento deletado com sucesso!');
        return redirect(Route('product.index'));

        // $product->delete();
        //return response()->json($product);
    }
}
