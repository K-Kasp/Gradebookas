<?php
namespace Database\Seeders;


use Illuminate\Database\seeders;
use Illuminate\Support\Facades\DB;

class LecturesTableSeeder extends seeders
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lecture = new App\Lectures([
            'title' => 'Įžanga į PHP',
            'description' => 'PHP programavimo kalbos pagrindai',
        ]);
        $lecture->save();

        $lecture = new App\Lectures([
            'title' => 'PHP if else funkcijos',
            'description' => 'if else funkcojos ir jų panaudojimas',
        ]);
        $lecture->save();

        $lecture = new App\Lectures([
            'title' => 'Ciklai',
            'description' => 'Ciklai ir ką su jais daryt',
        ]);
        $lecture->save();

        $lecture = new App\Lectures([
            'title' => 'Klasės',
            'description' => 'Pirma paskaita apie PHP klases',
        ]);
        $lecture->save();
    }
}
