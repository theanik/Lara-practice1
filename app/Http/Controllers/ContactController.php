<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    //for authontication
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create(){
        return view('contact.create');
    }

    public function store(Request $req){
        $data = request()->validate([
            'name'=>'required|min:3',
            'email' => 'required|regex:/^.+@.+$/i',
            'message'=>'required',
        ]);
        

        Mail::to('test@test.com')->send(new ContactMail($data));
        //$req->session()->flash('message','Your message send successfully');
        return redirect('contact')->with('message','Your message send successfully');
    }
}
