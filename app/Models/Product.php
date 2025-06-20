<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'description',
        'image',
        'price',
        'stock',
        'category'
    ];

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/products/' . $this->image) : null;
    }
}
