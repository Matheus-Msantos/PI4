<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;
use App\Models\User;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'status', 'cc_number'];

    public function items() {
        return OrderItem::where('order_id','=', $this->id)->get();
    }

    public function user() {
        return User::where('id', '=', $this->user_id)->first();
    }

}
