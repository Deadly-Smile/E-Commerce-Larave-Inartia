<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    /** @use HasFactory<\Database\Factories\CouponFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id',
        'code',
        'discount_amount',
        'discount_percentage',
        'usage_limit',
        'used_count',
        'start_date',
        'end_date',
        'status',
    ];
}
