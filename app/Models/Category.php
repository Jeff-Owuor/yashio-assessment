<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   
   // this function defines the one to many relationship with the products model
   public function products(){
    return this->hasMany(Products::class);
   }

    use HasFactory;
}
