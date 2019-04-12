<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::latest()->get();
        return view('admin.product.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'name' => 'required',
          'banner_image' => 'required|mimes:jpg,jpeg,png,gif|max:2048',
          'category_id' => 'required',
          'description' => 'required',
          'specification' => 'required',
          'other_information' => 'required',
        ]);

        $product = $request->except('banner_image');
        if($request->has('banner_image')){
          $product['banner_image'] = $this->imageProcessing($request->banner_image);
        }
        Product::create($product);
        return redirect()->route('product.index')->with('message', 'Product Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::findorfail($id);
        return view('admin.product.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
        'name' => 'required',
        'banner_image' => 'mimes:jpg,jpeg,png,gif|max:2048',
        'category_id' => 'required',
        'description' => 'required',
        'specification' => 'required',
        'other_information' => 'required',
      ]);

      $changedProduct = $request->except('banner_image');

      $product = Product::findorfail($id);
      if($request->has('banner_image')){
        $image_path = public_path('uploads/product/') . $product->banner_image;
        if($product->banner_image){
          if(file_exists($image_path))
          {
            unlink($image_path);
          }
        }
        $changedProduct['banner_image'] = $this->imageProcessing($request->banner_image);
      }

      $status = $product->update($changedProduct);
      if($status){
        return redirect()->route('product.index')->with('message', 'Product Edited Successfully.');
      } else {
        return redirect()->route('product.index');
      }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = Product::findorfail($id);
        if($data->banner_image){
          $image_path = public_path('uploads/product/') . $data->banner_image;
          unlink($image_path);
        }
        $data->delete();
        return redirect()->route('product.index')->with('message', 'Product Deleted Successfully.');
    }

    public function imageProcessing($image){

      ini_set('memory_limit', '256M');
      $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
      $thumbPath = public_path('uploads/product');

      $img = Image::make($image->getRealPath());
      $img->fit(1519, 333)->save($thumbPath.'/'.$input['imagename']);

      $img = Image::make($image->getRealPath());
      $img->fit(370, 277)->save($thumbPath. '/listing/' . $input['imagename']);
      
      $img->destroy();

      return $input['imagename'];
      }

}
