<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::latest()->get();
        return view('admin.category.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
          'title' => 'required',
          'slug' => 'required',
        ]);

        $data = $request->all();
        $status = Category::create($data);
        if($status){
          return redirect()->route('category.index')->with('message', 'Category Added Successfully.');
        } else {
          return redirect()->route('category.index');
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
        $data = Category::findorfail($id);
        return view('admin.category.edit', compact('data'));
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
          'slug' => 'required',
        ]);
        $data = $request->all();
        $category = Category::findorfail($id);
        $status = $category->update($data);
        if($status){
          return redirect()->route('category.index')->with('message', 'Category Edit Successfully.');
        } else {
          return back();
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
        $category = Category::findorfail($id);
        $category->delete();
        return redirect()->route('category.index')->with('message', 'Category Deleted Successfully.');
    }

    public static function slug($title)
    {
      $slug = Str::slug($title);
      $slugCount = Category::where('slug', $slug)->get()->count();
      return ($slugCount > 0) ? "{$slug}-{$slugCount}" : $slug;
    }
}
