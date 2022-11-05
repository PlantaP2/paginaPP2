<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index()
    {
        $informacionPerfilProfesorLugo = Perfil::where('profesor_id', 1)->get();
        $informacionPerfilProfesorAlejandro = Perfil::where('profesor_id', 2)->get();

        return view('docentes.index', [
            'informacionPerfilProfesorLugo' => $informacionPerfilProfesorLugo,
            'informacionPerfilProfesorAlejandro' => $informacionPerfilProfesorAlejandro
        ]);
    }

    public function create()
    {

    }

    public function edit(Request $request)
    {
        
    }

    public function show()
    {
        $profesorLugo = Profesor::first();
        $profesorAlejandro = Profesor::where('nombre', 'like', '%Alejandro%')->get();
        return view('docentes.show', [
            'profesorLugo' => $profesorLugo,
            'profesorAlejandro' => $profesorAlejandro
        ]);
    }
}
