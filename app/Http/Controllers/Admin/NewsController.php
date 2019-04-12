<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Support\Str;
use Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = News::all();

       return view('admin.news.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
          'title' => 'required|max:255',
          'slug' => 'required|max:255',
          'description' => 'required|max:500',
          'body' => 'required',
          'image' => 'required|max:1024|mimes:jpg,jpeg,gif,png',
        ]);

        $news['title'] = $request->title;
        $news['slug'] = $request->slug;
        $news['description'] = $request->description;
        $news['body'] = $request->body;
        $news['published'] = is_null($request->published) ? 0 : 1;

        if($request->has('image')){
          $news['image'] = $this->imageProcessing($request->image);
        }

        News::create($news);
        return redirect('/admin/news')->with('message', 'News Created Successfully.');
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
      $data = News::findorfail($id);
      return view('admin.news.edit', compact('data'));
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
         'title' => 'required|max:255',
         'slug' => 'required|max:255',
         'description' => 'required|max:500',
         'body' => 'required',
         'image' => 'max:1024|mimes:jpg,jpeg,png,gif',
       ]);

       $news = News::findorfail($id);
       $news['title'] = $request->title;
       $news['slug'] = $request->slug;
       $news['description'] = $request->description;
       $news['body'] = $request->body;
       $news['published'] = is_null($request->published) ? 0 : 1;

       if($request->has('image')){
         $image_path = public_path('uploads/news/') . $news->image;
         $particular_path = public_path('uploads/news/particular/') . $news->image;
         if(file_exists($image_path))
         {
           unlink($image_path);
           unlink($particular_path);
         }
         $news['image'] = $this->imageProcessing($request->image);
       }
       $news->save();

       return redirect('/admin/news')->with('message', 'News Edited Successfuly.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findorfail($id);
        if($news->image){
          $image_path = public_path('uploads/news/') . $news->image;
          $particular_path = public_path('uploads/news/particular/') . $news->image;
          if((file_exists($image_path))){
            unlink($image_path);
            unlink($particular_path);
          }
        }
        $news->delete();
        return redirect('/admin/news')->with('message', 'News Deleted Successfuly.');
    }

    public static function slug($title)
    {
      $slug = Str::slug($title);
      $slugCount = News::where('slug', $slug)->get()->count();
      return ($slugCount > 0) ? "{$slug}-{$slugCount}" : $slug;
    }


    public function imageProcessing($image){

        ini_set('memory_limit', '256M');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $thumbPath = public_path('uploads/news');
        $particular = public_path('uploads/news/particular');

        $img = Image::make($image->getRealPath());
        $img->fit(739, 418)->save($particular.'/'.$input['imagename']);

        $img = Image::make($image->getRealPath());
        $img->fit(368, 239)->save($thumbPath.'/'.$input['imagename']);
        $img->destroy();

        return $input['imagename'];
    }

    public function toggleStatus($id)
    {
      $news = News::findorfail($id);

      $news['published'] = $news->published == 1 ? 0 : 1;

      $news->save();

      return redirect('/admin/news')->with('message', 'News Status Changed Successfully.');
    }
}
