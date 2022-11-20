<?php

namespace App\Http\Controllers;

use App\Http\Requests\PerfilRequest;
use App\Models\Perfil;
use App\Models\Profesor;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function edit(Profesor $profesor)
    {

        $informacionPerfil = Perfil::where('profesor_id', $profesor->id)->get()->first();

        $informacionPerfil = explode(";", $informacionPerfil->informacion);

        return view('perfil.edit', [
            'profesor' => $profesor,
            'informacionPerfil' => $informacionPerfil
        ]);
    }

    public function update(PerfilRequest $request, Profesor $profesor)
    {

        $profesor = Profesor::find($profesor->id);

        if(!$profesor)
        {
            return back()->with('error', 'No se puede actualizar la información del profesor');
        }

        $informacionPerfil = Perfil::where('profesor_id', $profesor->id)->get()->first();

        $informacionPerfil['informacion'] = implode(';', $request->informacion);

        $informacionPerfil->update($informacionPerfil->toArray());

        return back()->with('success', 'Información actualizada');
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
