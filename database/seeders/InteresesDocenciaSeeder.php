<?php

namespace Database\Seeders;

use App\Models\InteresDocencia;
use Illuminate\Database\Seeder;

class InteresesDocenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InteresDocencia::factory()->create(['profesor_id' => 1]);
        InteresDocencia::factory()->create(['profesor_id' => 2]);
    }
}
