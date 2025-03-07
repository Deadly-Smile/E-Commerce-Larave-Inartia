<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentFactory> */
    use HasFactory;
    protected $fillable = ['order_id', 'amount', 'currency', 'status', 'payment_method', 'transaction_id', 'payment_details'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
