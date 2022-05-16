<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{

    public function index()
    {
        return view('egresadosIndex');
    }

    public function create()
    {
        return view('egresados');
    }

    public function store(Request $request){
        
        $validated = $request->validate([
            'name' => 'required|max:200',
            'school' => 'required|max:100',
            'email' => 'required',
            'telephone' => 'required',
        ]);

        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'school' => $validated['school'],
            'telephone' => $validated['telephone'],
        ]);

        return back()->with('status', 'Creado con exito');
    }
}
