<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use App\Models\Profesor;
use App\Models\Semblaza;
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

    public function show()
    {
        $profesores = Profesor::select('id', 'nombre')
                    ->WithSemblanza()
                    ->WithInteresesDocencia()
                    ->WithInteresesInvestigacion()
                    ->WithInvestigaciones()
                    ->get();
        
        return view('docentes.show', [
            'profesores' => $profesores
        ]);
    }
}
