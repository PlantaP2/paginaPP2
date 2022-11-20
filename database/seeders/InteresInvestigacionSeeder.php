<?php

namespace Database\Seeders;

use App\Models\InteresInvestigacion;
use Illuminate\Database\Seeder;

class InteresInvestigacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InteresInvestigacion::factory()->create(['profesor_id' => 1]);
        InteresInvestigacion::factory()->create(['profesor_id' => 2]);
    }
}
