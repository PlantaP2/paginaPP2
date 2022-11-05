<?php

namespace Database\Seeders;

use App\Models\Profesor;
use Illuminate\Database\Seeder;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profesor::factory()->create(['nombre' => 'Dr. Raul Lugo Leyte']);
        Profesor::factory()->create(['nombre' => 'M. Alejandro Torres Aldaco']);
    }
}
