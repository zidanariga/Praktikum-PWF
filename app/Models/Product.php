<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'qty',
        'price',
        'user_id',
    ];

    /**
     * Relasi ke User
     * Satu product dimiliki satu user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke Category
     * Satu product memiliki banyak category
     */
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}