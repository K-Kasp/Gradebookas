<?php

namespace Database\Seeders;

use App\Models\Lecture;
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
        $lecture = new Lecture([
            'title' => 'Įžanga į HTML',
            'description' => 'HTML programavimo kalbos pagrindai',
        ]);
        $lecture->save();
        $lecture = new Lecture([
            'title' => 'CSS bei BOOTSTRAP',
            'description' => 'Css bei Bootstrap pradmenys',
        ]);
        $lecture->save();

        $lecture = new Lecture([
            'title' => 'Projektas',
            'description' => 'Finalinis projektas',
        ]);
        $lecture->save();

        $lecture = new Lecture([
            'title' => 'Javascript',
            'description' => 'Pirma paskaita apie Javascript',
        ]);
        $lecture->save();
    }
}
