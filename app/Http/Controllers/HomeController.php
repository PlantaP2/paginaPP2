<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $traductor= new GoogleTranslate();
        $traductor->setSource('es');
        $traductor->setTarget('en');

        return view('home', [

            'egresados' => Contact::all(),
            'traductor'=>$traductor,
        ]);
    }
}
