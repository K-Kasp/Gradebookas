<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lecture = new App\Models\Student([
            'title' => 'Įžanga į PHP',
            'description' => 'PHP programavimo kalbos pagrindai',
        ]);
        $lecture->save();

        $lecture = new App\Models\Student([
            'title' => 'PHP if else funkcijos',
            'description' => 'if else funkcojos ir jų panaudojimas',
        ]);
        $lecture->save();

        $lecture = new App\Models\Student([
            'title' => 'Ciklai',
            'description' => 'Ciklai ir ką su jais daryt',
        ]);
        $lecture->save();

        $lecture = new App\Models\Student([
            'title' => 'Klasės',
            'description' => 'Pirma paskaita apie PHP klases',
        ]);
        $lecture->save();
    }
}
