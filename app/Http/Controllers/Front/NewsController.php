<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Product;

class NewsController extends Controller
{
    public function newsDetails($slug)
    {
      $data['thatNews'] = News::published()->getnews($slug)->first();
      $data['product'] = Product::inRandomOrder()->take(4)->get();
      $data['news'] = News::where('slug', '!=', $slug)->published()->take(3)->get();
      return view('front.news.details', $data);
    }

    public function listNews()
    {
      $news = News::paginate(8);
      return view('front.news.list', compact('news'));
    }
}
