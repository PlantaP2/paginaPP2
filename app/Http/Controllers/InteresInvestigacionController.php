<?php

namespace App\Http\Controllers;

use App\Http\Requests\InteresesInvestigacionRequest;
use App\Models\InteresInvestigacion;
use App\Models\Profesor;
use Illuminate\Http\Request;

class InteresInvestigacionController extends Controller
{
    public function update(InteresesInvestigacionRequest $request, Profesor $profesor)
    {

        $profesor = Profesor::find($profesor->id);

        if(!$profesor)
        {
            return back()->with('error', 'No se puede actualizar la información del profesor');
        }

        $investigaciones = InteresInvestigacion::where('profesor_id', $profesor->id)->get()->first();

        $investigaciones['investigaciones'] = $request->Int_investigaciones;

        $investigaciones->update($investigaciones->toArray());

        return back()->with('success', 'Información actualizada');
    }
}
