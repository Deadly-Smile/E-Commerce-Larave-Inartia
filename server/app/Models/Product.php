<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'image',
        'gallery',
        'price',
        'discount_price',
        'quantity',
        'sku',
        'status',
        'featured',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
