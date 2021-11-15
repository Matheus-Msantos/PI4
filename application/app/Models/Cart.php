<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id', 'quantity'];

    public function product() {
        return Product::where('id', '=', $this->product_id)->first();
    }

    public function products() {
        return $this->hasMany(Product::class);
    }

    public static function count() {
        return Cart::where('id','=', Auth()->user()->id)->count();
        $total = 0;
        foreach($cart as $item) {
            $total += $item->quantity;
        }

        return $total;
    }

    public static function totalValue() {
        $cart = Cart::where('id','=', Auth()->user()->id)->get();
        $total = 0;
        foreach($cart as $item) {
            $total += $item->product()->price * $item->quantity;
        }

        return $total;
    }
}
