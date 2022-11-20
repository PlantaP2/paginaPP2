<?php

namespace Database\Seeders;

use App\Models\Perfil;
use Illuminate\Database\Seeder;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perfil::factory()->create([
            'profesor_id' => 1,
            'informacion' => 
            "Doctor en ingenieria mecánica;".
            "Especialidad en plantas térmicas e Ingeniería en procesos;".
            "Perteneciente al departamento Ingenieria de procesos e hidráulica en UAM Iztapalapa;".
            "Del área de ingenieria en recursos energéticos;".
            "lurl@xanum.uam.mx;".
            "Tel: 58044644;".
            "Cubiculo T-156"
        ]);

        Perfil::factory()->create([
            'profesor_id' => 2,
            'informacion' => 
            "Maestria en;".
            "Especialidad en síntesis, análisis y operación óptima de procesos termodinámicos y químicos;".
            "Perteneciente al departamento Ingenieria de procesos e hidráulica en UAM Iztapalapa;".
            "Del área de ingenieria en recursos energéticos;".
            "ata@xanum.uam.mx;".
            "Tel: 58044644;".
            "Cubiculo T-155"
        ]);
        
    }
}
