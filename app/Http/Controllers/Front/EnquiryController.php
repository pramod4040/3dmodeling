<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Mail;

class EnquiryController extends Controller
{
    public function save(Request $request)
    {
      $request->validate([
        'name' => 'required',
      ]);

      $info = $request->all();

      Enquiry::create($info);
      $data = array('name' => $request->name, 'email' => $request->email,
          'phone' => $request->phone, 'subject'=>'Enquiry Message', 'messages'=>$request->information, 
        );

    // dd($data);
     Mail::send('front.email.enquiryTemplate', $data, function ($message) use ($data) {
              $message->to('info@testing.com')->from($data['email']);
              $message->subject($data['subject']);
            });

      return back()->with('message', 'Enquiry Message Send Successfully.');
    }

    public function productEnquiry(Request $request)
    {
      $request->validate([
        'name' => 'required',
      ]);

      $info = $request->all();

      Enquiry::create($info);
      $data = array('name' => $request->name, 'email' => $request->email,
          'phone' => $request->phone, 'subject'=>'Enquiry Message', 'messages'=>$request->information,  
        );

    // dd($data);
     Mail::send('front.email.enquiryTemplate', $data, function ($message) use ($data) {
              $message->to('info@testing.com')->from($data['email']);
              $message->subject($data['subject']);
            });

     
      return back()->with('productMessage', 'Enquiry Message Send Successfully.');
    }
}
