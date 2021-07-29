<?php
namespace Database\Seeders;

use Illuminate\Database\Seeders;
use Illuminate\Support\Facades\DB;


class StudentsTableSeeder extends Seeders
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new App\Students([
            'name' => 'Antanas',
            'surname' => 'Gustys',
            'email' => 'antanas@mail.com',
            'phone' => '860000011',
        ]);
        $student->save();

        $student = new App\Students([
            'name' => 'Kotryna',
            'surname' => 'Arlaitė',
            'email' => 'kotryna@mail.com',
            'phone' => '860000022',
        ]);
        $student->save();

        $student = new App\Students([
            'name' => 'Juozas',
            'surname' => 'Genys',
            'email' => 'juozas@mail.com',
            'phone' => '860000033',
        ]);
        $student->save();

        $student = new App\Students([
            'name' => 'Petras',
            'surname' => 'Barsukas',
            'email' => 'petras@mail.com',
            'phone' => '860000044',
        ]);
        $student->save();
    }
}
