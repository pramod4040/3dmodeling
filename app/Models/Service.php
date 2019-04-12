<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function scopeGetservice($query, $slug)
    {
      return $query->whereSlug($slug);
    }
}
