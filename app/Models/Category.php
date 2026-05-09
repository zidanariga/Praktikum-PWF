<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'product_id',
    ];

    /**
     * Relasi ke Product
     * Satu category dimiliki satu product
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}