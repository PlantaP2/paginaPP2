<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Contact;
use App\Models\InteresDocencia;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Hector',
            'email' => 'hectoruam96@gmail.com',
            'password' => bcrypt('H3ctorjime')
        ]);
        
        Contact::factory(10)->create([
            'school' => 'Universidad Autonoma Metropolitana Iztapalapa (UAM-I)'
        ]);

        Article::factory(10)->create([
            'link' => 'https://www.mdpi.com/2076-3417/10/24/9060'
        ]);


        $this->call([ProfesorSeeder::class, PerfilSeeder::class, SemblazaSeeder::class]);
    }
}
