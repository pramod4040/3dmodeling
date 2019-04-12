<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contactus;
use Mail;

class ContactusController extends Controller
{
   public function index()
   {
     return view('front.pages.contactus');
   }

   public function save(Request $request)
   {
     // dd($request->all());
     $request->validate([
       'name' => 'required',
       'phone' => 'required',
       'email' => 'required',
       'company_name' => 'required',
       'message' => 'required',
     ]);

     $contactus = $request->all();

     $status = Contactus::create($contactus);
     $data = array('name' => $request->name, 'email' => $request->email,
          'phone' => $request->phone, 'subject'=>'Contact Us Message', 'messages'=>$request->message, 'company' => $request->company_name,
        );

    // dd($data);
     Mail::send('front.email.emailTemplate', $data, function ($message) use ($data) {
              $message->to('info@3dmodeling.com')->from($data['email']);
              $message->subject($data['subject']);
            });

    return redirect()->route('contactus')->with('productMessage', 'Message Send Successfully.');

   }
}
