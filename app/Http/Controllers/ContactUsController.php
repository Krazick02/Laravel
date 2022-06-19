<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index(){
        return view('contactUs.index');
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'messege'=>'required',
        ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to('elangelcotaymas@gmail.com')->send($correo);
        return redirect()->route('contactUs.index')->with('info','Mensage enviado');
    }
}
