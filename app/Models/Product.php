<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $table='product';
    //define an inverse relationship to the category model

    public function category() : BelongsTo
    {
        return this-> belongsTo(Category::class);
    }
}
