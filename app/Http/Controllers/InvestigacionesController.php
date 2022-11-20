<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvestigacionesRequest;
use App\Models\Investigaciones;
use App\Models\Profesor;
use Illuminate\Http\Request;

class InvestigacionesController extends Controller
{
    public function update(InvestigacionesRequest $request, Profesor $profesor)
    {

        $profesor = Profesor::find($profesor->id);

        if(!$profesor)
        {
            return back()->with('error', 'No se puede actualizar la información del profesor');
        }

        $investigaciones = Investigaciones::where('profesor_id', $profesor->id)->get()->first();

        $investigaciones['investigaciones'] = $request->investigaciones;

        $investigaciones->update($investigaciones->toArray());

        return back()->with('success', 'Información actualizada');
    }
}
