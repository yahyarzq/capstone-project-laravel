<?php

namespace Database\Seeders;

use App\Models\Usulansipd;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsulansipdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usulansipd::factory()->count(10)->create();
    }
}
