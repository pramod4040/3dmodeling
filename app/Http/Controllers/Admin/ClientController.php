<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Image;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Client::latest()->get();
        return view('admin.client.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
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
          'logo' => 'required|mimes:jpg,png,gif,jpeg|max:2048',
          'link' => 'required',
        ]);

        $client = $request->except('logo');
        if($request->has('logo')){
          $client['logo'] = $this->imageProcessing($request->logo);
        }

        Client::create($client);

        return redirect()->route('client.index')->with('message', 'Client Added Successfully.');
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
        $data = Client::findorfail($id);
        return view('admin.client.edit', compact('data'));
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
          'link' => 'required',
          'logo' => 'mimes:jpg,png,gif,jpeg|max:2048',
        ]);

        $changeClients = $request->except('logo');
        $client = Client::findorfail($id);

        if($request->has('logo')){
          if($client->logo){
            $image_path = public_path('uploads/client/') . $client->logo;
            if(file_exists($image_path)){
              unlink($image_path);
            }
          }
          $client['logo'] = $this->imageProcessing($request->logo);
        }

        $status = $client->update($changeClients);
        if($status){
          return redirect()->route('client.index')->with('message', 'Client Edited Successfully.');
        } else {
          return redirect()->route('client.index');
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
       $data = Client::findorfail($id);
       if($data->logo){
         $image_path = public_path('uploads/client/') . $data->logo;
         unlink($image_path);
       }
       $data->delete();
       return redirect()->route('client.index')->with('message', 'Client Deleted Successfully.');
    }

    public function imageProcessing($image){

      ini_set('memory_limit', '256M');
      $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
      $thumbPath = public_path('uploads/client');

      $img = Image::make($image->getRealPath());
      $img->fit(162, 146)->save($thumbPath.'/'.$input['imagename']);
      $img->destroy();

      return $input['imagename'];
      }
}
