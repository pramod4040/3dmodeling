<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pages;
use Image;

class PagesController extends Controller
{
  public function particular($page)
  {
    $data['particularpage'] = Pages::findparticularpage($page);

    return view('admin.pages.automaticparticular', $data);
  }

  public function particularUpdate($pages, $id, Request $request)
  {
    $thatPage = Pages::findorfail($id);

    $thatPage['description'] = $request->description;

    if($request->image) {

      if($thatPage->image)
      {
        $imagepath = public_path('/uploads/pages/') . $thatPage->slug . '/' . $thatPage->image;
        if((file_exists($imagepath))){
                  unlink($imagepath);
            }
      }

      $thatPage['image'] = $this->imageProcessing($request->image, $thatPage);
  }

  $thatPage->save();
  return redirect(('/admin/pages/') . $thatPage->slug)->with('message', $thatPage->title . ' Edited Successfully.');

  }

  public function imageProcessing($image, $thatPage){

        ini_set('memory_limit', '256M');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $thumbPath = public_path('uploads/pages/') . $thatPage->slug;

        $img = Image::make($image->getRealPath());
        $img->fit(741, 476)->save($thumbPath.'/'.$input['imagename']);
        $img->destroy();

        return $input['imagename'];
    }
}
