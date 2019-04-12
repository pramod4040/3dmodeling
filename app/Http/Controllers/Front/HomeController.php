<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Service;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
      $data['setting'] = Setting::first();
      for($i=1; $i<=6; $i++){
        $data['service' . $i] = Service::findorfail($i);
      }
      $data['news'] = News::published()->take(3)->get();
      // dd($data);

      return view('front.index',$data);
    }
}
