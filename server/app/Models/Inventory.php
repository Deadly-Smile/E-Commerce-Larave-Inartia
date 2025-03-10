<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    /** @use HasFactory<\Database\Factories\InventoryFactory> */
    use HasFactory;
    protected $fillable = [
        'product_id',
        'stock',
        'low_stock_threshold',
        'reserved_stock',
        'restock_quantity',
        'status',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
