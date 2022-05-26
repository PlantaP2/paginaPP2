<?php

namespace App\Http\Controllers;

use App\Mail\ContactoPP2Mailable;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //
    public function index(){
        return view('index');
    }


    public function store(Request $request){
        $request->validate([
            'nombre'=> 'required',
            'email'=> 'required|email',
            'asunto'=> 'required',
        ]);
        $correo= new ContactoPP2Mailable($request->all());

        Mail::to('danielatonal8@gmail.com')->send($correo);
        return redirect()->route('index')->with('info',"Mensaje enviado");
    }
}
