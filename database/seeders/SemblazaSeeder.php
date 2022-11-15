<?php

namespace Database\Seeders;

use App\Models\Semblaza;
use Illuminate\Database\Seeder;

class SemblazaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Semblaza::factory()->create(['profesor_id' => 1]);
        Semblaza::factory()->create(['profesor_id' => 2]);
    }
}
