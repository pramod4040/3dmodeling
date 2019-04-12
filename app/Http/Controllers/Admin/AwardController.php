<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Award;
use Image;
use Storage;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Award::latest()->get();
        return view('admin.award.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.award.create');
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
          'description' => 'required',
          'image' => 'required|mimes:jpg,png,gif,jpeg|max:2048',
        ]);
        $award = $request->except('image');

        if($request->has('image')){
          $award['image'] = $this->imageProcessing($request->image);
        }

        $status = Award::create($award);

        if($status){
          return redirect()->route('award.index')->with('message', 'Award Added Successfully.');
        } else {
          return redirect()->route('award.index');
        }
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
        $data = Award::findorfail($id);
        return view('admin.award.edit', compact('data'));
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
          'description' => 'required',
          'image' => 'mimes:jpg,png,gif,jpeg|max:2048',
        ]);

        $changeAward = $request->except('image');

        $award = Award::findorfail($id);
        if($request->has('image')){
          if($award->image){
            $image_path = public_path('uploads/award/') . $award->image;
            if(file_exists($image_path)){
              unlink($image_path);
            }
          }
          $changeAward['image'] = $this->imageProcessing($request->image);
        }
      $status = $award->update($changeAward);
      if(isset($stauts)){
        return redirect()->route('award.index')->with('message', 'Edited Award Successfully.');
      } else {
        return redirect()->route('award.index');
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
        $data = Award::findorfail($id);
        if($data->image){
          $image_path = public_path('uploads/award/') . $data->image;
          if(file_exists($image_path)){
            unlink($image_path);
          }
        }
        $data->delete();
        return redirect()->route('award.index')->with('message', 'Award Deleted Successfully.');
    }

    public function imageProcessing($image){

      ini_set('memory_limit', '256M');
      $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
      $thumbPath = public_path('uploads/award');

      $img = Image::make($image->getRealPath());
      $img->fit(368, 522)->save($thumbPath.'/'.$input['imagename']);
      $img->destroy();

      return $input['imagename'];
      }
}
