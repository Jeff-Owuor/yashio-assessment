<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $table='category';
   // this function defines the one to many relationship with the products model
   public function products() : HasMany
   {

    return this->hasMany(Product::class);
   }

    use HasFactory;
}
