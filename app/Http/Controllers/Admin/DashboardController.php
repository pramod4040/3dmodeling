<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Image;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Setting::first();
        return view('admin.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort('404');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort('404');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort('404');
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
          'title' => 'required',
          'about_us_image' => 'mimes:jpg,jpeg,png,gif|max:2024',
          'banner_image' => 'mimes:jpg,png,gif,jpeg|max:2024',

          'product_banner' => 'mimes:jpg,jpeg,png,gif|max:2024',
          'service_banner' => 'mimes:jpg,png,gif,jpeg|max:2024',
          'client_banner' => 'mimes:jpg,png,gif,jpeg|max:2024',
          'about_us_banner' => 'mimes:jpg,png,gif,jpeg|max:2024',
          'contact_us_banner' => 'mimes:jpg,png,gif,jpeg|max:2024',

          'about_us' => 'required',
          'address' => 'required',
          'telephone' => 'required',
          'email' => 'required',
          'mobile' => 'required',
        ]);

        // dd($request->all());

        $setting = $request->except('about_us_image', 'banner_image');
        $check_image = Setting::findorfail($id);
        if($request->has('about_us_image'))
        {
            $image_path = public_path('uploads/setting/') . $check_image->about_us_image;
            if($check_image->about_us_image){
              if(file_exists($image_path)){
              unlink($image_path);
            }
          }
            $setting['about_us_image'] = $this->imageProcessing($request->about_us_image, 'about_us');
        }
        if($request->has('banner_image')){
          $image_path = public_path('uploads/setting/') . $check_image->banner_image;
          if($check_image->banner_image){
            if(file_exists($image_path)){
              unlink($image_path);
          }
        }
          $setting['banner_image'] = $this->imageProcessing($request->banner_image, 'banner');
        }

        if($request->has('product_banner')){
          $image_path = public_path('uploads/setting/') . $check_image->product_banner;
          if($check_image->product_banner){
            if(file_exists($image_path)){
              unlink($image_path);
          }
        }
          $setting['product_banner'] = $this->imageProcessing($request->product_banner, 'forallbanner');
        }

        if($request->has('service_banner')){
          $image_path = public_path('uploads/setting/') . $check_image->service_banner;
          if($check_image->service_banner){
            if(file_exists($image_path)){
              unlink($image_path);
          }
        }
          $setting['service_banner'] = $this->imageProcessing($request->service_banner, 'forallbanner');
        }

        if($request->has('client_banner')){
          $image_path = public_path('uploads/setting/') . $check_image->client_banner;
          if($check_image->client_banner){
            if(file_exists($image_path)){
              unlink($image_path);
          }
        }
          $setting['client_banner'] = $this->imageProcessing($request->client_banner, 'forallbanner');
        }

        if($request->has('about_us_banner')){
          $image_path = public_path('uploads/setting/') . $check_image->about_us_banner;
          if($check_image->about_us_banner){
            if(file_exists($image_path)){
              unlink($image_path);
          }
        }
          $setting['about_us_banner'] = $this->imageProcessing($request->about_us_banner, 'forallbanner');
        }

     if($request->has('contact_us_banner')){
          $image_path = public_path('uploads/setting/') . $check_image->contact_us_banner;
          if($check_image->contact_us_banner){
            if(file_exists($image_path)){
              unlink($image_path);
          }
        }
          $setting['contact_us_banner'] = $this->imageProcessing($request->contact_us_banner, 'forallbanner');
        }

        // dd($setting);

        $check_image->update($setting);
        return redirect()->route('dashboard.index')->with('message', 'Setting Edited Successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function imageProcessing($image, $which_image){
    ini_set('memory_limit', '256M');
    $random = rand(100000, 900000);
    $input['imagename'] = time().$random.'.'. $image->getClientOriginalExtension();

    $particular = public_path('uploads/setting');

    $img = Image::make($image->getRealPath());
    if($which_image == 'banner')
    {
      $img->fit(1519, 500)->save($particular.'/'.$input['imagename']);
    }
    elseif($which_image == 'about_us')
    {
      $img->fit(570, 379)->save($particular.'/'.$input['imagename']);
    }
    elseif($which_image == 'forallbanner')
    {
      $img->fit(1519, 333)->save($particular.'/'.$input['imagename']);
    }
    $img->destroy();

    return $input['imagename'];
  }
}
