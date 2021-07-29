<?php
namespace Database\Seeders;



use Illuminate\Database\Seeders;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeders
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LecturesTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(UsersTableSeeder::class);

    }
}
