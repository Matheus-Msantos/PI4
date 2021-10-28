<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartsController extends Controller
{
    public function add(Product $product) {
        $item = Cart::where([
            ['product_id', '=', $product->id],
            ['user_id', '=', Auth()->user()->id]
        ])->first();

        if($item) {
            $item->update([
              'quantity' => $item->quantity + 1
            ]);
        } else {
            Cart::create([
                'user_id' => Auth()->user()->id,
                'product_id' => $product->id,
                'quantity' => 1
            ]);
        }



    }

    public function remove(Product $product) {

        $item = Cart::where([
            ['product_id','=',$product->id],
            ['user_id','=',Auth()->user()->id]
        ])->first();

        if($item->quantity > 1) {
            $item->update([
                'quantity' => $item->quantity - 1
            ]);
        }else {
            $item->delete();
        }


    }

    public function index() {
        $cart = Cart::where('user_id','=',Auth()->user()->id)->get();
        return response()->json(Cart::with('product')->get());
    }

    public function payment() {

        //dd(Cart::totalValue());
        //dd(Cart::count());
        return response()->json();
    }
}
