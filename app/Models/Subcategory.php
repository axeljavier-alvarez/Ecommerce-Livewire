<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subcategory extends Model
{
    use HasFactory;

    // relacion uno a muchos inversa
    public function category(){
        return $this->belongsTo(Category::class);
    }

    // relacion uno a muchos
    public function products(){
        return $this->hasMany(Product::class);
    }

}
