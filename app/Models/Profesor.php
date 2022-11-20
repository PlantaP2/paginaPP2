<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'profesores';

    protected $guarded = [];

    public function perfil()
    {
        return $this->hasMany(Perfil::class);
    }

    public function semblanza()
    {
        return $this->hasMany(Semblaza::class);
    }

    public function scopeWithSemblanza($query)
    {
        $query->addSelect(['semblanza' => Semblaza::select('texto')
                        ->whereColumn('profesor_id', 'profesores.id')
                        ->take(1)
        ]);
    }

    public function scopeWithInteresesDocencia($query)
    {
        $query->addSelect(['Int_docencia' => InteresDocencia::select('intereses')
                        ->whereColumn('profesor_id', 'profesores.id')
                        ->take(1)
        ]);
    }

    public function scopeWithInteresesInvestigacion($query)
    {
        $query->addSelect(['Int_investigacion' => InteresInvestigacion::select('investigaciones')
                        ->whereColumn('profesor_id', 'profesores.id')
                        ->take(1)
        ]);
    }

    public function scopeWithInvestigaciones($query)
    {
        $query->addSelect(['investigaciones' => Investigaciones::select('investigaciones')
                        ->whereColumn('profesor_id', 'profesores.id')
                        ->take(1)
        ]);
    }

}
