<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productdocuments extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function product()
    {
      return $this->belongsTo(Product::class);
    }
}
