<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function selectList()
    {
       $clist = Category::all();
       return $clist;
    }

    public function product()
    {
      return $this->hasMany(Product::class,'category_id');
    }

    public function scopeGetproducts($query, $slug)
    {
       $category = $query->whereSlug($slug)->first();
       return $category->product;
    }

}
