<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    // relacion de uno a muchos inversa
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    public function variants() {
        return $this->hasMany(Variant::class);
    }
}
