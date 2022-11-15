<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Collection;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::latest()->paginate(6);

        // dd($contacts);

        return view('graduates.index', ['contacts' => $contacts]);
    }

    public function create()
    {
        return view('graduates.create');
    }

    public function store(Request $request){
        
        $validated = $request->validate([
            'name' => 'required|max:200',
            'school' => 'required|max:100',
            'email' => 'required',
            'telephone' => 'required',
            'information' => 'required|max:1000'
        ]);

        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'school' => $validated['school'],
            'telephone' => $validated['telephone'],
        ]);

        return back()->with('status', 'Creado con exito');
    }

    public function show()
    {
        return view('graduates.show', [
            'contacts' => Contact::paginate(10),
        ]);
    }

    public function edit(Contact $contact)
    {
        return view('graduates.edit', compact('contact'));
    }

    public function update(Contact $contact)
    {
        
        $validated = request()->validate([
            'name' => 'required|max:200',
            'school' => 'required|max:100',
            'email' => 'required',
            'telephone' => 'required',
            'information' => 'required|max:1000'
        ]);

        $contact->update(request()->all());

        return back()->with('success', 'Datos actualizados');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return back()->with('success', 'Eliminado con exito');
    }
}
