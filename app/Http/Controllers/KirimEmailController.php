<?php

namespace App\Http\Controllers;

use App\Mail\MailSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class KirimEmailController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function kirim(Request $request)
    {
        $details = [
            'nama' => $request->name,
            'email' => $request->email,
            'pesan' => $request->pesan
        ];
        
        Mail::to("akbarban27@gmail.com")->send(new MailSend($details));
         return redirect::to('/')->with('success', 'Thank you, message sent successfully.');
        // return view('home', ['success' => 'Thank you, message sent successfully.']);
        // if (($details != NULL) || ($details == '')) {
        //     return view('home', ['success' => 'Thank you, message sent successfully.']);
        // } else {
        //     return view('home', ['fail' => 'Sorry, message failed to send.']);
        // }
    }
}
