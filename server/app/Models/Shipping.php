<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    /** @use HasFactory<\Database\Factories\ShippingFactory> */
    use HasFactory;
    protected $fillable = [
        'order_id',
        'user_id',
        'recipient_name',
        'address',
        'city',
        'state',
        'postal_code',
        'country',
        'phone',
        'shipping_status',
        'tracking_number',
        'carrier',
        'shipped_at',
        'delivered_at',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
