<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'type', 'description', 'price', 'qty'
    ];

    protected $hidden = [

    ];


    public function comments(): HasMany
    {
        // return $this->hasMany(ProductGallery::class, 'product_id');
    }



}
