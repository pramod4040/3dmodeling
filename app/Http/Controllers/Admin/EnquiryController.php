<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Enquiry;

class EnquiryController extends Controller
{
  public function index()
  {
      $data = Enquiry::all();
      return view('admin.userenquiry.onlineenquiry', compact('data'));
  }

  public function deleteEnquiry($id)
   {
       $enqi = Enquiry::findorfail($id);

       $enqi->delete();

       return redirect()->route('enquiryList')->with('message', 'Enquiry Deleted Successfully.');
   }
}
