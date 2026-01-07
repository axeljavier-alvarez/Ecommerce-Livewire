<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Category extends Model
{
    use HasFactory;
    // relacion uno a muchos inversa
    public function family(){
        return $this->belongsTo(Family::class);
    }

    // relacion uno a muchos

    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

}
