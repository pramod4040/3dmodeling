<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $guarded = ['id', 'create_at', 'updated_at'];

    public function scopeAboutUs($query)
    {
      return $query->where('slug', '=', 'about-us')->first();
    }

    public function scopeFindParticularPage($query, $page)
    {
      return $query->where('slug', '=', $page)->first();
    }
}
