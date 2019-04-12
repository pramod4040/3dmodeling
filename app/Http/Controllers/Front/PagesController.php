<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pages;
use App\Models\News;
use App\Models\Product;

class PagesController extends Controller
{
    public function findParticular($page)
    {
      $data['thatpage'] = Pages::whereSlug($page)->first();
      $data['product'] = Product::inRandomOrder()->take(4)->get();
      $data['news'] = News::inRandomOrder()->take(3)->get();
      return view('front.pages.automaticPage',$data);
    }
}
