<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function contact(){
        return view('contact');
}
public function contactPost(Request $request){
    $this->validate($request, [
                    'name' => 'required',
                    'email' => 'required|email',
                    'comment' => 'required'
            ]);

    Mail::send('email', [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'comment' => $request->get('comment') ],
            function ($message) {
                    $message->from('alfarsiduha@gmail.com');
                    $message->to('alfarsiduha@gmail.com', 'Duha')
                    ->subject('Email');
    });

    return back()->with('success', 'Your email has been sent successfully!');

}
}
