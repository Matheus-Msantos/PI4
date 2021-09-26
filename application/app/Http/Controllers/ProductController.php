<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;

class ProductController extends Controller
{

    public function index()
    {
        return view('product.index')->with('products', Product::all());
    }


    public function indexApi()
    {
        return response()->json(Product::with('category')->get());
    }


    public function create()
    {
        return view('product.create')->with(['categories' => Category::all(), 'addresses' => Address::all()]);
    }


    public function store(Request $request)
    {
        if($request->image) {
            $image = $request->file('image')->store('product');
            $image = "storage/" . $image;
        }else {
            $image  = "storage/product/imageDefault.jpg";
        }

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'time' => $request->time,
            'date' => $request->date,
            'classification' => $request->classification,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'address_id' => $request->address_id,
            'image' => $image
        ]);
        session()->flash('success', 'Evento cadastrado com sucesso!');
        return redirect(Route('product.index'));


    }


    public function storeApi(Request $request) {
        $product = Product::create($request->all());
        $address = Address::create($request->all());
        return response()->json($product);
    }


    public function show(Product $product)
    {
        return response()->json(Product::with('category')->where('id', $product->id)->get());
    }


    public function edit(Product $product)
    {
        return view('product.edit')->with(['product' => $product, 'categories' => Category::all(), 'addresses' => Address::all()]);
    }


    public function update(Request $request, Product $product)
    {
        if($request->image) {
            $image = $request->file('image')->store('product');
            $image = "storage/" . $image;
            if($product->image != "storage/product/imageDefault.jpg")
                Storage::delete(str_replace('storage/', '',$product->image));
        }else {
            $image = $product->image;
        }

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'time' => $request->time,
            'date' => $request->date,
            'classification' => $request->classification,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'address_id' => $request->address_id,
            'image' => $image
        ]);
        session()->flash('success', 'Evento atualizado com sucesso!');
        return redirect(Route('product.index'));
    }

    public function updateApi(Request $request, Product $product)
    {
        $product->update($request->all());
        return response()->json($product);
    }


    public function destroy(Product $product)
    {
        $product->delete();
        session()->flash('success', 'Evento deletado com sucesso!');
        return redirect(Route('product.index'));
    }


    public function destroyApi(Product $product)
    {
        $product->delete();
        return response()->json($product);
    }
}
