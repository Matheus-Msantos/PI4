<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return view('category.index')->with('categories', Category::all());
        //return response()->json(Category::all());
    }


    public function create()
    {
        return view('category.create');
    }


    public function store(Request $request)
    {
        Category::create($request->all());
        session()->flash('success', 'Categoria cadastrada com sucesso!');
        return redirect(Route('category.index'));
        //$category = Category::create($request->all());
        //return response()->json($category);
    }


    public function show(Category $category)
    {
        return response()->json($category);
    }


    public function edit(Category $category)
    {
        return view('category.edit')->with('category', $category);
    }


    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        session()->flash('success', 'Categoria atualizada com sucesso!');
        return redirect(Route('category.index'));

        //$category->update($request->all());
        //return response()->json($category);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        session()->flash('success', 'Categoria deletada com sucesso!');
        return redirect(Route('category.index'));

        //$category->delete();
        //return response()->json($category);
    }
}
