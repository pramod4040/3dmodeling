<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function productdocuments()
    {
      return $this->hasMany(Productdocuments::class);
    }

    public function category()
    {
      return $this->belongsTo('App\Models\Category','category_id');
    }

    public function scopeGetrelated($query, $id)
    {
      return $query->where('id', '!=', $id)->inRandomOrder()->take(4);
    }
}
