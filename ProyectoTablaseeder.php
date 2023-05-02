<?php

namespace Database\Seeders;

use App\Models\proyecto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProyectoTablaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        proyecto::factory()->count(200)->create();
    }
}
