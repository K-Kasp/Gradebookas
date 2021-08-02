<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new Student([
            'name' => 'Antanas',
            'surname' => 'Antanauskas',
            'email' => 'antanas@mail.com',
            'phone' => '860000011',
        ]);
        $student->save();

        $student = new Student([
            'name' => 'Kotryna',
            'surname' => 'Kontrimaviciute',
            'email' => 'kotryna@mail.com',
            'phone' => '860000022',
        ]);
        $student->save();

        $student = new Student([
            'name' => 'Juozas',
            'surname' => 'Juozaitis',
            'email' => 'juozas@mail.com',
            'phone' => '860000033',
        ]);
        $student->save();

        $student = new Student([
            'name' => 'Petras',
            'surname' => 'Barsukas',
            'email' => 'petras@mail.com',
            'phone' => '860000044',
        ]);
        $student->save();
    }
}
