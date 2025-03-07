<?php

namespace App\Models;

use Product;
use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CartItem extends Model
{
    /** @use HasFactory<\Database\Factories\CartItemFactory> */
    use HasFactory;
    protected $fillable = ['cart_id', 'product_id', 'quantity', 'price', 'total'];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
