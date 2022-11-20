<?php

namespace App\Http\Controllers;

use App\Http\Requests\SemblanzaRequest;
use App\Models\Perfil;
use App\Models\Profesor;
use App\Models\Semblaza;
use Illuminate\Http\Request;

class SemblazaController extends Controller
{

    public function update(SemblanzaRequest $request, Profesor $profesor)
    {

        $profesor = Profesor::find($profesor->id);

        if(!$profesor)
        {
            return back()->with('error', 'No se puede actualizar la información del profesor');
        }

        $semblanza = Semblaza::where('profesor_id', $profesor->id)->get()->first();

        $semblanza['texto'] = $request->semblanza;

        $semblanza->update($semblanza->toArray());

        return back()->with('success', 'Información actualizada');
    }
}
