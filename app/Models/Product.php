<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->hasOne(Category::class,'id','category_id');
        // return $this->hasOne(Category::class,'id','category_id');
    }
    public function subcategory()
    {
        return $this->hasOne(Subcategory::class,'id','subcategory_id');
        // return $this->hasOne(Category::class,'id','category_id');
    }
    public function subcategories()
{
    return $this->hasMany(Subcategory::class);
}



}
