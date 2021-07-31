<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\Models\Student([
            'name' => 'Jonas.D',
            'email' => 'jonas@mail.com',
            'password' => bcrypt('secret'),
        ]);
        $user->save();

        $user = new App\Models\Student([
            'name' => 'Mantas.D',
            'email' => 'mantas@mail.com',
            'password' => bcrypt('secret'),
        ]);
        $user->save();
    }
}
