<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Service::latest()->get();
        return view('admin.service.list', compact('data'));
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
        $data = Service::findorfail($id);
        return view('admin.service.edit', compact('data'));
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
          'description' => 'required',
        ]);
        $changeService = $request->all();

        $service = Service::findorfail($id);

        $status = $service->update($changeService);

        if($status){
          return redirect()->route('service.index')->with('message', 'Service Edited Successfully.');
        } else {
          return redirect()->route('service.index');
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
      abort('404');
        // $data = Service::findorfail($id);
        // $data->delete();
        // return redirect()->route('service.index')->with('message', 'Service Delete Successfully.');
    }

    public function slug($title)
    {
      $slug = Str::slug($title);
      $slugCount = Service::where('slug', $slug)->get()->count();
      return ($slugCount > 0) ? "{$slug}-{$slugCount}" : $slug;
    }
}
