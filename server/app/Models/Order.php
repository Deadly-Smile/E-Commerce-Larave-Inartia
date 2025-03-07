<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id',
        'cart_id',
        'total',
        'payment_status',
        'order_status',
        'payment_method',
        'tracking_number',
        'shipping_address',
        'billing_address',
        'notes',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
