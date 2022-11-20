<?php

namespace Database\Seeders;

use App\Models\Investigaciones;
use Illuminate\Database\Seeder;

class InvestigacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Investigaciones::factory()->create(['profesor_id' => 1]);
        Investigaciones::factory()->create(['profesor_id' => 2]);
    }
}
