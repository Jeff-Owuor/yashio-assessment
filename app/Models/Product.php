<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //define an inverse relationship to the category model

    public function category()
    {
        return this-> belongsTo(User::class);
    }
}
