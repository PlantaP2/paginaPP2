<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use App\Models\Profesor;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function edit(Profesor $profesor)
    {

        $informacionPerfil = Perfil::where('profesor_id', $profesor->id)->get();

        return view('perfil.edit', [
            'profesor' => $profesor,
            'informacionPerfil' => $informacionPerfil
        ]);
    }

    public function store(Request $request)
    {
        $atributos = $request->validate([
            'informacion' => 'required',
            'profesor_id' => 'required'
        ]);

        Perfil::create($atributos);

        return back()->with('success', 'Información agregada correctamente');
    }
}
