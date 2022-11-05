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
            'informacion' => 'Doctor en ingenieria mecánica'
        ]);

        Perfil::factory()->create([
            'profesor_id' => 1,
            'informacion' => 'Especialidad en plantas térmicas e Ingeniería en procesos'
        ]);

        Perfil::factory()->create([
            'profesor_id' => 1,
            'informacion' => 'Perteneciente al departamento Ingenieria de procesos e hidráulica en UAM Iztapalapa'
        ]);

        Perfil::factory()->create([
            'profesor_id' => 1,
            'informacion' => 'Del área de ingenieria en recursos energéticos'
        ]);

        Perfil::factory()->create([
            'profesor_id' => 1,
            'informacion' => 'lurl@xanum.uam.mx'
        ]);

        Perfil::factory()->create([
            'profesor_id' => 1,
            'informacion' => 'Tel: 58044644'
        ]);

        Perfil::factory()->create([
            'profesor_id' => 1,
            'informacion' => 'Cubiculo T-156'
        ]);

        Perfil::factory()->create([
            'profesor_id' => 2,
            'informacion' => 'Maestria en'
        ]);

        Perfil::factory()->create([
            'profesor_id' => 2,
            'informacion' => 'Especialidad en síntesis, análisis y operación óptima de procesos termodinámicos y químicos'
        ]);

        Perfil::factory()->create([
            'profesor_id' => 2,
            'informacion' => 'Perteneciente al departamento Ingenieria de procesos e hidráulica en UAM Iztapalapa'
        ]);

        Perfil::factory()->create([
            'profesor_id' => 2,
            'informacion' => 'Del área de ingenieria en recursos energéticos'
        ]);

        Perfil::factory()->create([
            'profesor_id' => 2,
            'informacion' => 'ata@xanum.uam.mx'
        ]);

        Perfil::factory()->create([
            'profesor_id' => 2,
            'informacion' => 'Tel: 58044644'
        ]);

        Perfil::factory()->create([
            'profesor_id' => 2,
            'informacion' => 'Cubiculo T-155'
        ]);
    }
}
