<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->hasOne(Category::class,'id','category_id');
        // return $this->hasOne(Category::class,'id','category_id');
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
