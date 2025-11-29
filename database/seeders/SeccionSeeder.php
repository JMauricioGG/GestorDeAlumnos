<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Seccion;

class SeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     Seccion::factory(20)->create();   //
    }
}
