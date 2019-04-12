<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Product;
use App\Models\News;

class ServiceController extends Controller
{
    public function index($slug)
    {
      $data['thatService'] = Service::getService($slug)->first();
      $data['product'] = Product::inRandomOrder()->take(4)->get();
      $data['news'] = News::inRandomOrder()->take(2)->get();
      return view('front.service.index', $data);
    }
}
