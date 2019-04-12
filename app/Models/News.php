<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = ['id', 'create_at', 'updated_at'];

    public function scopePublished($query)
    {
      return $query->wherePublished(1);
    }

    public function scopeGetnews($query, $slug)
    {
      return $query->whereSlug($slug);
    }
}
