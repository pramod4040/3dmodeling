<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contactus;

class ContactUsController extends Controller
{
    public function index()
    {
        $data = Contactus::all();
        return view('admin.userenquiry.contactus', compact('data'));
    }

    public function deleteContact($id)
	   {
		     $contact = Contactus::findorfail($id);

		     $contact->delete();

		     return redirect()->route('contactusList')->with('message', 'Contact Us Deleted Successfully.');
	   }
}
