<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;

class ContactController extends Controller
{
    //Show the page
    public function show(){
        return view('contact.index');
    }

    //Do something with the button
    public function store(Request $request){
        $this->validate($request,
        [
            'name'=>'required',
            'email'=>'required|email'
        ]);

        if(is_null(request('name')) || empty (request('name'))){
            return redirect('contact.index')->with('error', 'Empty Name');
        } 
        elseif(is_null(request('email')) || empty (request('email'))){
            return redirect('contact.index')->with('error', 'Empty E-mail');
        } 
        else{
            Mail::to('jasonrothwell@hotmail.co.uk')
            ->send(new ContactUs(request('name'), request('email'), 'Driving Lessons'));
    
            return redirect('/contact')->with('success', 'E-mail sent!');
        }
    }
}
