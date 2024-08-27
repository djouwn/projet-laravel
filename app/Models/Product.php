<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'matricule',
        'price',
        'description',
        'quantity',
        'availablecolor',
        'availablesize',
        'similarproducts',
        'SKU',
        'discount',
        'category_id',
        'gender',
        'age',
        'image',
         'image_add1',
         'image_add2',
         'image_add3',
        'producttype',
    ];

  
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function savings()
    {
        return $this->hasMany(Saving::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function promotions()
    {
        return $this->hasMany(Promotion::class);
    }
    
}
