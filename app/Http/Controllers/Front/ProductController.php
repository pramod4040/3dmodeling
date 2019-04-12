<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\News;


class ProductController extends Controller
{
    public function listProduct($slug)
    {
       $products = Category::getProducts($slug);
       return view('front.product.lists', compact('products'));
    }

    public function productDetails($id)
    {
       $data['product'] = Product::findorfail($id);
       $data['related'] = Product::getRelated($id)->get();
       $data['news'] = News::inRandomOrder()->take(2)->get();
       return view('front.product.details', $data);
    }
}
