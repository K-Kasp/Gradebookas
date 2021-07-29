<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User([
            'name' => 'Vilius.C',
            'email' => 'vilius@mail.com',
            'password' => bcrypt('password'),
        ]);
        $user->save();

        $user = new App\User([
            'name' => 'Mantas.D',
            'email' => 'mantas@mail.com',
            'password' => bcrypt('password'),
        ]);
        $user->save();
    }
}
