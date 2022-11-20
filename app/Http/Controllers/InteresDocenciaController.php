<?php

namespace App\Http\Controllers;

use App\Http\Requests\InteresDocenciaRequest;
use App\Models\InteresDocencia;
use App\Models\Profesor;
use Illuminate\Http\Request;

class InteresDocenciaController extends Controller
{
    
    public function update(InteresDocenciaRequest $request, Profesor $profesor)
    {

        $profesor = Profesor::find($profesor->id);

        if(!$profesor)
        {
            return back()->with('error', 'No se puede actualizar la información del profesor');
        }

        $intereses = InteresDocencia::where('profesor_id', $profesor->id)->get()->first();

        $intereses['intereses'] = $request->intereses_doc;

        $intereses->update($intereses->toArray());

        return back()->with('success', 'Información actualizada');
    }
}
