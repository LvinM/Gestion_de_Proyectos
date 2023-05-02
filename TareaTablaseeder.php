<?php

namespace Database\Seeders;

use App\Models\Tarea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TareaTablaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Tarea::factory()->count(200)->create();
    }
}
